<!DOCTYPE html>
<html lang="en">
<?php
session_start();
session_destroy();
header("Location: index.php");
exit();
?>
</html>