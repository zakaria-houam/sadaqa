<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use App\Models\postes;
use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
     


    public function index(){
        
        
        $data = books::all();
        $postes = postes::all();
        return view('home',compact("data","postes"));
    }

    public function register(){
        return view('register');
    }

    public function redirects(){
        $data = books::all();
        $postes = postes::all();
        return view('admin',compact("data","postes"));
    }

    public function uploadbook(Request $request){
        $data = new books ;
        
        $image = $request->image;
        $imagename  = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('booksimage',$imagename);
        $data->image = $imagename;
        $data->title = $request->title ; 
        $data->description = $request->description ;
        $data->link = $request->link;
        $data->save();

        return redirect()->back();
    }

    public function deletebook($id){
            $data = books::find($id);
            $data->delete();
            return redirect()->back();
    }

    public function uploadpostes(Request $request){
        $data = new postes ;
        
        $image = $request->image;
        $imagename  = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postesimage',$imagename);
        $data->image = $imagename;
        $data->title = $request->title ; 
        $data->description = $request->description ;
        $data->link = $request->link;
        $data->save();

        return redirect()->back();
    }
    public function deletepostes($id){
        $data = postes::find($id);
        $data->delete();
        return redirect()->back();
}
}
