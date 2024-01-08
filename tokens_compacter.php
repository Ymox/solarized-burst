<?php
require 'tokens_handler.php';
$source = __DIR__ . '\\themes\\' . THEME_NAME . '.jsonc';
if (!file_exists($source)) {
    echo 'File ' . $source . ' not found';
    exit(1);
}
$jsonc = file_get_contents($source);
if (!$jsonc) {
    echo 'File ' . $source . ' seems empty';
    exit(2);
}
$json = preg_replace('`\n\t+//.*?\n`', "\n", $jsonc);
if ($json === $jsonc) {
    echo "\nReplacement of comments did not work, parsing would not work either\n";
    exit(3);
}
$theming = json_decode($json, true);
if (!$theming) {
    echo 'File ' . $source . ' does not contain valid JSON';
    exit(4);
}
$expanded = [];
array_walk($theming['tokenColors'], function($element) use (&$expanded) {
    $tokens = explode(',', $element['scope']);
    foreach ($tokens as $token) {
        if (!$token) {
            continue;
        }
        $explodedToken = explode('.', $token);
        $language = end($explodedToken);
        $color = strtolower($element['settings']['foreground']);
        if (!in_array($language, SUPPORTED_LANGUAGES)) {
            $language = 'generic';
        }
        if (!empty($expanded[$color])) {
            $expanded[$color]['scope'][] = [
                'token' => $token,
                'language' => $language
            ];
        } else {
            $expanded[$color] = [
                'scope' => [
                    [
                        'token' => $token,
                        'language' => $language
                    ]
                ],
                'settings' => [
                    'foreground' => $color,
                    'fontStyle' => $element['settings']['fontStyle'] ?? ''
                ],
            ];
        }
    }
});

ksort($expanded);

$theming['name'] = THEME_NAME;
$theming['tokenColors'] = [];
foreach ($expanded as $color => &$tokens) {
    usort($tokens['scope'], function($previous, $current) {
        $sort = 0;
        if (!($sort = (array_search($previous['language'], SUPPORTED_LANGUAGES) <=> array_search($current['language'], SUPPORTED_LANGUAGES)))) {
            $sort = (substr_count($previous['token'], '.') <=> substr_count($current['token'], '.'));
        }

        return $sort;
    });
    $tokens['scope'] = array_filter(array_keys(array_column($tokens['scope'], null, 'token')));
    $theming['tokenColors'][] = $tokens;
}
$data = json_encode($theming, JSON_PRETTY_PRINT);
file_put_contents(__DIR__. '\\themes\\' . THEME_NAME . '-color-theme.json', $data);
header('Content-Type: application/json', true);
exit($data);