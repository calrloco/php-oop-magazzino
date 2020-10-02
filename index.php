<?php
require_once "classes/Computer.php";
$pc=new Computer(3,'laptop','dell',
'computer desktop',300.22,300.22,'gaming','windows','1tb','17 pollici','intel');
$pc->setPrezzoAcquisto(4000);
var_dump($pc);
