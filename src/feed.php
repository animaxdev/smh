<?php 
header('Content-Type: text/plain');
$url = 'https://www.samehadaku.tv/feed/';

function wordFilter($text)
{
    $ambilkata = $text;

    $ambilkata = str_replace('https://www.samehada.tv/', 'https://aqua.sinkaroid.org/application/controllers/get.php?anti=', $ambilkata);

    return $ambilkata;
}
echo wordFilter(file_get_contents($url));