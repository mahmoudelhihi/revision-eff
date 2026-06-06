<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    // affichage
    public function index()
    {
        $departs = Departement::all();
        return view('depart.index', [
            'departs' => $departs
        ]);
        // compact('departs');
    }

    // ajout
    public function create()
    {
        return view('depart.create');
    }

    public function store(Request $request)
    {   
        // validation
        Departement::create([
            'titre' => $request['titre'],
            'responsable' => $request['responsable'],
        ]);

        return redirect()->route('depart_index');
    }

    // modif
    public function edit(Request $request, int $id)
    {
        $depart = Departement::where('id' , $id)->get()->first();
        return view('depart.update', compact('depart'));
    }

    public function update(Request $request, int $id)
    {
        Departement::where('id', $id)
            ->update([
                'titre' => $request['titre'],
                'responsable' => $request['responsable'],
            ]);

        return redirect()->route('depart_index');
    }

    // delete
    public function destroy(Request $request, int $id)
    {
        Departement::where('id', '=', $id)->delete();
        return redirect()->route('depart_index');
    }

}
