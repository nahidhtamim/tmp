<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addVideo(Request $request)
    {
        $this->validate($request, array(
            'video'=>'required',
        ));
        $video = new video();
        if($request->hasfile('video'))
        {
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/video/', $fileName);
            $video->video = $fileName; 
        }
        $video->save();
        return redirect()->back()->with('status', 'Your video has been saved');
    }

    public function editVideo($id){
        $video = video::Find($id);
        return view('admin.video.edit-video', compact('video'));
    }

    public function updateVideo(Request $request, $id)
    {
        $video = video::Find($id);
        if($request->hasfile('video'))
        {
            $destination = 'upload/video/'.$video->video;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/video/', $fileName);
            $video->video = $fileName; 
        }
        $video->update();
        return redirect('/dashboard')->with('status', 'Your video has been updated');
    }
}
