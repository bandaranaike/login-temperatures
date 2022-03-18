<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @method static whereUserId(int|string|null $id)
 */
class LoginTemperature extends Model
{
    use HasFactory;

    protected $fillable = ["celsius", "fahrenheit", "city_id"];

    /**
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Casting the date in a different way
     * @param $val
     * @return string
     */
    public function getCreatedAtAttribute($val): string
    {
        return Carbon::parse($val)->toDayDateTimeString();
    }
}
