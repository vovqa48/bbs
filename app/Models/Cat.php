<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cat
 * @package App\Models
 * @property string $name
 * @property string $date_birthday
 * @property string $photo
 * @property string $cat_story
 * @property string $cat_come_in
 * @property string $status
 * @property string $special_signs
 * @property Carbon $created_at
 * @property Carbon $updated_at

 * @property CatsOwner $catsowner
 * @property CatsCurators $catscurator
 * @method byName()
 */
class Cat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopebyName($query, $name)
    {
        return $query->where('name', $name)->first();

    }
    public function curator()
    {
        return $this->hasOne(Curator::class,'id');
    }
    public function catsowner()
    {
        return $this->hasOne(CatsOwner::class);
    }
}
