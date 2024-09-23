<?php

use Latte\Runtime as LR;

/** source: D:\Project\PHP\Task 7\views\pages\contacts.latte */
final class Template_c5359ccc66 extends Latte\Runtime\Template
{
	public const Source = 'D:\\Project\\PHP\\Task 7\\views\\pages\\contacts.latte';


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
