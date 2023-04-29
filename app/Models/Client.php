<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $city_id
 * @property $direccion
 * @property $telefono
 * @property $fecha_alta
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property City $city
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    protected $casts = [
        'estado' => 'boolean',
    ];
    static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido', 'city_id', 'direccion', 'telefono', 'fecha_alta', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function city()
    {
        return $this->hasOne('App\City', 'id', 'city_id');
    }
}
