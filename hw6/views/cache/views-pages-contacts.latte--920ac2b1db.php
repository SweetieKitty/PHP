<?php

use Latte\Runtime as LR;

/** source: D:\Project\kn23_template_engine\views\pages\contacts.latte */
final class Template_920ac2b1db extends Latte\Runtime\Template
{
	public const Source = 'D:\\Project\\kn23_template_engine\\views\\pages\\contacts.latte';


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
