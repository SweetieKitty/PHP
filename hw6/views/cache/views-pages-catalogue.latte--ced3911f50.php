<?php

use Latte\Runtime as LR;

/** source: C:\Users\Oleksander-PC\Desktop\тарик\php\Task 7\views\pages\catalogue.latte */
final class Template_ced3911f50 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\Oleksander-PC\\Desktop\\тарик\\php\\Task 7\\views\\pages\\catalogue.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo LR\Filters::escapeHtmlText($content) /* line 1 */;
		echo '

<h1>Catalogue</h1>

';
		echo LR\Filters::escapeHtmlText($info) /* line 5 */;
		echo "\n";
	}
}
