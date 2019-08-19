<title>smhdk | Download</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="src/style.css">
<font face=Ubuntu>

<?php
$form = '<form action="get.php" method="get">
<input type="hidden" style="width:40%;" name="anti"><br>
<input type="hidden" name="fansub">
</center>
</form>';

print $form;

if(isset($_GET['anti'])){
$anti = $_GET['anti'];
$curl = curl_init($anti); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) 
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

print '<div class="memek"><br>';
//anime info    
function wordFilter3($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('<div id="breadcrumbs">', '<div hidden>', $ambilkata);
    $ambilkata = str_replace('<span class="leftoff">', '<span hidden>', $ambilkata);
    $ambilkata = str_replace('<span>', '<span hidden>', $ambilkata);
    $sed = str_replace('href="', 'href="http://localhost/smhdk/application/controllers/get.php?anti=', $sed);
    return $ambilkata;
}



//link    
$regex = '/<div id="content">(.*?)<div class="ongsr">/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter3($list[0]),'</div><br>'; 
else 
    print "Not found";

}

?>
</div></div></div>
<p><center>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>

<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/antifansub</font>
</font>
</div>   