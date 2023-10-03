<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    protected $table = 'filmes';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $fillable = [
        'capa',
        'titulo',
        'sinopse',
        'data_lancamento',
        'faixa_etaria',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [

    ];

    /**
     * Get the Filme's Avaliacao.
     *
     * @return string
     */
    public function getAvaliacaoAttribute()
    {
        return $this->avaliacaoRelationship;
    }

    /**
     * Get the Filme's Sessao.
     *
     * @return string
     */
    public function getSessaoAttribute()
    {
        return $this->sessaoRelationship;
    }


    /**
     * Get the Avaliacao that owns the Filme.
     *
     * @return Avaliacao
     */
    public function avaliacaoRelationship()
    {
        return $this->hasMany(Avaliacao::class, 'filme_id');
    }

    /**
     * Get the Sessao that owns the Filme.
     *
     * @return Sessao
     */
    public function sessaoRelationship()
    {
        return $this->hasMany(Sessao::class, 'filme_id');
    }

}
