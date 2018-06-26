<?php
session_start();
require('controller/backend.php');

try {
	if (isset($_SESSION['user_status']) AND $_SESSION['user_status'] == 1) {
		if (isset($_GET['action']) OR isset($_GET['page'])) {
			if ($_GET['page'] == 'inbox') 
			{
				if (isset($_GET['id']) && $_GET['id'] > 0)
				{
					mailShow($_GET['id']);
				}
				else {
					adminInbox();

				}
			}
			elseif ($_GET['action'] == 'deconnection') {
				deconnection();
			}
		}
		else {
			adminHome();
		}
	}
	else {
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'connection') 
			{
				if ($_POST['pseudo'] && $_POST['pass']) 
				{
					connectionAdmin(($_POST['pseudo']), ($_POST['pass']));
				}
				else 
				{
					throw new Exception('Probleme identification');
				}
			}
		}
		else 
		{
			connectionAdminPage();
		}
	}
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/errorView.php');
}