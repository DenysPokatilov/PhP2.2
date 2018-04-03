<?php
/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 04.04.2018
 * Time: 00:22
 */


class Car
{
    public function __construct()
    {
        echo 'Created new car';
    }

    private $price = 2645.545545;
    public $brand = 'someBrand';
    public $model = 'someModel';
    public $year = null;
    public $driver = null;

    public function setVal($val)
    {
        $this->price = $val;
        $formt = round($val, 2);
        echo $formt;
    }

    public function getVal()
    {

        return $formatirovanayaper = number_format($this->price);

    }

    public function showBrand()
    {
        echo $this->brand . " ";

    }

    public function showModel()
    {
        echo $this->model . " ";

    }

}

class ContactForm
{

    public $name;
    public $phone;
    public $email;
    public function __construct()
    {

    }
}

class Stat {
    public static $count=1;

    public function __construct()
    {
       echo "Have been created".self::$count ++. "object";
        echo '</br>';

    }
}
$per= new Stat();
$vtor=new Stat();
$tret=new Stat();




if ($_POST) {
    $newcar1 = new ContactForm();
    $arr = ($_POST);
    var_dump($arr);

} elseif ($_POST==null){
    echo "You didn't feel the form";
}