<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("Client/Index", [
            'clients' => Client::with("project")->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render("Client/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'social_reason' => 'required',
            'juridical_status' => 'required',
            'capital' => 'required',
            'siret_number' => 'required',
            'naf_code' => 'required',
            'country' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
        ]);

        Client::create($request->only([
            'name',
            'content',
            'social_reason',
            'juridical_status',
            'capital',
            'siret_number',
            'naf_code',
            'country',
            'address',
            'zipcode',
            'city',
        ]));

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::where('id', $id)->firstOrFail();

        return Inertia::render("Client/Edit", [
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::where('id', $id)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'social_reason' => 'required',
            // 'juridical_status' => 'required',
            'capital' => 'required',
            'siret_number' => 'required',
            'naf_code' => 'required',
            'country' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
        ]);

        $client->update($request->only([
            'name',
            'content',
            'social_reason',
            'juridical_status',
            'capital',
            'siret_number',
            'naf_code',
            'country',
            'address',
            'zipcode',
            'city',
        ]));

        return redirect()->route("client.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::where('siret_number', $id)->firstOrFail();
        $client->delete();

        return redirect()->route('client.index');
    }
}
