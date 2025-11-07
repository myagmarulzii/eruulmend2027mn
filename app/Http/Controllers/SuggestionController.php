<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuggestionController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'category' => 'required|string',
            'suggestion' => 'required|string',
        ]);

        Suggestion::create($validated);

        return redirect()->route('home')->with('success', 'Таны санал амжилттай илгээгдлээ!');
    }

    public function statistics()
    {
        $stats = Suggestion::select('category', DB::raw('count(*) as total'))
            ->groupBy('category')
            ->get();

        $totalSuggestions = Suggestion::count();

        return view('statistics', compact('stats', 'totalSuggestions'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function membership()
    {
        return view('membership');
    }
}
