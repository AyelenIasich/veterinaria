<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MedicalRecord
 *
 * @property $id
 * @property $mascota_id
 * @property $fecha_consulta
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Pet $pet
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MedicalRecord extends Model
{

    static $rules = [
        'mascota_id' => 'required',
        'fecha_consulta' => 'required',
        'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mascota_id', 'fecha_consulta', 'observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pet()
    {
        return $this->hasOne('App\Models\Pet', 'id', 'mascota_id');
    }
}
