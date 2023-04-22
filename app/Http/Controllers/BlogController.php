<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllBlogs(){
        $blogs = blog::all();
        return view('admin.blog.view-blogs', compact('blogs'));
    }

    public function addBlog(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|unique:blogs',
            'description_one' => 'required',
            'image' => 'required',
        ));
        
        $blog = new blog();
        $blog->name = $request->input('name');
        $blog->description_one = $request->input('description_one');
        $blog->description_two = $request->input('description_two');
        $blog->slug = Str::slug($request->input('name'));
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/blog/', $fileName);
            $blog->image = $fileName; 
        }
        $blog->featured = $request->input('featured')==true ? '1':'0';
        $blog->status = $request->input('status')==true ? '1':'0';
        $blog->save();
        return redirect()->back()->with('status', 'Your blog has been saved');
    }

    public function editBlog($id){
        $blog = blog::Find($id);
        return view('admin.blog.edit-blog', compact('blog'));
    }

    public function updateBlog(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required',
            'description_one' => 'required',
        ));
        $blog = blog::Find($id);
        $blog->name = $request->input('name');
        $blog->description_one = $request->input('description_one');
        $blog->description_two = $request->input('description_two');
        $blog->slug = Str::slug($request->input('name'));
        if($request->hasfile('image'))
        {
            $destination = 'upload/blog/'.$blog->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/blog/', $fileName);
            $blog->image = $fileName; 
        }
        $blog->update();
        return redirect('/view-blogs')->with('status', 'Your blog item has been updated');
    }

    public function deleteBlog($id){
        $blog = blog::Find($id);
        $blog->delete();
        return redirect('/view-blogs')->with('status', 'Your blog item has been deleted');
    }

    public function activeBlog($id)
    {
        $blog = blog::find($id);
        $blog->status = '1';
        $blog->update();
        return redirect()->back()->with('status', 'Blog Item Activated');
    }

    public function deactiveBlog($id)
    {
        $blog = blog::find($id);
        $blog->status = '0';
        $blog->update();
        return redirect()->back()->with('warning', 'Blog Item De-activated');
    }

    public function makeBlogFeatured($id)
    {
        $blog = blog::find($id);
        $blog->featured = '1';
        $blog->update();
        return redirect()->back()->with('status', 'Blog Item Featured');
    }

    public function makeBlogNotFeatured($id)
    {
        $blog = blog::find($id);
        $blog->featured = '0';
        $blog->update();
        return redirect()->back()->with('warning', 'Blog Item Note Featured');
    }
}
