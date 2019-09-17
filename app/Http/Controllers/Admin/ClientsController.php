<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;

class ClientsController extends AdminController
{
    public function index (){
        $clients = Client::orderBy('created_at', 'desc')->get();

        return view('admin.clients.index', compact('clients'));
    }

    public function create(){
        return view('admin.clients.create');
    }

    public function store(CreateClientRequest $request){
        $client = Client::create($request->all());

        $client->save();

        //$this->upload_image($request, 'image', 'clients', $client, 'profile');

        $this->_setFlashMessage($request,'success', "Klient <b>$client->name_sk</b> úspešne vytvorený");

        return redirect()->route('clients.index');
    }

    public function edit($id){
        $client = Client::findOrFail($id);

        return view('admin.clients.edit', compact('client'));
    }

    public function update(UpdateClientRequest $request, $id){
        $client = Client::findOrFail($id);

        $client->update($request->all());

        $client->save();

        //$this->upload_image($request,'image', 'clients', $client, 'profile');

        $this->_setFlashMessage($request, 'success', "Klient <b>$client->name_sk</b> úspešne zmenený");

        return back();
    }

    public function delete(Request $request, $id){
        $client = Client::findOrFail($id);

        $this->_setFlashMessage($request, 'success', "Klient <b>$client->name_sk</b> úspešne vymazaný" );

        /*
        if(count($client->images) > 0){
            foreach($client->images as $image){
                $image->delete();
            }
        }*/

        $client->delete();

        return redirect()->route('clients.index');
    }
}
