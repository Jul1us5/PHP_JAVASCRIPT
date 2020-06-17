<form action="" method="get">
    <input type="text" name="x" id="x" value="">
    <input type="text" name="y" id="y" value="">
    <input type="submit" value="+" name="action">
    <input type="submit" value="-" name="action">
</form>
<?php
if (isset($_GET['action']) && isset($_GET['x']) && isset($_GET['y'])) {
    if ($_GET['action'] == '+') {
        echo '<h1>' . ((int) $_GET['x'] + (int) $_GET['y']) . '</h1>';
    } elseif ($_GET['action'] == '-') {
        echo '<h1>' . ((int) $_GET['x'] - (int) $_GET['y']) . '</h1>';
    }
    // echo json_encode($_GET);
} else {
    echo 'iveskite skaiciukus';
}