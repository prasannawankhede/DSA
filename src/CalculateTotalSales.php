<?php

namespace App;


class CalculateTotalSales{

    public function totalSales($arr){//array of object


        $totalSales = 0;
        $sales = 0;
        $tax = 8;

        foreach($arr as $product){
           
            $name = $product->name;
            $price = $product->price;
            $quantity = $product->quantity;

            $sales = ($price * $quantity) * (1 + $tax/100);

            $totalSales += $sales;

        }

        return round($totalSales,2);

    }
}