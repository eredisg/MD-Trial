<?php
if (isset($_POST['delete'])) {
    if (!empty($_POST['cl'])) {
        $taskArray = unserialize($_COOKIE['task']);
        foreach ($_POST['cl'] as $val) {
            $key = array_search($val, $taskArray);
            unset($taskArray[$key]);
        }
        setcookie("task", serialize($taskArray), time() + 86400, '/');
    }
    Header('Location: ../index.php');
}
?>
