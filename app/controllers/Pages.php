<?php


class Pages extends Controller
{

    public  function __construct()
    {
        //
    }


    public  function index()
    {
        $data = ['title' => 'Welcome to home page'];
        $this->view('pages/index', $data);
    }


    public function about($param)
    {
        echo 'pages about loaded'. $param;
    }
}