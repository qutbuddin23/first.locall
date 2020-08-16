<?php

if(! isset($_POST['email_id'])) {
	header('Location: ' . $_SERVER['HTTP_REFERER'] . "?errors=invalid_email");
}