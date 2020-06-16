<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class paymentcontroller extends Controller
{
    public function payumoney(Request $request)
    {
    	$cid = Auth::guard('customer')->user()->id;

    	//dd($request->all(),$cid);

    	$MERCHANT_KEY = "gtKFFx";
		$SALT = "eCwWELxi";
		$PAYU_BASE_URL = "https://test.payu.in";
		$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

		$arr =['key'=>$MERCHANT_KEY,'txnid'=>$txnid,'amount'=>$request->amount,'productinfo'=>$request->productinfo,'firstname'=>$request->firstname,'email'=>$request->email,'contact'=>$request->contact];

		$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

		$hashVarsSeq = explode('|', $hashSequence);
		$hash_string = '';  

		foreach($hashVarsSeq as $hash_var) 
		{
		  $hash_string .= isset($arr[$hash_var]) ? $arr[$hash_var] : '';
		  $hash_string .= '|';
		}

		$hash_string .= $SALT;
		$hash = strtolower(hash('sha512', $hash_string));

		return view('c_layout.payment_form')->withData($arr)->withMerch($MERCHANT_KEY)->withHash($hash)->withTrans($txnid);

    }

    public function payment_view_sucess(Request $request)
    {
    	//dd($request);
    	$cid = Auth::guard('customer')->user()->id;
    	$cnm = Auth::guard('customer')->user()->name;

    	$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";          

	    $hashVarsSeq = explode('|', $hashSequence);
	    $hash_string = '';  
    
	    foreach($hashVarsSeq as $hash_var) 
	    {
	      $hash_string .= isset($arr[$hash_var]) ? $arr[$hash_var] : '';
	      $hash_string .= '|';
	    }          

	    $MERCHANT_KEY = "gtKFFx";
	    $SALT = "eCwWELxi";          
	    $hash_string .= $SALT;
	    $hash = strtolower(hash('sha512', $hash_string));        
	    $surl = "http://localhost/project/payment_view_sucess";
	    $furl = "http://localhost/project/payment_view_failure";
	    $service_provider = "PayuMoney";          

	    
	    $arr =  DB::table('payinfo')
            ->insertGetid(['uid'=>$cid,'status'=>$request->status,'hash'=>$request->hash,'key'=>$MERCHANT_KEY,'txnid'=>$request->txnid,'amount'=>$request->amount,'productinfo'=>$request->title,'firstname'=>$request->name,'email'=>$request->email,'contact'=>$request->contact,'surl'=>$surl,'furl'=>$furl,'service_provider'=>$service_provider]);
            //dd($cid);
        $cartCollection = \Cart::getContent();

    	// dd($cartCollection);        

    	foreach ($cartCollection as $item) {
    		$prodid = $item->id;
    		$prodname = $item->name;
    		$prodqty = $item->quantity;
    		$prodprice = $item->price;

			$price_qty = $prodprice * $prodqty;

    		// dd($prodid,$prodname,$prodqty,$prodprice,$price_qty);

    		$arr_product = DB::table('payinfo_product')
    				->insert([
    						'p_id'=>$cid,
    						'name'=>$cnm,
    						'product_id'=>$prodid,
    						'prod_name'=>$prodname,
    						'prod_qty'=>$prodqty,
    						'product_price'=>$prodprice,
    						'price_tot'=>$price_qty,
    				]);
    		
    	}

	    if($request->status == "success")
	    {
	        echo "<h2>Thank You.</h2>";
	        echo "<h3> Your Payment status is <u> ". $request->status ."</u>.</h3>";
	        echo "<h4>Your Transaction ID for this transaction is <u> ".$request->txnid." </u>.
	        </h4>";
	        echo "<h4>We have received a payment of <u> Rs. " . $request->amount . ". </u> Your order will soon be shipped.</h4>";

	    }
	    else
	    {
	       echo "Invalid Transaction. Please try again";

	       return redirect()->route('payment_view_failure');
	    }           
	    \Cart::clear();
		return view('c_layout.payment_success')->withArr($arr);
    }

    public function payment_view_failure()
    {
    	dd('Failureeeeee payemnt');
    }
    public function receipt_create_sucess($id)
  	{
    // dd($request->id);
      $data = DB::table('maintenance_person')
          ->where('id','=',$id)
          ->get()->first();
    // dd($data);

     return view('maintenance_receipt_formate')->withData($data);
  	}

	// public function payment_view_failure(Request $request)
	// {
 //       $meeting =DB::table('meeting')
 //                ->where('reading','=','0')
 //                ->select('meeting.m_date as m_date','meeting.title as title','meeting.description as description','meeting.id as id','meeting.reading as reading','meeting.releted as releted','meeting.created_at as created_at')
 //                ->get();

	// 	return view('payment_failure')->withMeeting($meeting);
	// }
	public function payment_view(Request $request)
	{

		return view('payment_Details_response');   
	}
}

