<?php

// const getShows = async ()=>{
//     const response = await fetch('https://movies-api14.p.rapidapi.com/shows',{
//         method:'GET',
//         headers : {
//             'X-RapidAPI-Key' : '7c7698be5bmsh7c5dfd2c59c48ebp184eedjsn3c5a85f257be',
//             'X-RapidAPI-Host' : 'movies-api14.p.rapidapi.com'
//         }
//     });
//     const data = await  response.json();
//     console.log(data);
// }
// getShows();
$url = "https://movies-api14.p.rapidapi.com/shows";

$curl = curl_init($url);

// $curl = curl_init();
// curl_setopt($curl,CURLOPT_URL,$url);

curl_setopt($curl,CURLOPT_HTTPHEADER,([
    'X-RapidAPI-Key : 7c7698be5bmsh7c5dfd2c59c48ebp184eedjsn3c5a85f257be',
    'X-RapidAPI-Host : movies-api14.p.rapidapi.com'
]));

curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$resposne = curl_exec($curl);
curl_close($curl);

echo $resposne; exit;



?>