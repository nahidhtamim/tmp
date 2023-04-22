<?php

namespace App\Http\Controllers;

use App\Models\partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllPartners(){
        $partners = partner::all();
        return view('admin.partner.view-partners', compact('partners'));
    }

    public function addPartner(Request $request)
    {
        $this->validate($request, array(
            'image' => 'required',
        ));
        
        $partner = new partner();
        $partner->name = $request->input('name');
        $partner->link = $request->input('link');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/partner/', $fileName);
            $partner->image = $fileName; 
        }
        $partner->status = $request->input('status')==true ? '1':'0';
        $partner->save();
        return redirect()->back()->with('status', 'Your Partner has been saved');
    }

    public function editPartner($id){
        $partner = partner::Find($id);
        return view('admin.partner.edit-partner', compact('partner'));
    }

    public function updatePartner(Request $request, $id)
    {
        $partner = partner::Find($id);
        $partner->name = $request->input('name');
        $partner->link = $request->input('link');
        if($request->hasfile('image'))
        {
            $destination = 'upload/partner/'.$partner->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/partner/', $fileName);
            $partner->image = $fileName; 
        }
        $partner->update();
        return redirect('/view-partners')->with('status', 'Your Partner item has been updated');
    }

    public function deletePartner($id){
        $partner = partner::Find($id);
        $partner->delete();
        return redirect('/view-partners')->with('status', 'Your Partner item has been deleted');
    }

    public function activePartner($id)
    {
        $partner = partner::find($id);
        $partner->status = '1';
        $partner->update();
        return redirect()->back()->with('status', 'Partner Item Activated');
    }

    public function deactivePartner($id)
    {
        $partner = partner::find($id);
        $partner->status = '0';
        $partner->update();
        return redirect()->back()->with('warning', 'Partner Item De-activated');
    }
}
