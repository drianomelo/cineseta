<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cinemas';

    /**
     * Get the Cinema's Gerente.
     *
     * @return string
     */
    public function getGerenteAttribute()
    {
        return $this->gerenteRelationship;
    }

    /**
     * Get the Cinema's Sala.
     *
     * @return string
     */
    public function getSalaAttribute()
    {
        return $this->salaRelationship;
    }


    /**
     * Get the Gerente that owns the Cinema.
     *
     * @return Gerente
     */

    public function gerenteRelationship()
    {
        return $this->hasOne(Gerente::class, 'cinema_id');
    }

    /**
     * Get the Sala that owns the Cinema.
     *
     * @return Sala
     */

    public function SalaRelationship()
    {
        return $this->hasMany(Sala::class, 'cinema_id');
    }
}
