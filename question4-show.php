<html>

<head>
  <title>PHP Quiz Day 8</title>
  <style>
    .container {
      margin: 0 auto;
      height: 90%;
      width: 700px;
      border: 1px solid black;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .container>* {
      margin: 1rem 0;
    }

    .form-container {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
    }

    .form-container>* {
      margin: 0.3rem 0;
    }

    .form-container input {
      width: 250px;
    }
  </style>
</head>

<body>
  <h1>
    Question 4
  </h1>
  <div class="container">
    <h1>Hello!</h1>
    <?php
    if (isset($_POST['fname'])) {
      $fname = $_POST['fname'];
      if (empty($fname)) {
        echo "Well hello, Mr John Doe";
      } else {
        echo 'Your name is ' . $fname;
      }
    }
    if (isset($_POST['hobby'])) {
      $hobby = $_POST['hobby'];
      if (empty($hobby)) {
        echo "You did not insert any hobby, you boring people";
      } else {
        echo 'Your hobby is ' . $hobby;
      }
    }
    if (isset($_POST['club'])) {
      $club = $_POST['club'];
      if (empty($club)) {
        echo "Wow, You dont have any favorite club?? LAME!";
      } else {
        echo 'Your favorite club is ' . $club;
      }
    }
    ?>
    <form class="form-container" action="question4.php" method="POST">
      <button style="align-self: center;" type="submit" name="submit">Back</button>
    </form>
    <div>
    </div>
  </div>


</body>

</html>