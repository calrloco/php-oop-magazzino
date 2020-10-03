<?php
require_once "classes/Computer.php";
require_once "classes/Casse.php";
require_once "classes/Monitor.php";
require_once "classes/Mouse.php";
require_once "classes/Tastiera.php";
$pc=new Computer(3,'laptop','dell',
'computer desktop',300.22,300.22,'gaming','windows','1tb','17 pollici','intel');
$pc->setPrezzoAcquisto(400.30);
echo $pc->getPrezzoAcquisto();
var_dump($pc);
$cassa = new Cassa('40hz','30kw',30,'cassa','dell','dwdwdwdwdwdw',300.00,400.00,true);
var_dump($cassa);
echo $cassa->getPrezzoAcquisto();
$monitor = new Monitor(40,'16:9','4k','140hz',50,'monitor','dell','dwdwdwdwdwdw',300.00,400.00,true);
var_dump($monitor);
$mouse = new Mouse(1200,true,4,30,'mouse','dell','dwdwdwdwdwdw',30,40,false);
var_dump($mouse);
$tastiera = new Tastiera('querty','sleep',40,'tastiera','dell','dwdwdwdwdwdw',300.00,400.00,true);
var_dump($tastiera);
