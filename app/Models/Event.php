<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Event extends Model
{
    use HasFactory;

    protected array $fillable = [
        'user_id',
        'category_id',
        'address_id',
        'title',
        'description',
        'participants',
        'date',
        'duration'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
