<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use function Symfony\Component\Console\Helper\resetIOCodepage;

class AdminController extends Controller
{
    //
    public function addview()
    {
        return view('admin.add_teacher');
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

    public function show_appointment()
    {
        $data = appointment::all();
        return view('admin.show_appointment', compact('data'));
    }

    public function approved($id)
    {
        $data = Appointment::find($id);
        $data->status ='approved';
        $data->save();
        return redirect()->back();
    }

    public function cancel($id)
    {
        $data = Appointment::find($id);
        $data->status = 'canceled';
        $data->save();
        return redirect()->back();
    }

    public function show_teacher()
    {
        $data = Teacher::all();
        return view('admin.show_teacher', compact('data'));
    }

    public function delete_teacher($id)
    {
        $data = Teacher::find($id);
        $data->delete();
        return redirect()->back();
    }


        public function delete_student($id)
        {
            $data = Student::find($id);
            $data->delete();
            return redirect()->back();
        }




    public function edit_teacher(Request $request, $id){
        $teacher = Teacher::find($id);

        $teacher->name = $request->name;
        $teacher->phone = $request->phone;
        $teacher->speciality = $request->speciality;
        $teacher->room = $request->room;

        $image = $request->file;
        if($image)
        {
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('doctorImage', $imageName);
            $teacher->image = $imageName;
        }


        $teacher->save();
        return redirect()->back()->with('message', 'Updated successfully');

    }

    public function addStudent()
    {
        return view('admin.add_student');
    }

    public function uploadStudent(Request $request)
    {
        $student = new Student;
        $image = $request->file;

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('studentImage', $imageName);
        $student->image = $imageName;

        $student->name = $request->name;
        $student->batch = $request->batch;
        $student->dept = $request->dept;
        $student->email = $request->email;
        $student->phone = $request->phone;

        $student->save();

        return redirect()->back()->with('message', 'Student added successfully');
    }

    public function ShowStudent()
    {
        $data = Student::all();
        return view('admin.allStudent', compact('data'));
    }

}
