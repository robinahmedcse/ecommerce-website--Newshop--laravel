<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\SubCategory;
 



class SubCategoryController extends Controller
{
    
    public function createCategory() {
        
      
        
        
        
        
        return view('admin.sub-category.createSubCategory');
    }
    
    
     public function saveCategory(Request $request) {
        
         
             $this->validate($request, [
            'sub_category_name' => 'required',
            'sub_category_description' => 'required',
             'publicationStatus'=> 'required'
        ]);
          
         
      //  return $request->all();
             
      $category= new SubCategory();
             $category-> sub_category_name = $request->sub_category_name;
               $category-> sub_category_description = $request->sub_category_description;
                 $category-> publicationStatus = $request->publicationStatus;
                   $category->save();
     return redirect('admin/manage-sub-category')->with('message','Sub Category info Save Successfully ');  
    }
    
    
      public function manageCategory() {
           $categories= SubCategory::All();
           
//           print_r($categories);
//           exit();
         return view('admin.sub-category.manageSubCategory',['categories'=>$categories]);      
    }
    
        public function editCategory($id) {

             $sub_categories= SubCategory::where('sub_category_id',$id)->first();
//           print_r($sub_categories);
//           exit();
         return view('admin.sub-category.editSubCategory',['sub_categories'=>$sub_categories]);
          
    }
    
    
    
       public function updateCategory(Request $request) {
        
     //    return $request->all(); 
           
        $category = SubCategory::find($request->sub_category_id);
        $category->sub_category_name = $request->sub_category_name;
        $category->sub_category_description = $request->sub_category_description;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();


        return redirect('admin/manage-sub-category')->with('message','Sub Category info Update Successfully'); 
           
           
           
           
    }
    
        public function deleteCategory($id) {
        
          //return $request->all(); 
           
        $category = SubCategory::find($id);
         $category ->delete();
          return redirect('admin/manage-sub-category')->with('message','Sub Category info delete successfully');  
           
           
           
           
    }
    
    
    
    
    
}//end class
