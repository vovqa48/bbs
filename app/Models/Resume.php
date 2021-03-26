<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Resume
 * @package App\Models
 * @property string $answer1
 * @property string $answer2
 * @property string $answer3
 * @property string $answer4
 * @property string $answer5
 * @property string $answer6
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Resume extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
}
