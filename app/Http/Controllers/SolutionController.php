<?php

namespace App\Http\Controllers;

use App\Models\solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SolutionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllSolutions(){
        $solutions = solution::all();
        return view('admin.solution.view-solutions', compact('solutions'));
    }

    public function addSolution(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required',
            'image' => 'required',
        ));
        
        $solution = new solution();
        $solution->title = $request->input('title');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/solution/', $fileName);
            $solution->image = $fileName; 
        }
        $solution->status = $request->input('status')==true ? '1':'0';
        $solution->save();
        return redirect()->back()->with('status', 'Your solution has been saved');
    }

    public function editSolution($id){
        $solution = solution::Find($id);
        return view('admin.solution.edit-solution', compact('solution'));
    }

    public function updateSolution(Request $request, $id)
    {
        $solution = solution::Find($id);
        $solution->title = $request->input('title');
        if($request->hasfile('image'))
        {
            $destination = 'upload/solution/'.$solution->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/solution/', $fileName);
            $solution->image = $fileName; 
        }
        $solution->update();
        return redirect('/view-solutions')->with('status', 'Your solution item has been updated');
    }

    public function activeSolution($id)
    {
        $solution = solution::find($id);
        $solution->status = '1';
        $solution->update();
        return redirect()->back()->with('status', 'Solution Item Activated');
    }

    public function deactiveSolution($id)
    {
        $solution = solution::find($id);
        $solution->status = '0';
        $solution->update();
        return redirect()->back()->with('warning', 'Solution Item De-activated');
    }
}
