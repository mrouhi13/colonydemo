<?php
	http_response_code(BAD_REQUEST);

	$question = new Question();

	$result = $question -> get();

	if ($result)
	{
		http_response_code(OK);

		echo Common::response($result);
	}

	die();
?>