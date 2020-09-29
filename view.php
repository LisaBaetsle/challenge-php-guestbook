<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP guestbook</title>
</head>

<body>
  <h1>WELCOME TO OUR GUESTBOOK</h1>
  <form method="post">
    Title: <input type="text" name="title" value="">
    <span class="error">* <?php echo $titleErr; ?> </span>
    <br><br>
    Date: <input type="date" name="date" value="">
    <span class="error">* <?php echo $dateErr; ?> </span>
    <br><br>
    Content: <textarea name="content" rows="5" cols="40"></textarea>
    <span class="error">* <?php echo $contentErr; ?> </span>
    <br><br>
    Name: <input type="text" name="name" value="">
    <span class="error">* <?php echo $nameErr; ?> </span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

</body>

</html>