<?php

  // Wait for a post request to this route
  if(isset($_POST['random_form_submit'])) {
    $no_of_sides = $_POST['no_of_sides'];
    $no_to_roll = $_POST['no_of_dice_to_roll'];
    $dice_rolls = [];


  }
  else {
    // Lead user back to homepage
    header('location: /');
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Random Number Generator - Omachonu Prosper (Code mentor)</title>
  </head>
  <body>
    
    <div class="p-3 container mt-5 mx-auto" style="max-width: 50rem;">
      <h1 class="display-4">Random Number Generator</h1>

      <div class="card p-3 mt-3">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Number rolled</th>
              <th scope="col">Dice type</th>
              <th scope="col">Total count</th>
            </tr>
          </thead>
          <tbody>
            <?php for($i = 0; $i < $no_to_roll; $i++) { ?>
              <tr>
                <td><?php echo rand(1, $no_of_sides); ?></td>
                <td><?php echo $no_of_sides; ?></td>
                <td><?php echo $i + 1; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        
        <a class="btn btn-primary" href="/">Roll again</a>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>