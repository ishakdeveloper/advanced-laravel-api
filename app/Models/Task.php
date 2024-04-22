<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'completed'];

    public function space(): BelongsTo {
        return $this->belongsTo(Space::class);
    }

    public function board(): BelongsTo {
        return $this->belongsTo(Board::class);
    }
}
