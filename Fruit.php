<?php


class Fruit
{

    //blue print
    public $name;
    public $color;


    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }



    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }



}


//instantiating obj
$apple = new Fruit();

$apple->set_name("Apple");
$apple->set_color("Green");



$apple->set_name("Apple");
$apple->set_color("Green");


echo 'The name is' . $apple->get_name();
echo ' and have a color of' . $apple->get_color();
echo '<br>';






$pin = new Fruit();
$pin->set_name("<br> Pinapple");
echo $pin->get_name();



// $apple = new Fruit();
// $apple->set_color("<br> Apple has a color Green");
// echo $apple->get_color();


// $pin = new Fruit();
// $pin->set_color("<br> Pinapple has a color Yellow");
// echo $pin->get_color();











?>