<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = "classes";
    protected $primaryKey = "classes_id";
    public function teacher() {
            
        return $this->belongsTo(Teacher::class, 'teachers_id', 'teachers_id');
    }
}
