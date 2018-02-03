<!--Жестокое обращение с животными
Составить массив, ключами в котором будут названия континентов (на английском — Africa), значениями — массивы из латинских названий зверей (например, Mammuthus columbi – можно найти в карточке статистики о животном справа). Найдите различных зверей и составьте массив так, чтобы для ключа Africa у вас значением был бы массив из зверей, там обитавших или обитающих. Выберите только один континент для каждого животного. Пусть у вас получится 10-15 зверей.
Теперь найдите всех зверей, название которых состоит из двух слов. Составьте из них новый массив.
Случайно перемешайте между собой первые и вторые слова названий животных так, чтобы на выходе мы получили выдуманных, фантазийных животных. Название фантазийного животного должно начинаться с первого слова реального названия животного. Важно, чтобы каждый кусочек был использован и не повторялся более одного раза. Ничего страшного, если в результате перемешивания иногда будут получаться реальные животные. Вывести этих животных на экран.
Дополнительно:
Сохраните названия регионов, к которым относятся ваши звери. Принадлежность определяйте по изначальной принадлежности первого кусочка названия животного. Пусть названия регионов выводятся заголовками <h2>, а под ними – относящиеся к этому региону животные.
Между животными выводите запятые. В конце не должно быть висящих запятых, неуместных по правилам пунктуации.-->

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