<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $table = 'roles';

    protected $guarded = [ 'id' ];

    public $timestamps = false;

    const USER = 1;
    const ADMIN = 2;

    public function users() : HasMany
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
