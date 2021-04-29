<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class   User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email_address', 'password' ,'mobile_number','location','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = "users";
    public $primaryKey = 'user_id';
    public $timestamps = true;

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'user_id','user_id');
    }

    public function orders()
    {
        return $this->morphedByMany(Order::class, 'order_id');
    }

    public function ServicesPosts()
    {
        return $this->hasMany(Services_post::class, 'user_id','user_id');
    }
    public function comment()
    {
        return $this->hasMany(Comment::class,'user_id','user_id');
    }
}
