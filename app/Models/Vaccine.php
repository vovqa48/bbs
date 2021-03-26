<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vaccine
 * @package App\Models
 * @property string $name;
 * @property string $description;
 * @property string $photo;
 *
 * @property Method $regularity;
 * @property Method $method;
 * @property Method $view;
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 */
class Vaccine extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function regularity()
    {
        return $this->hasOne(Regularity::class);
    }
    public function method()
    {
        return $this->hasOne(Method::class);
    }
    public function view()
    {
        return $this->hasOne(View::class);
    }

}
