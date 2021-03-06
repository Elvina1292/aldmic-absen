<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendance';
    protected $fillable = ['user_id', 'in_out'];

   public function user()
    {
        return $this->belongsToMany('App\User');
    }

}
