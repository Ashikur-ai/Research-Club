<?php

namespace App\Http\Controllers;

use App\Models\Android;
use App\Models\Feedback;
use App\Models\Teacher;
use App\Models\Thesis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;
use DB;
use App\Models\WebSite;

class NewRequirements extends Controller
{
    //
    public function uploadFiles()
    {
        $team = Team::all();
        return view('user.uploadFile', compact('team'));
    }

    public function showFeedback()
    {
        $feedback = Feedback::all();
//        return $feedback;
        return view('user.teacherFeedback', compact('feedback'));
    }
    public function teacherLogin()
    {
        return view('Faculty.login');
    }

    public function supervised()
    {
        return view('Faculty.Supervised_team');
    }

    public function followup()
    {
        $data = Team::all();
        return view('Faculty.follow', compact('data'));
    }

    public function feedback()
    {
        $data = Team::all();
        return view('Faculty.feedback', compact('data'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('Faculty.profile', compact('user'));

    }

    public function file()
    {
        return "1";

    }

    public function teacherDetails($id)
    {
        $user = Teacher::find($id);
        return view('user.teacherDetail', compact('user'));
    }

    public function WebsiteDetails($id)
    {
        $data = WebSite::find($id);
        return view('user.websiteDetail', compact('data'));
    }
    public function ThesisDetails($id)
    {
        $data = Thesis::find($id);
        return view('user.thesisDetail', compact('data'));
    }

    public function AndroidDetails($id)
    {
        $data = Android::find($id);
        return view('user.androidDetail', compact('data'));
    }
}
