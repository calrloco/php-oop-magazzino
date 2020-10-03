<?php
require_once "classes/Computer.php";
require_once "classes/Casse.php";
$pc=new Computer(3,'laptop','dell',
'computer desktop',300.22,300.22,'gaming','windows','1tb','17 pollici','intel');
$pc->setPrezzoAcquisto(400.30);
echo $pc->getPrezzoAcquisto();
var_dump($pc);
$cassa = new Cassa('40hz','25w',true,10,'casse','yamaha','casse da paura',100.00,170.00);
var_dump($cassa);
