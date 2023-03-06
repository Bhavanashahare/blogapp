<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Make;


class BlogController extends Controller
{
    public function create()
    {
        $categories= Make::all();
        return view('blog.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',

            'image'=>'required',
        ]);
        $data = new Blog();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $data->image = $filename;

        }

        $data->save();
        return redirect()->route('blog.table')->with('message',"data add successfully");

    }
    public function table(){
        $data=Blog::with('category')->paginate(5);
        // dd($data);
        return view('blog.table',compact('data'));
    }
    public function edit($id){

        $category=Make::all();
        $data=Blog::find($id);
        return view('blog.edit',compact('data','category'));
    }
    public function update(Request $request ,$id ){


        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
        ]);
        $data=Blog::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->category_id = $request->category_id;


        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect()->route('blog.table')->with('message','data update successfully');
    }

    public function delete($id){
        $blog=Blog::find($id);
        $blog->delete();
         return redirect()->route('blog.table')->with('message','data delete successfully');
    }


}
//(immp note.delete data from database(xannp) first delete then you got a result if you not delete the data you willnever get answer you get error)  )

