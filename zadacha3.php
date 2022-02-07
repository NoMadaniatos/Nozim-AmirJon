<?php

/*
 * Adding a product to homeware if it's not exicts
 */

$all_products = ["fish" => "yes", "fruit" => "yes"];

function isExictProduct(string $product, $exicted_products)
{
    if($exicted_products[$product] == "yes"){
        return true;
    } else{
        return false;
    }
}

function addProduct(string $product, $exicted_products)
{
    if(isExictProduct($product, $exicted_products) == false){
        $all_products[$product] = "yes";
        return "We add $product";
    } else{
        "the $product already exicts in warehome";
    }
}

function newProduct(string $product, $exicted_products)
{
    addProduct($product, $exicted_products);
}

newProduct("fish", $all_products);