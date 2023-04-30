<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\City;
use Illuminate\Http\Request;

/**
 * Class ClientController
 * @package App\Http\Controllers
 */
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(1);

        return view('client.index', compact('clients'))
            ->with('i', (request()->input('page', 1) - 1) * $clients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        $cities = City::pluck('nombre', 'id');
        return view('client.create', compact('client', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Client::$rules);

        // $client = Client::create($request->all());

        if (!$request->has('estado')) {
            $request->merge(['estado' => 0]);
        } else {
            $request->merge(['estado' => 1]);
        }



        $client = new Client([
            'dni' => $request->dni,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'city_id' => $request->city_id,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'fecha_alta' => $request->fecha_alta,
            'estado' => $request->estado,

        ]);
        $client->save();

        // return response()->json($client);
        return redirect()->route('clients.index')
            ->with('success', 'Client created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        $cities = City::pluck('nombre', 'id');

        return view('client.edit', compact('client', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        // dd($request->all());
        // request()->validate(Client::$rules);

        if (!$request->has('estado')) {
            $request->merge(['estado' => 0]);
        } else {
            $request->merge(['estado' => 1]);
        }
        $client->update([
            'dni' => $request->dni,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'city_id' => $request->city_id,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'fecha_alta' => $request->fecha_alta,
            'estado' => $request->estado,

        ]);
        // $client->save();



        // $client->update($request->all());

        return redirect()->route('clients.index')
            ->with('success', 'Client updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $client = Client::find($id)->delete();

        return redirect()->route('clients.index')
            ->with('success', 'Client deleted successfully');
    }
}
