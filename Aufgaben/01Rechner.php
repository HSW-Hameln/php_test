=======
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
        return $this->a / $this->b;
    }
    public function div2(){
        //a/b Ganzzahldivision (19/4 = 4)

            $erg=$this->a/$this->b;
            round($erg);
            return $erg;
    }
    public function mod(){
        //a modulo b
        $ergebnis = getA()%getB();
        return $ergebnis;
    }
    public function sqr(){
        //a�
        $produkt = pow(getA() ,2);
        return $produkt;
    }
    public function sqrt(){
        //Wurzel aus a
        return sqrt($this->a);
    }
    public function und(){
        //a bin�r und verkn�pft mit b.
        return $this->a & $this->b;
    }
    public function oder(){
        //a bin�r oder verkn�pft mit b.
        $c = $this->a | $this->b;
        return $c;
    }
    public function xoder(){
        //a bin�r xoder verkn�pft mit b.
        return $this->a ^ $this->b;
    }
} 