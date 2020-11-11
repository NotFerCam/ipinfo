<?php
    
    use ipinfo\ipinfo\IPinfo;
        
    $client = new IPinfo();
    $ip_address = '192.168.1.144';
    $details = $client->getDetails($ip_address);
    $detail->city;    
    $details->loc;
    $details->country_name;            
?>