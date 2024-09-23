<?php

use Latte\Runtime as LR;

/** source: C:\Users\Oleksander-PC\Desktop\тарик\php\Task 7\views\nav.latte */
final class Template_f987e5a869 extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\Oleksander-PC\\Desktop\\тарик\\php\\Task 7\\views\\nav.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<nav class="w3-bar w3-teal">
    <a href="/" class="w3-bar-item">
        HOME
    </a>
    <a href="/about" class="w3-bar-item">
        ABOUT
    </a>
    <a href="/contacts" class="w3-bar-item">
        CONTACTS
    </a>

';
		if ($isUserLoggedIn) /* line 12 */ {
			echo '        <a href="/logout" class="w3-bar-item w3-right">
            LOGOUT
        </a>
';
		} else /* line 16 */ {
			echo '        <a href="/login" class="w3-bar-item w3-right">
            LOGIN
        </a>
';
		}
		echo '
</nav>

';
	}
}
