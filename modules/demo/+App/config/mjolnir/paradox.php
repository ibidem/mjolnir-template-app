<?php return array
	(
		'demo-access' => array
			(
				'database' => 'default',

				// versions
				'1.0.0' => \app\Pdx::gate
					(
						'demo-access/1.0.0', 
						[
							'mjolnir-access' => '1.0.0'
						]
					),
			),

	); # config
