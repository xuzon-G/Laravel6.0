<?php

namespace App;

use App\User;
use App\UserProfile;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
protected $guard=[];
// all values are fillable
public function user()
{
    return $this->belongsTo(User::class);
}
public function profile()
{
    return $this->hasOneThrough(UserProfile::class, User::class,'id','user_id','user_id');
}
}
