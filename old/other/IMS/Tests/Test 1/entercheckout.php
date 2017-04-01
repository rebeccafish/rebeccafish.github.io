<?

$username="robf06_admin";
$password="Admin1";
$database="robf06_ims";

$first=$_POST["first"];
$last=$_POST["last"];
$email=$_POST["email"];
$equipment=$_POST["equipment"];
$inventory=$_POST["inventory"];
$date_out=$_POST["dout"];
$date_expected=$_POST["dexpected"];

mysql_connect("mysql1206.hostexcellence.com",$username,$password);
@mysql_select_db($database) or die("Unable to select database");

$query = "INSERT INTO inventory (FIRST_NAME, LAST_NAME, EMAIL, TYPE, INVENTORY_ID, DATE_OUT, EXPECTED_DATE) VALUES ('".$first."', '".$last."', '".$email."', '".$equipment."', '".$inventory."', '".$date_out."', '".$date_expected."')";
$result = mysql_query($query);

if ($result) {
	echo "Data was inserted! <br/>";
} else echo "An error during insert! <br/>";

?>

<html>
<br>
<a href="http://rebeccafish.com/IMS/getdata.php">Get data!</a>
</html> 