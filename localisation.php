<form method="post" action="">
    <input type="text" name="ipuser">
    <input type = "submit" name="localisation" value = "LOCALISER">
</form>

<?php
//error_reporting (0); pour ne pas afficher les notices
if(isset($_POST['localisation'])){
$ip = $_POST['ipuser']; 
echo $ip.'<br>';// Recuperation de l'IP du visiteur

$data = file_get_contents('http://ip-api.com/json/'.$ip); //connection au serveur de ip-api.com et recuperation des données
echo $data.'<br>';

//var_dump(json_decode($data, true));
//-----COMMENT BIEN DECRYPTER LE JSON???????????????


$ipurl = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip)); //---> RETOURNE UN TABLEAU ASSOCIATIF
if($ipurl && $ipurl['status'] == 'success') 
{
	//code avec les variables
	//echo $ipurl['country'] . "<br>" . $ipurl['city'];
	//echo "<br>";
	//var_dump($ipurl);
	echo '<pre>';

	print_r($ipurl);

	echo '</pre>';
	?>
	<a href=http://www.openstreetmap.org/#map=[<?php echo $ipurl['lat']; ?>]/[<?php echo $ipurl['lon']; ?>]>
	cartographier le point </a> 
	<?php
}else{ 
echo 'rien';
}}
?>

