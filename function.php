<?php

/*
-- Check Items Functions v1.0
-- Function To Check Item In Database [ Function Accept Parameters ]
-- $select = The Item To Select [ Example: user, item, category ]
-- $from = The Table To Select From [ Example: users, items, categories ]
-- $value = The Value Of Select [ Example: Mahmoud, Box, Electronics ]
*/

function checkItem($select, $from, $value) {

	global $con;
	$statement = $con->prepare("SELECT $select FROM $from WHERE $select = ?");
	$statement->execute(array($value));
	$count = $statement->rowCount();
	return $count;
}