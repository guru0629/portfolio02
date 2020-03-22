<?php
require_once('menu.php');
require_once('data.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Online Fruit Shop</title>
  <link rel="stylesheet" href="../css/portfolio02.css">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Orbitron&display=swap" rel="stylesheet">
</head>

<body>  
  <div class="menu-wrapper container">
    <h1 class="logo">ONLINE FRUIT SHOP</h1>
    <form method="post" action="confirm.php">

    <div class="menu-items">

    <?php foreach($menus as $menu): ?>
      <div class="menu-item">
        <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
        <h2 class="menu-item-name"><?php echo $menu->getName() ?></h2>
        <p class="price"><?php echo $menu->getTaxIncludedPrice() ?>円(税込)</p>
      <input type="text" value="0" name="<?php echo $menu->getName() ?>">個
      </div>
    <?php endforeach ?>
    
    </div>
    <input type="submit" value="注文する">
    </form>
  </div>
</body>

</html>