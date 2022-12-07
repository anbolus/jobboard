<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Advertisements;

class AdvertisementsController extends Controller
{

    public function index(){
        $advertisements = Advertisements::all();
        return response()->json($advertisements, 200);
    }

    public function store(Request $request){
        $request->validate([

            "nom_poste" => "required",
            "id_companies" => "required",
            "lieu"=>"required",
            "salaire" => "required",
            "type_contrat" => "required",
            "description" => "required",
        ]);

        $advertisements = new Advertisements ([

            "nom_poste" => $request->get("nom_poste"),
            "id_companies" => $request->get("id_companies"),
            "lieu" => $request->get("lieu"),
            "salaire" => $request->get("salaire"),
            "type_contrat" => $request->get("type_contrat"),
            "description" => $request->get("description"),
        ]);
            $advertisements->save();
            return response()->json($advertisements, 200);
        }

    public function show ($id){

        $advertisements = Advertisements::findOrFail($id);
        return response()->json($advertisements, 200);
    }

    public function edit($id){

        $advertisements = Advertisements::findOrFail($id);
        return response()->json($advertisements, 200);
    }

    public function update(Request $request, $id){

        $request->validate([

            "nom_poste" => "required",
            "id_companies" => "required",
            "lieu"=>"required",
            "salaire" => "required",
            "type_contrat" => "required",
            "description" => "required",
        ]);

    $advertisements = Advertisements::findOrFail($id);
    $advertisements -> nom_poste = $request -> get("nom_poste");
    $advertisements -> id_companies = $request -> get("id_companies");
    $advertisements -> lieu = $request -> get("lieu");
    $advertisements -> salaire = $request -> get("salaire");
    $advertisements -> type_contrat = $request -> get("type_contrat");
    $advertisements -> description = $request -> get("description");

    $advertisements->update($request->all());

    }

    public function destroy($id){
        $advertisements = Advertisements::findOrFail($id);
        $advertisements->delete();
        return response()->json($advertisements, 200);

    }
}


