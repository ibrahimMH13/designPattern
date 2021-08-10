<?php
require('./adapter/PlayerInterface.php');
require('./adapter/YouTube.php');
require('./adapter/FaceBook.php');
require('./adapter/Adapter.php');
//adapter design Pattern
/*
this pattern when we are want use exists interface in or with other
interface without modify his code source
*/
$youtube = new YouTube;
$fb      = new FaceBook;
/*
we can use variables or injection class direct
*/
$adapter1 = new Adapter(new FaceBook);
$adapter2 = new Adapter(new YouTube);
echo  $adapter1->views(10);
