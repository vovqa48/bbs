<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CatsOwner
 * @package App\Models
 * @property string $name
 * @property string $date_adopted
 * @property string $date_rejected
 * @property Carbon $created_at
 * @property Carbon $updated_at

 * @property Cat $cat
 * @property Owner $owner
 */

class CatsOwner extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
