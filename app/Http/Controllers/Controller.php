<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
 
 
class Controller extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
