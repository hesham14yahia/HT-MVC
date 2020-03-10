<?php


class Pages
{
    public  function __construct()
    {
        echo 'pages loaded';
    }

    public  function index()
    {
        echo 'pages index loaded';
    }


    public function about($param)
    {
        echo 'pages about loaded'. $param;
    }

}