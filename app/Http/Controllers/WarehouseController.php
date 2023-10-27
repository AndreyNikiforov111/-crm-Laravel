<?php

namespace App\Http\Controllers;

use App\Models\warehouse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WarehouseController extends Controller
{
    public function __invoke(){
        $warehouse = warehouse::all();
        return View('warehouse')->with('warehouse', $warehouse);
    }
}
