<?php

namespace App\Controllers;

use App\Models\blogmodel;

class Blog extends BaseController
{


  function post($slug){


			echo view('templates/header');
			echo view('blog/post');
			echo view('templates/footer');


  }


  function create(){
     helper('form');
     $model = new blogmodel();
     // validation

     if(! $this -> validate([

         'title' => "required|min_length[3]|max_length[255]",
         'body' => "required"

     ])){


             echo view('templates/header');
             echo view('blog/create');
             echo view('templates/footer');

            // return when false
     }else{


             //return when true
             //write into database
             $model -> save(
               [

                         'title' => $this -> request->getVar('title'),
                         'body' => $this -> request -> getVar('body'),
                         'slug' => url_title($this -> request->getVar('title')),

                         //post method to get input
             ]
           );
                  //accessable from codeigniter
                  //after save the data redirect to page
           return redirect()->to('/');

     }


  }
}
