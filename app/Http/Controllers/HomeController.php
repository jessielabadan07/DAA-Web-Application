<?php
/**
 * Created by Jessie S. Labadan
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {

    // Anyone can access this controller
    public function __construct() {
        $this->middleware('guest');
    }

    public  function index() {
        return view("home");
    }

}