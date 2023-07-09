<!DOCTYPE html>
<html>
<head>
  <title>Texting App</title>
</head>
<body>
  <h1>Texting App</h1>

  <form action="create_message.php" method="POST">
    <input type="text" id="title" name="title" required>
    <label for="content">Message</label>
    <textarea id="content" name="content" required></textarea>
    <button type="submit">Send Message</button>
  </form>

  <h2>Created Messages</h2>
  <?php
    // Get the list of text files in the 'messages' directory
    $files = glob('messages/*.txt');

    // Display the list of created messages
    foreach ($files as $file) {
      $title = basename($file, '.txt');
      echo '<a href="' . $file . '">' . $title . '</a><br>';
    }
  ?>
</body>
</html>
