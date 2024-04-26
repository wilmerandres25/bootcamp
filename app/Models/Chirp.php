<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    /**
     * Mass assigment protecction only for message attribute
     */
    protected $fillable = ['message'];
}
