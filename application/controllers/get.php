<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="src/style.css">
<font face=Ubuntu>
<style>
  body { 
    background: white url("/src/shinax.png") no-repeat fixed center; 
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
<?php
$form = '<form action="get.php" method="get">
<input type="hidden" style="width:40%;" name="anti"><br>
<input type="hidden" name="fansub">
</center>
</form>';

print $form;

if(isset($_GET['anti'])){
  $anti = $_GET['anti'];
  $bangsat = 'https://www.samehada.tv/';
  $kontol = $bangsat . $anti; 
  $curl = curl_init($kontol); 
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
    $ambilkata = str_replace('<li style="text-align: center;">', '<br>', $ambilkata);
    $ambilkata = str_replace('<li>', '<br>', $ambilkata);
    $ambilkata = str_replace('target="_blank" rel="nofollow noopener noreferrer"', '', $ambilkata);
    return $ambilkata;
}



//link    
$regex = '/<div class="download-eps">(.*?)<div class="dev">/s';
if ( preg_match($regex, $page, $list) )
	
    echo '<center>',wordFilter3($list[0]),'</div><br>'; 
else 
    print "Not found";

}
function sed($text)
{
    $sed = $text;
    $sed = str_replace('-', ' ', $sed);
    $sed = str_replace('/', '', $sed);
    
    return $sed;
}

$judul = sed(strtoupper($_GET['anti']));

?>
<title><?php echo $judul,' - Download'; ?></title>
</div></div></div>
<p><center>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>

<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/smhdk</font>
</font>
</div>   

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
    <form action="/application/views/welcome_message.php?search=" method="get">
    <font face="Consolas" size="3" color="green"><p>
    SEARCH QUERY: <input type="text" style="width:20%;" placeholder="ie: Kimetsu no yaiba;kimetsu;yaiba" name="search">
    <input type="submit" value=" > ">
    </font>
    <br>
    </form><p>';
    
    echo'
    <form action="/application/views/welcome_message.php?page=" method="get">
    <font face="Consolas" size="3" color="green"><p>
    PAGE: <input type="text" style="width:2%;"  name="page">
    <input type="submit" value=" > ">
    </font>
    <br>
    </form>';
    
    
echo'</div>';
    