<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Governorate;
use App\Http\Requests\Dashboard\GovernorateRequest;
use Illuminate\Support\Facades\Auth;

class GovernorateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.governorates.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.governorates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GovernorateRequest $request)
    {
        try {
            $userId = Auth::user()->id;
            $validateData = $request->validated();
            $dataInsert = array_merge($validateData, [
                'created_by' => $userId
            ]);
            Governorate::create($dataInsert);
            return redirect()->route('dashboard.governorates.index')->with('success', 'تم أضافة المحافظة بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->withErrors(['error' => 'عفوآ لقد حدث خطأ'] . $ex->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Governorate $governorate)
    {
        return view('dashboard.governorates.show', compact('governorate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Governorate $governorate)
    {
        return view('dashboard.governorates.edit', compact('governorate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GovernorateRequest $request, Governorate $governorate)
    {
        try {
            $userId = Auth::user()->id;
            $validateData = $request->validated();
            $dataUpdated = array_merge($validateData, [
                'updated_by' => $userId
            ]);
            $governorate->update($dataUpdated);
            return redirect()->route('dashboard.governorates.index')->with('success', 'تم تعديل المحافظة بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->withErrors(['error' => 'عفوآ لقد حدث خطأ'] . $ex->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Governorate $governorate)
    {
        try {
            $governorate->delete();
            return response()->json([
                'success' => true,
                'message' => 'تم حذف المحافظة بنجاح'
            ]);
        } catch (\Exception $e) {
            return redirect()
                ->route('dashboard.governorates.index')
                ->withErrors(['error' => $e->getMessage()]);
        }
    }
}
