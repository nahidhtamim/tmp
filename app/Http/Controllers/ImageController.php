<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Models\image;
use App\Models\image_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllImages(Request $request)
    {
        $images = image::all();
        $image_categories = image_category::orderBy('serial')->get();
        $categories = image_category::where('status', '1')->orderBy('serial')->get();
        return view('admin.image.view-images', compact('images', 'categories', 'image_categories'));
    }

    public function getCategoryImage($cat_id)
    {
        $images=image::where('cat_id', $cat_id)->orderBy('id')->get();
        return $images;
    }


    public function addImageCategory(Request $request)
    {
        $this->validate($request, array(
            'serial' => 'required',
            'name' => 'required'
        ));
        
        $category = new image_category();
        $category->serial = $request->input('serial');
        $category->name = $request->input('name');
        $category->status = $request->input('status')==true ? '1':'0';
        $category->save();
        return redirect()->back()->with('status', 'Your image category has been saved');
    }

    public function editImageCategory($id){
        $category = image_category::Find($id);
        return view('admin.image.edit-image-category', compact('category'));
    }

    public function updateImageCategory(Request $request, $id)
    {
        $this->validate($request, array(
            'serial' => 'required',
            'name' => 'required',
        ));
        $category = image_category::Find($id);
        $category->serial = $request->input('serial');
        $category->name = $request->input('name');
        $category->update();
        return redirect('/view-images')->with('status', 'Your image category has been updated');
    }

    public function deleteImageCategory($id){
        $category = image_category::find($id);
        $category->delete();
        return redirect()->back()->with('status', 'Your image category has been deleted');
    }

    public function activeImageCategory($id)
    {
        $category = image_category::find($id);
        $category->status = '1';
        $category->update();
        return redirect()->back()->with('status', 'Image category Activated');
    }

    public function deactiveImageCategory($id)
    {
        $category = image_category::find($id);
        $category->status = '0';
        $category->update();
        return redirect()->back()->with('warning', 'Image category De-activated');
    }

// ======================== Image Functions ====================================== //
    public function addImage(Request $request)
    {
        $data = $request->validate([
            'cat_id' => 'required',
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->images){
            foreach($request->images as $image) {
 
                $imageName = time().rand(1,99).'.'.$image->extension();  
                $image = $image->move(public_path('upload/images'), $imageName);
 
                // // Create files
                image::create([
                    'cat_id' => $request->cat_id,
                    'image' => $imageName
                ]);
            }
        }

        return redirect()->back()->with('status', 'Your images has been saved');
    }

    public function editImage($id){
        $image = image::Find($id);
        $categories = image_category::where('status', '1')->orderBy('serial')->get();
        return view('admin.image.edit-image', compact('image', 'categories'));
    }

    public function updateImage(Request $request, $id)
    {
        $image = image::Find($id);
        $image->cat_id = $request->input('cat_id');
        if($request->hasfile('image'))
        {
            $destination = 'upload/images/'.$image->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/images/', $fileName);
            $image->image = $fileName; 
        }
        $image->update();
        return redirect('/view-images')->with('status', 'Your image item has been updated');
    }

    public function deleteImage($id){
        $image = image::Find($id);
        $image->delete();

        gallery::where('image_id', $id)->delete();
        return redirect('/view-images')->with('status', 'Your image item has been deleted');
    }

    public function activeImage($id)
    {
        $image = image::Find($id);
        $image->status = '1';
        $image->update();
        return redirect()->back()->with('status', 'Image Activated');
    }

    public function deactiveImage($id)
    {
        $image = image::Find($id);
        $image->status = '0';
        $image->update();
        return redirect()->back()->with('warning', 'Image Item De-activated');
    }

}
