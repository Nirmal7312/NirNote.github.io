<?php
$note = $_POST['note'];

// You should use a database connection here to save the note
// For demonstration purposes, we'll just append it to a text file
$filename = 'notes.txt';
file_put_contents($filename, $note . PHP_EOL, FILE_APPEND);
?>
