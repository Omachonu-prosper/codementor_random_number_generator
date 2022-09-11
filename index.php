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
        <form action="" method="post">
          <div class="form-group">
            <label for="no_to_roll">Number of times to roll</label>
            <input class="form-control" type="number" name="no_of_dice_to_roll" id="no_to_roll" placeholder="Number of times to roll" max="10" min="1" required>
          </div>

          <div class="form-group">
            <label for="no_of_sides">Number sides</label>
            <select id="no_of_sides" class="custom-select">
              <option value="4">Four sides (default)</option>
              <option value="6">Six sides</option>
              <option vlaue="8">Eight sides</option>
              <option vlaue="10">Ten sides</option>
              <option vlaue="12">Twelve sides</option>
              <option vlaue="20">Twenty sides</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>