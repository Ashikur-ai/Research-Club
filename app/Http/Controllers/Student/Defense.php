<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\FinalDefense;
use App\Models\finalDefense_feedback;
use App\Models\finalShedule;
use App\Models\PreDefense;
use App\Models\preDefense_feedback;
use App\Models\preShedule;
use App\Models\Team;
use App\Models\title_feedback;
use App\Models\titleDefenseDetail;
use App\Models\titleShedule;
use Illuminate\Http\Request;


class Defense extends Controller
{
    //

    function title(){
        $document = new titleDefenseDetail;
        $shedule = new titleShedule;
        $data = $document->all();
        $time = $shedule->latest()->first();

        $feedback = new title_feedback;
        $comment = $feedback->latest()->first();


        return view("user.NewRequirements.title", compact('data', 'time', 'comment'));
    }


    function pre(){
        $document = new PreDefense;
        $data = $document->all();
        $shedule = new preShedule;
        $time = $shedule->latest()->first();

        $feedback = new preDefense_feedback();
        $comment = $feedback->latest()->first();
        return view("user.NewRequirements.pre-defense", compact('data', 'time', 'comment'));
    }
    function final(){
        $document = new FinalDefense;
        $data = $document->all();
        $shedule = new finalShedule;
        $time = $shedule->latest()->first();
        $feedback = new finalDefense_feedback;
        $comment = $feedback->latest()->first();

        return view("user.NewRequirements.final-defense", compact('data', 'time', 'comment'));
    }

    function schedule(){
        $team = new Team;
        $data = $team->all();

        return view("Faculty.set_time", compact('data'));
    }

    function upload_title_document(Request $request)
    {
        $document = new titleDefenseDetail;
        $pdf = $request->file;

        $pdfName = time().'.'.$pdf->getClientOriginalExtension();
        $request->file->move('TitleDefenseFolder', $pdfName);

        $document->document = $pdfName;
        $document->team_id = $request->team_id;
        $document->save();

        return redirect()->back();

    }

    function upload_preDefense_document(Request $request)
    {
        $document = new PreDefense;
        $pdf = $request->file;

        $pdfName = time().'.'.$pdf->getClientOriginalExtension();
        $request->file->move('PreDefenseFolder', $pdfName);

        $document->document = $pdfName;
        $document->team_id = $request->team_id;
        $document->save();

        return redirect()->back();

    }
    function upload_finalDefense_document(Request $request)
    {
        $document = new FinalDefense;
        $pdf = $request->file;

        $pdfName = time().'.'.$pdf->getClientOriginalExtension();
        $request->file->move('FinalDefenseFolder', $pdfName);

        $document->document = $pdfName;
        $document->team_id = $request->team_id;
        $document->save();

        return redirect()->back();

    }

    public function upload(Request $request)
    {
        $teacher = new Teacher;
        $image = $request->file;

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('teacherImage', $imageName);
        $teacher->image = $imageName;

        $teacher->name = $request->name;
        $teacher->phone = $request->number;
        $teacher->room = $request->room;
        $teacher->speciality = $request->speciality;

        $teacher->save();

        return redirect()->back()->with('message', 'Teacher added successfully');

    }
}
