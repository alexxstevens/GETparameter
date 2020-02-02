

<?php
    //get the data from the form
    $firstName = filter_input(INPUT_GET, 'firstName', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_GET,'lastName', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);

    //format information
    $formattedAge = number_format($age, 0);

     // validate first name
    if (strlen($firstName) <  2) {
        $error_message = 'First name must be at least 2 characters in length.';
    //validate last name
    } else if (strlen($lastName) <  2) {
        $error_message = 'Last name must be at least 2 characters in length.';
    //validate age
    } else if ( $age < 0 ) {
        $error_message = 'Please enter a valid age.';
    } else if ( $age >= 18 ) {
        $ageStatement = 'I am old enough to vote in the United States.';
    } else if ( $age < 18 ) {
        $ageStatement = 'I am not old enough to vote in the United States.';
    // set error message to empty string if no invalid entries
    } else {
        $error_message = ''; }

    // if an error message exists, go to the index page
    if (isset($error_message)) {
        include('index.html');
        exit();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>GET Parameter Assignment</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
    <h1>get PARAMETER Assignment</h1>
    <h3>Results Below</h3>
      <p>Hello, my name is 
          <?php echo ucfirst($firstName)." "; 
           echo ucfirst($lastName);?>.</p>

      <p>I am 
        <?php echo $formattedAge ." years old and "; echo $ageStatement?>
      </p>

    <br>
    <div class="buttons">
        <button onclick="window.location.href = 'index.html';">Click to Return to Form</button>
        </div>
     
    </main>
</body>
</html>




















