<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = "id"; //primary key;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role(){
        return $this->belongsTo('App\Role');
    }

    public  function isAdmin(){
        if($this->role->name == 'administrator'){
            return true;
        }else{
            return false;
        }
    }

    public  function isUser(){
        if($this->role->name == 'user'){
            return true;
        }else{
            return false;
        }
    } 
}
