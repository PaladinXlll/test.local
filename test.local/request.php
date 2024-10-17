<?php

// $market_ask = 'usdt';
// $market_bid = 'rub';

// $request = file_get_contents("https://garantex.org/api/v2/depth?market={$market_ask}{$market_bid}");

// $request = json_decode($request, true);

// $ask = ($request['asks'])[0]; //sell
// $bid = ($request['bids'])[0]; //buy

// $ask_price = $ask['price'];
// $bid_price = $bid['price'];





//   // Plaintext password entered by the user 
//   $plaintext_password = "4BNL_V5D0y"; 
  
//   // The hashed password retrieved from database 
//   $hash =  
// '$2y$10$Ln5uMqdnUFE6F44uPX8.lufKpHMC5hCfd41corZsCmR5txqSoXH/.'; 
  
//   // Verify the hash against the password entered 
//   $verify = password_verify($plaintext_password, $hash); 
  
//   // Print the result depending if they match 
//   if ($verify) { 
//       echo 'Password Verified!'; 
//   } else { 
//       echo 'Incorrect Password!'; 
//   } 

function atata() {
  $name = $_POST['name'];
  $comment = $_POST['toewn'];
  echo "$name, $comment";
};

atata();
