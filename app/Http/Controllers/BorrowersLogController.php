<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\BorrowersLog;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class BorrowersLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response 
    {
        return Inertia::render('BorrowersLog/Index', [
            //
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
  
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'user_id' => 'required|string|max:255',
            'item_id' => 'required|string|max:255',
            'control_no' => 'required|string|max:255',
            'date_borrowed' => 'required|date',
            'date_return_plan' => 'required|date',
            'loc_for_use' => 'required|string|max:255',
            'lent_by' => 'required|string|max:255',
            'purpose' => 'required|string|max:255',
        ]);
 
        $request->user()->BorrowersLog()->create($validated);
 
        return redirect(route('dashboard'));
    }
    

    /**
     * Display the specified resource.
     */
    public function show(BorrowersLog $borrowersLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BorrowersLog $borrowersLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BorrowersLog $borrowersLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BorrowersLog $borrowersLog)
    {
        //
    }
}
