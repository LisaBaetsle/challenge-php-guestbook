<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP guestbook</title>
</head>

<body>
  <header>
    <h1>WELCOME TO OUR GUESTBOOK</h1>
  </header>
  <div class="grid-container">
    <div class="container-form grid-item">
      <h2>Write something in our guestbook</h2>
      <form method="post">
        Title: <input type="text" name="title" value="">
        <span class="error">* <?= $titleErr; ?> </span>
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
    </div>

    <div class="container-posts grid-item">
      <h2>Previous posts</h2>
      <div class="previous-posts">
        <?php foreach ($guestbook->getListOfPosts() as $post) {
          echo '<div class="previous-post"><p class="title">' . $post->getTitle() . '</p><br>';
          echo '<p class="date">' . $post->getDate() . '</p><br>';
          echo '<p class="content">' . $post->getContent() . '</p><br>';
          echo '<p class="name">' . $post->getName() . '</p><br></div>';
          echo '<br>';
        } ?>
      </div>
    </div>
  </div>

</body>

</html>