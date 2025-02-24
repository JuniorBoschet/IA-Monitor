<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadChatController extends Controller
{
    public function index($id = null)
    {

        if($id){
            return 'funcionou com o id '.$id;
        }
        return 'funcionou fera';
    }

    public function store(Request $request)
    {
        
    }

    public function update(Request $request, $id)
    {
       
    }

    public function destroy($id)
    {
        
    }
}
