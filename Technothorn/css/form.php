<?php
//variable setting
$name = $_REQUEST['name'];
//check if input is empty
if(empty($name))
{
	echo 'Please fill the necessary field';
}
else
{
	mail('aditi.lohomi.11@gmail.com', 'Technothorn')
	echo '<script type = 'text/javascipt'>alert('Thank you for responding. Hold the line , our Team will contact you soon!');
			window.history.log(-1);
			<>/script'
}
?>