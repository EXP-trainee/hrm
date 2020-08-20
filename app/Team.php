<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    protected $fillable = ["name", "leader_id"];

    public function user()
    {
        // return $this->hasMany(UserInfo::class);
        return $this->belongsToMany('App\User', 'userinfos', 'user_id', 'team_id');
    }

    public function leader()
    {
        return $this->hasOne(UserInfo::class, "leader_id");
    }
    public function userinfo()
    {
        return $this->hasMany(UserInfo::class);
    }
}
