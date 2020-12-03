<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

class Person extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'birth_date',
        'active',
        'group_id',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the academy group that owns the person.
     *
     * @return BelongsTo
     */
    public function academyGroup(): BelongsTo
    {
        return $this->belongsTo(AcademyGroup::class, 'group_id' );
    }

    /**
     * Person age
     *
     * @return int
     */
    public function getAgeAttribute(): int
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }
}
