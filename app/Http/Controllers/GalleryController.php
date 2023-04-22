<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\gallery;
use App\Models\image;
use App\Models\image_category;
use App\Models\page;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewServiceGallery($id){
        $gallery_images = gallery::where('service_id', $id)->get();
        $service = service::where('id', $id)->first();
        $categories = image_category::where('status', '1')->orderBy('serial')->get();
        $image_database = image::all();
        return view('admin.gallery.view-service-galleries', compact('gallery_images', 'image_database', 'service', 'categories'));
    }

    public function viewPageGallery($id){
        $gallery_images = gallery::where('page_id', $id)->get();
        $page = page::where('id', $id)->first();
        $categories = image_category::where('status', '1')->orderBy('serial')->get();
        $image_database = image::all();
        return view('admin.gallery.view-page-galleries', compact('gallery_images', 'image_database', 'page', 'categories'));
    }

    public function viewBlogGallery($id){
        $gallery_images = gallery::where('blog_id', $id)->get();
        $blog = blog::where('id', $id)->first();
        $categories = image_category::where('status', '1')->orderBy('serial')->get();
        $image_database = image::all();
        return view('admin.gallery.view-blog-galleries', compact('gallery_images', 'image_database', 'blog', 'categories'));
    }

    public function saveGallery(Request $request)
    {
        $page_id = $request->page_id;
        $blog_id = $request->blog_id;
        $service_id = $request->service_id;
        $image_id = $request->image_id;
        for($i = 0; $i < count($image_id); $i++){
            $datasave = [
                'page_id' => $page_id[$i],
                'blog_id' => $blog_id[$i],
                'service_id' => $service_id[$i],
                'image_id' => $image_id[$i],
            ];
            DB::table('galleries')->insert($datasave);
        }
        return redirect()->back()->with('status', 'Your gallery has been saved');
    }

    public function deleteGalleryImage($id){
        $gallery = gallery::Find($id);
        $gallery->delete();
        return redirect()->back()->with('status', 'Your gallery image item has been deleted');
    }

    public function activeGalleryImage($id)
    {
        $gallery = gallery::Find($id);
        $gallery->status = '1';
        $gallery->update();
        return redirect()->back()->with('status', 'Image Activated');
    }

    public function deactiveGalleryImage($id)
    {
        $gallery = gallery::Find($id);
        $gallery->status = '0';
        $gallery->update();
        return redirect()->back()->with('warning', 'Image Item De-activated');
    }

}
