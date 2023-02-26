<?php

function preOrderPrice($originalPrice) {
    return $originalPrice * 0.8;
}

function promotionPrice($originalPrice) {
    return $originalPrice <= 200 ? $originalPrice * 0.9 : $originalPrice -30;
}

function blacFridayPrice($originalPrice) {
    return $originalPrice * 0.8;
}

function defaultPrice($originalPrice) {
    return $originalPrice;
}

function dayPrice($originalPrice) {
    return $originalPrice * 0.6;
}

function dayValentinePrice($originalPrice) {
    return $originalPrice * 0.7;
}

// function getPrice($originalPrice, $typePromotion) {
//     if ($typePromotion == "preOrder") {
//         return preOrderPrice($originalPrice);
//     }

//     if ($typePromotion == "blackFriday") {
//         return blacFridayPrice($originalPrice);
//     }

//     /** ..
//      *  Cứ có thêm 1 loại promotion mới thì phải thêm if --> not good
//      * 
//      * . */

// }

const getPriceStrategies = [
    "preOrder" => preOrderPrice,
    "promotion" => promotionPrice,
    "blackFriday" => blacFridayPrice,
    "default" => defaultPrice,
];

function getPrice($originalPrice, $typePromotion) {
    // Thay vì kiểm tra if else hay switch case thì ta đưa vào object
    return getPriceStrategies[$typePromotion]($originalPrice);

}

echo getPrice(200, "blackFriday");