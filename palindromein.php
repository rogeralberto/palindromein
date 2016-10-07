<?php
/**
 *
 *
 * @category   Evaluate a palindromein word
 * @author     Roger Olivares Agelvis
 * @copyright  2016 Roger Olivares
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    1.0
 * @since      File available since Release 1.0
 */

// Array of words
$wordArray = ['Rotomotor', 'Ama', 'Casa', 'Tato'];

// how many words are in the Array
$count = count($wordArray) -1;

// Choose a word randomly
$random = rand(0, $count);

// The word from the array to evaluate
$word = strtolower($wordArray[$random]);

// An empty array
$word_array = [];

// The length of the word to evaluate
$length = strlen($word);

//While $length is distinct of 0 (false)
while($length){

//Decrese the value till is 0 (false)
$length--;

// Make a new array with each word starting from the last letter
array_push($word_array, $word[$length]);

// join the new word so i can compare with the original word
$join = join("", $word_array);
}

echo "The word to evaluate is: ". $word . "<br />";
echo "The inverse of that word is: ". $join . "<br />";

// If both words are equal then that word is palindromein and echo the message.
if ($join == $word){
  echo "<br />That word Is a palindrome";

}else{
  echo "<br />That word Is not a palindrome";

}
