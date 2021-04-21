<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Curator
 * @package App\Models
 * @property string $name
 * @property string $surname
 * @property integer $phone
 * @property string $vk_acc
 * @property string $insta_acc
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Cat $cat
 *
 */
class Curator extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function cat()
    {
        return $this->hasMany (Cat::class);
    }
}
