<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    public $primaryKey = 'service_id';
    public $timestamps = true;

    public function mainServices(){
        return $this->belongsTo(Main_service::class, 'main_services','main_services');
    }

    public function services_post(){
        return $this->hasMany(Services_post::class, 'services_posts','services_posts');
    }
}
