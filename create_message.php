<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Create a new file with the title as the filename and save the content
    file_put_contents("messages/{$title}.txt", $content);

    // Redirect the user back to the texting app page
    header('Location: texting_app.html');
    exit;
  }
?>
