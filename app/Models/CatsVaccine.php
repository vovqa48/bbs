<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CatsVaccine
 * @package App\Models
 * @property string $name
 * @property string $date_birthday
 * @property Carbon $created_at
 * @property Carbon $updated_at

 * @property Cat $cat
 * @property Curator $curator
 * @property Vaccine $vaccine
 */
class CatsVaccine extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
    public function curator()
    {
        return $this->belongsTo(Curator::class);
    }
    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }}
