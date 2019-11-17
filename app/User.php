<?php

namespace App;


use App\Post;
use App\UserProfile;
use App\Scopes\VerifiedUsers;
use App\Scopes\NotVerifiedUsers;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new VerifiedUsers);
    }
    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
