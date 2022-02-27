<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p> with the help of this code, we can post the current form to the current page </p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<p>The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.</p>
<?php echo $_SERVER["PHP_SELF"]; ?>

<div class="w3-panel w3-note">
<p><strong>What is the htmlspecialchars() function?</strong><br><br>
The htmlspecialchars() function converts special characters to HTML entities. 
This means that it will replace HTML characters like &lt; and &gt; with &amp;lt; and &amp;gt;. 
This prevents attackers from exploiting the code by injecting HTML or Javascript code
(Cross-site Scripting attacks) in forms.</p>
</div>


</body>
</html>