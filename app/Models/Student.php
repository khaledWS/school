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

    public static  $attr_multi = [
        'en' => [
            'first_name' => "First name",
            'middle_name' => 'middle name',
            'last_name' => 'last name',
            'mother_name' => 'mother name',
            'gender' => 'gender',
            'id_number' => 'Personal ID Number',
            'religion' => 'religion',
            'birth_date' => 'birth date',
            'addmission_date' => 'admission date',
            'leaving_Date' => 'leaving date',
            'enrolled' => 'enrolled',
            'picture' => 'Profile picture',
            'email' => 'email',
            'user_name' => 'user name',
            'password' => 'password',
            'address' => 'address',
            'phone' => 'phone',
            'mobile' => 'mobile',
            'documents' => 'documents',
            'notes' => 'notes',
        ],
        'ar' => [
            'first_name' => "إسم الطالب",
            'middle_name' => 'إسم الأب',
            'last_name' => 'إسم العائلة',
            'mother_name' => 'إسم الام',
            'gender' => 'الجنس',
            'id_number' => 'رقم البطاقة الشخصية',
            'religion' => 'الديانة',
            'birth_date' => 'تاريخ الميلاد',
            'addmission_date' => 'تاري الإلتحاق',
            'leaving_Date' => 'تاريخ المغادرة',
            'enrolled' => 'مسجل',
            'picture' => 'الصورة الشخصية',
            'email' => 'البريد الالكتروني',
            'user_name' => 'اسم المستخدم',
            'password' => 'كلمة السر',
            'address' => 'العنوان',
            'phone' => 'رقم الهاتف',
            'mobile' => 'رقم المحمول',
            'documents' => 'الملفات',
            'notes' => 'الملاحظات',
        ]
    ];

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
            $filesPaths[$filee[0]->original_name] = $filee[0]->file_name;
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
