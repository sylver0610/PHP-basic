<?php
require 'vendor/autoload.php';
use App\user;
use App\comment;

$user1 = new user(1,'Name1','Name1@gmail.com','pass1');
$user2 = new user(2,'Name2','Name2@gmail.com','pass2');

echo 'Email: ' .$user1->getEmail() .'<br>';

echo 'Pass old: '. $user2->getPass() . '<br>';

$user2->setPass('newPass2');
echo 'Pass old: '. $user2->getPass() . '<br>';

echo 'Time1: '.$user1->timeCreated() . '<br>';

echo 'Time2: '.$user2->timeCreated() . '<br>';


echo '--------------------'.'<br>';
//$date = new DateTime('NOW');
//echo $date->format('d-m-Y');
//echo ' Run ';
$ct1 = new comment($user1,['abc','123','crf']);
$comt2 = new comment($user2,['hahaha','xaxaxa','hihihi','huhuhu']);
//$ct1->get();
$mydate = ("1-4-2022");
$ct1->getMess($mydate);
$comt2->getMess($mydate);