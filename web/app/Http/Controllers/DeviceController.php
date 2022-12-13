<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function createPoint(Request $request){
        return Point::create($request->all());
    }
}
