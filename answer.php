<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <meta charset="UTF-8"/>
    <title>test</title>
</head>



<?php

function isPalindrome($string){
	$n=strlen($string);
    $str=strtolower($string);
		$cpt=1;
		for($cpt;$cpt<$n+1;$cpt++){
			if(($str[$cpt-1]!=$str[$n-$cpt])){
				return false;
			}
			if($cpt-1>=$n-$cpt){
				return true;
			}
		}
	}



$res="Deleveled";
$res1="raradar";
echo"<p>";
if(isPalindrome($res)){
	echo"$res : est un palindrome";
	 }else{
		 echo"$res : n'est pas un palindrome";
	 }
echo"<br>";	 
if(isPalindrome($res1)){
	echo"$res1 : est un palindrome";
	 }else{
		 echo"$res1 : n'est pas un palindrome";
	 }
	 echo"</p>";
	 
function groupByOwners($tab){
   $res=[];	
   foreach ($tab as $key => $value){
	   $res[$value][]=$key;
   }return $res;
}


$tab= ["Input.txt" => "Randy", "Code.py" => "Stan",
"Output.txt" => "Randy"];

$res=groupByOwners($tab);
print_r($res);
​
 
	 
?>


</body>
</html>
