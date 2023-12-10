<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthModel extends Model
{
    use HasFactory;
    protected $table = 'admin_users';
}
