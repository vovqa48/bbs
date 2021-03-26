<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq
 * @package App\Models
 * @property string question
 * @property string answer
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
 */
class Faq extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
}
