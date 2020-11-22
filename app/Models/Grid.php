<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grid extends Model
{
    use HasFactory;

    public function style()
    {
        return $this->belongsTo('App\Models\Style');
    }

    public function colour()
    {
        return $this->belongsTo('App\Models\Colour');
    }
}
