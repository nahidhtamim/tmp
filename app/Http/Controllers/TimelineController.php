<?php

namespace App\Http\Controllers;

use App\Models\timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllTimelines(){
        $timelines = timeline::all();
        return view('admin.timeline.view-timelines', compact('timelines'));
    }

    public function addTimeline(Request $request)
    {
        $this->validate($request, array(
            'serial' => 'required',
            'title' => 'required',
            'description' => 'required',
        ));
        
        $timeline = new timeline();
        $timeline->serial = $request->input('serial');
        $timeline->title = $request->input('title');
        $timeline->description = $request->input('description');
        $timeline->status = $request->input('status')==true ? '1':'0';
        $timeline->save();
        return redirect()->back()->with('status', 'Your timeline has been saved');
    }

    public function editTimeline($id){
        $timeline = timeline::Find($id);
        return view('admin.timeline.edit-timeline', compact('timeline'));
    }

    public function updateTimeline(Request $request, $id)
    {
        $this->validate($request, array(
            'serial' => 'required',
            'title' => 'required',
            'description' => 'required',
        ));
        
        $timeline = timeline::Find($id);
        $timeline->serial = $request->input('serial');
        $timeline->title = $request->input('title');
        $timeline->description = $request->input('description');
        $timeline->update();
        return redirect('/view-timelines')->with('status', 'Your timeline item has been updated');
    }

    public function deleteTimeline($id){
        $timeline = timeline::Find($id);
        $timeline->delete();
        return redirect('/view-timelines')->with('status', 'Your timeline item has been deleted');
    }

    public function activeTimeline($id)
    {
        $timeline = timeline::find($id);
        $timeline->status = '1';
        $timeline->update();
        return redirect()->back()->with('status', 'Timeline Item Activated');
    }

    public function deactiveTimeline($id)
    {
        $timeline = timeline::find($id);
        $timeline->status = '0';
        $timeline->update();
        return redirect()->back()->with('warning', 'Timeline Item De-activated');
    }
}
