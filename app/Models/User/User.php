<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
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
     | ----------------------------------------------------------------------------------
     | Relationships
     | ----------------------------------------------------------------------------------
     */


    /*
     | ----------------------------------------------------------------------------------
     | Mutators and Accessors
     | ----------------------------------------------------------------------------------
     */


    /*
     | ----------------------------------------------------------------------------------
     | Customer Methods
     | ----------------------------------------------------------------------------------
     */

    public function isUser() : bool
    {
        return $this->role_id == config('role.user_id');
    }

    public function isAdmin() : bool
    {
        return $this->role_id == config('role.admin_id');
    }

    public function isActive() : bool
    {
        return !empty($this->email_verified_at);
    }
}
