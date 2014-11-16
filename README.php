validHTMLtag
============
<?php
session_start();
$htmlTags = array("html", "head", "title", "meta", 
"body", "table", "tr", "td","br", "hr", "div", "a");

if($_POST)
{
    $tags = $_POST['tags'];
    
        if(array_search($tags, $htmlTags))
        {
            $_SESSION['count']++;
            echo 'Valid HTML tag!';
            echo 'Your score is:<b>'.$_SESSION['count'].'</b>';
        }
        else
        {
            echo 'Invalid HTML tag!';
            echo 'Your score is:<b>'.$_SESSION['count'].'</b>';
        }
}
?>

<a href="destroy.php">Destroy</a>
<form method="POST">
    
    Enter HTML tags: <br><input type="text" name="tags"><br>
    <input type="submit" value="Submit">
</form>
