<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Category;



class CategoryController extends Controller
{
    
    public function createCategory() {
        
        return view('admin.category.createCategory');
    }
    
    
     public function saveCategory(Request $request) {
        
         
             $this->validate($request, [
            'category_name' => 'required',
            'category_description' => 'required',
             'publicationStatus'=> 'required'
        ]);
          
         
      //  return $request->all();
             
      $category= new Category();
             $category-> category_name = $request->category_name;
               $category-> category_description = $request->category_name;
                      $category-> publicationStatus = $request->publicationStatus;
                 $category->save();
             
             
     return redirect('admin/manage-category')->with('message','Category info Save Successfully');  
    }
    
    
      public function manageCategory() {
           $categories= Category::All();
         return view('admin.category.manageCategory',['categories'=>$categories]);      
    }
    
        public function editCategory($id) {
//           return $id;
            
             $category_by_id= Category::where('category_id', $id)->first();
         return view('admin.category.editCategory',['category_by_id'=>$category_by_id]);
          
    }
    
    
    
       public function updateCategory(Request $request) {
        
          //return $request->all(); 
           
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();


        return redirect('admin/manage-category')->with('message','Category info Update Successfully'); 
           
           
           
           
    }
    
        public function deleteCategory($id) {
        
          //return $request->all(); 
           
        $category = Category::find($id);
         $category ->delete();
          return redirect('admin/manage-category')->with('message','Category info delete successfully');  
           
           
           
           
    }
    
    
    
    
    
}//end class
