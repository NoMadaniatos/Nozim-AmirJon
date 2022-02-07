<?
function validateInt($value)
{
    if (($value = intval($value)) && ($value > 0)) {
        return "OK! type integer: $value ";
    }
    return "Error! Incorrect data of type : $value ";
}
$products = [
    "bread"   => 100,
    "tomato"  => 500,
    "potato"  => 600,
    "carrot"  => 220,
    "fish"    => 500,
    "meat"    => 1000,
    "butter"  => 200,
    "rice"    => 2000,
    "raisin"  => 2000,
    "cola"    => 100,
];
foreach ($products as $product){
    $product= validateInt($product);
}
function takeProduct($product, int $quantity, $products)
{
    global $client;
    if ($client != "chef") {
        $products[$product] -= $quantity;
        printingRemainingProducts($products);
    }else{
        printingRemainingProducts($products);
    }

    }
    

function printingRemainingProducts($products) {
    echo '<pre>';
print_r($products);
echo '</pre>';
}

function orderProduct($product, int $quantity, $products) {
    takeProduct($product, $quantity, $products);
}
$client = "Kuku";
$product = "fish";
$quantity = 100;

orderProduct($product, $quantity, $products);
