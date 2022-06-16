<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodatie extends Model
{
    use HasFactory;

    protected $table = 'accommodatie';

    protected $primaryKey = 'idaccommodatie';

    public function bestemming()
    {
        return $this->hasOne(Bestemming::class, 'idbestemming', 'idbestemming');
    }

}
