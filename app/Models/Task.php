<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    public function list(): BelongsTo
    {
        return $this->belongsTo(ListModel::class);
    }
}
