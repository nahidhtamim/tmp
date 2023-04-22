<?php

namespace App\Http\Controllers;

use App\Models\award_certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AwardCertifiateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAwardCertificates(){
        $awards_certificates = award_certificate::all();
        return view('admin.award-certificate.view-awards-certificates', compact('awards_certificates'));
    }

    public function addAwardCertificate(Request $request)
    {
        $this->validate($request, array(
            'type_id' => 'required',
            'title' => 'required',
            'image' => 'required',
        ));
        
        $award_certificate = new award_certificate();
        $award_certificate->type_id = $request->input('type_id');
        $award_certificate->title = $request->input('title');
        $award_certificate->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/award_certificate/', $fileName);
            $award_certificate->image = $fileName; 
        }
        $award_certificate->featured = $request->input('featured')==true ? '1':'0';
        $award_certificate->status = $request->input('status')==true ? '1':'0';
        $award_certificate->save();
        return redirect()->back()->with('status', 'Your award/certificate has been saved');
    }

    public function editAwardCertificate($id){
        $award_certificate = award_certificate::Find($id);
        return view('admin.award-certificate.edit-award-certificate', compact('award_certificate'));
    }

    public function updateAwardCertificate(Request $request, $id)
    {
        $this->validate($request, array(
            'type_id' => 'required',
            'title' => 'required',
        ));
        $award_certificate = award_certificate::Find($id);
        $award_certificate->type_id = $request->input('type_id');
        $award_certificate->title = $request->input('title');
        $award_certificate->description = $request->input('description');
        if($request->hasfile('image'))
        {
            $destination = 'upload/award_certificate/'.$award_certificate->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/award_certificate/', $fileName);
            $award_certificate->image = $fileName; 
        }
        $award_certificate->update();
        return redirect('/view-awards-certificates')->with('status', 'Your award / certificate item has been updated');
    }

    public function deleteAwardCertificate($id){
        $award_certificate = award_certificate::Find($id);
        $award_certificate->delete();
        return redirect('/view-awards-certificates')->with('status', 'Your Award / Certificate item has been deleted');
    }

    public function activeAwardCertificate($id)
    {
        $award_certificate = award_certificate::find($id);
        $award_certificate->status = '1';
        $award_certificate->update();
        return redirect()->back()->with('status', 'Award / Certificate Item Activated');
    }

    public function deactiveAwardCertificate($id)
    {
        $award_certificate = award_certificate::find($id);
        $award_certificate->status = '0';
        $award_certificate->update();
        return redirect()->back()->with('warning', 'Award / Certificate Item De-activated');
    }

    public function makeAwardCertificateFeatured($id)
    {
        $award_certificate = award_certificate::find($id);
        $award_certificate->featured = '1';
        $award_certificate->update();
        return redirect()->back()->with('status', 'Award / Certificate Item Featured');
    }

    public function makeAwardCertificateNotFeatured($id)
    {
        $award_certificate = award_certificate::find($id);
        $award_certificate->featured = '0';
        $award_certificate->update();
        return redirect()->back()->with('warning', 'Award / Certificate Item Not Featured');
    }
}
