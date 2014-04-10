<?php
/**
 * Created by PhpStorm.
 * User: mielke
 * Date: 04.04.14
 * Time: 10:10
 */

namespace de\hsw\php;


class Kontrollfluss {

    private $a = 0,$b = 0;

    public function  getA(){
        return $this->a;
    }
    public function  setA($a){
        $this->a = $a;
    }
    public function  getB(){
        return $this->b;
    }
    public function  setB($b){
        $this->b = $b;
    }

    public function equal(){
        //Wenn a größer als b gib 1 zurück
        //Wenn a = b gib 0 zurück
        //sonst -1
        if ($this->a > $this->b)
            { return 1; }
        elseif ($this->a == $this->b)
            { return 0; }
        else
            { return -1; }
    }

    public function liste(){
        // Gib ein Array zurück das $a zahlen enthält, beginnend mit 1. [1,2,3,4,...,$a]
        $array = array($this->a);
        for ($i = 0; $i < $this->a; $i++) {
            $array[$i] = $i + 1;
        }
        return $array;
    }

    public function fak(){
        // berechne rekursiv die fakultät von $a
    }

} 