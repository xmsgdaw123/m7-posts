<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model {
    protected $fillable = ['role', 'desc'];

    public function users() {
        return $this->hasMany(User::class);
    }
}