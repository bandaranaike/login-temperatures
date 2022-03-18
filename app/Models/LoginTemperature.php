<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method whereUserId(int|string|null $id)
 */
class LoginTemperature extends Model
{
    use HasFactory;

    protected $fillable = ["celsius", "fahrenheit", "city_id"];
}
