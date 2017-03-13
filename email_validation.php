<?php
	$emails[] = "foo.bar@foobar.com";
	$emails[] = "foobar@foobarcom";
	$emails[] = "foo-bar@foobar.com";
	$emails[] = "foo_bar@foobar.com";
	$emails[] = "foo-bar@foobarcom";
	$emails[] = "foo.foo@foobarcom";
	$emails[] = "foobar@foobar.com";
	$emails[] = "hmN8aN6apyGIYmtrPQirySkE6vcVg5g2yu5Jh51rHxRJ0JcgRINBiose0woUM7oWfKQ7tCHIVnFegag9a6PcxQBJKWRDQ4RpjCsS77Uv4woGtgUixKDIVNhWxMCC2Xf76xP9HDE2wwUfuc3L02jAnL2uPjZVNJHtGnNNVD1XrkiY50rLea2pcUSO7xCAoAO6hDpLCoSxRmvqkKR7VvkZUZ2LWArawgNXzsFvY0A2r9S0GP35SuqiU5R.hQ8aVBBZ";
/*
 * A Regular expression for validating email based on the criteria
 * Validation should be enforced for the hostname:
 * 1-254 alphanumeric characters, plus hyphens,
 * and at least 1 period, case insensitive,
 * ASCII only (?=.{1,254}$) *\@[a-zA-Z0-9\-\.]
 */
	$regex = "/[a-zA-Z0-9\-\.]*\.[a-zA-Z0-9\-\.]*\z/";
	$i = 0;
	foreach($emails as $email)
	{
		if(preg_match($regex, $email))
		{
			echo $i.". ".$email." "."true"."<br>";
		}
		else
		{
			echo $i.". ".$email." "."false"."<br>";
		}
		$i++;
	}


?>
