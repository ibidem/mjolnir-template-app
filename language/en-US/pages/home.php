<?php return
[

'home-title' => 'Welcome to your Mjölnir application!',

'home' => function ($in)
{
return <<<EOS
	<p>To start working on the design go to <code>{$in['theme']}</code>.</p>
	<p>To start making things tick go to <code>{$in['modules']}</code>.</p>
EOS
;
}

];