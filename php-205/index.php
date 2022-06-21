<?php

$personType = "";

if ($_POST['age'] >= 1 and $_POST['age'] <= 19) {
    $personType = "The person is a STUDENT";
} elseif ($_POST['age'] >= 20 and $_POST['age'] <= 25) {
    $personType = "The person is an EMPLOYEE";
} elseif ($_POST['age'] >= 26 and $_POST['age'] <= 30) {
    $personType = "Have a FAMILY";
} else {
    $personType = "The person is AGELESS";
}

?>




<html>
<head>
	<title>PHP-205</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

    <?php if (isset($_POST['form_submitted'])): ?>


        <p>First Name: <?php echo $_POST['firstname'] ; ?></p>
        <p>Last Name: <?php echo $_POST['lastname'] ; ?></p>
        <p>Age: <?php echo $_POST['age'] ; ?></p>
        <p><?php echo $personType ; ?></p>
        <p>Go <a href="index.php">back</a> to the form</p>
        
        <?php else: ?>
            <form action="index.php" method="POST">
                 <label>First name: </label>
                <input type="text" name="firstname">
                <br> 
                <label?>Last name: </label>
                <input type="text" name="lastname">
                <br>
                <label>Age: </label>
                <input type="number" name="age">
			    <input type="hidden" name="form_submitted" value="1" />
                <br>
                <input type="submit" value="Submit">
            </form>
    <?php endif; ?> 
</body> 
</html>
