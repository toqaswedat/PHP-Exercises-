<?php  
echo "Q1<br>";
$string ="toqa swedat";
echo strtolower($string);
echo "<br> ";
echo strtoupper($string);
echo "<br> ";
echo ucfirst($string);
echo "<br> ";
echo ucwords($string);
echo "<br> Q2 <br>";
$str="085119";
$date = DateTime::createFromFormat('his', $str);
echo $date->format('H-i-s');
echo "<br> Q3 <br>";
$world="i am a full stack";
if (strpos($world , "am") !== false)
echo "Word Found!";
echo "<br> Q4 <br>";
$url  = 'www.orange.com/index.php';
$user = strstr($url, '/', false);
echo $user;
echo "<br> Q5 <br>";
$url  = 'info@orange.com';
$user = strstr($url, '@', true);
echo $user;
echo "<br> Q6 <br>";
$url  = 'info@orange.com';
$user = strstr($url, '.', false);
echo $user;
echo "<br> Q7 <br>";
function password(){
$alphabet = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    return substr(str_shuffle($alphabet), 0, 8);
}
echo password();
echo "<hr> ";
echo "Q8 <br>";
$str = 'That new trainee is so genius.';
echo preg_replace('/That/', 'the', $str);
echo "<br> Q9 <br>";
$string1 = 'dragonball';
$string2 = 'dragonboll';
$pos = strspn($string1 ^ $string2, "\0");
printf(
    ' %d: %s vs %s',
    $pos, $string1[$pos], $string2[$pos]
);
echo "<br> Q10 <br>";
$namea = array("Twinkle","twinkle","little start");
var_dump($namea);
echo "<br> Q11 <br>";
$letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$letter="B";
for ($i=0; $i < count($letters) ; $i++){
    if($letter == $letters[$i])
        echo $letters[$i+1];
    // else if($i == count($letters))
    //     $i=0; 

}
echo "<br> Q12 <br>";
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string;
echo "<br> Q13 <br>";
$zero='0000065722.24';
echo ltrim($zero, '0');
echo "<br> Q14 <br>";
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str);
echo "<hr> ";
echo "Q15 <br>";
$my_str = 'The quick brown fox jumps over the lazy dog ---';
echo str_replace("---", "", $my_str);
echo "<br> Q16 <br>";
$str = '"1+2/3*2:2-3/4*3';
$res = str_replace( array( '\'', '"','+' , '*', ':', '/', '-' ), ' ', $str);
echo $res;
echo "<br> Q17 <br>";
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));
echo "<br> Q18 <br>";
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
echo $x;
echo "<br> Q19 <br>";
for ($x = ord('a'); $x <= ord('z'); $x++)
echo chr($x);










?>