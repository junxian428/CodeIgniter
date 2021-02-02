<?php

namespace App\Controllers;

use App\Models\blogmodel;

class Pages extends BaseController
{
	public function index()
	{
        $model = new blogmodel();
				$data['news'] = $model -> getPosts();

				echo view('templates/header',$data);
				echo view('pages/home');
				echo view('templates/footer');
	}

  function showme($page = 'home'){


			echo view('templates/header');
			echo view('pages/' .$page);
			echo view('templates/footer');


  }
}
