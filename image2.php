<?php

session_start();


if (isset($_SESSION['loggedin'])) {
    $link = mysqli_connect('localhost', 'root', '', 'art_gallery') or die('Unable to connect the server. ');
    $title = $_GET['uid'];
    $name = $_GET['id'];





    $sql = "SELECT *  from image  where title='$title' and username='$name'";
    $res = mysqli_query($link, $sql);

    $result = mysqli_fetch_assoc($res);

} else {
    header('location:login.php');
}

?>

<style>
    img {
        border-radius: 10px;
        margin-right: 50px;
        margin-bottom: 89px;
        margin-left: 43px;
    }

    img:hover {
        border-radius: 50px;
    }
</style>
<img class="loda" height="400px" width="500px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($result['image']); ?>" />


</div>





<?php

$sql = "SELECT username ,dob,mobile_no,email from newcustomer where newcustomer.username='$name'";
$res = mysqli_query($link, $sql);
echo '<table border="1"><tr><th>CUSTOMER NAME</th><th>CUSTOMER dob</th><th>gender</th><th>
email </th></tr>';
while ($result = mysqli_fetch_assoc($res)) {
    echo '<tr><td>' . $result['username'] . '</td>
       <td>' .
        $result['dob'] . '</td><td>' . $result['mobile_no'] . '</td><td>' . $result['email'] . '</td>
            </tr>';
}
echo '</table>';




?>