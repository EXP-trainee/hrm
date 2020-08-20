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
        return $this->hasMany(User::class);
        
    }

    public function leader()
    {
        return $this->hasOne(User::class, "leader_id");
    }
}
