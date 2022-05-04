<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{

	#ini akse tanpa pengecekan 
	public function index()
	{
		return view('login');
	}
    public function prosesLogin()
    {
        $username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		$kondisi = ['username' => $username, 'password' => md5($password)];

		$data = $this->admin->where($kondisi)->get()->getRowArray();
		// print_r($data);
		// ci3
		# $this->session->set_userdata($arraySession);

		if($data){
			//ci4
			# $this->session->set($data)
			//set to session
			$this->x->set($data); #ini buat nyimpan data login ke session
			// print_r($this->x- >get());

			return redirect('admin', 'refresh');
		}else{
			// Display the alert box 
			echo '<script>alert("Username atau Password Anda Salah")</script>';
			return view('login');
		}
    }

	public function logout()
	{
		$this->x->destroy();
		return redirect('login');
	}
}

