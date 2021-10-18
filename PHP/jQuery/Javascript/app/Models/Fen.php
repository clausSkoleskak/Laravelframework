<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fen extends Model
{
    use HasFactory;
    public $timestamps = false;
  protected $fillable = ['fen_char'];
}
