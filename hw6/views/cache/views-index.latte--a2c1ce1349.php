<?php

use Latte\Runtime as LR;

/** source: C:\Users\Oleksander-PC\Desktop\тарик\php\Task 7\src/../views/index.latte */
final class Template_a2c1ce1349 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\Oleksander-PC\\Desktop\\тарик\\php\\Task 7\\src/../views/index.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        ';
		echo LR\Filters::escapeHtmlText($title) /* line 9 */;
		echo '
    </title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

';
		$this->createTemplate('nav.latte', $this->params, 'include')->renderToContentType('html') /* line 16 */;
		echo '<div class="w3-container">
';
		$this->createTemplate("pages/{$page}.latte", $this->params, 'include')->renderToContentType('html') /* line 18 */;
		echo '</div>
';
		$this->createTemplate('footer.latte', $this->params, 'include')->renderToContentType('html') /* line 20 */;
		echo '
</body>
</html>
';
	}
}
