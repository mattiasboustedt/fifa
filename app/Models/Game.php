<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Access\User\User;

class Game extends Model
{

    protected $fillable = ['user_one_id','user_two_id', 'user_one_score', 'user_two_score', 'created_at', 'updated_at'];

    public function users()
    {
        return $this->belongsToMany('App\Models\Access\User\Users');
    }

    public function getUser($user_id)
    {
        return User::find($user_id);
    }
}
