<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 *
 * @property $id
 * @property $nombre
 * @property $codigo_postal
 * @property $created_at
 * @property $updated_at
 *
 * @property Client[] $clients
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class City extends Model
{

    static $rules = [
        'nombre' => 'required',
        'codigo_postal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'codigo_postal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients()
    {
        return $this->hasMany('App\Client', 'city_id', 'id');
    }
}
