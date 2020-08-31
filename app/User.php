<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar','phone','phone_2','phone_emergency', 'bio', 'team_id', 'dob' ,'national_id' , 'national_id_image' , 'driving_license' , 'driving_license_image' , 'address','relationship', 'banks', 'status','bank',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $common = [
            'email'    => "required|email|unique:users,email,$id",
            'password' => 'nullable|confirmed',
            'avatar','national_id_image','driving_license_image' => 'image',

        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /*
    |------------------------------------------------------------------------------------
    | Attributes
    |------------------------------------------------------------------------------------
    */
    public function setPasswordAttribute($value='')
    {
        $this->attributes['password'] = bcrypt($value);
    }
    
    
    public function getAvatarAttribute($value)
    {
        if (!$value) {
            return 'https://placehold.it/160x160';
        }
    
        return config('variables.avatar.public').$value;
    }
    public function setAvatarAttribute($photo)
    {
        $this->attributes['avatar'] = move_file($photo, 'avatar');
        
    }

    // public function getNationalImageAttribute($value)
    // {
    //     if (!$value) {
    //         return 'https://placehold.it/160x160';
    //     }
    
    //     return config('variables.national_id_image.public').$value;
    // }
    // public function setNationalImageAttribute($photo)
    // {
    //     $this->attributes['national_id_image'] = move_file($photo, 'national_id_image');
        
    // }

    // public function getDrivingLicenseImageAttribute($value)
    // {
    //     if (!$value) {
    //         return 'https://placehold.it/160x160';
    //     }
    
    //     return config('variables.driving_license_image.public').$value;
    // }
    // public function setDrivingLicenseImageAttribute($photo)
    // {
    //     $this->attributes['driving_license_image'] = move_file($photo, 'driving_license_image');
        
    // }

    /*
    |------------------------------------------------------------------------------------
    | Boot
    |------------------------------------------------------------------------------------
    */
    public static function boot()
    {
        parent::boot();
        static::updating(function ($user) {
            $original = $user->getOriginal();
            
            if (\Hash::check('', $user->password)) {
                $user->attributes['password'] = $original['password'];
            }
        });
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function getTeam(){
        return $this->belongsTo('App\Team', 'team_id', 'id');
    }
}
