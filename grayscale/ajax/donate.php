<?php
//sample query 
//donate.php?amount=3000&party=3&election_id=45&success=1&transaction_code=fh378hfa

require_once('../config.inc.php');
require_once('../inc/mysql.inc.php');

// require_once(PATH.PATH_SEP.'inc/mysql.inc.php');

$don=array( 
	'amount' => (int)(mysqli_real_escape_string($MYSQLI_LINK, htmlspecialchars(trim($_REQUEST['amount'])))+0),
	'party_id' => (int)(mysqli_real_escape_string($MYSQLI_LINK, htmlspecialchars(trim($_REQUEST['party'])))+0),
	'election_id' => (int)(mysqli_real_escape_string($MYSQLI_LINK, htmlspecialchars(trim($_REQUEST['election_id'])))+0),
	'success' => (int)(mysqli_real_escape_string($MYSQLI_LINK, htmlspecialchars(trim($_REQUEST['success'])))+0),
	'transaction_code' => mysqli_real_escape_string($MYSQLI_LINK, htmlspecialchars(trim($_REQUEST['transaction_code']))),
	'ip' => "".$_SERVER['REMOTE_ADDR'],
	'timestamp' => time()
	);

$donationsTbl = DONATIONS_TBL;
// print_r($don);


//making donation
if (!empty($_REQUEST['amount'])&&!empty($_REQUEST['party'])&&!empty($_REQUEST['election_id'])&&!empty($_REQUEST['success'])&&!empty($_REQUEST['transaction_code'])) {

	$query = "INSERT INTO $donationsTbl (`id`, `timestamp`, `ip`, `amount`, `party_id`, `election_id`, `transaction_code`, `success`) 
	VALUES ('', {$don['timestamp']}, '{$don['ip']}', {$don['amount']}, {$don['party_id']}, {$don['election_id']}, '{$don['transaction_code']}', {$don['success']})";
	//print $query;
	$result = mysqli_query($MYSQLI_LINK, $query) or die("INSERT Error: " . mysqli_error($MYSQLI_LINK));
}
if (!empty($_REQUEST['election_id'])) {
//return values
	$query = "SELECT party_id,SUM(amount) as amount FROM $donationsTbl WHERE election_id={$don['election_id']} AND success=1 GROUP BY party_id";
	$result = mysqli_query($MYSQLI_LINK, $query) or die("SELECT Error: " . mysqli_error($MYSQLI_LINK));
// print $query;
	$rows = array();

	while ($r = mysqli_fetch_assoc($result)) {
		$rows[]=$r;
	}
}

print json_encode($rows);	