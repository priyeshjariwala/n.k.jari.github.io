<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class admincontroller extends Controller
{   
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function a_main()
    {
        $dat=DB::table('passport')->first();
        return view('a_layout.dashboard')->withdat($dat);
    }
    public function clogo()
    {
    	$data=DB::table('clogo')->first();
        $dat=DB::table('passport')->first();
    	return view('a_layout.clogo')->withdata($data)->withdat($dat);
    }
    public function clogo_post(Request $request)
    {
    	$name= $request->file('image')->getClientOriginalName();
    	$oname=time().$name;
    	$request->file('image')->storeAs('/logo',$oname);


    	DB::table('clogo')
    	->where('id','=',$request->id)
		->update(["image"=>$oname,"created_at"=>config('local_time.time')]);
		return redirect()->route('clogo');
    }
    public function passport()
    {
        $dat=DB::table('passport')->first();

        return view('a_layout.passport')->withdat($dat);
    }
    public function passport_post(Request $request)
    {
        $name= $request->file('image')->getClientOriginalName();
        $oname=time().$name;
        $request->file('image')->storeAs('/passport',$oname);


        DB::table('passport')
        ->where('id','=',$request->id)
        ->update(["image"=>$oname,"created_at"=>config('local_time.time')]);
        return redirect()->route('passport');
    }
    public function cbanner()
    {
        $dat=DB::table('passport')->first();
        $data=DB::table('cbanner')->get();

        return view('a_layout.banner')->withdata($data)->withdat($dat);
    }
    public function cbanner_post(Request $request)
    {
        $name= $request->file('image')->getClientOriginalName();
        $oname=time().$name;
        $request->file('image')->storeAs('/banner',$oname);


        DB::table('cbanner')
        ->insert(["image"=>$oname,"title"=>$request->title,"active"=>$request->active,"created_at"=>config('local_time.time'),"created_by"=>Auth::user()->id]);

        return redirect()->route('cbanner');
    }
    
    public function banner_active($id,$active)
    {
        if($active == 'active')
        {
            DB::table('cbanner')
            ->where('id','=',decrypt($id))
            ->update(['active'=>'inactive',"created_at"=>config('local_time.time')]);        
        }
        else
        {
            DB::table('cbanner')
            ->where('id','=',decrypt($id))
            ->update(['active'=>'active',"created_at"=>config('local_time.time')]);            
        }
        $data=DB::table('cbanner')->get();

        return view('a_layout.banner')->withdata($data);    
    }
    public function d_banner($id)
    {
        $query = DB::table('cbanner')
                  ->where('id','=',$id)
                  ->delete();
        return redirect()->route('cbanner');
    }
    public function cbanner2()
    {
        $dat=DB::table('passport')->first();

        $data = DB::table('cbanner2')->get();  
        return view('a_layout.banner2')->withdata($data)->withdat($dat);
    }
     public function cbanner2_post(Request $request)
    {
        $name= $request->file('image')->getClientOriginalName();
        $oname=time().$name;
        $request->file('image')->storeAs('/banner2',$oname);


        DB::table('cbanner2')
        ->insert(["name"=>$request->name,"image"=>$oname,"price"=>$request->price,"active"=>$request->active,"created_at"=>config('local_time.time'),"created_by"=>Auth::user()->id]);

        return redirect()->route('cbanner2');
    }
    public function cbanner2_active($id,$active)
    {
        if($active == 'active')
        {
            DB::table('cbanner2')
            ->where('id','=',decrypt($id))
            ->update(['active'=>'inactive',"created_at"=>config('local_time.time')]);        
        }
        else
        {
            DB::table('cbanner2')
            ->where('id','=',decrypt($id))
            ->update(['active'=>'active',"created_at"=>config('local_time.time')]);            
        }
        $data=DB::table('cbanner2')->get();
        $dat=DB::table('passport')->first();
        return view('a_layout.banner2')->withdata($data)->withdat($dat);    
    }
    public function d_banner2($id)
    {
        $query = DB::table('cbanner2')
                  ->where('id','=',$id)
                  ->delete();
        return redirect()->route('cbanner2');
    }
    public function cproduct()
    {
        $dat=DB::table('passport')->first();
        $data=DB::table('laces')->get();

        // dd($data);

        return view('a_layout.product')->withdata($data)->withdat($dat);
    }
    public function cproduct_post(Request $request)
    {
        //dd($request->id);
         if($request->hasFile('image'))
        {
            $name= $request->file('image')->getClientOriginalName();
            $oname=time().$name;
            $request->file('image')->storeAs('/product',$oname);

             DB::table('laces')
                ->where('id','=',$request->id)
                ->update(["image"=>$oname]);

        }
        if($request->id)
        {
             DB::table('laces')
                ->where('id','=',$request->id)
                ->update(["name"=>$request->name,"price"=>$request->price,"usge"=>$request->usge,"width"=>$request->width,"packaging_type"=>$request->packaging_type,"length"=>$request->length]);

            return redirect()->route('view_product');
        }
        else
        {

        $name= $request->file('image')->getClientOriginalName();
        $oname=time().$name;
        $request->file('image')->storeAs('/product',$oname);


        DB::table('laces')
        ->insert(["name"=>$request->name,"image"=>$oname,"price"=>$request->price,"usge"=>$request->usge,"width"=>$request->width,"packaging_type"=>$request->packaging_type,"length"=>$request->length,"type"=>$request->type]);

        return redirect()->route('cproduct');
        }

       
    }
    public function view_product()
    {
        $data=DB::table('laces')->get();
        $dat=DB::table('passport')->first();
        return view('a_layout.vproduct')->withdata($data)->withdat($dat);
    }
    public function product_edit($id)
    {
        $data=DB::table('laces')
          ->where('id','=',$id)
          ->get();
        $dat=DB::table('passport')->first();
      return view('a_layout.changeproduct')->withdata($data)->withdat($dat); 
    }
    public function d_cproduct($id)
    {
        $query = DB::table('laces')
                  ->where('id','=',$id)
                  ->delete();
        $dat=DB::table('passport')->first();
        return redirect()->route('view_product')->withdat($dat);
    }
    public function feedback()
    {
        $data=DB::table('feedback')->get();
        $dat=DB::table('passport')->first();
        return view('a_layout.feedback')->withdata($data)->withdat($dat);
    }
    public function d_feedback($id)
    {
        $query = DB::table('feedback')
                  ->where('id','=',$id)
                  ->delete();
        return redirect()->route('feedback');
    }
    public function create_offer()
    {
        $dat=DB::table('passport')->first();
        return view('a_layout.createoffer')->withdat($dat);
    }
    public function offers_reg(Request $request)
    {
        $this->validate($request,[
            'date1'      =>  'required|date',
            'date2'      =>  'required|date',
            'rate'       =>  'required|numeric',
            'maxi'       =>  'required|numeric',
            'amount'     =>  'required|numeric',
            'descr'      =>  'nullable|string',
            'coupne'     =>  'required|string|unique:offers,coupne,'.$request->coupne,
        ],[
            'date1.required'    =>  'From Date cannot be empty',
            'date2.required'    =>  'To Date cannot be empty',
            'date1.Date'        =>  'From Date must be type of YYYY-mm-dd',
            'date2.Date'        =>  'To Date cannot be type of YYYY-mm-dd',
            'rate.required'     =>  'Discount rate required',
            'maxi.required'     =>  'Maximum discount amount required',
            'amount.required'   =>  'Maximum Bill Amount required',
            'rate.numeric'      =>  'Discount rate must be valid number',
            'maxi.numeric'      =>  'Maximum discount amount must be valid number',
            'amount.numeric'    =>  'Maximum Bill Amount must be valid number',
            'coupne.required'   =>  'Coupon Code required',
            'coupne.unique'     =>  'Coupon Code Already Exist',
        ]);

        
        $first=$request->firstorder?'true':'false';  
        DB::table('offers')
            ->insert(['date1'=>$request->date1,'date2'=>$request->date2,'maxi'=>$request->maxi,'rate'=>$request->rate,'amount'=>$request->amount,'coupne'=>$request->coupne,'descr'=>$request->descr,'created_at'=>config('local_time.time'),'firsttime'=>$first]);

        return redirect()->route('offers_view');
    }
    public function offers_view()
    {
         $dat=DB::table('passport')->first();
        $data = DB::table('offers')->get();

        return view('a_layout.view_offers')->withData($data)->withdat($dat);
    }
    public function offer_active($id,$active)
    {
        DB::table('offers')
                ->where('id','=',decrypt($id))
                ->update(['active'=>'false','created_at'=>config('local_time.time')]);
                 
        if($active == 'false')
        {
            // dd($status);
            DB::table('offers')
                ->where('id','=',decrypt($id))
                ->update(['active'=>'true','created_at'=>config('local_time.time')]);
        }
        
        $data = DB::table('offers')->get();

        return redirect()->route('offers_view')->withData($data);
    }
    public function view_orders()
    {
        $dat=DB::table('passport')->first();
        $data=DB::table('payinfo_product')->get();

        return view('a_layout.view_orders')->withdat($dat)->withdata($data);

    }
}
