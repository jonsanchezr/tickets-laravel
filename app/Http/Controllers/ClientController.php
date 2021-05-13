<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $arg = [
            'identity' => $request->identity,
            'name' => $request->name,
            'queue_id' => $request->queue_id,
        ];

        Client::create($arg);

        return redirect()->back()->with('success', 'Cliente Agregado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Client::where('id', $id)->update([
            'status' => 1,
        ]);

        return redirect()->back()->with('success', 'Cliente Atendido');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::where('id', $id)->first();
        $client->delete();

        return redirect()->back()->with('success', 'Cliente Eliminado');;
    }
}
