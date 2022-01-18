<?php 
  require_once __DIR__ . "/classes/Product.php";
  require_once __DIR__ . "/classes/User.php";

  $newProduct = new Product(01);
  $newProduct->setName("iPhone");
  $newProduct->setPrice(699);
  
  echo "<strong>Proprietà newProduct: </strong><br>";
  echo "^ id" . var_dump($newProduct->getID());
  echo "^ nome" . var_dump($newProduct->getName());
  echo "^ prezzo" . var_dump($newProduct->getPrice());
  echo "^ prezzo scontato del 10% se maggiore di 500 <br><hr>" . var_dump($newProduct->getFinalPrice());

  echo "<strong>Proprietà newUser: </strong><br>";
  $newUser = new User("AlbCiuf", "alberto@email.com");
  echo "^ nickname" . var_dump($newUser->getNickname());
  echo "^ email" .var_dump($newUser->getEmail());

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-2</title>
</head>
<body>
  
</body>
</html>