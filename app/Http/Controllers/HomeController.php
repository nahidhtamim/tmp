<?php

namespace App\Http\Controllers;

use App\Models\award_certificate;
use App\Models\blog;
use App\Models\equipment_card;
use App\Models\favorite_number;
use App\Models\gallery;
use App\Models\link;
use App\Models\page;
use App\Models\partner;
use App\Models\resource;
use App\Models\service;
use App\Models\social;
use App\Models\solution;
use App\Models\team;
use App\Models\testimonial;
use App\Models\timeline;
use App\Models\video;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $equipment_cards  = equipment_card::orderBy("serial")->where('status', 1)->get();
        $turn_Key_solutions = solution::all()->where('status', 1);
        $video = video::where('id', '1')->first();
        $partners = partner::all()->where('status', 1);
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $solutions = service::where('type_id', '2')->where('status', '1')->get();
        $sectors = service::where('type_id', '3')->where('status', '1')->get();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $featured = award_certificate::where('featured', '1')->where('status', '1')->get();
        return view('index', compact('equipment_cards', 'turn_Key_solutions', 'partners', 'services', 'solutions', 'sectors', 'pages', 'video', 'featured', 'featured_blogs'));
    }

    public function contact(){
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $solutions = service::where('type_id', '2')->where('status', '1')->get();
        $sectors = service::where('type_id', '3')->where('status', '1')->get();
        $partners = partner::all()->where('status', 1);
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $featured = award_certificate::where('featured', '1')->where('status', '1')->get();
        return view('contact', compact('partners', 'services', 'solutions', 'sectors', 'pages', 'featured', 'featured_blogs'));
    }

    public function service_details($slug){
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $solutions = service::where('type_id', '2')->where('status', '1')->get();
        $sectors = service::where('type_id', '3')->where('status', '1')->get();
        $service = service::where('slug', $slug)->where('type_id', '1')->first();
        $randoms = service::where('id', '!=', $service->id)->inRandomOrder()->where('type_id', '1')->limit(3)->get();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $featured = award_certificate::where('featured', '1')->where('status', '1')->get();
        $galleries = gallery::where('status', 1)->get();
        return view('service-details', compact('service', 'services', 'solutions', 'sectors', 'pages', 'featured', 'featured_blogs', 'randoms', 'galleries'));
    }
    
    public function solution_details($slug){
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $solutions = service::where('type_id', '2')->where('status', '1')->get();
        $sectors = service::where('type_id', '3')->where('status', '1')->get();
        $solution = service::where('slug', $slug)->where('type_id', '2')->first();
        $randoms = service::where('id', '!=', $solution->id)->inRandomOrder()->where('type_id', '2')->limit(3)->get();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->get();
        $featured = award_certificate::where('featured', '1')->where('status', '1')->get();
        $galleries = gallery::where('status', 1)->get();
        return view('solution-details', compact('solution', 'services', 'solutions', 'sectors', 'pages', 'featured', 'featured_blogs', 'randoms', 'galleries'));
    }

    public function sector_details($slug){
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $solutions = service::where('type_id', '2')->where('status', '1')->get();
        $sectors = service::where('type_id', '3')->where('status', '1')->get();
        $sector = service::where('slug', $slug)->where('type_id', '3')->first();
        $randoms = service::where('id', '!=', $sector->id)->inRandomOrder()->where('type_id', '3')->limit(3)->get();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $featured = award_certificate::where('featured', '1')->where('status', '1')->get();
        $galleries = gallery::where('status', 1)->get();
        return view('sector-details', compact('sector', 'services', 'solutions', 'sectors', 'pages', 'featured', 'featured_blogs', 'randoms', 'galleries'));
    }

    public function page_details($slug){
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $solutions = service::where('type_id', '2')->where('status', '1')->get();
        $sectors = service::where('type_id', '3')->where('status', '1')->get();
        $page = page::where('slug', $slug)->where('status', '1')->first();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $featured = award_certificate::where('featured', '1')->where('status', '1')->get();
        $galleries = gallery::where('status', 1)->get();
        return view('page', compact('page', 'pages', 'services', 'solutions', 'sectors', 'featured', 'featured_blogs', 'galleries'));
    }

    public function customers(){
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $solutions = service::where('type_id', '2')->where('status', '1')->get();
        $sectors = service::where('type_id', '3')->where('status', '1')->get();
        $partners = partner::where('status', '1')->get();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $featured = award_certificate::where('featured', '1')->where('status', '1')->get();
        return view('customers', compact('pages', 'services', 'solutions', 'sectors', 'partners', 'featured', 'featured_blogs'));
    }

    public function timeline(){
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $solutions = service::where('type_id', '2')->where('status', '1')->get();
        $sectors = service::where('type_id', '3')->where('status', '1')->get();
        $timelines = timeline::orderBy("serial")->where('status', 1)->get();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $featured = award_certificate::where('featured', '1')->where('status', '1')->get();
        return view('timeline', compact('pages', 'services', 'solutions', 'sectors', 'timelines', 'featured', 'featured_blogs'));
    }

    public function awards_certifications(){
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $solutions = service::where('type_id', '2')->where('status', '1')->get();
        $sectors = service::where('type_id', '3')->where('status', '1')->get();
        $partners = partner::where('status', '1')->get();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $certificates = award_certificate::where('type_id', '1')->where('status', '1')->get();
        $awards = award_certificate::where('type_id', '2')->where('status', '1')->get();
        $featured = award_certificate::where('featured', '1')->where('status', '1')->get();
        return view('awards-certificates', compact('pages', 'services', 'solutions', 'sectors', 'partners', 'featured', 'awards', 'certificates', 'featured_blogs'));
    }

    public function blogs(){
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $solutions = service::where('type_id', '2')->where('status', '1')->get();
        $sectors = service::where('type_id', '3')->where('status', '1')->get();
        $partners = partner::where('status', '1')->get();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $blogs = blog::where('status', '1')->orderBy('created_at', 'desc')->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $featured = award_certificate::where('featured', '1')->where('status', '1')->get();
        return view('blogs', compact('pages', 'services', 'solutions', 'sectors', 'partners', 'featured', 'blogs', 'featured_blogs'));
    }

    public function blog_details($slug){
        $services = service::where('type_id', '1')->where('status', '1')->get();
        $solutions = service::where('type_id', '2')->where('status', '1')->get();
        $sectors = service::where('type_id', '3')->where('status', '1')->get();
        $blog = blog::where('slug', $slug)->where('status', '1')->first();
        $pages = page::orderBy("serial")->where('status', 1)->get();
        $featured_blogs = blog::where('featured', '1')->where('status', '1')->orderBy('created_at', 'desc')->limit(6)->get();
        $featured = award_certificate::where('featured', '1')->where('status', '1')->get();
        $galleries = gallery::where('status', 1)->get();
        return view('blog-details', compact('blog', 'pages', 'services', 'solutions', 'sectors', 'featured', 'featured_blogs', 'galleries'));
    }

    public function license(){
        return view('license');
    }

}
