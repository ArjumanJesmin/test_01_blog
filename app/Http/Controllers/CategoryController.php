<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //   Option-1
    //  $data['categories'] = category::all();
    //  dd($data) ;
    // return view('backend.category.index',$data); 


                 //   Option-2
    //$categories = category::all(); 
   //return view('backend.category.index',['categories'=>$categories]); 


              //    Option-3
   $categories = category::all();
    return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('backend.category.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest $request)
    {

   //    $validatedData = $request->validate([
   //      
   //   ]);
    // dd($request->all());
      $request->validated();

     category::create([
        'name' =>$request->name,
         'description'=>$request->description,
      ]);
      // option -1
     // $request->session()->flash('success', 'Category created successful!');

      // option -02
     // session()->flash('success', 'Category created successful!');

       // option -03
      //  Session::flash('success', 'Category created successful!');
      //  return redirect()->route('categories.index');

        // option -04
       return redirect()->route('categories.index')->with('success', 'Category created successful!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        // Option-01
     //$data['category']= $category;
     // return view('backend.category.show',$data);

       // Option-02
      //  return view('backend.category.show',['category'=>$category]);

          // Option-03
          return view('backend.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
               // Option-01
          //  $data['category']= $category;
          //  return view('backend.category.edit',$data);

       // Option-02
         return view('backend.category.edit',['category'=>$category]);

          // Option-03
        //  return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryFormRequest $request, category $category)
    {
       // Option-01
        // $data['name'] = $request->name;
        // $data['description'] = $request->description;
        // $category->update($data);
        // return redirect()->route('categories.index');

       // Option-02
         // dd($request->all());
    //       category::where('id',$category->id)->update([
    //      'name' =>$request->name,
    //      'description'=>$request->description,
    //      ]);
    //    return redirect()->route('categories.index');
          $request->validated();
       // Option-03
         $category->update($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
       $category->delete();
       return redirect()->route('categories.index');
    }
}
