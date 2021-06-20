<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    protected $table = 'negara';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
