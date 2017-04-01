<?
$username="robf06_admin";
$password="Admin1";
$database="robf06_ims";

mysql_connect("mysql1206.hostexcellence.com",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM inventory";
$result=mysql_query($query);

$num=mysql_num_rows($result);
echo $num;

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {

$first=mysql_result($result,$i,"FIRST_NAME");
$last=mysql_result($result,$i,"LAST_NAME");
$email=mysql_result($result,$i,"EMAIL");
$equipment=mysql_result($result,$i,"TYPE");
$inventory=mysql_result($result,$i,"INVENTORY_ID");
$date_out=mysql_result($result,$i,"DATE_OUT");
$date_expected=mysql_result($result,$i,"EXPECTED_DATE");

echo "<b> $first $last</b><br>
Email Address: $email<br>
Equipment: $equipment<br>
Inventory ID: $inventory<br>
Date Checked Out: $date_out<br>
Date Expected: $date_expected<br><hr><br>";

$i++;
}

?>