<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShiftController extends Controller
{
    public function index(Request $request): View
    {
        return view('shift.index', [
            'shifts' => Shift::all(),
        ]);
    }

    public function show(Request $request, Shift $shift): View
    {
        return view('shift.show', ['shift' => $shift]);
    }
}
