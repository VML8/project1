<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper p-3">
<?php
require_once "class_dispenser.php";
  
  $susu = new Dispenser(12, 500, 'kopi', 6);
  $susu->what();
  $susu->refill(880);
  $susu->buy(2);
  $susu->recharge(2500);
  $susu->buy(2);
  $susu->buy(5);
  $susu->recharge(3000);
  $susu->buy(5);
  $susu->refillCup(4);
  $susu->refill(660);
  $susu->buy(5);
?>
</div>

<?php
include_once 'footer.php';
?>