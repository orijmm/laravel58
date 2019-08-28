<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Carbon\Carbon;

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
        'name', 'email', 'password', 'phone', 'address', 'birthday', 'active'
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
        'birthday' => 'date'
    ];

    public function activeButton(){
        if ($this->active) {
            $button = '<button class="btn btn-success">Active</button>';
        }else{
            $button = '<button class="btn btn-secondary">Inactive</button>';;
        }
        return $button;
    }
    public function setBirthdayAttribute($value)
    {
        $this->attributes['birthday'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
    }

    public function getBirthdayAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

     /**
     * Get the post of the users.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
