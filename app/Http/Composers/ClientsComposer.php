<?php

namespace App\Http\Composers;

use App\Client;
use Illuminate\View\View;

class ClientsComposer {

    protected $view;

    public function compose(View $view){
        $this->view = $view;

        $this->get_clients();
    }

    private function get_clients(){
        $clients = Client::orderBy('created_at', 'desc')->get();

        $this->view->with('clients' , $clients);
    }
}