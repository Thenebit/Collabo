<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pudeas;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = pudeas::with('user')->latest()->get();
        return view('home', compact('data'));
    }

    public function publish()
    {
        return view('publish');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ideades' => 'required|string',
        ]);
    
        $pudea = new pudeas();
        $pudea->author_id = auth()->id();
        $pudea->ideades = $validatedData['ideades'];
        $pudea->save();
    
        // redirect or return a response
        return redirect()->back()->with('success', 'Posted created successfully!');
    }

    public function comment($id)
    {
        $data = pudeas::find($id);
        return view('comment', compact('data'));
    }
}
