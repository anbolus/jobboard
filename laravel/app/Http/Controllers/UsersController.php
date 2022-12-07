<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

class UsersController extends Controller
{
    public function index(){

    $users = Users::all();
    return response()->json($users, 200);
    }

    public function store(Request $request){

        $request->validate([
            "prenom" => "required",
            "nom" => "required",
            "email" => "required",
            "password" => "required",
            "role" => "required",
            "id_companies" => "required",
            "tel" => "required",
        ]);


    $users = new Users ([

        "prenom" => $request->get("prenom"),
        "nom" => $request->get("nom"),
        "email" => $request->get("email"),
        "password" => $request->get("password"),
        "role" => $request->get("role"),
        "id_companies" => $request->get("id_companies"),
        "tel" => $request->get("tel"),

    ]);

    $users->save();
    return response()->json($users, 200);

}


public function show($id){

    $users = users::findOrFail($id);
    return response()->json($users, 200);
}

public function edit($id){

    $users = users::findOrFail($id);
    return response()->json($users, 200);
}

public function update(Request $request, $id){

    $request->validate([

        "prenom" => "required",
        "nom" => "required",
        "email" => "required",
        "password" => "required",
        "role" => "required",
        "id_companies" => "required",
        "tel" => "required",
    ]);

    $users = Users::findOrFail($id);
    $users->prenom = $request->get("prenom");
    $users->nom = $request->get("nom");
    $users->email = $request->get("email");
    $users->password = $request->get("password");
    $users->role = $request->get("role");
    $users->id_companies = $request->get("id_companies");
    $users->tel = $request->get("tel");

    $users->update($request->all());

    return response()->json($users, 200);
}


public function destroy($id){

    $users = Users::findOrFail($id);
    $users->delete();
    return response()->json($users, 200);
}

}
