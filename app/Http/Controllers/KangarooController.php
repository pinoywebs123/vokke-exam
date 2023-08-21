<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KangarooRequest;
use App\Http\Requests\EditKangarooRequest;

use App\Kangaroo\AuthKangaroo;
use App\Kangaroo\EntiryKangaroo;

class KangarooController extends Controller
{
    public function logout(AuthKangaroo $auth)
    {
        return $auth->logout();
    }
    public function home(EntiryKangaroo $kangaroo)
    {
        $kangaroos = $kangaroo->all();
        return view('kangaroo.home',compact('kangaroos'));
    }
    public function new_kangaroo(KangarooRequest $request, EntiryKangaroo $kangaroo)
    {
        return $kangaroo->store($request->all());
    }
    public function get_kangaroo($id, EntiryKangaroo $kangaroo)
    {
        $find_kangaroo = $kangaroo->edit($id);
        if($find_kangaroo == false)
        {
            return 'Can not find kangaroo';
        }
        return view('kangaroo.edit',compact('find_kangaroo'));
    }
    public function update_kangaroo(EditKangarooRequest $request, EntiryKangaroo $kangaroo)
    {
        $check_update =  $kangaroo->update($request->all());
        if($check_update == false)
        {
           return 'You are not allowed, to update other Kangaroo'; 
        }
        return $check_update;
    }
}
