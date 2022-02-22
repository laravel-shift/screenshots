<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index(Request $request)
    {
        return view('shift.index', [
            'shifts' => Shift::all(),
        ]);
    }

    public function show(Request $request, Shift $shift)
    {
        return view('shift.show', [
            'shift' => $shift,
            'view' => $request->query('view'),
        ]);
    }
}
