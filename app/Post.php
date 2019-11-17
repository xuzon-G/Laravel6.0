<?php

namespace App;

use App\User;
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

}
