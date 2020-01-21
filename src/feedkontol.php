<?php 
header('Content-Type: text/xml');
$url = 'https://www.samehadaku.tv/feed/';

function wordFilter($text)
{
    $ambilkata = $text;

    $ambilkata = str_replace('https://www.samehada.tv/', 'https://aqua.sinkaroid.org/application/controllers/get.php?anti=', $ambilkata);
    $ambilkata = str_replace('<dc:creator><![CDATA[Samehadaku]]></dc:creator>', '', $ambilkata);
    $ambilkata = str_replace('Sinopsis', '</dc:creator>
    <description>Sinopsis', $ambilkata);
    $ambilkata = str_replace('<description><![CDATA[', '</dc:creator>', $ambilkata);
    $ambilkata = str_replace('<description>', '<description><![CDATA[<p>', $ambilkata);
    $ambilkata = str_replace('<description><![CDATA[<p>Situs Download Anime Terbaru Subtitle Indonesia</description>', '<description>Situs Download Anime Terbaru Subtitle Indonesia</description>', $ambilkata);
    return $ambilkata;
}
echo wordFilter(file_get_contents($url));