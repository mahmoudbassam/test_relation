<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $table='resources';
    public function projects(){
        return $this->belongsToMany(Project::class,'project_resources');
    }
}
