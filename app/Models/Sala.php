<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'salas';

    protected $fillable = [
        'numero',
        'capacidade',
        'cinema_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get the Sala's Cinema.
     *
     * @return string
     */
    public function getCinemaAttribute()
    {
        return $this->cinemaRelationship;
    }

    /**
     * Get the Sala's Sessao.
     *
     * @return string
     */
    public function getSessaoAttribute()
    {
        return $this->sessaoRelationship;
    }


    /**
     * Get the Cinema that owns the Sala.
     *
     * @return Cinema
     */
    public function cinemaRelationship()
    {
        return $this->belongsTo(Cinema::class, 'cinema_id');
    }

    /**
     * Get the Sessao that owns the Sala.
     *
     * @return Sessao
     */
    public function sessaoRelationship() //consertar relacionamento no script do MySQL. Não faz sentido uma Sala ter apenas uma sessão (Faz?)
    {
        return $this->hasMany(Sessao::class, 'sala_id');
    }
}