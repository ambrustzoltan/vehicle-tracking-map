<?php
$url = "https://qjksbecjfhrqgjgurlqv.supabase.co";
$apiKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InFqa3NiZWNqZmhycWdqZ3VybHF2Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTc1MDgwNzAsImV4cCI6MjA3MzA4NDA3MH0.f2AqfGIlQ_TiNE6siQeTIVvX0HE4boBtLoZL7qoqfZs";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "apikey: $apiKey",
    "Authorization: Bearer $apiKey"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

header('Content-Type: application/json');
echo $response;
