<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacture;

class ManufactureController extends Controller
{
   
    
    public function createManufacture() {
        
        
        return view('admin.manufacture.createManufacture');
    }
    
     
    public function saveManufacture(Request $request) {
      //  return  $request->all();
      
        
            $this->validate($request, [
            'manufacture_name' => 'required',
            'manufacture_description' => 'required',
             'publicationStatus'=> 'required'
        ]);
        
        
        $manufacture= new Manufacture();
        $manufacture->manufacture_name=$request->manufacture_name;
        $manufacture->manufacture_description=$request->manufacture_description;
        $manufacture->publicationStatus=$request->publicationStatus;
        $manufacture->save();
        
         return redirect('admin/manage-manufacture')->with('message','manufacture info Save Successfully'); 
        
    }
    
     
    public function manageManufacture() {
        $manufactures=manufacture::all();
        return view('admin.manufacture.manageManufacture',['manufactures'=>$manufactures]);
    }
    
     
    public function editManufacture($id) {
        //return $id;
        $manufactureById=manufacture::where('manufacture_id',$id)->first();
//        echo '<pre>';
//        print_r($manufactureById);
//        exit();
        return view('admin.manufacture.editManufacture',['manufactureById'=>$manufactureById]);
    }
    
     
    public function updateManufacture(Request $request) {
  
        
        $manufacture= Manufacture::find($request->manufacture_id);
        
        $manufacture->manufacture_name=$request->manufacture_name;
        $manufacture->manufacture_description=$request->manufacture_description;
        $manufacture->publicationStatus=$request->publicationStatus;
        $manufacture->save();
        
          return redirect('admin/manage-manufacture')->with('message','Manufacture info Update Successfully'); 
           
           
        
    }
    
     public function deleteManufacture($id) {
              
        $manufacture = Manufacture::find($id);
         $manufacture ->delete();
              return redirect('admin/manage-manufacture')->with('message','Manufacture info Update Successfully');   
           
    }
    
    
    
}//end ofclass
