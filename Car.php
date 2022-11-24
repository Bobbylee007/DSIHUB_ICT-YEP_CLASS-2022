<?php



class Car
{
    public $name;
    public $color;
    const MESSAGE = 'na you know';


     function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }


    public function get_name()
    {

        return $this->name;
    }

    private function get_color()
    {
        return $this->color;
    }


    // public function show_color() //since we can access a private modifier outside the class we recall it on a public function
    // {
    //     return $this->get_color();
    // }

    protected function show_color() //since we can access a private modifier outside the class we recall it on a protected function

    {
        return $this->get_color();
    }
}


//instantiate an accesse modifier
// $benz = new Car(' Mercedes  Benz', ' Cream');

// echo 'The name of my favourite car is:' . $benz->get_name(). ' and i love it to be in'  . $benz->show_color();


//inhiritance with "extend" key
// class Benz extends Car
// {
//     public FUNCTION print_color()
//     {
//         return $this->show_color();
//     }
// }


// $benz = new Benz('Mercedes', 'red');
//  echo $benz->print_color();



//Overide a class takes in more parameter from the extended
//rule is that it most heve same name and same position of argument


class Benz extends Car
{
    public $model;

    function __construct($name, $color, $model) //overided
    {
        $this->name = $name;
        $this->color = $color;
        $this->model = $model;

    }
    public function print_color()
    {
        return $this->show_color();
    }

    public function get_model()
    {
        return $this->model;
    }
}


$benz = new Benz('Mercedes', 'red', '2022');
echo $benz->print_color();

$benz->model = '2011';
echo $benz->get_model();
echo '<br>';

// access const
echo Benz::MESSAGE;

//final restricted for any extend class
// class Car
// {
//     public $name;
//     public $color;


//      function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }


//     public function get_name()
//     {

//         return $this->name;
//     }

//     private function get_color()
//     {
//         return $this->color;
//     }

// }

// class Benz extends Car
// {
//     public $model;

//     function __construct($name, $color, $model) //overided
//     {
//         $this->name = $name;
//         $this->color = $color;
//         $this->model = $model;

//     }
//     public function print_color()
//     {
//         return $this->show_color();
//     }

//     public function get_model()
//     {
//         return $this->model;
//     }
// }


// $benz = new Benz('Mercedes', 'red', '2022');
// echo $benz->print_color();

// $benz->model = '2011';
// echo $benz->get_model();






