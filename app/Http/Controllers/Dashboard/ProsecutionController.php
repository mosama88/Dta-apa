<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Prosecution;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProsecutionRequest;

class ProsecutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.prosecutions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.prosecutions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProsecutionRequest $request)
    {
        try {
            $validateData = $request->validated();
            Prosecution::create($validateData);
            return redirect()->route('dashboard.prosecutions.index')->with('success', 'تم أضافة الجهه بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->withErrors(['error' => 'عفوآ لقد حدث خطأ'] . $ex->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Prosecution $prosecution)
    {
        return view('dashboard.prosecutions.show', compact('prosecution'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prosecution $prosecution)
    {
        return view('dashboard.prosecutions.edit', compact('prosecution'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProsecutionRequest $request, Prosecution $prosecution)
    {
        try {
            $validateData = $request->validated();
            $prosecution->update($validateData);
            return redirect()->route('dashboard.prosecutions.index')->with('success', 'تم تعديل الجهه بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->withErrors(['error' => 'عفوآ لقد حدث خطأ'] . $ex->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prosecution $prosecution)
    {
        try {
            $prosecution->delete();
            return response()->json([
                'success' => true,
                'message' => 'تم حذف الجهه بنجاح'
            ]);
        } catch (\Exception $e) {
            return redirect()
                ->route('dashboard.prosecutions.index')
                ->withErrors(['error' => $e->getMessage()]);
        }
    }
}