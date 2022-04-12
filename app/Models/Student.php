<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    public static function delete_student($id){
        $student = Student::findOrFail($id);
        if(!is_null($student)){
            $student->delete();
        }
    }
}
