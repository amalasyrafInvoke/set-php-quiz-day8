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
      flex-direction: row;
      align-items: center;
      justify-content: center;
    }

    .container>* {
      margin: 0 1rem;
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
    Question 2
  </h1>
  <div class="container">
    <form class="form-container" action="question2.php" method="POST">
      <label for="fname">Enter your name:</label>
      <input type="text" name="fname" id="name-form">
      <label for="nric">Enter your NRIC:</label>
      <input type="text" name="nric" id="nric-form">
      <label for="mobile">Enter your Mobile Number:</label>
      <input type="text" name="mobile" id="mobile-form">
      <button style="align-self: center;" type="submit" name="submit">Submit</button>
    </form>
    <div>
      <!-- <h2>Display Info</h2> -->

      <?php
      function getName()
      {
        return $_POST['fname'];
      }
      function getNRIC()
      {
        return $_POST['nric'];
      }
      function getMobile()
      {
        return $_POST['mobile'];
      }

      displayInfo();

      function displayInfo()
      {
        $fname = getName();
        $nric = getNRIC();
        $mobile = getMobile();
        if ($fname == null || $nric == null || $mobile == null) {
          echo "<h2>Nothing To Display. Please Fill All The Details in the form.</h2>";
        } else {
          echo "<h2>Display Info</h2>";
          echo "<p>Name: " . $fname . " </p>";
          echo "<p>NRIC: " . $nric . " </p>";
          echo "<p>Mobile: " . $mobile . " </p>";
        }
      }

      ?>
    </div>
  </div>


</body>

</html>