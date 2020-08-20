<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    protected $fillable = ["name", "leader_id"];

    public function users()
    {
        return $this->hasMany('App\User');
        
    }
    public function leader()
    {
        return $this->hasOne('App\User', "leader_id");
    }

}
