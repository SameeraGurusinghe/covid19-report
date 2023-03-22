<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HelpGuide;
use Illuminate\Support\Facades\Auth;

class HelpGuideController extends Controller
{
    // Verify that the user is authenticated before allowing access to Application
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }

    public function index()
    {
        $helpGuides = HelpGuide::with('user')->latest()->get();

        return view('help-guides.index', compact('helpGuides'));
    }

    public function create()
    {
        return view('help-guides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'description' => 'required',
        ]);

        HelpGuide::create([
            'link' => $request->input('link'),
            'description' => $request->input('description'),
            'user_id' => Auth::id()
        ]);

        return redirect()->route('help-guides.index')->with('success', 'Help guide successfully added.');
    }

}