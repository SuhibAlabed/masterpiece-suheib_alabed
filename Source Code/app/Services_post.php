<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services_post extends Model
{
    protected $table = "services_posts";
    public $primaryKey = 'post_id';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders()
    {
        return $this->morphedByMany(Order::class, 'order_id');
    }

    public function services()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id','post_id');
    }
}
