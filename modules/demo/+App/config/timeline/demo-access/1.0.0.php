<?php return array
	(
		'description'
			=> 'Phonenumber column in user table.'
			,
	
		'modify' => array
			(
				\app\Model_User::table() =>
					'
						ADD COLUMN `phonenumber` :phonenumber AFTER `nickname`
					'
			),

	
	); # config
