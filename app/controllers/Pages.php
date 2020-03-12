<?php


class Pages extends Controller
{
    public  function __construct()
    {
        //
    }

    public  function index()
    {
        $this->view('s');
    }


    public function about($param)
    {
        echo 'pages about loaded'. $param;
    }

}