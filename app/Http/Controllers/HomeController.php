<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function c_main()
    {        
        $data=DB::table('clogo')->first();
        $images = DB::table('cbanner')->where("active","=","active")->get();
        $image = DB::table('cbanner2')->where("active","=","active")->get();
        $cart = Session::has('userdata')?Session::get('userdata'):null;
        Session::put('userdata',$cart);
        
        return view('c_layout.index')->withdata($data)->withimages($images)->withimage($image)->withcart($cart);
    }
    
     public function c_product()
    {
        $data=DB::table('clogo')->first();
        $image=DB::table('laces')->paginate(12);
        $cart = Session::has('userdata')?Session::get('userdata'):null;
        Session::put('userdata',$cart);
        return view('c_layout.product')->withdata($data)->withimage($image)->withcart($cart);
    }

    public function designer()
    {
        $data=DB::table('clogo')->first();
        $image=DB::table('laces')->where('type','=','designer lace')->paginate(12);
        $cart = Session::has('userdata')?Session::get('userdata'):null;
        Session::put('userdata',$cart);
        return view('c_layout.designer')->withdata($data)->withimage($image)->withcart($cart);
    }
    public function fancy()
    {
        $data=DB::table('clogo')->first();
        $image=DB::table('laces')->where('type','=','fancy lace')->paginate(12);
        $cart = Session::has('userdata')?Session::get('userdata'):null;
        Session::put('userdata',$cart);
        return view('c_layout.fancy')->withdata($data)->withimage($image)->withcart($cart);
    }
    public function newitems()
    {
        $data=DB::table('clogo')->first();
        $image=DB::table('laces')->where('type','=','new lace')->paginate(12);
        $cart = Session::has('userdata')?Session::get('userdata'):null;
        Session::put('userdata',$cart);
        return view('c_layout.newitem')->withdata($data)->withimage($image)->withcart($cart);
    }
    public function about()
    {   
        $data=DB::table('clogo')->first();
        $pass=DB::table('passport')->first();
        $images = DB::table('cbanner')->where("active","=","active")->get();
        $cart = Session::has('userdata')?Session::get('userdata'):null;
        Session::put('userdata',$cart);
        return view('c_layout.about')->withdata($data)->withpass($pass)->withimages($images)->withcart($cart);   
    }
    public function contact()
    {   
        $data=DB::table('clogo')->first();
        $images = DB::table('cbanner')->where("active","=","active")->get();
        $cart = Session::has('userdata')?Session::get('userdata'):null;
        Session::put('userdata',$cart);
        return view('c_layout.contact')->withdata($data)->withimages($images)->withcart($cart);
    }
    public function contact_post(Request $request)
    {
        DB::table('feedback')
        ->insert(["name"=>$request->name,"mobile"=>$request->mno,"email"=>$request->email,"message"=>$request->msg]);
        return redirect()->route('contact');
    }
    public function product_detail($id)
    {
        // dd($id);
        $query=DB::table('laces')
                    ->where('id','=',$id)
                    ->get();

                    // dd($query);
                    
         $data=DB::table('clogo')->first();
         $image = DB::table('cbanner2')->where("active","=","active")->get();
         $cart = Session::has('userdata')?Session::get('userdata'):null;
        Session::put('userdata',$cart);

        return view('c_layout.product_detail')->withdata($data)->withimage($image)->withquery($query)->withcart($cart);
    }
    public function cart()
    {
        $data=DB::table('clogo')->first();
        $cart = Session::has('userdata')?Session::get('userdata'):null;
        Session::put('userdata',$cart);

        return view('c_layout.cart')->withdata($data)->withcart($cart);
    }
    public function orders()
    {
        $data=DB::table('clogo')->first();
        $cart = Session::has('userdata')?Session::get('userdata'):null;
        Session::put('userdata',$cart);

        $cid = \Auth::guard('customer')->user()->id;
        $dat=DB::table('payinfo_product')
            ->where('p_id','=',$cid)
            ->get(); 

        return view('c_layout.orders')->withdata($data)->withcart($cart)->withdat($dat);
    }

    public function addtocart_post(Request $request)
    {
        // dd($request);
        // $data = $request->all();
        // $userdata = $request->session()->put('userdata',$data);
        // dd($data);
        // Session::flush();
        $data=DB::table('clogo')->first();

        $cart = Session::has('userdata')?Session::get('userdata'):null;
        
        $image = DB::table('laces')
            ->where('id','=',$request->id)
            ->select('image','id')
            ->get();
            //dd($image);
        $match ="false";


        if($match=="false")
        {
            $cart[] = array(
                'id'=>$request->id,
                'image'=>$image[0]->image,
                'name'=>$request->name,
                'price'=>$request->price,
                'quentity'=>$request->quentity,
            );
        }
        else
        {
            $cart[] = array(
                'id'=>$request->id,
                'image'=>$image[0]->image,
                'name'=>$request->name,
                'price'=>$request->price,
                'quentity'=>$request->quentity,
            );
        }

        Session::put('userdata',$cart);
        // dd($cart);
        return view('c_layout.cart')->withdata($data)->withcart($cart);
        //return session('cart');
        //return redirect()->back()->with('success', 'product added to cart successsfully!');
        // dd($new);
    }
    
    public function removeCartItem(Request $request)
    {
        // dd($request->all());

        $data=DB::table('clogo')->first();

        // $data1 = $request->all();
        // $userdata = $request->session()->put('userdata',$data1);

        $cart =Session::has('userdata')?Session::get('userdata'):null;

        // dd($cart);

        // $cat = DB::table('laces')
        //         ->where('id','=',$request->id)
        //         ->select('id','name','price')
        //         ->first();


        if($cart)
        {
          foreach ($cart as $k => $c) {

                // dd($c['id'],$request->id,$c['name'],$request->name,$c['price'],$request->price);
 
                // && $c['name']==$request->name && $c['price']==$request->price  

                 if($c['id']==$request->id)
                 {
                    unset($cart[$k]);

                    // dd('removed product');
                 }
        }
      }
      array_splice($cart,0,0); /*---------------- to reorder array after unset --------------*/

      Session::put('cart', $cart);
      // dd($cart); 
      // return session('cart'); 
      // return redirect()->back()->with('success', 'product removed to cart successsfully!');

        return redirect()->route('c_main');
    }
}
    