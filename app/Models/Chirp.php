<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    /**
     * Mass assigment protecction only for message attribute
     */
    protected $fillable = ['message'];

    /**
     * Defining the Chirps relationship belongs to User
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
