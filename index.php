<?php
// Start our session, and declare our history function.
include 'includes/calc-history.php';
global $title; // Try to avoid globals, as they are harder to troubleshoot and track through your application.
$title = 'PHP Homepage'; // $GLOBALS['title'] = 'PHP Homepage';
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1>

  <?php include 'templates/navigation.php'; ?>

  <h2>Calculator History</h2>
  <?php showCalcHistory(); // (Defined in calc-history.php) ?>

<?php include 'templates/footer.php';