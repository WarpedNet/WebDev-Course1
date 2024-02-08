<?php
	// Challenge #1
	/*
	 * A Functions!
	 */
	function cat()
	{
	    $dog = dog();
	    // $dog = strtoupper($dog);

	    return $dog;
	}

	/* Another function */
	function dog()
	{
	    return 'Molly';
	}

	$var = cat();
	echo $var; echo ' the dog'; // echo '!';
?>

<?php
	// Challenge #2
	function hello()
	{
	    echo 'Hello World!';
	}

	$func = 'hello';
	$func();
?>