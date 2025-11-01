<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;
class NinjaController extends Controller
{
    public function index() {
        $ninjas = Ninja::orderBy('created_at', 'desc')->get();

        return view('ninjas.index', ["ninjas" => $ninjas]);
    }
    
    public function show($id) {
        $ninja = Ninja::findOrFail($id);
        
        return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create() {
        return view('ninjas.create');

    }
}
