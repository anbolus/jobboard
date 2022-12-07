<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Companies;

class CompaniesController extends Controller
{

public function index(){
    $companies = Companies::all();
    return response() ->json($companies, 200);
}


public function store(Request $request){

    $request->validate([

        "nom_entreprise"=>"required",
        "siege_social"=>"required",
        "taille_entreprise"=>"required",
        "chiffre_affaire"=>"required",
        "secteur_entreprise"=>"required",
        "lien_entreprise"=>"required",
    ]);

    $companies = new Companies ([
        "nom_entreprise" => $request ->get("nom_entreprise"),
        "siege_social" => $request ->get("siege_social"),
        "taille_entreprise" => $request ->get("taille_entreprise"),
        "chiffre_affaire" => $request ->get("chiffre_affaire"),
        "secteur_entreprise" => $request ->get("secteur_entreprise"),
        "lien_entreprise" => $request ->get("lien_entreprise"),
    ]);

    $companies->save();
    return response()->json($companies, 200);
}


public function show($id){

    $companies = companies::findOrFail($id);
    return response()->json($companies, 200);
}

public function edit($id){

    $companies = companies::findOrFail($id);
    $companies->update($id);
    return response()->json($companies, 200);

}

public function update(Request $request, $id){

    $request->validate([

        "nom_entreprise" => "required",
        "siege_social" => "required",
        "taille_entreprise" => "required",
        "chiffre_affaire" => "required",
        "secteur_entreprise" => "required",
        "lien_entreprise" => "required",

    ]);

$companies = Companies::findOrFail($id);
$companies->nom_entreprise = $request -> get("nom_entreprise");
$companies->siege_social = $request -> get("siege_social");
$companies->taille_entreprise = $request -> get("taille_entreprise");
$companies->chiffre_affaire = $request -> get("chiffre_affaire");
$companies->secteur_entreprise = $request -> get("secteur_entreprise");
$companies->lien_entreprise = $request -> get("lien_entreprise");

$companies->update($request->all());
}


public function destroy($id){

$companies = Companies::findOrFail($id);
$companies->delete();
return response()->json($companies, 200);
}

}
