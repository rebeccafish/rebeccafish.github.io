<?php #login_page.inc.php

//Prints errors associated with logging in and creates the login page

$page_title = 'Borrow Equipment';

//Include header and title graphic
require ('header.html');
require ('title_borrow_equipment.html');

//Print any errors
if (!empty($errors)) {
	echo '<span class="error"> <br/>';
	foreach ($errors as $msg) {
		echo "$msg<br/>\n</span>";
	}
}


//Print form
?>

<div id="box">
<form name="Borrow_Equipment" action="borrow_equipment.php" method="post">
<fieldset>
<ul> 
<li> Name: <br/>
<input type="text" name="name_first" size= "10" maxlength="20" value="First"/> <input type="text" name="name_last" size= "10" maxlength="20" value="Last"/> 
<input type="checkbox" name="sponsor" value="true" /> <label> I have a faculty sponsor </label>
</li> </ul>

<ul>
<li> Email: <br/>
<input type="radio" name="email" value="whitman_email" /> <label> PHPemailhere@whitman.edu </label> 
<input type="radio" name="email" value="other_email" /> <label> Other: </label> <input type="text" name="email" size= "10" maxlength="20" />
</li> </ul>

<ul>
<li> I would like to check out: <br/>
<table>
<tr>
	<td> <label for="equipment">Equipment</label> </td>
	<td> <label for="call_number">Inventory ID</label> </td>
	<td> <label for="return_month">Return Date</label> </td>
</tr>
<tr> 
<td> <select name="equipment"> 
	<option value="data_projector"> Data Projector </option>
	<option value="digital_audio_recorder"> Digital Audio Recorder </option>
	<option value="mini_dv"> MiniDV </option>
	<option value="laptop_mac"> Laptop (Mac) </option>
	</select> </td>
<td> <select name="call_number"> 
	<option value="1023"> 1023 </option>
	<option value="08-034AP"> 08-034AP </option>
	</select> </td>
<td> <select name="return_month"> 
	<option value="january"> Jan. </option>
	<option value="february"> Feb. </option>
	<option value="march"> Mar. </option>
	<option value="april"> Apr. </option>
	<option value="may"> May </option>
	<option value="june"> Jun. </option>
	<option value="july"> Jul. </option>
	<option value="august"> Aug. </option>
	<option value="september"> Sep. </option>
	<option value="october"> Oct. </option>
	<option value="november"> Nov. </option>
	<option value="december"> Dec. </option>
	</select>
	<select name="return_day"> 
	<option value="1"> 1 </option>
	<option value="2"> 2 </option>
	<option value="3"> 3 </option>
	<option value="4"> 4 </option>
	<option value="5"> 5 </option>
	<option value="6"> 6 </option>
	<option value="7"> 7 </option>
	<option value="8"> 8 </option>
	<option value="9"> 9 </option>
	<option value="10"> 10 </option>
	<option value="11"> 11 </option>
	<option value="12"> 12 </option>
	<option value="13"> 13 </option>
	<option value="14"> 14 </option>
	<option value="15"> 15 </option>	
	<option value="16"> 16 </option>
	<option value="17"> 17 </option>
	<option value="18"> 18 </option>	
	<option value="19"> 19 </option>
	<option value="20"> 20 </option>
	<option value="21"> 21 </option>
	<option value="22"> 22 </option>
	<option value="23"> 23 </option>
	<option value="24"> 24 </option>
	<option value="25"> 25 </option>
	<option value="26"> 26 </option>
	<option value="27"> 27 </option>
	<option value="28"> 28 </option>
	<option value="29"> 29 </option>
	<option value="30"> 30 </option>
	<option value="31"> 31 </option> <!--javascript to change this depending on month?-->
	</select> </td>
<td> <button class="add_item" type="button" name="add_item" value="borrow_item"/> </td>
</tr>
</table>
</li> </ul>
<button class="submit" type="submit" name="submit"/>
</fieldset>
<!--
<label for: "whitman_username" class="label"> Whitman username: </label> <input type="text" name="Whitman_username" size= "10" maxlength="8" class="form_field"/>
<div id="button_list">
<button class="button1" type="submit" name="borrow_item" value="borrow_item"> <span class="label"> <strong class="highlight">BORROW</strong><br /> equipment </span></button>
<button class="button2" type="submit" name="return_item" value="return_item"> <span class="label"> <strong class="highlight">RETURN</strong><br /> equipment </span></button>
<button class="button3" type="submit" name="retrieve_records" value="retrieve_records"> <span class="label">retrieve<br /> records </span></button>
-->
</form>
</div>


<?php 
//Include footer
require ('footer.html');
?>