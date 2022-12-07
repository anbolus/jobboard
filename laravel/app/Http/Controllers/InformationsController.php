<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informations;

class InformationsController extends Controller
{
    public function index() {
        $informations = Informations::all();
        return response() ->json($informations, 200);
    }

    public function store(Request $request) {
        $request->validate([
            "events"=>"required",
            "id_companies"=> "required",
            "id_users"=>"required"
        ]);

        $informations = new Informations ([
            "events"=> $request->get("events"),
            "id_companies" => $request->get("id_companies"),
            "id_users" => $request->get("id_users"),
        ]);

        $informations->save();
        return response()->json($informations, 200);
    }

    public function show($id) {
       $informations = Informations::findOrFail($id);
       return response()->json($informations, 200);
    }

    public function edit($id) {
        $informations = Informations::findOrFail($id);
        $informations->update($id);
        return response()->json($informations, 200);
    }

    public function update(Request $request, $id) {
        $request->validate([
            "events" => "required",
            "id_companies" => "required",
            "id_users" => "required",

        ]);


    $informations = Informations::findOrFail($id);
    $informations->events = $request -> get('events');
    $informations->id_companies = $request -> get('id_companies');
    $informations->id_users = $request -> get('id_users');

    $informations->update($request->all());
    }

    public function destroy($id) {
        $informations = Informations::findOrFail($id);
        $informations->delete();
        return response()->json($informations, 200);
    }
}
