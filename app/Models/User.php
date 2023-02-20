<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'role_id',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(): bool
    {
        return $this->role_id == 1;
    }

    public function isOrganizer(): bool
    {
        return $this->role_id == 2;
    }

    public function isParticipant(): bool
    {
        return $this->role_id == 3;
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
