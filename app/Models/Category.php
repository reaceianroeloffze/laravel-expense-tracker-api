<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'colour',
        'user_id',
    ];

    /**
     * One-to-Many relationship with a User
     *
     * @return BelongsTo <p>
     *     Many categories can belong to one user
     * </p>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * One-to-Many relationship with expenses
     *
     * @return HasMany <p>
     *     One expense category can have many expenses
     * </p>
     */
    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class);
    }
}
