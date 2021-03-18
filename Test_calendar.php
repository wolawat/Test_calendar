<?php

 include "Calendar.php";

 use PHPUnit\Framework\TestCase;

 class Test_calendar extends TestCase{
     private $calendar;

     public function setUp():void{
         $this->calendar = new Calendar();
     }

     public function testAdd1(){
         $this->assertEquals('Wednesday',$this->calendar->showDay(03,02));
     }

     public function testAdd2(){
        $this->assertEquals('Friday',$this->calendar->showDay(15,01));
    }

    public function testAdd3(){
        $this->assertEquals('Tuesday',$this->calendar->showDay(20,04));
    }

    
 }