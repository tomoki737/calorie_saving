<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    protected $fillable = [
        'question',
        'answer',
    ];
    use HasFactory;

    public function book(): BelongsTo
    {
        return $this->belongsTo('App\Models\Book');
    }
}
