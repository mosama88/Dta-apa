<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InternetLine;
use App\Models\Prosecution;
use App\Models\Governorate;
use App\Http\Requests\Dashboard\InternetLineRequest;
use Illuminate\Support\Facades\Auth;

class InternetLineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.internet_lines.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $other['prosecutions'] = Prosecution::all();
        $other['governorates'] = Governorate::all();
        return view('dashboard.internet_lines.create', compact('other'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InternetLineRequest $request)
    {
        try {
            $userId = Auth::user()->id;
            $validateData = $request->validated();
            $dataInsert = array_merge($validateData, [
                'created_by' => $userId
            ]);
            InternetLine::create($dataInsert);
            return redirect()->route('dashboard.internet_lines.index')->with('success', 'تم أضافة خط الانترنت بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->withErrors(['error' => 'عفوآ لقد حدث خطأ'] . $ex->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(InternetLine $internetLine)
    {
        return view('dashboard.internet_lines.show', compact('internetLine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InternetLine $internetLine)
    {
        return view('dashboard.internet_lines.edit', compact('internetLine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InternetLineRequest $request, InternetLine $internetLine)
    {
        try {
            $userId = Auth::user()->id;
            $validateData = $request->validated();
            $dataUpdated = array_merge($validateData, [
                'updated_by' => $userId
            ]);
            $internetLine->update($dataUpdated);
            return redirect()->route('dashboard.internet_lines.index')->with('success', 'تم تعديل خط الانترنت بنجاح');
        } catch (\Exception $ex) {
            return redirect()->back()->withErrors(['error' => 'عفوآ لقد حدث خطأ'] . $ex->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InternetLine $internetLine)
    {
        try {
            $internetLine->delete();
            return response()->json([
                'success' => true,
                'message' => 'تم حذف خط الانترنت بنجاح'
            ]);
        } catch (\Exception $e) {
            return redirect()
                ->route('dashboard.internet_lines.index')
                ->withErrors(['error' => $e->getMessage()]);
        }
    }
}