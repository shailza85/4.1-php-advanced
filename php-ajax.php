<?php
global $title;
$title = 'PHP API/AJAX Example';
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1>

  <?php include 'templates/navigation.php'; ?>

  <h2>API/AJAX Example</h2>
  <form
    id="php-ajax-form"
    action="includes/"
    method="GET">
    <label for="search">
      Enter search term:
      <input
        type="search"
        placeholder="Please enter a search term..."
        name="search"
        id="search"
        value="">
    </label>
    <input
      type="submit"
      value="Search">
  </form>
  <ul id="results"></ul>

<?php include 'templates/footer.php';