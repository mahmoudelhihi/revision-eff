<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condidat extends Model
{
    protected $guarded = ['cen'];

    // ManyToMany
    public function filieres()
    {
        return $this->belongsToMany(Filiere::class)
            ->withPivot('date', 'score', 'accepte');
    }
}
