<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\finalDefense_feedback;
use App\Models\finalShedule;
use App\Models\Notification;
use App\Models\preDefense_feedback;
use App\Models\preShedule;
use App\Models\title_feedback;
use App\Models\titleShedule;
use Illuminate\Http\Request;
use App\Models\Followup;
use Mockery\Matcher\Not;
use function PHPUnit\Framework\returnArgument;

class Faculty extends Controller
{
    //
    public function followup(Request $request)
    {
        $data = new Followup;
        $data->team_id = $request->team_id;
        $data->team_name = $request->team_name;
        $data->stage = $request->stage;
        $data->mark = $request->mark;
        $data->save();
        return redirect()->back()->with('message', 'Followup updated successfully');

    }

    public function feedback(Request $request)
    {
        if($request->phase == 1)
        {
            $title = new title_feedback;

            $title->team_id = $request->team_id;
            $title->comment = $request->comment;
            $title->save();

        }
        elseif ($request->phase == 2)
        {
            $pre = new preDefense_feedback;

            $pre->team_id = $request->team_id;
            $pre->comment = $request->comment;
            $pre->save();
        }
        elseif ($request->phase == 3)
        {
            $final = new finalDefense_feedback;

            $final->team_id = $request->team_id;
            $final->comment = $request->comment;
            $final->save();
        }
        $data = new Feedback;
        $data->team_id = $request->team_id;
        $data->comment = $request->comment;
        $data->save();
        return redirect()->back()->with('message', 'Feedback updated successfully');

    }

    public function registerFaculty()
    {
        return view('Faculty.register');
    }

    public function Send_Notification()
    {
        return view('admin.Send_notification');
    }

    public function upload_Notification(Request $request)
    {
        $data = new Notification;

        $data->name = $request->name;
        $data->description = $request->description;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;

        $data->save();

        return redirect()->back()->with('message', 'Notification sends successfully');
    }

    public function ShowMark()
    {
        $data = Followup::all();
        return view('Faculty.marks', compact('data'));
    }

    public function shedule(Request $request)
    {
        $title = new titleShedule;
        $preDefense = new preShedule;
        $finalDefense = new finalShedule;

        if($request->phase == 1)
        {
            $title->team = $request->team;
            $title->phase = $request->phase;
            $title->date = $request->date;
            $title->time = $request->time;
            $title->room = $request->room;
            $title->save();
            return redirect()->back()->with('message','Shedule set successfully');
        }
        elseif ($request->phase == 2)
        {
            $preDefense->team = $request->team;
            $preDefense->phase = $request->phase;
            $preDefense->date = $request->date;
            $preDefense->time = $request->time;
            $preDefense->room = $request->room;
            $preDefense->save();
            return redirect()->back()->with('message','Shedule set successfully');
        }
        elseif ($request->phase == 3)
        {
            $finalDefense->team = $request->team;
            $finalDefense->phase = $request->phase;
            $finalDefense->date = $request->date;
            $finalDefense->time = $request->time;
            $finalDefense->room = $request->room;
            $finalDefense->save();
            return redirect()->back()->with('message','Shedule set successfully');
        }
    }
}
