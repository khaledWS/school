<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    // protected $casts = [
    //     'documents' => 'array'
    // ];

    /**
     * fullName
     *
     * @return string
     */
    public function fullName()
    {
        return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
    }


    /**
     * getProper Image URI.
     *
     * @return string
     */
    public function getPicture()
    {
        return getPhotoPath($this->picture, 'students/images');
    }

    public function getFiles()
    {
        $filesPaths = [];
        if($this->documents == null){
            return null;
        }
        foreach (unserialize($this->documents) as $file) {
            $filee = File::where('file_name', 'like', $file)->get();
            $filesPaths[$filee[0]->name] = $filee[0]->file_name;
        }
        return $filesPaths;
    }

    public function religion(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                switch ($value) {
                    case 'muslim':
                        return 'مسلم';
                        break;
                    case 'christian':
                        return 'مسيحي';
                        break;
                    default:
                        return 'غير';
                        break;
                }
            }
        );
    }

    public function gender(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                switch ($value) {
                    case 'male':
                        return 'ذكر';
                        break;
                    case 'female':
                        return 'انثى';
                        break;
                    default:
                        return 'غير';
                        break;
                }
            }
        );
    }
}
