<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    protected $table = 'negara';

    public function iniKota()
    {
        return $this->hasOne(Kota::class, 'negara_id', 'id');
    }
}
