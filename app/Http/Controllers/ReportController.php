<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:225'],
            'email' => ['required', 'email', 'max:225', 'unique:users, email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'description' => ['required', 'string']
        ]);

        $data['user_id'] = Auth::id();
        $data['status'] = 'baru';

        Report::create($data);

        return redirect()->route('reports.index')
        ->with('success', 'Laporan berhasil dibuat');
    }
}
