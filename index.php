<?php


use DesignPattern\adapter\Adapter;
use DesignPattern\adapter\FaceBook;
use DesignPattern\adapter\YouTube;
use DesignPattern\decorator\AdditionalSpaceFeature;
use DesignPattern\decorator\BasicSubscription;
use DesignPattern\decorator\SupportFeature;
use DesignPattern\factory\AdapterFactory;
use DesignPattern\factory\Config;
use DesignPattern\factory\UploaderFactory;
use DesignPattern\observer\MailingSignUp;
use DesignPattern\observer\spl\MailingSignUpTwo;
use DesignPattern\observer\spl\UpdateMailingDatabaseTwo;
use DesignPattern\observer\SubscribeUserToMailList;
use DesignPattern\observer\UpdateMailingDatabasesStatus;
use DesignPattern\observer\User;
use DesignPattern\singleton\AppConfig;
use DesignPattern\specification\IsActive;
use DesignPattern\specification\Lesson;
use DesignPattern\specification\validator\Validator;
use DesignPattern\strategy\Cat\Actions\Move\Jump;
use DesignPattern\strategy\Cat\Actions\Sound\Growl;
use DesignPattern\strategy\Cat\Actions\Sound\Meow;
use DesignPattern\strategy\Cat\Cat;
use DesignPattern\strategy\src\App\config\Config as StrategyConfig;
use DesignPattern\strategy\src\App\Parse\ArrayParser;
use DesignPattern\strategy\src\App\Parse\JsonParser;

require './vendor/autoload.php';
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
#echo $adapter1->views(10); //uncomment for run #/
/***********************************************/

/*** Decorator Pattern ***/

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

$config  = new Config;
$config->get('upload.services.ftp.host');
$uploader = new UploaderFactory(new AdapterFactory);
$factory  = $uploader->make($config);
$driver   = $factory->make();
$result   = $driver->upload('s','d');
#echo $result;
/***********************************************/

/*** Observer Pattern ***/

# part 1#
$event = new MailingSignUp(new User);
$event->attach(new UpdateMailingDatabasesStatus);
$event->attach(new SubscribeUserToMailList);
$event->detach(new UpdateMailingDatabasesStatus);
#die(var_dump($event));
#$event->notify();

#part 2#
$event2 = new MailingSignUpTwo(new User);
$event2->attach(new UpdateMailingDatabaseTwo);
#$event2->notify();
#die(var_dump($event2));

/***********************************************/

/*** Singleton Pattern ***/

$config = AppConfig::getInstance();
$anotherConfig = AppConfig::getInstance();
#$config3 = new AppConfig(); should error appear
#$config4 = clone $config;   should error appear
#die(var_dump($config===$anotherConfig));

/***********************************************/

/*** Specification Pattern ***/

$lesson = new Lesson;
$isActive = (new IsActive)->isSatisfiedBy($lesson);

$validator = new Validator;
$valid     = $validator->IsString()->IsGreatThan(2)->withInput(46546)->isValid();

#die('<prev>'.var_dump($valid));

/***********************************************/

    /*** Strategy Pattern ***/
$cat  = new Cat(new Meow,new Jump);
$lion = new Cat(new Growl,new Jump);
#echo $cat->sound();
#echo "\n";
#echo $cat->move();
#echo "\n ********\n";
#echo $lion->sound();
#echo "\n";
#echo $lion->move();
#echo "\n change cat at run time\n";
#$cat->setSound(new Growl);
#echo  $cat->sound();
#die(var_dump($cat));

//Part 2 - realy Example

$config =new StrategyConfig(new ArrayParser);
$config->load('strategy/src/Config/databases.php');
$config->setParser(new JsonParser());
$config->load('strategy/src/Config/databases.json');
#die(var_dump($config));
