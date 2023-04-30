<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pet
 *
 * @property $id
 * @property $client_id
 * @property $chip
 * @property $nombre
 * @property $pet_category_id
 * @property $fecha_nacimiento
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property PetCategory $petCategory
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pet extends Model
{

    static $rules = [
        'client_id' => 'required',
        'chip' => 'required',
        'nombre' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['client_id', 'chip', 'nombre', 'pet_category_id', 'fecha_nacimiento', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'client_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function petCategory()
    {
        return $this->hasOne('App\Models\PetCategory', 'id', 'pet_category_id');
    }

    public function medicalRecords()
    {
        return $this->hasMany('App\Models\MedicalRecord', 'mascota_id', 'id');
    }
}
