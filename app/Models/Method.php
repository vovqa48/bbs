<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Method
 * @package App\Models
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Method extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

}
