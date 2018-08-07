<?php
//var_dump($arResult)

function producer($arResult)
{
    foreach ($arResult as $value){
        foreach ($value as $key){
            $producer[] = $key['PRODUCER'];
        }
    }
    $result = array_unique($producer);
    return $result;
}

function product($arResult, $producer)
{
    foreach ($arResult as $value){
        foreach ($value as $key){
            if($key['PRODUCER'] == $producer){
                $product[$key['NAME']] = $key['OFFERS'];
            }          
        }
    }
    return $product;
}

function producerLogo($val){
    if($val == 'Oodji'){
        return 'http://i.otzovik.com/2015/04/09/1988978/img/3730466.jpg';
    }
    if($val == 'gloria jeans'){
        return 'https://i0.photo.2gis.com/images/branch/38/5348024570902170_7d57.jpg';
    }
    if($val == 'adidas'){
        return 'http://i.timeout.ru/pix/478251.jpeg?1449871842';
    }else{
        return 'https://2-miles.com/image/catalog/fotonet.jpg';
    }
}


function productColor($color){
    if($color == 'красный'){
        return 'red-product';
    }
    if($color == 'зеленый'){
        return 'green-product';
    }
    if($color == 'синий'){
        return 'blue-product';
    }
}
?>