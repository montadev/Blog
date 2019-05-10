<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Http\Requests\Categoryreqyest;
use App\Http\Requests\categoryDestroyrequest;

Use Alert;
class CategoryController extends Controller
{


      protected $limit=5;

      public function __construct(){

        $this->middleware('auth');
        $this->middleware('check-categorie'); 
        $this->middleware('check-menbre');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories=Category::paginate($this->limit);
        $categorycount=count($categories);
        return view('backend.categories.index')->with('categories',$categories)
                                               ->with('categorycount',$categorycount);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        return view('backend.categories.create')->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Categoryreqyest $request)
    {
        
        $category=new Category();

        $category->title=$request->title;

         $category->save();

         Alert::success('Category ajouté avec succès', 'Category ajouté avec succès');
                  
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $category=Category::find($id);

        return view('backend.categories.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Categoryreqyest $request, $id)
    {
        
        $category=Category::find($id);
        $category->title=$request->title;

        $category->save();
        Alert::success('Category mis à jour avec succès', 'Category mis à jour avec succès');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoryDestroyrequest $request,$id)
    {

    $category=Category::find($id);



           $category->delete();
              Alert::success('votre Category has been deleted', 'votre Category has been deleted');

              return redirect()->back();
    }
}
