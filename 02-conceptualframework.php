<html>
  <head>
    <title>This page describes the conceptual framework of HTML, CSS, and PHP</title>
    <style type="text/css">
      h2 { color: green; border-bottom:2px solid green; }
    </style>
  </head>
  <body>
  
<!-- above is the start of a minimal PROPER HTML document - <HTML><HEAD><TITLE></TITLE></HEAD><BODY -->
<!-- notice that this file has a .PHP extension, that just means the server will process PHP code in addition to outputting HTML -->
<!-- if the file had an .HTM or .HTML extension and you included PHP code, it would not work -->

<?php

//now I am starting to write some PHP code - there is no separation of HTML first, PHP second or vice versa - it can be mixed -->
echo '<p>I can use PHP code to output static HTML whenever I want.';
$query = "SELECT * FROM table1;";
echo "I can also display variables like my SQL query <em>$query</em>";
//note that when including PHP variables inside an echo statement, you have to use double quotes

?>

  <h2>This h2 header is colored green because of the CSS I wrote in the <head><style> area.</h2>
  <p>All CSS references an HTML tag, or a class, or an ID. We'll cover classes and ID's next week.</p>
  </body>
</html>
