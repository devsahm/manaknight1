<?php
require 'flight/Flight.php';
require 'rb-mysql.php';


R::setup( 'mysql:host=localhost;dbname=manaknight_task1','root', '' );

Flight::route('/', function(){
    $orders = R::findAll('orders');
    Flight::render('home', array('orders' => $orders));
});



Flight::route('POST /paywithstrip', function(){
    
    $stripe = new \Stripe\StripeClient(
        'pk_test_51IWQUwH8oljXErmdg6L4MhsuB6tDdmumlHFfyNaopty2U27pmRcqMX1c868zn838lGQtU1eYV6bKRSQtMFWf36VT00aNsvnTOE'
      );
     $response =  $stripe->charges->create([
        'amount' => 2000,
        'currency' => 'usd',
        'source' => 'tok_mastercard',
        'description' => 'Pay for order',
      ]);

      $result = json_decode($response, true);

});

Flight::route('/product/@id', function($id){
    $order = R::load( 'orders', $id);
   Flight::render('show', array('order' => $order));
});



Flight::start();
