<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    protected $fillable = ["name", "leader_id"];

    public function member()
    {
        return $this->hasMany(User::class);
    }

    public function leader()
    {
        return $this->hasOne(User::class, "leader_id");
    }

    public function userinfo()
    {
        return $this->hasOne('App\UserInfo');
    }
}
