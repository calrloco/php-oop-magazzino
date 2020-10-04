<?php
require_once "classes/Computer.php";
require_once "classes/Casse.php";
require_once "classes/Monitor.php";
require_once "classes/Mouse.php";
require_once "classes/Tastiera.php";
$pc=new Computer(3,'laptop','dell',
'computer desktop',300.22,300.22,300,'gaming','windows','1tb','17 pollici','intel');
$pc->setPrezzoAcquisto(400.30);
echo $pc->getPrezzoAcquisto();
var_dump($pc);
$cassa = new Cassa('40hz','30w',30,'cassa','omen','dwdwdwdwdwdw',200.00,210.00,30,false);
var_dump($cassa);
echo $cassa->getPrezzoAcquisto();
$monitor = new Monitor(40,'16:9','4k','140hz',50,'monitor','dell','dwdwdwdwdwdw',300.00,400.00,10,true);
var_dump($monitor);
$mouse = new Mouse(1200,true,4,30,'mouse','dell','dwdwdwdwdwdw',30,40,false,3);
var_dump($mouse);
$tastiera = new Tastiera('querty','sleep',40,'tastiera','dell','dwdwdwdwdwdw',300.00,400.00,20,true,3);
var_dump($tastiera);
