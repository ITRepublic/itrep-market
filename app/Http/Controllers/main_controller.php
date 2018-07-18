<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job_finder_model;

class main_controller extends Controller
{
    public function create() {
    	return view('index');
    }

    public function landing() {
    	return view('landing');
    }

    public function landingSave(Request $request) {
    	$rules = [
            'email'  => 'email|unique:job_finder,email_address',
    	];

        $this->validate($request, $rules);

    	$check = job_finder_model::where('username','like', '%'.$request->nama_depan.'%')->orderBy('username','desc')->first();

    	if($check == null) {
    		$nama_depan = $request->nama_depan.$request->nama_belakang;
    	}
    	else {
    		$nama_depan = $request->nama_depan.$request->nama_belakang.rand(1111,9999);
    	}

    	$data['username'] = $nama_depan;
        $data['password'] = md5('123456');
        $data['email_address'] = $request->email;
        $data['address'] = '';
        $data['phone'] = '';
        $data['group_id'] = 'jf';
        $data['total_rating'] = '0';
        $data['status'] = 'active';
        $data['profile_pict'] = '';

        $jf = job_finder_model::create($data);

        return redirect()->to("https://itrepublic.id");
    }
}
