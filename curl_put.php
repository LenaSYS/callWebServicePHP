<?php
    //display errors - remove for production
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // target to be changed is set to Johan
    $url = "https://wwwlab.iit.his.se/bjuj/test/recieve.php?name=Johan";

    //data to be changed (could be a value from an input field in a html form) is 'pet' and it should be set to "BlackCat"
    $senddata["pet"]="BlackCat";


    $ch = curl_init();  //initializing the curl request
    curl_setopt($ch, CURLOPT_URL, $url); //set URL
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT"); // set the request type (GET, POST, PUT, DELETE... https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods )
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($senddata)); // our data to be sent
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // the returnvalue is set to be delivered as a string


    // want to know more about the curl_setopt? -> https://www.php.net/manual/en/function.curl-setopt.php 

    $result = curl_exec($ch); // send the request and fetch the result into the $result variable
    curl_close($ch);

    //uncomment the line below if you want to see the output from the recieved data
    //echo "<br>Sending: " .  $result ."<br>";

    $resultArr = json_decode($result, true); //decode the result, in this case its json and we turn it into an array. 

    //output the result 
    echo "<pre>";
    print_r($resultArr);
    echo "<pre>";    