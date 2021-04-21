<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Owner
 * @package App\Models
 * @property string $name
 * @property string $surname
 * @property integer $phone
 * @property string $vk_acc
 * @property string $insta_acc
 * @property string $adress
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property CatsOwner @catsowner
 */
class Owner extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function owner()
    {
        return $this->hasMany(CatsOwner::class);
    }
}
