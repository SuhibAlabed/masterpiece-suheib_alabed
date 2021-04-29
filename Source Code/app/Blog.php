<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";
    public $primaryKey = 'blog_id';
    public $timestamps = true;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function mainServices(){
        return $this->belongsTo(MainServices::class, 'main_service_id','main_service_id');
    }
}
