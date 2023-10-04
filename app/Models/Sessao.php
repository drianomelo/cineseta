<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessao extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sessoes';

    protected $fillable = [
        'horario',
        'dia',
        'sala_id',
        'filme_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get the Sessao's Filme.
     *
     * @return string
     */
    public function getFilmeAttribute()
    {
        return $this->filmeRelationship;
    }

    /**
     * Get the Sessao's Sala.
     *
     * @return string
     */
    public function getSalaAttribute()
    {
        return $this->salaRelationship;
    }

    /**
     * Get the Sessao's Poltrona.
     *
     * @return string
     */
    public function getPoltronaAttribute()
    {
        return $this->PoltronaRelationship;
    }




    /**
     * Get the Filme that owns the Sessao.
     *
     * @return Filme
     */
    public function filmeRelationship()
    {
        return $this->belongsTo(Filme::class, 'filme_id');
    }

    /**
     * Get the Sala that owns the Sessao.
     *
     * @return Sala
     */
    public function salaRelationship()
    {
        return $this->belongsTo(Sala::class, 'sala_id');
    }

    /**
     * Get the Poltrona that owns the Sessao.
     *
     * @return Poltrona
     */
    public function poltronaRelationship()
    {
        return $this->hasMany(Poltrona::class, 'sessao_has_poltronas', 'poltrona_id', 'sessao_id');
    }
}
