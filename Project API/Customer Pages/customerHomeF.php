<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");

include_once '../Database/connection.php';

$con = getConnection();

$stmt = $con->prepare('CALL getAvailableMovieShowings(?)');

$stmt->bindParam(1, date('Y-m-d'), PDO::PARAM_STR, 6);

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	$movieShowing = array();
	$movieShowing["body"]["Movie Showing"]["Information"] = array();
	$movieShowing["body"]["Movie Showing"]["Seats"] = array();
	
	extract($row);
	
	$ex = array(
		"Name" => $Name,
		"Genre" => $Genre,
		"Duration" => $Duration,
		"Date & Time" => $DateTime, 
		"Location" => $Location,
	);
	
	$stmt = $con->prepare('CALL getMovieShowingSeats(?, ?)');
	
	$stmt->bindParam(1, $row['RoomNo'], PDO::PARAM_STR, 11);
	$stmt->bindParam(2, $row['DateTime'], PDO::PARAM_STR, 6);
	
	$stmt->execute();
	
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row);
		
		$ex2 = array(
			"Seat ID" => $SeatID,
			"Seat Type" => $Seat_Type
		);
		
		array_push($movieShowing["body"]["Movie Showing"]["Seats"], $ex2);
	}
	
	array_push($movieShowing["body"]["Movie Showing"]["Information"], $ex);
}

echo json_encode($movieShowing);

?>