<?php

class Grybas
{
    private $color;
    private $rusis;

    public function color($color)
    {
        $this->color = $color;
    }
    public function get_color()
    {
        return $this->color;
    }
    public function rusis($rusis)
    {
        $this->rusis = $rusis;
        }
    public function get_rusis()
    {
        return $this->rusis;
    }
}


$grybas = new Grybas;
$grybas->color('red');
$grybas->rusis('umede');

echo $grybas->get_color();
echo '<br>';
echo $grybas->get_rusis();
