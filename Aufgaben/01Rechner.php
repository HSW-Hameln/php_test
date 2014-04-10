<?php
/**
 * Created by PhpStorm.
 * User: mielke
 * Date: 03.04.14
 * Time: 16:14
 */

namespace de\hsw\php;


class Rechner {

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

    public function add(){
        //a+b
        return ($this->a + $this->b);
    }
    public function sub(){
        //a-b
        return ($this->a - $this->b);
    }
    public function mul(){
        //a*b
    }
    public function div(){
        //a/b
    }
    public function div2(){
        //a/b Ganzzahldivision (19/4 = 4)

            $erg=$this->a/$this->b;
            round($erg);
            return $erg;
    }
    public function mod(){
        //a modulo b
    }
    public function sqr(){
        //a²
    }
    public function sqrt(){
        //Wurzel aus a
    }
    public function und(){
        //a binär und verknüpft mit b.
    }
    public function oder(){
        //a binär oder verknüpft mit b.
    }
    public function xoder(){
        //a binär xoder verknüpft mit b.
    }

} 