<?php

/**
 * Pass the remote address of the visitor's IP to the API and check
 * the resulting country code against the list of americas regions.
 *
 * The list of americasCountries comes from the Americas region as set in the PMA database
 *
 * CS 20-DEC-2016 NAINC0018245192 Added
 *
 */
function getCountryFromIp() {


        //error_log("getting country for your IP");

            

        $ch = curl_init('http://geoip.nekudo.com/api/' . $_SERVER['REMOTE_ADDR']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $geoip = json_decode($result);
         
        if ($geoip) {
            $countryCode = $geoip->country->code;
            return $countryCode;

            
        }
        else {
            // No results returned from the API
            // return country US
            //error_log("no results from API, call getCountyFromURL");
           
            return "US";
        }
} 
?>