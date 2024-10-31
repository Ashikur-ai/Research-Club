<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadFile;
use App\Models\Team;
use App\Models\TitleDefense;

class RequirementTwo extends Controller
{
    //
    public function fileUpload(Request $request)
    {
        $data = new UploadFile;
        $file = $request->file;

        $fileName = time().'.'.$file->getClientOriginalExtension();
        $request->file->move('upload_file', $fileName);
        $data->file = $fileName;

        $data->team_id = $request->team_id;
        $data->comment = $request->comment;
        $data->save();

        return redirect()->back()->with('message', 'Files uploaded successfully');

    }

    public function title_defense()
    {
        $data = Team::all();
        return view('user.title_defense', compact('data'));
    }

    public function titleRegister(Request $request)
    {
        $title = new TitleDefense;

        $title->team_id = $request->team_id;
        $title->title = $request->title;
        $title->project_description = $request->project_description;
        $title->objective = $request->objective;
        $title->motivation = $request->motivation;
        $title->save();

        return redirect()->back()->with('message', 'Registration completed successfully');
    }
}
