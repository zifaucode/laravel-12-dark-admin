<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.setting.index', [
            'setting' => Setting::first(),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            if (Setting::count() > 0) {
                $setting = Setting::first();
                $setting->title = $request->title;
                $setting->footer = $request->footer;
                if ($request->hasFile('logo')) {
                    $logo = $request->file('logo');
                    $logoName = time() . '.' . $logo->getClientOriginalExtension();
                    $logo->move(public_path('img-web'), $logoName);
                    $setting->logo = $logoName;
                }
                if ($request->hasFile('favicon')) {
                    $favicon = $request->file('favicon');
                    $faviconName = time() . '.' . $favicon->getClientOriginalExtension();
                    $favicon->move(public_path('img-web'), $faviconName);
                    $setting->favicon = $faviconName;
                }
                $setting->save();
            } else {
                $setting = new Setting();
                $setting->title = $request->title;
                $setting->footer = $request->footer;
                if ($request->hasFile('logo')) {
                    $logo = $request->file('logo');
                    $logoName = time() . '.' . $logo->getClientOriginalExtension();
                    $logo->move(public_path('img-web'), $logoName);
                    $setting->logo = $logoName;
                }
                if ($request->hasFile('favicon')) {
                    $favicon = $request->file('favicon');
                    $faviconName = time() . '.' . $favicon->getClientOriginalExtension();
                    $favicon->move(public_path('img-web'), $faviconName);
                    $setting->favicon = $faviconName;
                }
                $setting->save();
            }
            DB::commit();
            return redirect()->route('setting.index')->with('success', 'Data has been saved');
        } catch (\Throwable $e) {
            DB::rollback();
            return redirect()->route('setting.index')->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
