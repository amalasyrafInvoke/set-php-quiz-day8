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
    Question 4
  </h1>
  <div class="container">

    <form class="form-container" action="question4.php" method="POST">
      <label for="questionType">Choose a Question:</label>
      <select name="questionType">
        <option value="first">What's your name ?</option>
        <option value="second">What's your hobby ?</option>
        <option value="third">What's your Favourite Club ?</option>
      </select>
      <button style="align-self: center;" type="submit" name="submit">Submit</button>
    </form>
    <div>
      <?php

      $questionType = $_POST['questionType'];

      if ($questionType === 'first') {
        echo "<form class='form-container' action='question4-show.php' method='POST'>
          <label for='fname'>What's your name ?</label>
          <input type='text' name='fname' id='name-form'>
          <button style='align-self: center;' type='submit' name='submit'>Submit</button>
      ";
      }

      if ($questionType === 'second') {
        echo "<form class='form-container' action='question4-show.php' method='POST'>
          <label for='hobby'>What's your hobby ?</label>
          <input type='text' name='hobby' id='hobby-form'>
          <button style='align-self: center;' type='submit' name='submit'>Submit</button>
          ";
      }

      if ($questionType === 'third') {
        echo "<form class='form-container' action='question4-show.php' method='POST'>
          <label for='club'>What's your favourite club ?</label>
          <input type='text' name='club' id='club-form'>
          <button style='align-self: center;' type='submit' name='submit'>Submit</button>
          ";
      }
      ?>
    </div>
  </div>


</body>

</html>