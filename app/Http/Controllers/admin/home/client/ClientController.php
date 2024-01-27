<?php

namespace App\Http\Controllers\admin\home\client;

use App\Http\Controllers\Controller;
use App\Models\admin\home\client\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $client;
    protected $deleteclient;
    public function client()
    {
        return view('admin.fronthome.client.addclient');
    }
    public function addclient(Request $request)
    {
        Client::addClientLogo($request);

        return redirect()->back()->with('message','Client photo added Successfully');
    }
    public function manageclient()
    {
        $this->client=Client::all();
        return view('admin.fronthome.client.manageclient',['clients'=>$this->client]);
    }
    public function deleteclient($id)
    {
        $this->deleteclient=Client::find($id);
        if (file_exists($this->deleteclient->image))
        {
            unlink($this->deleteclient->image);
        }
        $this->deleteclient->delete();
        return redirect()->back()->with('message','Client Image deleted successfully');
    }
}
