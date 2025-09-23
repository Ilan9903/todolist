<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    function addTask ()
    {
        return view ('tasks.add');
    }

}
