<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\File;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('app.admin.student.list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.admin.student.create-student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        try {
            $data = collect($request->except(['_token', 'avatar_remove']));
            $data['addmission_date'] = Carbon::now()->toDateString();
            DB::beginTransaction();
            if ($data->has('picture') && $data['picture'] != null) {
                $image = $this->saveFile($data['picture'], 'image', $data['first_name'], 'student-images');
                $data['picture'] = $image;
            }
            if ($data->has('files') && $data['files'] != null) {
                $files = [];
                foreach ($data['files'] as $file) {
                    $filee = $this->saveFile($file, 'file', $data['first_name'], 'student-files');
                    $files[] = $filee;
                }
                $data['documents'] = serialize($files);
            } else {
                $data['documents'] = serialize([]);
            }
            $data->forget('files');
            // $data['notes'] = json_encode([]);
            // $student = Student::create($data->toArray());
            DB::commit();
            return redirect()->route('list-students')->with(['success' => 'Student saved']);
        } catch (\Exception $ex) {
            DB::rollback();
            if (isset($image)) {
                $this->destroyFile($image, 'student-images');
            }
            if (isset($files)) {
                foreach ($files as $file) {
                    $this->destroyFile($file, 'student-files');
                }
            }
            dd($ex);
            return redirect()->route('list-students')->with(['error' => 'There was an Error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student_picture = $student->getPicture();
        $student_fullName = $student->fullName();
        $student_files = empty($student->getFiles()) ? null : $student->getFiles();
        return view('app.admin.student.view', compact('student', 'student_picture', 'student_fullName', 'student_files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return redirect()->route('view-student', 'edit-user');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        // return $request;
        try {
            $data = collect($request->except(['_token', 'avatar_remove']));
            DB::beginTransaction();
            if ($data->has('picture') && $data['picture'] != null) {
                $image = $this->saveFile($data['picture'], 'image', $data['first_name'], 'student-images');
                $data['picture'] = $image;
                $this->deleteFile($student->picture);
            } else {
                $data->forget('picture');
            }
            // $student = Student::create($data->toArray());
            $student->update($data->toArray());
            DB::commit();
            return redirect()->route('view-student', $student->id)->with(['success' => 'Student saved']);
        } catch (\Exception $ex) {
            DB::rollback();
            if (isset($image)) {
                $this->destroyFile($image, 'student-images');
            }
            dd($ex);
            return redirect()->route('view-student', $student->id)->with(['error' => 'There was an Error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        return 'DESTORY';
    }

    /**
     * api updateNotes
     *
     * @param  Request $request
     * @param  Student $student
     * @return string "success" or "fail"
     */
    public function updateNotes(Request $request, Student $student)
    {
        if ($student->id != $request->std_id) {
            // dd([$student->id, $request->std_id]);
            return "fail";
        }
        try {
            $student->notes = $request->doc;
            $student->save();
            return 'success';
        } catch (\Exception $ex) {
            return "fail";
        }
    }


    /**
     * api updateFiles
     *
     * @param  Request $request
     * @param  Student $student
     * @return string "success" or "fail"
     */
    public function updateFiles(Request $request, Student $student)
    {
        if ($student->id != $request->std_id) {
            // dd([$student->id, $request->std_id]);
            return "fail";
        }
        try {
            $documents = unserialize($student->documents);
            $file = $request->file;
            $fileName = $this->saveFile($file, 'file', $student->first_name, 'student-files');
            $documents[] = $fileName;
            $student->documents = serialize($documents);
            $student->save();
            return 'success';
        } catch (\Exception $ex) {
            return "fail";
        }
    }

    public function getFiles(Request $request, Student $student)
    {
        try {
            if ($request->ajax()) {
                $student_files = empty($student->getFiles()) ? null : $student->getFiles();
                // dd($student_files);
                return $student_files;
            } else {
                return redirect()->route('list-students');
            }
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->Route('list-students');
        }
    }


    /**
     * Saves the File to Storage and puts an entry for it in the DB
     *
     * @param \Illuminate\Http\UploadedFile $file the File
     * @param  string $usage the use of this file
     * @param  string $name the name to give this file in the DB
     * @param  string $disk disk name
     * @return string Image hash
     */
    public function saveFile($file, $usage, $name, $disk)
    {
        $fileName = uploadImage($disk, $file);
        File::create([
            'name' => $name . $usage,
            'original_name' => $file->getClientOriginalName(),
            'type' => $file->getClientMimeType(),
            'file_name' => $fileName,
            'disk' => $disk,
            'usage' => $usage,
        ]);
        return $fileName;
    }


    /**
     * softs delete a File
     *
     * @param  string  $fileName
     * @return void
     */
    public function deleteFile($fileName)
    {
        return File::where('file_name', '=', $fileName)->delete();
    }

    public function destroyFile($file, $disk)
    {
        Storage::disk($disk)->delete($file);
        return $this->deleteFile($file);
    }
}
