<?php
function rundom_number($a,$b){
if($b > $a){
 echo 'Загаданное число больше';
 echo '<br />Число загаданное компьютером  ', $a ; 
}	
elseif ($b < $a) {
echo "Загаданное число меньше";
echo '<br />Число загаданное компьютером : ', $a ; 
}
else{
	 echo 'Вы угадали!'; 
	 echo '<br />Число загаданное компьютером : ', $a ; 
	}
	}
if (isset($_POST["ugadat"])){
	rundom_number(rand(1, 10), $_POST["b"]);
	}
else {
	echo'<h1>Загадайте число от 1 до 10</h1>';
}
?>

<html>
    <head>
        <title>Игра: Угадай число (больше-меньше)</title>
    </head>
<body>
    <form method="post">
        <input type="text" name="b" />  
		<input type="submit" name="ugadat" value="Угадать" /><br/>
    </form>
	</body>
</html>
