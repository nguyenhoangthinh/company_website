<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $rules=[
            'title'=> ['required','min:4'],
            'description'=>['required'],
            'content'=>['required'],
            'image'=>['mimes:png,jpg,gif,bmp,jpeg']
        ];
    public function index(Request $request)
    {
        $articles=Article::where(function($query) use ($request){
            //fillter by keyword entered
            if(($term = $request->get('term'))) {
                $query->orwhere('title','like','%'.$term.'%');
            }
                })
            ->latest()
            ->paginate(6);
        return view('admin.article.index',compact('articles'));
    }
    public function autocomplete(Request $request){
        if($request->ajax())
        {
        $articles= Article::where(function($query) use ($request){
        //fillter by keyword entered
            if(($term = $request->get('term'))) {
                $query->orwhere('title','like','%'.$term.'%');
            }
        })
        ->latest() 
        ->take(6)
        ->get();
        //convert to json
        $results=[];
        foreach ($articles as $article) {
            $results[]=['id'=>$article->id, 'value'=>$article->title];
        }
        return response()->json($results);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::pluck('name','id');
        return view('admin.article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('image');

      $this->validate($request,$this->rules);
//        image upload
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('uploads',$imageName);
            $formInput['image']=$imageName;
        }

        Article::create($formInput);
        return redirect()->route('article.index');
    }
    private function getCates()
    {
        $categories = [];
      foreach(Category::all() as $cate) {
        $categories[$cate->id] = $cate->name;
      }
      return $categories;
    }
    public function edit ($id)
    {
        $categories=$this->getCates();
        $article= Article::find($id);
        return view("admin.article.edit",compact('categories','article'));
    }
    private function get_request(Request $request)
    {
        $data=$request->all();
        if($request->hasFile('image'))
        {
            $photo=$request->file('image')->getClientOriginalName();
        $destination=$this->upload_dir;
        $request->file('image')->move($destination, $photo);
        $data['image']= $photo;
        }
         return $data;
        
    }
    public function update($id,Request $request)
    {
        $this->validate($request,$this->rules);
        $article = Article::find($id);
        $data=$this->get_request($request);
        $article->update($data);
        return redirect()->route('article.index')->with("message","Article Updated !");
    }

    private $upload_dir;
    public function __construct()
    {
        $this->upload_dir= base_path(). '/public/uploads';
    }
    public function destroy($id)
    {
         $article=Article::find($id);
        if(!is_null($article->image))
       {
        $file_path=$this->upload_dir. '/'.$article->image;
        if(file_exists($file_path)) unlink($file_path);
       }
        $article->delete();
        return redirect()->route('article.index')->with("message","Article Deleted !"); 
    }
}
