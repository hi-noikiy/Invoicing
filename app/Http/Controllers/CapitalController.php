<?php

namespace App\Http\Controllers;

use App\Capital;
use Illuminate\Http\Request;

class CapitalController extends Controller
{
    public function capitalConfig()
    {
        $capital = Capital::find(1)->toArray();
        $data['capital'] = $capital;
        return view('capitalconfig',$data);
    }

    public function capitalUpdate(Request $request)
    {
        $data = $request->all();
        $capital = Capital::find($data['id']);
        $capital->update($data);
        return redirect('capitalconfig');
    }
}
