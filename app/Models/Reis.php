<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reis extends Model
{
    use HasFactory;

    protected $table = 'reis';

    protected $primaryKey = 'idreis';

    public $timestamps = false;

    public function land()
    {
        return $this->hasOne(Land::class, 'idland', 'idland');
    }
}
