<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    
    protected $guarded = ['codef'];

    // 1 Departement <-> .. Filieres
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function condidats()
    {
        return $this->belongsToMany(Condidat::class)
            ->withPivot('date', 'score', 'accepte');
    }
}
