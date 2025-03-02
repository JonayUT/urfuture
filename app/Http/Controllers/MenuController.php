<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menuJson = Storage::get('menu.json');
        $menuItems = json_decode($menuJson, true);

        return view('menu', compact('menuItems'));
    }
}
