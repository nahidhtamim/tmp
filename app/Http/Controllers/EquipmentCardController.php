<?php

namespace App\Http\Controllers;

use App\Models\equipment_card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EquipmentCardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllEquipmentCards(){
        $equipment_cards = equipment_card::all();
        return view('admin.equipment.view-equipment-cards', compact('equipment_cards'));
    }

    public function addEquipmentCard(Request $request)
    {
        $this->validate($request, array(
            'serial' => 'required',
            'title' => 'required',
            'image' => 'required',
        ));
        
        $equipment = new equipment_card();
        $equipment->serial = $request->input('serial');
        $equipment->title = $request->input('title');
        $equipment->link = $request->input('link');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/equipment/', $fileName);
            $equipment->image = $fileName; 
        }
        $equipment->status = $request->input('status')==true ? '1':'0';
        $equipment->save();
        return redirect()->back()->with('status', 'Your equipment card has been saved');
    }

    public function editEquipmentCard($id){
        $equipment_card = equipment_card::Find($id);
        return view('admin.equipment.edit-equipment-card', compact('equipment_card'));
    }

    public function updateEquipmentCard(Request $request, $id)
    {
        $this->validate($request, array(
            'serial' => 'required',
            'title' => 'required',
        ));
        $equipment_card = equipment_card::Find($id);
        $equipment_card->serial = $request->input('serial');
        $equipment_card->title = $request->input('title');
        $equipment_card->link = $request->input('link');
        if($request->hasfile('image'))
        {
            $destination = 'upload/equipment/'.$equipment_card->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('upload/equipment/', $fileName);
            $equipment_card->image = $fileName; 
        }
        $equipment_card->update();
        return redirect('/view-equipment-cards')->with('status', 'Your equipment card item has been updated');
    }

    public function deleteEquipmentCard($id){
        $equipment_card = equipment_card::Find($id);
        $equipment_card->delete();
        return redirect('/view-equipment-cards')->with('status', 'Your equipment card item has been deleted');
    }

    public function activeEquipmentCard($id)
    {
        $equipment_card = equipment_card::find($id);
        $equipment_card->status = '1';
        $equipment_card->update();
        return redirect()->back()->with('status', 'Equipment Card Item Activated');
    }

    public function deactiveEquipmentCard($id)
    {
        $equipment_card = equipment_card::find($id);
        $equipment_card->status = '0';
        $equipment_card->update();
        return redirect()->back()->with('warning', 'Equipment Card Item De-activated');
    }

}
