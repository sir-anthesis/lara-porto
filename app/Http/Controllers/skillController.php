<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;

class skillController extends Controller
{
    public function index()
    {
        $skills_url = public_path('dashboardTemp/devicon.json');
        $skills_datas = file_get_contents($skills_url);
        $skills_datas = json_decode($skills_datas, true);
        $skills = array_column($skills_datas, 'name');
        $skills = "'" . implode("','", $skills) . "'";

        return view('dashboard.skill.index')->with('skills', $skills);
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
