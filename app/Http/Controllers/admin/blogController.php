<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\admin\blogsRequests;

use Illuminate\Support\Str;
use Exception;

use App\Models\blog;

class blogController extends Controller
{

// =================    ======================================
public function index()
    {
         $datas=  blog::all();

        return view('admin.blogs.index',compact('datas'));
    }
// =================    ======================================
public function cearte()
    {

        return view('admin.blogs.create');
    }
// =================    ======================================
    public function store(blogsRequests $request)
        {


            $new_image_name=Time().'-'.$request->name.'.'.$request->image->Extension();

           $request->image->move(public_path('images/blogs'),$new_image_name);

            $blog=new blog();
            $blog->name =$request->name;
            $blog->desc =$request->desc;
            $blog->slug=Str::slug($request->name);
            $blog->image =$new_image_name;
            $blog->save();


        return redirect()->route('index.blog');
    }
// =================    ======================================
public function edite($id)
    {
        $data=blog::select('*')->where('id',$id)->first();

        return view('admin.blogs.edite',compact('data'));
    }
// =================    ======================================
public function update(blogsRequests $request,$id)
    {
        if($id){


        $blog=blog::find($id);
            try{
            $blog->update([

                'name' => $request->name,
                'desc' => $request->desc,

            ]);

            if($request->image !=Null){
                $new_image_name = Time() . '-' . $request->name . '.' . $request->image->Extension();
                $request->image->move(public_path('images/blogs'), $new_image_name);
                $blog->update([
                'image' => $new_image_name

                ]);
            }


            }catch(Exception $e){
                return $e;
            }

        }


        return redirect()->route('index.blog');
    }
// =================    ======================================
public function delete($id)
    {
        if($id){
            $blog = blog::find($id);

            $blog->delete();
        }



        return redirect()->route('index.blogs');
    }


}








