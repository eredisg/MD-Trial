<?php
if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    if (isset($_COOKIE['task'])) {
        $taskArray = unserialize($_COOKIE['task']);
        array_push($taskArray, $task);
        setcookie("task", serialize($taskArray), time() + 86400, '/');
    } else {
        setcookie("task", serialize(array($task)), time() + 86400, '/');
    }
    Header('Location: ../index.php');
}
?>