<?php 

$fileList = glob('*');
 
//Loop through the array that glob returned.
foreach($fileList as $filename){
   //Simply print them out onto the screen.
    $posts[] = array('lazyload'=> $filename, 'url'=> $filename,'tag'=>$filename,'key'=>$filename);
}

$response['posts'] = $posts;

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);

