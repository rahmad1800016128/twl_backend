<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function Home()
    {

        return view('Welcome_message');
    }
}
