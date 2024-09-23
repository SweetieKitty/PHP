<?php

function formatText($text) {
    $cleaned_text = preg_replace('/[\s\p{P}\p{N}]+/u', '', $text);

    $lowercase_text = strtolower($cleaned_text);

    $chars = preg_split('//u', $lowercase_text, -1, PREG_SPLIT_NO_EMPTY);

    $formatted_text = '';

    $is_upper = true;

    foreach ($chars as $char) {
        $formatted_text .= $is_upper ? strtoupper($char) : $char;
        $is_upper = !$is_upper;
    }

    return $formatted_text;
}

$text = "Блін, я так люблю пхп,те який тут чудовий компілятор не можна описати навіть 200 символами,пхп шторм дуже зручний, особливо коли немає ліцензії, мені дуже подобається кожні 30 днів створювати новий аккаунт >.";
$formatted_text = formatText($text);
echo $formatted_text;

?>

