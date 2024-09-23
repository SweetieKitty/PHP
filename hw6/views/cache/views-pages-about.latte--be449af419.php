<?php

use Latte\Runtime as LR;

/** source: D:\Project\PHP\Task 7\views\pages\about.latte */
final class Template_be449af419 extends Latte\Runtime\Template
{
	public const Source = 'D:\\Project\\PHP\\Task 7\\views\\pages\\about.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo LR\Filters::escapeHtmlText($content) /* line 1 */;
		echo '

<h1>About</h1>

';
		echo LR\Filters::escapeHtmlText($info) /* line 5 */;
		echo "\n";
	}
}
