<?php

require_once './../src/VideoDetails.php';

$url = null;

if (isset($_POST['url'])) {
    $url = $_POST['url'];

    echo '<pre>';
        print_r(\Fixik\VideoDetails\VideoDetails::getVideoDetailsByURL($url));
    echo '</pre>';
}
?>

<html>
<body>
<hr>
<form action="/" method="post">
    <input type="text" name="url" value="<?= $url; ?>" style="width: 50%;">
    <br>
    <button>Get Video Info</button>
</form>
</body>
</html>