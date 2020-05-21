<?php


namespace App\Libs;

use Carbon\Carbon;
use DB;


class DealOfTheDayCheck
{

    public function DealOfTheDayCheck($arr_obj = null)
    {
        if(isset($arr_obj->id)){
            $ifProductOnDiscount = DB::table('deal_of_the_days')
                                      ->where('finaldate','>=', Carbon::now('Europe/Minsk'))
                                      ->where('product_id','=', $arr_obj->id)->first();

            if(isset($ifProductOnDiscount) && ($ifProductOnDiscount != null)){
                $arr_obj->finaldate = $ifProductOnDiscount->finaldate;
                $arr_obj->oldPrice = $arr_obj->price;
                $arr_obj->discount = $ifProductOnDiscount->discount;
                $arr_obj->price = round(($arr_obj->price / (1 + ($ifProductOnDiscount->discount / 100))), 2);
            }
            return $arr_obj;
        }else{

            foreach ($arr_obj as $one){
                if(isset($one) && ($one != null)) {

                    $ifProductOnDiscount = DB::table('deal_of_the_days')
                                              ->where('finaldate','>=', Carbon::now('Europe/Minsk'))
                                              ->where('product_id','=', $one->id)->first();

                    if(isset($ifProductOnDiscount) && ($ifProductOnDiscount != null)){
                        $one->finaldate = $ifProductOnDiscount->finaldate;
                        $one->oldPrice = $one->price;
                        $one->discount = $ifProductOnDiscount->discount;
                        $one->price = round(($one->price / (1 + ($ifProductOnDiscount->discount / 100))), 2);
                    }
                }
            }
        }

        return $arr_obj;
    }

}
