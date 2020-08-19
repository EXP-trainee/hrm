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
        return $this->hasMany(UserInfo::class);
    }

    public function leader()
    {
        return $this->hasOne(UserInfo::class, "leader_id");
    }
    public function userinfo()
    {
        return $this->hasOne(UserInfo::class);
    }
}
