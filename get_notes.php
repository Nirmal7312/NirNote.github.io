<?php
// Retrieve saved notes from the text file
$filename = 'notes.txt';
$notes = file($filename, FILE_IGNORE_NEW_LINES);

// Convert the notes array to JSON and return it
echo json_encode($notes);
?>
