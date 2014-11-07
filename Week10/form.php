<?php
 $msg =_GET('msg');
 if ( $msg == '1' ) {
    echo '<p>Your information was submitted successfully.</p>'; 
 }
?>

<form action="core/process.php" method="post">
           
<input type="hidden" name="formID" value="form2" />
<input type="hidden" name="redirect_to" value ="http://ambreenshussain.squarespace.com" />

<p>Input: <input type="text" name="input" /></p>
<p>Input 2: <input type="text" name="input2" /></p>

<p>Textarea: <textarea rows="20" cols="30" name="textarea"></textarea></p>

<p>Dropdown:
	<select name="dropdown">
		<option value="value1">Value1</option>
		<option value="value2">Value2</option>
		<option value="value3">Value3</option>
	</select>
</p>

<p>
	<input type="radio" name="radio" value="radio1">Radio1 /><br>
	<input type="radio" name="radio2" value="radio2">Radio2 />
</p>

<p>
	<input type="checkbox" name="checkbox" value="checkbox1">Checkbox 1 /><br>
	<input type="checkbox" name="checkbox2" value="checkbox2">Checkbox 2 />
</p>

<input type="submit" name="submit" value="Submit">

</form>


  
