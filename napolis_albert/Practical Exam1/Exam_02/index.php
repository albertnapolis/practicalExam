<?php

/*
Create a folder named Exam_02 with an index.php file under it. Work on it that when index.php
is run on the browser, it will create a file named “hello_there.php” with the following contents
(follow indentions and spaces):
<?php

// This is a comment

echo “This is a test page!”;
echo “Exam number two!”;

// This is the end of a comment
*/

//create hello_there.php file
$newFile = fopen("hello_there.php", "w");

//write the php opening tag
$openingTag = "<?php\n\n";
fwrite($newFile, $openingTag);

//write the first comment
$comment = "// This is a comment\n\n";
fwrite($newFile, $comment);

//write the first echo
$echo1 = "echo 'This is a test page!';\n";
fwrite($newFile, $echo1);

//write the second echo
$echo2 = "echo 'exam number two!';\n\n";
fwrite($newFile, $echo2);

//write the second comment
$comment2 = "// This is the end of a comment";
fwrite($newFile, $comment2);