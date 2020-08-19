<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_info extends Model
{
    use SoftDeletes;
    protected $table ="userinfos";

    public function user()
    {
        return $this->belongsTo(App\User);
    }
}
