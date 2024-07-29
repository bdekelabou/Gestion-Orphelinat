<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visitor;

class VisitorController extends Controller
{
    public function showVisitor()
    {
        $totalVisitors = Visitor::count();

        return view('dashboard', compact('totalVisitors'));
    }
}
