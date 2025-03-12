<?php
/* Switch Statement */

$paymentStatus = 'paid';

switch ($paymentStatus) {
  case 'paid':
    echo 'Paid';
    break;
  case 'rejected':
  case 'declined':
    echo 'Payment Declined';
    break;
  case 'pending':
    echo 'Pending Payment';
    break;
  default:
    echo 'Unknown Payment Status';
}

echo "<br>";

$payment = 2;

switch ($payment) {
  case 1:
    echo 'Paid';
    break;
  case 2:
  case 3:
    echo 'Payment Declined';
    break;
  case 4:
    echo 'Pending Payment';
    break;
  default:
    echo 'Unknown Payment Status';
}
echo "<br>";
// ako koristimo switch u nekoj petlji, break iz switch-a ce da se odnosi na switch ne na petlju

// razlika izmedju if i switch, u switch ce da se izvrsi naredba samo jednom dok u if moze vise puta

