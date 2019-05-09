<?php

header("Content-type: application/octet-stream");
header("Content-type: application/ms-excel");
header("Content-Disposition: attachment; filename=leaderboardadmin.xls");
header("Pragma: no-cache");
header("Expires: 0");
include "leaderboardadmin.php";
?>