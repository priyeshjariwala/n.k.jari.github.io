<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use App\laces;
use DB;
use Session;
use Auth;
use Mail;
use Cart;


class placeorder extends Controller
{
    //
    public function address_fetch()
    {
    	$cid = \Auth::guard('customer')->user()->id;
        
        //dd($cid);

        $city  = DB::table('citys')
                    ->get();

        $state = DB::table('states')
                    ->get();

    	$dat=DB::table('customer_address')
             ->leftjoin('states','states.id','=','customer_address.state')
             ->leftjoin('citys','citys.id','=','customer_address.city')
             ->select('customer_address.*','states.name as staten','citys.name as cityn')
             ->where('cid','=',$cid)
             ->get(); 

        $data=DB::table('clogo')->first();     
        return view('c_layout.address')->withData($data)->withDat($dat)->withState($state)->withCity($city);
    }
    public function address_delete($id)
    {
        $data=DB::table('clogo')->first(); 
        $id=decrypt($id);
        DB::table('customer_address')
            ->where('id',$id)->delete();
        $cid=\Auth::guard('customer')->user()->id;
        $city  = DB::table('citys')
                    ->get();
        $state = DB::table('states')
                    ->get();
        $dat=DB::table('customer_address')
             ->leftjoin('states','states.id','=','customer_address.state')
             ->leftjoin('citys','citys.id','=','customer_address.city')
             ->select('customer_address.*','states.name as staten','citys.name as cityn')
             ->where('cid','=',$cid)
             ->get();
        return view('c_layout.address')->withData($data)->withDat($dat)->withState($state)->withCity($city);

    }
    public function finalcart($aid)
    {  
        $aid=decrypt($aid);
        $cid=\Auth::guard('customer')->user()->id;
        $data=DB::table('customers')->where('id','=',$cid)->first();

        $dt = Carbon::now()->toDateString();

        $coupen = DB::table('offers')
                ->whereBetween(DB::raw("'".$dt."'"),[DB::raw('offers.date1'),DB::raw('offers.date2')])
                ->select('offers.id as coupneid','offers.coupne')
                ->get();

        DB::table('customer_address')
           ->where('id','=',$aid)
           ->update(['active'=>'true']);
           
        return view('c_layout.finalcart')->withData($data)->withCoupen($coupen);  
    }

    public function address_submit(Request $request)
    {
        // dd($request->all());
        $cid=\Auth::guard('customer')->user()->id;
        $this->validate($request,[
            'name'         =>      'required|string',
            'flat'         =>      'required|string',
            'colony'       =>      'required|string',
            'landmark'     =>      'nullable|string',
            'pincode'      =>      'required|numeric|digits:6',
            'state'        =>      'required|numeric',
            'city'         =>      'required|numeric',
            'mobileno'     =>      'required',
            'type'         =>      'required|string',
        ],[
            'name.required'              =>      'Full Name is required',
            'flat.required'              =>      'Flat/House No./Building is required',
            'colony.required'            =>      'Street Address/Colony is required',
            'pincode.required'           =>      'Pincode is required',
        ]); 
        // dd($request->aid);
        if($request->aid)
        {
            DB::table('customer_address')
               ->where('id','=',$request->aid)
               ->update(['name'=>$request->name,'flat'=>$request->flat,'colony'=>$request->colony,
                   'landmark'=>$request->landmark,'pincode'=>$request->pincode,'state'=>$request->state,
                   'mobileno'=>$request->mobileno,'city'=>$request->city,'type'=>$request->type,'cid'=>$cid,'active'=>'true'
                   ]);
            $new=$request->aid;
        }
        else
        {
            $aaid= DB::table('customer_address')
                ->insertGetId(['name'=>$request->name,'flat'=>$request->flat,'colony'=>$request->colony,
                    'landmark'=>$request->landmark,'pincode'=>$request->pincode,'state'=>$request->state,
                    'mobileno'=>$request->mobileno,'city'=>$request->city,'type'=>$request->type,'cid'=>$cid,'active'=>'true',
                    'created_at'=>config('local_time.time')]);
            $new=$aaid;
        }

        
       return redirect()->route('address_fetch',['id'=>encrypt($new)]);
    }
    
}
