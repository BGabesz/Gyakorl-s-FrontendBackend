<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bejegyzesek extends Model
{
    protected $fillable = ['tevekenyseg_id', 'osztaly_id', 'allapot'];
}
