<?php
include 'db/dbconnect.php';

$aid=$_SESSION['aid'];

$sql = "SELECT account.aid, account.firstname, account.lastname, post.pid, post.content, post.post_date, post.post_time " 
        . "FROM account INNER JOIN post ON account.aid=post.aid;";
$result=$con->query($sql);

while($row=mysqli_fetch_assoc($result)){
    echo "<div class='account-post'>";
    echo "<div class='account-name'>";
    echo $row ['firstname'];
    echo "</div>";
    echo "<div class='post_content'>";
    echo $row['content'];
    echo "</div>";
    echo "</div>";
}
