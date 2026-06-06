<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    
    protected $guarded = ['id'];

    // 1 Departement <-> .. Filieres
    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }
}
