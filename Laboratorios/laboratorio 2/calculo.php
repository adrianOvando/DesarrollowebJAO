<?php 
class Calculo {
    private $ma;
    private $su;
    private $a;
    private $b;
    private $c;


    public function __construct()
    {
        $this->ma=0;
        $this->su=0;
        $this->a=2;
        $this->b=3;
        $this->c=4;
        
    }
    public function mayor()
    {
        if ($this->a>$this->b and $this->a>$this->c)
        {
            $this->ma=$this->a;}
        
        if ($this->b>$this->a and $this->b>$this->c)
        {
            $this->ma=$this->b;}
        
        if ($this->c>$this->a and $this->c>$this->b)
        {
            $this->ma=$this->c;}
        return $this->ma;

    }
    public function sumar()
    {
        $this->su=$this->a+$this->b+$this->c;
        return $this->su;
    }



}