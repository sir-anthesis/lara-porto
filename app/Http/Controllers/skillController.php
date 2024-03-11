<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;

class skillController extends Controller
{
    public function index()
    {
        return view('dashboard.skill.index');
    }

    public function update(Request $request)
    {
        if ($request->method() == "POST") {
            $request->validate(
                [
                    'skills' => 'required',
                    'workflow' => 'required'
                ],
                [
                    'skills.required' => 'skills harus diisi',
                    'workflow.required' => 'workflow harus diisi'
                ]
            );

            metadata::updateOrCreate(['meta_key' => 'skills'], ['meta_value' => $request->skills]);
            metadata::updateOrCreate(['meta_key' => 'workflow'], ['meta_value' => $request->workflow]);

            return redirect()->route('skill.index')->with('success', 'Data skills berhasil diperbaharui');
        }
    }
}
