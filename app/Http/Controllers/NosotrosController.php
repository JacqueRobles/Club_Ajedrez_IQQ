<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function __invoke()
    {
        return view('nosotros'); // Assuming you have a Blade view named 'nosotros.blade.php'
    }
}
