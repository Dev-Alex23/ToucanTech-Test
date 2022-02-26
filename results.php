<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/result.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <title>Results</title>
</head>

<body>
  <div class="test">
    <h1>ToucanTech Test</h1>

    <div class="form">
      <!-- <div class="color-block"></div> -->
      <div class="container">
        <div class="link">
          <a href="./index.php">Back</a>
        </div>

        <div class="search-box">
          <div class="search">
            <form action="" method="GET">
              <input type="text" id="search" name="search" placeholder="Search School"
                value="<?php if(isset($_GET['search'])) {echo $_GET['search'];} ?>">
              <input type="submit" id="search-btn" name="search-btn">
            </form>
          </div>
          <div class="table">
            <h2>School Table</h2>

            <table>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>School</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $conn = mysqli_connect("localhost", "root", "root", 'toucantech');
                  if(isset($_GET['search']))
                  {
                    $tableValues = $_GET['search'];
                    $sql = "SELECT * FROM school WHERE CONCAT(name, email, school) LIKE '%$tableValues%' ORDER BY email ASC";
                    $sql_execute = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($sql_execute) > 0)
                    {
                      // Do something
                      foreach($sql_execute as $schoolData)
                      {
                        ?>
                <tr>
                  <td><?= $schoolData['id'] ?></td>
                  <td><?= $schoolData['name'] ?></td>
                  <td><?= $schoolData['email'] ?></td>
                  <td><?= $schoolData['school'] ?></td>
                </tr>
                <?php
                      }
                    }
                    else {
                      // do something else
                      ?>
                <tr>
                  <td colspan="4" style="text-align: center;">NO RECORDS FOUND</td>
                </tr>
                <?php
                          }
                  }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>