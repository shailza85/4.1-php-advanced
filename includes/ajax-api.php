<?php
// Check if there was a request...
if ( isset( $_GET['search'] ) && !empty( $_GET['search'] ) )
{
  // Retrieve the people data.
  $peopleString = file_get_contents( '../data/people.json' );
  // If successful, proceed.
  if ( $peopleString !== FALSE )
  {
    // Attempt to convert JSON from a string to a PHP array / object.
    if ( ( $peopleArray = json_decode( $peopleString ) ) !== NULL )
    {
      // var_dump( $peopleArray ); // Good to test and make sure we're getting the data!
      // We can set up an array to store matches in...
      $matchingPeopleArray = array();
      // Loop through each person and check for a match!
      foreach ( $peopleArray as $person )
      {
        // Check if the name contains the search term.
        if ( stripos( $person->name, $_GET['search'] ) !== FALSE )
        {
          // If the person's name DOES contain the search term, add it to our "matching" array!
          array_push( $matchingPeopleArray, $person );
        }
      }
      // Convert the array of matches to JSON so we can transport this data.
      $matchingPeopleString = json_encode( $matchingPeopleArray );
      // Set up header to give the client more info about this response.
      header( 'Content-type: app/JSON; charset=UTF-8' );
      // Send out the JSON string of matches!
      echo $matchingPeopleString;
    }
    else
    {
      echo 'Unable to convert "People" data into PHP array / object.';
    }
  }
  else
  {
    echo 'Unable to retrieve "People" data.';
  }
}
else
{
  echo 'Invalid / no search term provided.';
}