<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_service extends Model
{
    protected $table = "main_services";
    public $primaryKey = 'main_service_id';
    public $timestamps = true;


    public function blog(){
        return $this->hasMany(Blog::class, 'blog_id','blog_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'service_id');
    }
}
