<html>
<head>
	<title> Borrow an item </title>
</head>

<form action="handle_form.php" method = "post">

<fieldset><legend>Enter your information in the form below:</legend>

<p> <b> 1. Name: </b>
<input type="text" name="name_first" size="15" maxlength="20" value="First"> <!-- add stickiness later? -->
<input type="text" name="name_last" size="15" maxlength="20" value="Last"/>
<input type="checkbox" name="sponsor" value="sponsor"> I have a sponsor:
<input type="text" name="sponsor_name" size="10" maxlenth="20" value="Name">
<input type="text" name="sponsor_email" size="10" maxlenth="20" value="Email">
</p>

<p> <b> 2. Email Address: </b>
<input type="radio" name="email" value="whitman email" /> Whitman email
<input type="radio" name="email" value="other" /> Other:
<input type="text" name="email" size="20" maxlength="30"
/></p>

<p> <b> 3. I would like to check out: </b>
<select name="equipment">
	<option selected> Equipment </option>
	<option> --- </option>
	<option value="data projector"> data projector </option>
	<option value="digital audio recorder"> digital audio recorder </option>
	<option value="laptop (mac)"> laptop (Mac) </option>
	<option value="laptop (PC)"> laptop (PC) </option>
	<option value="microphone"> microphone </option>
	<option value="MiniDV camcorder"> MiniDV camcorder </option>
	<option value="screen"> screen </option>
	<option value="tripod"> tripod </option>
</select>
<select name="inventory_id">
	<option selected> Inventory ID </option>
	<option> --- </option>
	<option value="1034"> 1034 </option>
	<option value="9045"> 9045 </option>
</select>

I will return it by: </b>
<select name="return_month">
	<option selected> Month </option>
	<option> --- </option>
	<option value="January"> January </option>
	<option value="February"> February </option>
	<option value="March"> March </option>
	<option value="April"> April </option>
	<option value="May"> May </option>
	<option value="June"> June </option>
	<option value="July"> July </option>
	<option value="August"> August </option>
	<option value="September"> September </option>
	<option value="October"> October </option>
	<option value="November"> November </option>
	<option value="December"> December </option>
</select>
<select name="return_day">
	<option selected> Day </option>
	<option> --- </option>
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
	<option value="31"> 31 </option>
</select> </p>

</fieldset>

<div align="center">
<input type="submit" name="submit" value= "Borrow item!" /> </div>

</form>

</body>
</html>

