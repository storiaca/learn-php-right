<?php

/* Control Structures (if / else / esleif / else if) */
// $score = 105;
// if ($score >= 90) {
//   echo 'A';
//   if ($score >= 95) {
//     echo '+';
//   }
// } elseif ($score >= 80) {
//   echo 'B';
// } elseif ($score >= 70) {
//   echo 'C';
// } elseif ($score >= 60) {
//   echo 'D';
// } else {
//   echo 'F';
// }

// drugi nacin da prikazemo podatke na html strani
?>
<html>

<head></head>

<body>
  <?php $score = 75; ?>
  <?php if ($score >= 90): ?>
    <strong>A</strong>
  <?php elseif ($score >= 80): ?>
    <strong>B</strong>
  <?php elseif ($score >= 70): ?>
    <strong>C</strong>
  <?php elseif ($score >= 60): ?>
    <strong>Ds</strong>
  <?php else: ?>
    <strong>F</strong>
  <?php endif ?>
</body>

</html>