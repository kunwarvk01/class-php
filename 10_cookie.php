<!DOCTYPE html>
<?php
  setcookie("Auction_Item","Luxury Car", time()+2*24*60*60);
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
      setcookie("Auction_item","",time()-60);
    ?>
    <?php
      echo "cookie is deleted"
    ?>
    <p>
      <strong> Note: </strong>
      You might have to reload the page to see the value of the cookie
    </p>
  </body>
</html>
