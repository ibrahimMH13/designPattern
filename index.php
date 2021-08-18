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
/*** adapter Pattern ***/
$youtube = new YouTube;
$fb      = new FaceBook;
/*
we can use variables or injection class direct
*/
$adapter1 = new Adapter(new FaceBook);
$adapter2 = new Adapter(new YouTube);
/***********************************************/
# echo $adapter1->views(10); uncomment for run #/
/***********************************************/
/*** Decorator Pattern ***/

require './decorator/Subscription.php';
require './decorator/SubscriptionFeature.php';
require './decorator/AdditionalSpaceFeature.php';
require './decorator/BasicSubscription.php';
require './decorator/SupportFeature.php';

$basicSub = new BasicSubscription;//normal class
/***********************************************/
#echo'price# '. $basicSub->price();
#echo "\n";
#echo 'description# '. $basicSub->description();
#echo "\n ****************************\n";
/***********************************************/

$basicSub2 = new AdditionalSpaceFeature(new BasicSubscription());
/***********************************************/
#echo'price# '. $basicSub2->price();
#echo "\n";
#echo 'description# '.  $basicSub2->description();
#echo "\n";
#echo "\n ****************************\n";

/***********************************************/
$basicSub3 = new SupportFeature(new BasicSubscription());
/***********************************************/
#echo'price# '. $basicSub3->price();
#echo "\n";
#echo 'description# '.  $basicSub3->description();
#echo "\n";
#echo "\n ****************************\n";

/***********************************************/
$fullFeature = new SupportFeature(new AdditionalSpaceFeature(new BasicSubscription()));
/***********************************************/
# echo'price# '. $fullFeature->price();
# echo "\n";
# echo 'description# '.  $fullFeature->description();
# echo "\n";
/***********************************************/

/*** factory Pattern ***/

require './factory/Config.php';
require './factory/UploaderFactory.php';
require './factory/AdapterFactory.php';
require './factory/Uploader.php';
require './factory/FtpAdapter.php';
require './factory/S3Adapter.php';
$config  = new Config();
# $config->get('upload.services.ftp.host');
$uploader = new UploaderFactory(new AdapterFactory);
$factory = $uploader->make($config);
$driver  = $factory->make();
$x       = $driver->upload('s','d');
 die(var_dump($x));
