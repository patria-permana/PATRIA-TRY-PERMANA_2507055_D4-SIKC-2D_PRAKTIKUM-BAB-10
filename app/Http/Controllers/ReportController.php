<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::With(['user', 'category'])
        ->latest()
        ->paginate(10); 
    return view('reports.index', compact('reports'));
    }

    public function show($id){
        return view('reports.show', ['id'=>$id]);
    }
}
