<?php
	//Connect to DB and session
	include('../connect.php');
	include('../validate_session_sub.php');
	include('../functions/functions.php');
	
	//Assign GET variables
	$team = $_GET['t'];
	$player = $_GET['p'];
	$mid = $_GET['msid'];
	
	//Insert a new row into teamPlayer with the current user's player id and the team id from the team selected
	$query = 'INSERT INTO teamplayer (teamId, playerId) VALUES(' . $team . ', ' . $player . ')';
	mysqli_query($conn, $query);
	
	//Delete Message
	$result = deleteMessage($mid, $conn);
	
	//Create acceptance message for user
	insertMessage('Your request to join ' . getTeamName($team, $conn) . ' has been accepted!', getFilePrefix(__FILE__) . 'messages/deletemessage.php?msid=%msid%', 'Delete', $player, '', $conn);
	
	//Close DB connection
	mysqli_close($conn);
	
	//Redirect to myteams.php
	header('Location: myteams.php');
?>