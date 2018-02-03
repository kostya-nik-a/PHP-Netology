<?php
 
$array_animals = [
  'Eurasia' => ['Canis vulpes','Cervus elaphus','Ursus aretos','Equus przewa lskii','Lynx'],
  'South_America' => ['Delichon urbica','Emberiza pusilla','Iris Bloudowi'],
  'North_America' => ['Erignathus barbatus','Gulo','Alces alces','Bison americanus'],
  'Africa' => ['Macropus','Panthera leo','Anthropoidea Platyrrhini','Elephantidae','Giraffa camelopardalis'],
  'Australia' => ['Ornithorhynchus anatinus','Phascolarctos cinereus','Dromaius novaehollandiae','Vombatidae']
];

echo '<pre>';
print_r($array_animals);
echo '<hr>';

$new_animals = [];
$first_word = [];
$second_word = []; 
$unreal_animals = [];

foreach ($array_animals as $continent => $animals) {
    foreach ($animals as $one_animal) {
        if (substr_count($one_animal, ' ') == 1) {
            $new_animals[$continent][] = $one_animal;
            $animal_name = explode(" ", $one_animal);
            $first_word[$continent][] = $animal_name[0];
            $second_word[] = $animal_name[1]; 
        }
    }         
}

echo "<pre>";
print_r($new_animals);
echo '<hr>';

echo "<pre>";
shuffle($second_word);

$i = 0;
foreach ($first_word as $continent => $shuffle_animal) {
    foreach ($shuffle_animal as $animal) {
        $unreal_animals[$continent][] = $animal." ".$second_word[$i++];
    }
}

echo "<pre>";
print_r($unreal_animals);
echo '<hr>';

foreach ($unreal_animals as $continent => $animals) {
  echo "<h2>$continent</h2>";
  echo implode(', ', $animals);
}
?>
