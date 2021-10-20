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

    #form-id {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body>
  <h1>
    Question 1
  </h1>
  <div class="container">
    <form id="form-id" action="question1.php" method="POST">
      <label for="starType">Choose a Star Type:</label>
      <select name="starType" id="starype">
        <option value="">Display Empty</option>
        <option value="half-star">Half-Star</option>
        <option value="full-star">Full-Star</option>
      </select>
      <input type="submit" value="Submit">
    </form>
    <?php
    $starType = $_POST['starType'];

    if ($starType === 'half-star') {
      halfStar();
    } else if ($starType === 'full-star') {
      fullStar();
    } else {
      echo 'Nothing to show here!';
    }

    function halfStar()
    {
      for ($i = 1; $i < 6; $i++) {
        for ($j = 1; $j <= $i; $j++) {
          echo '*';
        }
        echo '<br>';
      }
    }

    function fullStar()
    {
      // first for-loop
      for ($i = 1; $i < 6; $i++) {
        for ($j = 1; $j <= $i; $j++) {
          echo '*';
        }
        echo '<br>';
      }

      // second for-loop
      for ($i = 1; $i < 6; $i++) {
        for ($j = 1; $j <= 6 - $i; $j++) {
          echo '*';
        }
        echo '<br>';
      }
    }
    ?>
  </div>


</body>

</html>