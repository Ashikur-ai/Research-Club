<?php

namespace App\Http\Controllers;

use App\Models\Android;
use App\Models\Feedback;
use App\Models\Notification;
use App\Models\Thesis;
use App\Models\WebSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\Teacher;
use App\Models\Team;

class HomeController extends Controller
{
    //
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {

                return view('user.LandingPage');
            }
            elseif(Auth::user()->usertype == '1') {
                return view('admin.home');
            }
            elseif(Auth::user()->usertype == '2') {
                $notification = Notification::all();
                $data = Team::all();
                $feedback = Feedback::all();
                return view('Faculty.home', compact('data', 'feedback', 'notification'));
            }
        } else {
            return $this->redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return $this->redirect('home');
        } else {
            return view('user.home');
        }

    }



    public function myAppointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function show_profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function create_project()
    {
        return view('user.create_project');
    }


    public function project_details()
    {
        $project = DB::table('projects')->get()->last();
        return view('user.project_detail', compact('project'));
    }

    public function web_projects()
    {
        $data = WebSite::all();
        return view('user.web_project', compact('data'));
    }


    public function thesis()
    {
        $data = Thesis::all();
        return view('user.thesis', compact('data'));
    }

    public function mobile_applications()
    {
        $data = Android::all();
        return view('user.mobile_application', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Project::find($id);



        $data->project_title = $request->project_title;
        $data->project_type = $request->project_type;
        $data->program = $request->program;
        $data->project_description = $request->project_description;
        $data->objective = $request->objective;
        $data->motivation = $request->motivation;
        $data->save();
        return redirect()->back();

    }


    //_edit profile method__//
    public function edit_profile($id)
    {
        $user = User::find($id);

        return view('user.edit_profile', compact('user'));
    }

    public function update_profile(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->to('profile')->with('message', 'updated successfully');
    }

    public function find_teacher()
    {
        $data = Teacher::all();
        return view('user.find_techer', compact('data'));
    }







}

