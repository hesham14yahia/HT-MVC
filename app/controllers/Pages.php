<?php


class Pages extends Controller
{

    public  function __construct()
    {
        //
    }


    public  function index()
    {
        $data = ['title' => 'Welcome to HT-MVC Framework Home Page'];
        $this->view('pages/index', $data);
    }


    public function about($param)
    {
        echo 'pages about loaded'. $param;
    }
}