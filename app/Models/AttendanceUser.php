<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceUser extends Model
{
    use HasFactory;

    public $table = "attendance_user";
    protected $fillable = ['user_id','attendance_id'];
}
