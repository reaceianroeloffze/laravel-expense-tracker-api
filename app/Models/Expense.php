<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'amount',
        'description',
        'date',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'date' => 'date',
    ];

    /**
     * One-to-Many relationship with a User
     *
     * @return BelongsTo <p>
     *     Many expenses can belong to one user
     * </p>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * One-to-Many relationship with a Category
     *
     * @return BelongsTo <p>
     *     Many expenses can belong to one category
     * </p>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
