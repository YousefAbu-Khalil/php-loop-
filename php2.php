<?php

#Q1

for ($i = 1; $i <= 10; $i++) {
    if ($i < 10) {
        echo $i . "-";
    } else {
        echo $i;
    }
}

echo "<br>";


#Q2

$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}

echo "Total: " . $total;

echo "<br>";

#Q3

$rows = 5;
$char = 'A';
for ($i = 0; $i < $rows; $i++) {
    for ($j = 1; $j <= $rows; $j++) {
        if ($j < $rows - $i ) {
            echo 'A ';
        } else {
            echo chr(ord($char) + $i) . ' ';
        }
    }
    echo "<br>";
}
echo "<br>";


#Q4

$rows = 5;
$num = '1';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rows; $j++) {
        if ($j < $rows - $i - 1) {
            echo '1 ';
        } else {
            echo $num + $i . ' ';
        }
    }
    echo "<br>";
}
echo "<br>";

#Q5

$size = 5;

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if ($i == $j) {
            echo ($i + 1) . ' ';
        } else {
            echo '0 ';
        }
    }
    echo "<br>";
}

echo "<br>";


#Q6

$N = 5;
$sum = 1;
for($i = 1; $i <= $N; $i++){
    $sum *= $i;
}
echo "$sum";

echo "<br>";

#Q7

function fibonacci($n) {
    $sequence = [];
    
    if ($n >= 1) $sequence[] = 0;
    if ($n >= 2) $sequence[] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
    }
    
    return $sequence;
}

$n = 10; 

$fib_sequence = fibonacci($n);
echo implode(', ', $fib_sequence);

echo "<br>";

#Q8

function countCCharacters($text) {
    $lowerText = strtolower($text);
    
    $count = 0;
    
    for ($i = 0; $i < strlen($lowerText); $i++) {
        if ($lowerText[$i] == 'c') {
            $count++;
        }
    }
    
    return $count;
}

$text = "Orange Coding Academy";
$count = countCCharacters($text);
echo "The number of 'c' characters in the text '$text' is: $count";

echo "<br>";

#Q9

echo '<table border="1" cellpadding="3px" cellspacing="0px">';
$rows = 6;
$cols = 5;

for ($i = 1; $i <= $rows; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $cols; $j++) {
        echo '<td>' . "$i * $j = " . ($i * $j) . '</td>';
    }
    echo '</tr>';
}

echo '</table>';

echo "<br>";

#Q10

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}

echo "<br>";

#Q11

function generateFloydTriangle($n) {
    $num = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
}


$n = 5;
generateFloydTriangle($n);

echo "<br>";

#Q12

function printPattern() {
    $letters = range('A', 'Z');
    $n = 5; 

    for ($i = 0; $i < $n; $i++) {
        for ($j = $n - 1; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 0; $j <= $i; $j++) {
            echo $letters[$j] . " ";
        }
        echo "<br>";
    }

    for ($i = $n - 2; $i >= 0; $i--) {
        for ($j = $n - 1; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }

        for ($j = 0; $j <= $i; $j++) {
            echo $letters[$j] . " ";
        }
        echo "<br>";
    }
}

printPattern();

echo "<br>";

#---------------------------------------------------------------------------------------------------------------------

#Q1

function IsPrime($n)
{
 for($i=2; $i<$n; $i++){
     if($n %$i ==0)
     {return 0;
    }else
    {return 1;}}
   
   }
$a = IsPrime(3);
if ($a==0){
    echo 'This is not a Prime Number.....'."<br><br>";}
    else{
    echo 'This is a Prime Number..'."<br><br>";}

echo "<br>";

#Q2

function ReverseString($string){
    return strrev($string);
}
$wordToReverse="hello" ; 
echo 'Orignal word : '. $wordToReverse. '<br>';
echo 'Reversed word : '. ReverseString($wordToReverse). '<br><br>';

echo "<br>";

#Q3

function check_lowerCase($string){
    if (ctype_lower($string)) {
        echo "$string consists of all lowercase letters. <br><br>";
     }else {
        echo "$string does not have all lowercase letters. <br><br>";
     }
    }
    check_lowerCase('qassem');

echo "<br>";

#Q4

function swap($x,$y){
    echo ' X ='. $x. ' , '. ' Y = '. $y. '<br><br>';
    $newX=$y;
    $y=$x;
    $x=$newX;
    echo ' new X ='. $x. ' , '. ' new Y = '. $y. '<br><br>';
  
  }
  swap(12,10);

echo "<br>";

#Q6

function Armstrong($n){
    $sum=0;
    for ($i = 0; $i < strlen($n); $i++){
        $sum+=substr($n, $i, 1)**3;
}
if($sum == $n){
    return "$sum  is Armstrong number <br><br>" ;
}
else{
    return "$sum is not armstrong number <br><br>";
}
}
echo Armstrong(407);

echo "<br>";

#Q7

function Palindrome($str){
    $st=str_replace(" ", '',strtolower( preg_replace("/[^A-Z a-z]/","", $str)));
      $Rst=strrev($st);
    
    if($Rst==$st){
      echo  "this string is palindrome <br><br>";
    }
    else{
       echo "this string is not palindrome <br><br>";
    }
}
Palindrome("Eva, can I see bees in a cave?");

echo "<br>";

#Q8

function removeDouble($array){
    echo print_r(array_unique($array));
    }
    removeDouble([2,4,7,4,8,4]);

echo "<br>";


function removeDuplicates($array) {
    $uniqueArray = array_unique($array);
    
    return $uniqueArray;
}

$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = removeDuplicates($array1);
print_r ($array1);


?>
