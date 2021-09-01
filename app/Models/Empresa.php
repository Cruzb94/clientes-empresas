<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contacto;

/**
 * Class Empresa
 *
 * @property $id
 * @property $name
 * @property $nit
 * @property $web
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    protected $primaryKey = 'id';

    static $rules = [
		'name' => 'required',
		'nit' => 'required',
		'web' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','nit','web'];


    public function contacts()
    {
        return $this->hasMany(Contacto::class, 'empresa_id', 'id');
    }


}
