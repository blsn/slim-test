<?php

namespace App\Database;

/*
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // if comment out, the the plural class name is the table name (‘users’)
}
*/

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // if comment out, the the plural class name is the table name (‘users’)
    protected $fillable = [
        'username', 
        'email', 
        'password', 
        'active', 
        'active_hash', 
        'remember_identifier', 
        'remember_token', 
        'recover_hash'
    ];
}
