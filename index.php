<?php 
$access_token = 'cuzL/CPJOOd4+CUzCYvayss3Rd7MJveN+uMb8va3XSfVYrih8pJLOMWj68xv4cXNkbO2E/Hyiq6Y3IcX7SwpXHKF3X4G5tbIv53pXFp8IKR8D3P3a+2ilPwTo1hHdpQN6Hh04HqKNGqugliqBQB2FQdB04t89/1O/w1cDnyilFU='

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

