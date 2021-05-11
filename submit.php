<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vyplněná data</h1>   
    <?php
    $username = filter_input(INPUT_POST, 'username');
    $age = filter_input(INPUT_POST, 'age');
    $password = filter_input(INPUT_POST,'password');
    echo "Bylo vyplněno jméno: $username <br>";
    echo "Váš věk: $age,";

   if(($age >= 18  ) &&  ($username == 'Matěj Pošík')) {
       echo " Je ti víc jak 18 a jsi Matěj Pošík <br>";
   } else {
       echo " máš smůlu <br>";   
   }
   if(($username == "Matěj Pošík") && ($password == "netusim")){
       echo "Uspěšně jste se přihlásil <br>";
   } else {
       echo "Neplatné přihlašovací údaje <br>";
   }


   ?>
</body>
</html>