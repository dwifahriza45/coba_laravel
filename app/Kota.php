<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kota';

    public function iniNegara()
    {
        return $this->hasOne(Negara::class, 'id', 'negara_id');
    }
}
