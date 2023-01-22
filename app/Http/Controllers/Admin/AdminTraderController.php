<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Trade;
use App\Traders;
use Illuminate\Http\Request;

class AdminTraderController extends Controller
{
    public function create()
    {
        $traders = Traders::all();
        return view('admin.traders', compact('traders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'position' => 'nullable',
            'win_rate' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $trader = new Traders();
            $trader->name = $request->name;
            $trader->username = $request->username;
            $trader->win_rate = $request->win_rate;
            $trader->position = $request->position;
            $trader->image = $input['imagename'];
            $trader->save();
            return redirect()->back();
        }
        $trader = new Traders();
        $trader->name = $request->name;
        $trader->username = $request->username;
        $trader->win_rate = $request->win_rate;
        $trader->position = $request->position;
        $trader->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $trader = Traders::findOrFail($id);
        return view('admin.edit-trader', compact('trader'));
    }

    public function destroy($id)
    {
        $trader = Traders::findOrFail($id);
        $trader->delete();
        return redirect()->back();
    }
}
