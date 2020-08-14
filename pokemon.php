<?php
include 'includes/Pokemon.Class.php';
global $title;
$title = 'PHP Classes (Pokemon)';
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1>

  <?php include 'templates/navigation.php'; ?>

  <h2>Test Pokemon Output</h2>

  <p>
    <?php
      /**
       * Pikachu
       */
      $pikachu = new Pokemon();
      // The "name" property is public - so we can read and write from anywhere!
      $pikachu->name = 'PikaPika';
      echo $pikachu->name;
      // The "level" property is private - so we can ONLY read and write from within the class' logic.
      // $pikachu->level += 1;
      // echo $pikachu->level;
      $pikachu->levelUp();
      echo $pikachu->getLevel();

      echo '<pre>';
      var_dump( $pikachu );
      echo '</pre>';
    ?>
  </p>

  <p>
    <?php
      /**
       * Bulbasaur
       */
      $bulbasaur = new Pokemon( 'Bulba', 20, 'grass' );
      echo '<pre>';
      var_dump( $bulbasaur );
      echo '</pre>';
    ?>
  </p>
 
  <h2>List of Pokemon</h2>
  <ul>
    <?php
      $myPokemon = array(
        (new Pokemon( 'Charmander', 22, 'fire' )),
        (new Pokemon( 'Butterfree', 10, 'insect' )),
        (new Pokemon( 'Mewtwo', 50, 'psychic' )),
        (new Pokemon( 'Psyduck', 15, 'psychic' )),
        (new Pokemon( 'Meowth', 18, 'normal' )),
        (new Pokemon( 'Wheezing', 16, 'poison' ))
      );
      foreach ( $myPokemon as $pokemon ) :
        ?>
          <li>
            <h3><?php echo $pokemon->name; ?></h3>
            <p>
              <?php
                // "Echo" can take multiple arguments, meaning we can use "," to separate strings when using this function.
                echo "Hi, I'm {$pokemon->name}! ",
                     "My max health is: {$pokemon->health}. ",
                     "I'm level {$pokemon->getLevel()}",
                     " and my type is: {$pokemon->type}.";

              ?>
            </p>
          </li>
        <?php
      endforeach;
    ?>
  </ul>

<?php include 'templates/footer.php';