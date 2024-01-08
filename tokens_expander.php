<?php
require 'tokens_handler.php';
$source = __DIR__ . '\\themes\\' . THEME_NAME . '-color-theme.json';
if (!file_exists($source)) {
    echo 'File ' . $source . ' not found';
    exit(1);
}
$json = file_get_contents(__DIR__ . '\\themes\\' . THEME_NAME . '-color-theme.json');
if (!$json) {
    echo 'File ' . $source . ' seems empty';
    exit(2);
}
$theming = json_decode($json, true);
if (!$theming) {
    echo 'File ' . $source . ' does not contain valid JSON';
    exit(3);
}
$expanded = [];
array_walk($theming['tokenColors'], function($element) use (&$expanded) {
    if (is_string($element['scope'])) {
        $tokens = explode(',', $element['scope']);
    } else {
        $tokens = $element['scope'];
    }
    foreach ($tokens as $token) {
        $explodedToken = explode('.', $token);
        $language = end($explodedToken);
        if (!in_array($language, SUPPORTED_LANGUAGES)) {
            $language = 'generic';
        }
        $expanded[$language][] = [
            'scope' => $token,
            'expanded' => $explodedToken,
            'settings' => $element['settings'],
        ];
    }
});

uksort($expanded, function($previous, $current) {
    return array_search($previous, SUPPORTED_LANGUAGES) <=> array_search($current, SUPPORTED_LANGUAGES);
});

$theming['tokenColors'] = [];
foreach ($expanded as $language => &$tokens) {
    usort($tokens, function($previous, $current) {
        $foreground = $current['settings']['foreground'] <=> $previous['settings']['foreground'];
        $parts = count($previous['expanded']) <=> count($current['expanded']);
        if ($foreground == 0 && $parts == 0) {
            return $previous['scope'] <=> $current['scope'];
        } else if ($foreground == 0) {
            return $parts;
        }
        return $foreground;
    });
    array_walk($tokens, function(&$token) {
        unset($token['expanded']);
    });
    $theming['tokenColors'] = array_merge($theming['tokenColors'], ['// ' . $language], $tokens);
}
header('Content-Type: text/plain');
$json = json_encode($theming, JSON_PRETTY_PRINT);
$jsonc = preg_replace('`"(\\\/\\\/ (.*?))",`', '// $2$3', $json);
if ($json === $jsonc) {
    echo "\nReplacement of comments did not work\n";
}
file_put_contents(__DIR__. '\\themes\\' . THEME_NAME . '.jsonc', $jsonc);
exit();