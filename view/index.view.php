<?php

use userApp\User;

$user = new User('50114225660','Eividas','Galvanauskas','programuotojas','eividasg7@gmail.com','500','dirbantis');
?>
    <?php foreach ($user->showProfile() as $item): ?>
    <?php echo $item .'<br>'?>
    <?php endforeach ?>