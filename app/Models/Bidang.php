<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    protected $table = 'bidang';
    protected $guarded = ['created_at', 'updated_at', 'id'];
}
