<?php


namespace App\Libs;

use App\Product;

class Cook
{
    public function getDelete($id = null)
    {
        $tov = $this->cook_count();
        unset($tov[$id]);
        $this->cook_add($tov);
    }

    public function cook_value()
    {
        $cook = (isset($_COOKIE['basket'])) ? $_COOKIE['basket'] : 0;
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

    public function cook_count()
    {
        $cook = (isset($_COOKIE['basket'])) ? $_COOKIE['basket'] : 0;
        $big_arr = explode(',', $cook);
        $tov = array();
        foreach ($big_arr as $key => $value) {
            $arr = explode(':', $value);
            if ($arr[0] != null) {
                $tov[$arr[0]] = $arr[1];
            }
        }
        return $tov;
    }

    public function cook_add($tov = [])
    {
        $str = '';
        $summa = '';
        foreach ($tov as $key => $value) {
            $tovv = Product::find($key);
            $str .= $key . ':' . $value . ':' . $tovv->price . ',';
        }
        setcookie('basket', $str, time() + 3600, '/');
    }
}
