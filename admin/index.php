<?php
if (!isset($_GET['get'])) {
	header("Location: ?get=login.php");
}
include($_GET['get']);