<?php

use Latte\Runtime as LR;

/** source: C:\Users\Oleksander-PC\Desktop\тарик\php\Task 7\views\form.latte */
final class Template_c032638b9b extends Latte\Runtime\Template
{
	public const Source = 'C:\\Users\\Oleksander-PC\\Desktop\\тарик\\php\\Task 7\\views\\form.latte';


	public function main(array $ʟ_args): void
	{
		echo '<form method="POST" action="">
    <label>
        <select
                style="display: inline-block;width: auto;"
                name="name"
                class="w3-select w3-border"
                id="name">
            <option value="Цукерки" selected>Цукерки</option>
            <option value="Печиво">Печиво</option>
            <option value="Шоколад">Шоколад</option>
            <option value="Жувальна гумка">Жувальна гумка</option>
        </select>
    </label>
    <label>
        <input type="number" name="age" placeholder="Кількість">
    </label>

    <input type="submit" value="Додати">
</form>

';
	}
}