<?php
	// Challenge #1
	$walker1 = 'Kitty';	// index of 0
	$walker2 = 'Tiger';	// index of 1
	$walker3 = 'Jay';	// index of 2

	$dogWalkers = [$walker1, $walker2, $walker3];
	$dogWalkers[] = 'Bear';	// index of 3
?>

<?php
	// Challenge #2
	$animals = array('cat', 'dog', 'hamster');
	// let's add a new animal!
	$animals[2] = 'elephant';	// Changes what is at the index / key of 2 (hamster) to elephant, also the comment above is wrong, it replaces an animal not adds an animal

	echo count($animals);
?>