<?php 

$animals = [
  'cat',
  'dog',
  'bunny',
  'turtle',
  'koala',
  'elephant',
  'hipo',
  'bird',
  'mamal'
]; 

function toaster($thing){

echo '<li>' . 'toasting ' . $thing . '.</li>';

}

echo '<ul>';
foreach($animals as $animal){
	toaster($animal);
}
echo '</ul>';


?>