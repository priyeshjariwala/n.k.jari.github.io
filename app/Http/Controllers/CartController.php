<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\laces;
use Session;
use DB;

class CartController extends Controller
{
	public function main_layout()
	{
        $data=DB::table('clogo')->first();
        $images = DB::table('cbanner')->where("active","=","active")->get();
        $image = DB::table('cbanner2')->where("active","=","active")->get();
        $cart = Session::has('userdata')?Session::get('userdata'):null;
        Session::put('userdata',$cart);

		// dd('innn');
		return view('cmain_layout.app')->withData($data)->withimages($images)->withimage($image)->withcart($cart);
	}

    public function shop()
    {
    	$laces = laces::all();
        
        $data=DB::table('clogo')->first();

    	$cart = Session::has('userdata')?Session::get('userdata'):null;

        Session::put('userdata',$cart);
    	// dd($laces);

    	return view('c_layout.cart')->with(['laces' => $laces,'data' => $data,'cart' => $cart]);
    }

    public function cart_lases()
    {
        $data=DB::table('clogo')->first();

    	$cartCollection = \Cart::getContent();

    	// dd($cartCollection);

    	return view('c_layout.cart')->with(['cartCollection' => $cartCollection,'data' => $data]);
    }

    public function add(Request $request)
    {
     	// dd($request);

     	\Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'usage' => $request->usage,
		    'type' => $request->type,
		    'length' => $request->length,
		    'width' => $request->width,
            'attributes' => array(
                'image' => $request->img,
            )
        ));

        // \Cart::add(array(
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'quantity' => $request->quantity, 
        //     'attributes' => array(
        //         'image' => $request->img,
        //     )
        // ));

       
        return redirect()->route('cart_lases')->with('success_msg', 'Item is Added to Cart!');
    }

    public function remove(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('cart_lases')->with('success_msg', 'Item is removed!');
    }

    public function update(Request $request)
    {
    	// dd($request->all());
    	
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart_lases')->with('success_msg', 'Cart is Updated!');
	}

	public function clear(Request $request)
	{
		\Cart::clear();

		return redirect()->route('cart_lases')->with('success_msg', 'Cart is cleared!');
	}
    public function final_cart()
    {
        $data=DB::table('clogo')->first();

        $cartCollection = \Cart::getContent();

        //dd($cartCollection);

        return view('c_layout.finalcart')->with(['cartCollection' => $cartCollection,'data' => $data]);
    }
    public function get_offer_code(Request $request)
    {
        // dd($request);

        $inavlid='true';
        // $cid=\Auth::guard('customer')->user()->id;
        $dt = Carbon::now()->toDateString();
        
        // dd($dt);

        $coupneid = DB::table('offers')
                ->whereBetween(DB::raw("'".$dt."'"),[DB::raw('offers.date1'),DB::raw('offers.date2')])
                ->where('coupne','=',$request->coupneid)
                ->get();

        // dd($request->all(),$coupneid);

        return [$coupneid];        
    }
    
}
