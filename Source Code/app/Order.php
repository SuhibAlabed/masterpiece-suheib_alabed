<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    public $primaryKey = 'order_id';
    public $timestamps = true;

    public function users()
    {
        return $this->morphToMany(User::class, 'user_id');
    }

    public function services_post()
    {
        return $this->morphToMany(Services_post::class, 'post_id');
    }
}
