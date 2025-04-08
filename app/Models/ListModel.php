<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ListModel extends Model
{
    protected $table = 'lists';

    protected $guarded = [
        'id'
    ];

    public const PRIORITY = [
        'low',
        'medium',
        'high'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class, 'list_id');
    }

    public function getFormattedCreatedAtAttribute()
    {
        return Carbon::parse($this->created_at->timezone('Asia/Jakarta'))->translatedFormat('d F Y \o\n H:i:s');
    }
}
