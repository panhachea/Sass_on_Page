<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //


    public function __call($method, $parameters)
    {
        parent::__call($method, $parameters); // TODO: Change the autogenerated stub
    }

    public function Myhome()
    {
        return view('home');
    }


    public function Mytemplate()
    {
        return view('Myproject.template');
    }

    public function Mytemplate2()
    {
        return view('Myproject.template2');
    }

    public function templeate()
    {
        return view('MYproject.home');
    }

    public function main()
    {
        return view('Myproject.main');
    }

    public  function bladetemplate()
    {
        return view('Myproject.template');
    }

    public  function template1()
    {
        return view('Myproject.template1');
    }


    public  function template2()
    {
        return view('Myproject.template2');
    }



}
