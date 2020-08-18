<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_infor extends Model
{
    use SoftDeletes;
    protected $table ="infousers";

    public function user()
    {
        return $this->belongsTo(App\User);
    }
}
