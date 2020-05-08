<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Product;
use Illuminate\Http\Request;
use App\appsCountries;
use App\Orders;
use App\BillingAddress;
use Auth;

class CheckoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function getIndex(){

        $arr_obj = $this->cook_arr();
        //dd($arr_obj);
        $val = $this->cook_value();
        //dd($val);
        $name = (isset(Auth::user()->name)) ? Auth::user()->name : '';
        $email = (isset(Auth::user()->email)) ? Auth::user()->email : '';

        $billingAddress = BillingAddress::where('user_id',Auth::user()->id)->get()->first();
        //dd($billingAddress);
        $listOfAllCountries = appsCountries::all();

        return view('checkout', compact('listOfAllCountries','arr_obj', 'name', 'email', 'billingAddress'));
    }

    public function makeOrder(OrderRequest $r, $userId = null){
        try{
            $billingAddress = new BillingAddress();
            $findResults = $billingAddress::where('user_id',$userId)->count();

            unset($r['_token']);
            $r['user_id'] = (int)Auth::user()->id;

            if($findResults < 1){
                $billingAddress::create($r->all());
            }else{
                $billingAddress::where('user_id',$userId)->update($r->all());
            }

            $order = new Orders();
            $order->user_id = Auth::user()->id;
            $order->body = $_COOKIE['basket'];
            $order->status = 'active';
            $order->order_notes = $r['order_notes'];
            $order->save();

            setcookie('basket', null, -1, '/');
            return redirect('/home');
        }catch(\Exception $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function cook_value()
    {
        $cook = (isset($_COOKIE['basket'])) ? $_COOKIE['basket'] : 0;
        //dd($cook);
        if($cook !=0){
            $big_arr = explode(',', $cook);
            $val = array();
            foreach ($big_arr as $value_arr) {
                $arr = explode(':', $value_arr);
                if ($arr[0] != null) {
                    $val[$arr[0]] = $arr[1];
                }
            }
            return $val;
        }
    }

    public function cook_arr()
    {
        $cook = (isset($_COOKIE['basket'])) ? $_COOKIE['basket'] : 0;
        $big_arr = explode(',', $cook);
        $tov = array();
        foreach ($big_arr as $value_arr) {
            $arr = explode(':', $value_arr);
            if ($arr[0] != null) {
                $tov[$arr[0]] = Product::find($arr[0]);
            }
        }
        return $tov;
    }

}
