<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    public $timestamps = false;

    public function course(){
        return $this->belongsTo("App\Course");
    }
    public function test(){
        return $this->hasOne("App\Test");
    }

}