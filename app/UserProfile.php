<?php

namespace App;

use App\User;
use App\UserProfile;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
    protected $guard=[];


public function user()
{
    return $this->belongsTo(User::class);
}

}

