<?php

use Latte\Runtime as LR;

/** source: D:\Project\kn23_template_engine\views\pages\home.latte */
final class Template_6d46d7e2c6 extends Latte\Runtime\Template
{
	public const Source = 'D:\\Project\\kn23_template_engine\\views\\pages\\home.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
    ';
		echo LR\Filters::escapeHtmlText($content) /* line 2 */;
		echo '
</div>

<div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
    <p>Ви можете додати цукерки в базу даних по проханню Олександра Ярифи</p>
</div>


<table class="w3-table-all">
    <tr class="w3-blue">
        <th>ID</th>
        <th>Назва товару</th>
        <th>Кількість товару</th>
        <th>Дія</th>
    </tr>
';
		foreach ($data as $student) /* line 17 */ {
			echo '        <tr class="w3-hover-light-grey">
            <td>';
			echo LR\Filters::escapeHtmlText($student['id']) /* line 19 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($student['name']) /* line 20 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($student['age'] ?? '0') /* line 21 */;
			echo '</td>
            <td>
                <a href="/home/delete?id=';
			echo LR\Filters::escapeHtmlAttr($student['id']) /* line 23 */;
			echo '" class="w3-button w3-red">Видалити</a>
            </td>
        </tr>
';

		}

		echo '</table>

<div class="w3-container w3-blue w3-padding-16 w3-margin-top">
';
		$this->createTemplate('../form.latte', $this->params, 'include')->renderToContentType('html') /* line 30 */;
		echo '</div>

';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['student' => '17'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
