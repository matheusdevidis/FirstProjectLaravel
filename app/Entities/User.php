<?php

namespace App\Entities;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    public $timestamps = true;
    protected $table = 'users';
    protected $fillable = ['name', 'cpf', 'birth', 'phone', 'gender', 'notes', 'email', 'password ', 'status', 'permission'];
    protected $hidden = ['password', 'remeber_token'];

}
