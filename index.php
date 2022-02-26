<?php
include('.config.php');
// include('./php/server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <title>ToucanTech Test</title>
</head>

<body>
  <div class="test">
    <h1>ToucanTech Test</h1>

    <div class="form">
      <div class="color-block"></div>
      <div class="container">
        <div class="logo">
          <img src="./images/logo.png" alt="" />
        </div>
        <div class="greetings">
          <h2>Hello There</h2>
          <div class="lorem">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          </div>
        </div>
        <form action="./config.php" method="POST" id="form">
          <div id="message"></div>
          <div class="input">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter Name" />
            <i class="fa-solid fa-person"></i>
          </div>
          <div class="input">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter Email" />
            <i class="fa-solid fa-envelope"></i>
          </div>
          <div class="input">
            <label for="mySchool">School:</label>
            <input list="school" name="mySchool" id="mySchool" placeholder="Enter School" />
            <i class="fa-solid fa-graduation-cap"></i>
            <datalist id="school">
              <option value="London South Bank" />
              <option value="York Castle High" />
              <option value="London School of Economics" />
            </datalist>
          </div>
          <input type="submit" value="Submit" id="submit" />
        </form>
        <div class="link">
          <a href="./results.php">Seach Users</a>
        </div>
      </div>
    </div>
  </div>
  <script src="./js/index.js"></script>
</body>

</html>