<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestemming extends Model
{
    use HasFactory;

    protected $table = 'bestemming';

    protected $primaryKey = 'idbestemming';

    public function land()
    {
        return $this->hasOne(Land::class, 'idland', 'idland');
    }

    public function accommodatie()
    {
        return $this->hasOne(Land::class, 'idaccommodatie', 'idaccommodatie');
    }
}
