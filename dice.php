<?php

/**
 * Very simple diceware password generator
 * 
 * Obviously nothing fancy going on so don't use if you're a secret government agency
 * or the like.
 * 
 * I needed to generate some reasonable passwords to import new users to a site and couldn't
 * find a super handy word list.
 * 
 * stephen @ millipedia
 * November 2020
 * 
 * https://millipedia.com/
 * 
 */

$words = file('reasonable_words.txt');

$no_of_words = count($words);


if(!isset($html_flag)){
    // our defaults if we've loaded this from the command line.
    // be nice to pass parameters in one day.
    $no_of_words_in_passphrase = 5;
    $required_entries = 25;
}

$password_list = array();

for ($i = 0; $i < $required_entries; $i++) {

    $pass = array();
    $tick = 0;

    // generate a password
    while ($tick < $no_of_words_in_passphrase) {

        // hah - we need $no_of_words -1 cos count gives the number
        // of items and not the index (obvs). We actually saw this error when
        // trying to pick the last word in the list. 

        $index = random_int(0, ($no_of_words-1)); 
        
        $pass[] = trim($words[$index]);

        $tick++;
    }

    $passphrase = implode("-", $pass);

    // let's add a number (but not zero)
    $passphrase .= '-' . rand(2, 9);
    
    //  and a capital letter (but not O or I)
    $cromulent_letters = "ABCDEFGHJKLMNPQRSTUVWXYZ";
    $string_length=strlen($cromulent_letters);
    $string_index=mt_rand(0, $string_length-1);
    $passphrase .=  $cromulent_letters[$string_index];
    

    // I can't believe this is ever practically going to happen but let's check we don't have this already...
    if(in_array($passphrase,$password_list)){
        $i--;
    }else{
        // add it to the list.
        $password_list[] = $passphrase;
    }

}

// and echo out list either as html if we're from the webpage
// or just std out. You can pipe it to a file if you need.
foreach ($password_list as $l) {

    if(isset($html_flag) && $html_flag){

        echo '<div>' . $l .'</div>';

    }else{
        echo $l . PHP_EOL;
    }

}
