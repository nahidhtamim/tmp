<?php

namespace App\Http\Controllers;

use App\Models\page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllPages(){
        $pages = page::all();
        return view('admin.page.view-pages', compact('pages'));
    }

    public function addPage(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|unique:pages',
            'description_one' => 'required',
            'image' => 'required',
            'serial' => 'required',
        ));
        
        $page = new page();
        $page->serial = $request->input('serial');
        $page->name = $request->input('name');
        $page->description_one = $request->input('description_one');
        $page->description_two = $request->input('description_two');
        $page->slug = Str::slug($request->input('name'));
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/page/', $fileName);
            $page->image = $fileName; 
        }
        $page->status = $request->input('status')==true ? '1':'0';
        $page->save();
        return redirect()->back()->with('status', 'Your page has been saved');
    }

    public function editPage($id){
        $page = page::Find($id);
        return view('admin.page.edit-page', compact('page'));
    }

    public function updatePage(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'description_one' => 'required',
            'serial' => 'required',
        ));
        $page = page::Find($id);
        $page->serial = $request->input('serial');
        $page->name = $request->input('name');
        $page->description_one = $request->input('description_one');
        $page->description_two = $request->input('description_two');
        $page->slug = Str::slug($request->input('name'));
        if($request->hasfile('image'))
        {
            $destination = 'upload/page/'.$page->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/page/', $fileName);
            $page->image = $fileName; 
        }
        $page->update();
        return redirect('/view-pages')->with('status', 'Your page item has been updated');
    }

    public function deletePage($id){
        $page = page::Find($id);
        $page->delete();
        return redirect('/view-pages')->with('status', 'Your page item has been deleted');
    }

    public function activePage($id)
    {
        $page = page::find($id);
        $page->status = '1';
        $page->update();
        return redirect()->back()->with('status', 'page Item Activated');
    }

    public function deactivePage($id)
    {
        $page = page::find($id);
        $page->status = '0';
        $page->update();
        return redirect()->back()->with('warning', 'page Item De-activated');
    }
}
