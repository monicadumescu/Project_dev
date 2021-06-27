<?php

session_start();
//2
$myFile=fopen("myfile.txt",r);
for($i=1;$i<=2;$i++) {
    $content=fgets($myFile);
    echo $content;
}

//3
$cookie_name="first_access";
$cookie_value=date(Y-m-d);
setcookie($cookie_name,$cookie_value,time()+31536000,"/"); //31536000 seconds in a year
if(isset($_COOKIE[$cookie_name]))
    echo $_COOKIE[$cookie_name];

//4
$_SESSION["error_message"]="An error has occurred";
echo $_SESSION["error_message"];

//5
class Vehicle
{
    private $Brand;
    private $Name;
}
class Car extends Vehicle
{
    private $Speed;
}
class Bus extends Vehicle
{
    private $Number_of_seats;
}

//6
abstract class Plane
{
    private $Brand;
    private $Color;
    private $Size;
    abstract public function fly();
    public function seeProprieties()
    {
        echo $this->Brand, $this->Color, $this->Size;
    }
}
class  Boing extends Plane
{
    public function fly()
    {
        echo "Plane is flying";
    }
}

//7
class Train
{
    protected static $ok;
    protected $Speed;
    protected $Size;
    public static function isSafe()
    {
        if(ok==1)
            echo "Safe";
        else
            echo "Unsafe";
    }
}
class Pas_Train extends Train
{
    public function __construct($Speed,$Size)
    {
        $ok=1;
        echo $ok;
        $this->Size=$Size;
        $this->Speed=$Speed;
        self::isSafe();
    }
}

//8
interface VehicleInterface
{
    public function getCarName();
}
interface HouseInterface
{
    public function getAddress();
}
class Owner implements VehicleInterface, HouseInterface
{
    private $CarName;
    private $Address;
    public function getCarName()
    {
        return $this->CarName;
    }
    public function getAddress()
    {
        return $this->Address;
    }
}
?>