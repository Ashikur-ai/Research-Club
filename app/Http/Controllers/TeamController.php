<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;
use App\Models\Teacher;

class TeamController extends Controller
{
    //
    public function Show()
    {
        $data = Student::all();
        $user = Auth::user();
        $teacher = Teacher::all();
        return view('user.create_team', compact('data', 'user', 'teacher'));
    }

    public function showTeam()
    {
        $team = Team::all();
        return view('user.myteam', compact('team'));
    }

    public function addToTeam(Request $request)
    {
        $team = new Team;
        $team->teamName = $request->teamName;
        $team->firstMember = $request->firstMember;
        $team->secondMember = $request->secondMember;
        $team->teacher = $request->teacher;
        $team->save();
        return redirect()->back()->with('message', 'Team created successfully');

    }
}
