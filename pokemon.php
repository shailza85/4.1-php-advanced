<?php
// Start our session, and declare our history function.
include 'includes/Pokemon.Class.php';
global $title; // Try to avoid globals, as they are harder to troubleshoot and track through your application.
$title = 'PHP Classes'; 
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1>

  <?php include 'templates/navigation.php'; ?>

  <h2>Test Pokemon Output</h2>
 
 <?php
$pikachu= new Pokemon();
// The "name" property is public-can be accessed to read/write
$pikachu-> name ='PikaPika';
echo $pikachu-> name;
//Private property is only accessible within class
//$pikachu-> level+=1;
//echo $pikachu-> level;
$pikachu->levelUp();
echo $pikachu->getLevel();
 ?>

<?php include 'templates/footer.php';