<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController
{
     public function showProfile()
     {
         $data = [
             'img' => 'https://avatars.githubusercontent.com/u/147499535?v=4',
             'name' => 'Alcel Marie O. Obaña',
             'bdate' => 'September 1, 2003',
             'bplace' => 'Luna, La Union',
             'email' => 'obanaalcel@gmail.com',
             'hobby' => 'Watching Kdrama Series',
         ];
 
         return view('pages.page1', $data);
     }
 
}
