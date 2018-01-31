<!--Домашнее задание к лекции 1.3 «Строки, массивы и объекты»
Жестокое обращение с животными
1. Составить массив, ключами в котором будут названия континентов (на английском — Africa), значениями — массивы из латинских названий зверей (например, Mammuthus columbi – можно найти в карточке статистики о животном справа). Найдите различных зверей и составьте массив так, чтобы для ключа Africa у вас значением был бы массив из зверей, там обитавших или обитающих. Выберите только один континент для каждого животного. Пусть у вас получится 10-15 зверей.
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
print_r($array_animals); //выводим массив зверей
echo '<hr>';

// 2. Теперь найдите всех зверей, название которых состоит из двух слов. Составьте из них новый массив.
foreach ($array_animals as $continent => $animal) 
{
    foreach ( $animal as $word_counts => $words) {
       $w = str_word_count($words,0);
         if ($w == 2) {
           $new_animals[] = $words;
         }
   }
}
echo '<hr><br>Массив из названий животных из 2-х слов: <pre>';
print_r($new_animals);
echo '<hr>';

/*3. Случайно перемешайте между собой первые и вторые слова названий животных так, чтобы на выходе мы получили выдуманных, 
фантазийных животных. Название фантазийного животного должно начинаться с первого слова реального названия животного. 
Важно, чтобы каждый кусочек был использован и не повторялся более одного раза. Ничего страшного, если в результате перемешивания иногда будут получаться реальные животные. Вывести этих животных на экран.*/


foreach ($new_animals as $key => $value) 
{
    $one_word = explode(' ', $value);
    $first_word [] = $one_word[0];
    $second_word = $one_word[1];
    $shaffle_words[] = $second_word;
}

shuffle($shaffle_words);
echo '<pre> Массив перемешанных животных: ';
print_r($shaffle_words);

$i=0;
foreach ($shaffle_words as $shuffle_key => $shuffle_animal) 
{
    $shuffle_animals[] = $first_word[$i++].' '.$shuffle_animal;
}
echo '<pre> Массив перемешанных животных: ';
print_r($shuffle_animals);
  
?>
