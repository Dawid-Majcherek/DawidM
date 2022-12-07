<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="rejestracja.php">
    <b>Login:</b> <input type="text" name="login"><br><br>
    <b>Hasło:</b> <input type="password" name="haslo1"><br>
    <b>Powtórz hasło:</b> <input type="password" name="haslo2"><br><br>
    <b>Email:</b> <input type="text" name="email"><br>
    <input type="submit" value="Utwórz konto" name="rejestruj">
</form>

    <form method="POST" action="">
    <input type="text" name="liczba1" size="10">
    <select name="znak">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>   
    <input type="text" name="liczba2" size="10">
    <input type="submit" value="Oblicz" name="submit">
    </form>
    <?php
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    $znak = $_POST['znak'];
    $wynik = "";
    switch ($znak)
    {
     case "+":
       $wynik = $liczba1+$liczba2;
       break;
     case "-":
       $wynik = $liczba1-$liczba2;
       break;
     case "*":
       $wynik = $liczba1*$liczba2;
       break;
     case "/":
       $wynik = $liczba1/$liczba2;
       break;
    }
    echo $liczba1." + ". $liczba2." = ".$wynik."<br>";
    
    
    function wyswietl($string, $int){
        return($string * $int);
    }
    $wynik = wyswietl(53,23);
    echo "53 * 23 =".$wynik."<br>";

    function wyswietl2($string, $int){
        return($string - $int);
    }
    $wynik2 = wyswietl2(123134,648);
    echo "123134 - 648 =".$wynik2."<br>";

    function wyswietl3($string, $int){
        return($string / $int);
    }
    $wynik3 = wyswietl3(546,12);
    echo "546 / 12 =".$wynik3."<br>";

    function wyswietl4($string, $int){
        return($string + $int);
    }
    $wynik4 = wyswietl4(3456,688);
    echo "3456 + 688 =".$wynik4."<br>";
    
    $conn = mysqli_connect("localhost","root","","wyniki");
    
    if(isset($_POST['liczba2']))
    {
    $sql = "INSERT INTO zadania(Wynik) VALUES('$wynik')";
    $timestamp = date("F j, Y, g:i a");   
    if (mysqli_query($conn,$sql)){
      echo "dodano rekord";
    } else{
      echo "nie dodano". $sql. ":-". mysqli_error($conn);
    }
    
  }
    echo $wynik. "<br>";
    echo date("N j, Y, g:i a", 1660338149);
    
    
    ?>
</body>
</html>