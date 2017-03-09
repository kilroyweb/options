<?php

namespace KilroyWeb\Options;

abstract class BaseOption{

    protected $attributes=[];

    public static function get($blank=false, $attributes=[]){
        $this->attributes = $attributes;
        $optionClass = new static();
        $array = $optionClass->getArray();
        $response = [];
        if(!empty($blank)){
            $response[''] = $blank;
        }
        foreach($array as $key => $arrayItem){
            $response[$key] = $arrayItem;
        }
        return $response;
    }

    public function getArray(){
        return [];
    }

}
