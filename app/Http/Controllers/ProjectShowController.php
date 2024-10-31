<?php

namespace App\Http\Controllers;

use App\Models\Thesis;
use App\Models\WebSite;
use Illuminate\Http\Request;
use App\Models\Android;
class ProjectShowController extends Controller
{
    //__add android method__//
    public function addAndroid()
    {
        return view('admin.addAndroid');
    }

    //__add web method__//
    public function addWeb()
    {
        return view('admin.add_web');
    }


    //__add thesis method__//
    public function addThesis()
    {
        return view('admin.add_thesis');
    }

    //__upload Web method__//
    public function upload_website(Request $request)
    {
        $website = new WebSite;
        $image = $request->file;

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('websiteImage', $imageName);
        $website->image = $imageName;

        $website->name = $request->name;
        $website->description = $request->description;

        $website->save();

        return redirect()->back()->with('message', 'Website project added successfully');

    }


    //__upload Thesis method__//
    public function upload_thesis(Request $request)
    {
        $thesis = new Thesis;
        $image = $request->file;

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('thesisImage', $imageName);
        $thesis->image = $imageName;

        $thesis->name = $request->name;
        $thesis->description = $request->description;

        $thesis->save();

        return redirect()->back()->with('message', 'Thesis project added successfully');

    }


    public function upload_android(Request $request)
    {
        $android = new Android;
        $image = $request->file;

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('androidImage', $imageName);
        $android->image = $imageName;

        $android->name = $request->name;
        $android->description = $request->description;

        $android->save();

        return redirect()->back()->with('message', 'Android project added successfully');

    }

}
