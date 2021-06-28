<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Auth;

use App\Enest;
use input;
use App\Product;    
use App\Signup; 
use App\User;
  

class EnestController extends Controller
{   //ALl the Views 
    public function index(){
        $prod = Product::all();
        $data = Enest::all();
        return view('index',compact('data','prod'));
    }
    public function contact(){
        $data = Enest::all();
        return view('contact',compact('data'));
    }
    public function product($id){
    $data = Enest::all();
    $pro = Product::find($id);
    return view('product',compact('data','pro'));
    }
    public function products(){
        $prod = Product::paginate(3);
        $data = Enest::all();
        return view('products',compact('data','prod'));
    }
    public function newproducts(){
        $prod = Product::inRandomOrder()->paginate(3);
        $data = Enest::all();
        return view('products',compact('prod','data'));
    }
    public function special(){
        $prod = Product::where('special','1')->get();
        $data = Enest::all();
        return view('special',compact('prod','data'));
    }
    public function search(Request $req){
        $s = $req->Get('search');
        $prod = Product::where('name','LIKE','%'.$s.'%')->get();
        $data = Enest::all();
        return view('Search',compact('prod','data'));  
    }

    //Adding Catergaries
    public function form_submit(Request $request){
        $add = new Enest;
        if ($request->isMethod('POST'))
        {
            $add->name = $request->get('name');
            $add->save();
        }
        return redirect('/entercat')->with('message','inserted Successfully');
    }
    //Accessgin Categary through Categary list
    public function catp($id){
        $prod = Product::where('catid',$id)->get();
        $data = Enest::all();
        return view('CatProduct',compact('data','prod'));
    }

    //CheckOut PAge

    public function checkout($id){
        $prod = Product::where('catid',$id)->get();
        $data = Enest::all();
        return view('checkout',compact('data','prod'));
    }
    //Adding Products

    public function submitPro(Request $request){
        $addp = new Product;
         if($request->isMethod('POST'))
         {
             $addp->catid = $request->get('catid');
             $addp->name = $request->get('name');
             $addp->price = $request->get('price');
             $addp->quantity = $request->get('quantity');
             $addp->catid = $request->get('catid');
             if(!empty($request->file('image'))){
                $file = $request->file('image');
                $current = uniqid(Carbon::now()->format('m'));
                //$file->getClientOriginalName();
                //$file->getClientOriginalExtension();
                $fullfilename = $current.".".$file->getClientOriginalExtension();

                $destinationPath = public_path('upload_image');
                $file->move($destinationPath, $fullfilename);
                $addp->image = $fullfilename;
             }
             $addp->special = $request->get('spl');
             $addp->save();
         }
         return redirect("/insertpro")->with('message','Inserted Successfully');

    }
        
    //Sign up Process

    public function signup(Request $request){
        $new = new Signup;
        $new->name = $request->input('name');
        $new->email = $request->input('email');
        $new->password = $request->input('password');
        $new->save();
        return redirect('/login')->with('message','Account Created Successfully');
    }

    //Sign in Process
    public function signin(Request $request)
    {
        $em = $request->get('email');
        $pw = $request->get('password'); 
        $request->flash();
        $l = User::where('email', $em)->where('password',$pw)->get();
        if($l->count() > 0){
          $request->session()->put('data',$request->input());
          return redirect('/');
        }else{
            return redirect('/login')->with('status','Invalid Username/Password');
        }
    }
    public function logout(){
        session()->forget('data');
        return redirect('/login');
    }
    public function faq(){
        return view('faq');
    }
}

