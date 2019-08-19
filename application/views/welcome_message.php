<title>smhdk scraper</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<font face=Ubuntu>
<style>
  body { 
    background: white url("http://smhdk.test/src/shinax.png") no-repeat fixed center; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.memek {
  margin: auto;
  background-color: #f7f3f3;
  width: 50%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

.pepek {
  margin: auto;
  background-color: #f7f3f3;
  width: 60%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

</style>
<div class="memek">
<?php

if(isset($_GET['page'])){

    function sedx($text)
    {
        $sed = $text;
        $sed = str_replace('Update Anime', '<p hidden>', $sed);
        $sed = str_replace('<a href="', '<a href="http://smhdk.test/application/controllers/get.php?anti=', $sed);
        $sed = str_replace('<b>Posted', '<font color=gray><b>Posted', $sed);
        return $sed;
    }

$babi = "/page/" . $_GET['page'] . "/";
$bangsat = 'https://www.samehadaku.tv';
$kontol = $bangsat . $babi; 
$curl = curl_init($kontol); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$target = curl_exec($curl); 
if(curl_errno($curl))
{
	echo 'error: ' . curl_error($curl);
	exit;
}
curl_close($curl);

$tag = '/<div class="dev">(.*?)<div class="pagination">/s';
if ( preg_match($tag, $target, $udah) )
	
    echo sedx($udah[0]);
else 
    print "error";    
}

if(isset($_GET['home'])){
function wordFilter($text)
{
    $sed = $text;
    $sed = str_replace('Update Anime', '<p hidden>', $sed);
    $sed = str_replace('<a href="', '<a href="http://smhdk.test/application/controllers/get.php?anti=', $sed);
    $sed = str_replace('<b>Posted', '<font color=gray><b>Posted', $sed);
    return $sed;
}
$curl = curl_init('https://www.samehadaku.tv/'); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) 
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
curl_close($curl);

$regex = '/<div class="dev">(.*?)<div class="pagination">/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter($list[0]); 
else 
    print "Not found"; 

}


if(isset($_GET['search'])){

    function sedx($text)
    {
        $sed = $text;
        $sed = str_replace('TV', '<p hidden>', $sed);
        $sed = str_replace('<div class="rating">', '<div hidden>', $sed);
        $sed = str_replace('href="', 'href="http://smhdk.test/application/controllers/series.php?anti=', $sed);
        return $sed;
    }

$babi = "?s=" . $_GET['search'];
$bangsat = 'https://www.samehadaku.tv/';
$kontol = $bangsat . $babi; 
$curl = curl_init($kontol); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$target = curl_exec($curl); 
if(curl_errno($curl))
{
	echo 'error: ' . curl_error($curl);
	exit;
}
curl_close($curl);

$tag = '/<div class="arcpad">(.*?)<div class="pagination">/s';
if ( preg_match($tag, $target, $udah) )
	
    echo sedx($udah[0]);
else 
    print "error";    
}

    


?>
</div></div></div></div>
</font>
<p>
<div class="pepek">
<font face=Ubuntu>
<font color=red><b>

<?php
$bc = basename(__FILE__);
echo "SITE: ".$_SERVER['SERVER_NAME']."<br>";
echo "FILE: ".$bc."<br>";
echo "params argument: <br><br>";
echo "
/$bc?home [mainpage]<br>
/$bc?page={1..99) [otherpages]";

    echo'
    <form action="http://smhdk.test/application/views/welcome_message.php?search=" method="get">
    <font face="Consolas" size="3" color="green"><p>
    SEARCH QUERY: <input type="text" style="width:20%;" placeholder="ie: Kimetsu no yaiba;kimetsu;yaiba" name="search">
    <input type="submit" value=" > ">
    </font>
    <br>
    </form><p>';
    
    echo'
    <form action="http://smhdk.test/application/views/welcome_message.php?page=" method="get">
    <font face="Consolas" size="3" color="green"><p>
    PAGE: <input type="text" style="width:2%;"  name="page">
    <input type="submit" value=" > ">
    </font>
    <br>
    </form>';
    
echo'</div>';
    