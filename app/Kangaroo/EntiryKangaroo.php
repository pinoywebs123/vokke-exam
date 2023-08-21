<?php

namespace App\Kangaroo;

use Illuminate\Support\Facades\Auth;
use App\Models\Kangaroo;

class EntiryKangaroo {

	public function all()
	{
		return Kangaroo::where('user_id', Auth::id())->get();
	}
	public function store($data)
	{
		$data['user_id'] = Auth::id();
		
		Kangaroo::create($data);
		return response()->json(['message'=> 'Successfully Saved'], 200);
	}
	public function edit($id)
	{
		if($kangaroo = Kangaroo::where('id',$id)->where('user_id', Auth::id())->first())
		{
			return $kangaroo;
		}else 
		{
			return false;
		}
	}
	public function update($data)
	{
		$find = Kangaroo::where('id',$data['kangaroo_id'])->where('user_id',Auth::id())->first();
		if($find)
		{
			$find->update([
				'name'			=> $data['name'],
				'nickname'		=> $data['nickname'],
				'weight'		=> $data['weight'],
				'height'		=> $data['height'],
				'gender'		=> $data['gender'],
				'friendliness'		=> $data['gender'],
				'dob'		=> $data['dob'],
				'color'		=> $data['color'],
			]);
			return redirect()->route('home');
		}else 
		{
			return false;
		}
	}


	
}