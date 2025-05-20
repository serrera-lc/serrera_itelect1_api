<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Userinfo extends Model
{
    //

    use HasFactory, Notifiable;

    protected $table = 'usersinfo';

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'user_id');
    }

}
