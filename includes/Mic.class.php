<?php

/**
*Access Specifier
*---------------------
*public
*private
*protected

*(different type of visibilty)
*/

class Mic {

    //properties
    private $brand;
    public $color;
    public $usb_port;
    private $model;
    public $light;
    public $price;

    public static function testFunction() {
        printf("This is a static function, this can be run without object initialization.\n");

    }

    public function __construct($brand){
        print("Hello, World\n");
        $this->brand = ucwords("\n".$brand. "\n");
    }

    public function setLight($light) {
        print($light);
        print($this->light);
    }
    public function getBrand(){
        return $this->brand;
    }

    private function getModel(){
        return $this->model;
    }

    public function getModelProxy(){
        return $this->getModel();
    }

    public function setModel($model) {
        $this->model = ucwords($model);
    }

    public function __destruct() {
        print("Destruct object $this->brand...");
    }
}