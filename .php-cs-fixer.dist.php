<?php

$finder = (new PhpCsFixer\Finder())->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PER-CS' => true,
        '@PHP82Migration' => true,
        'octal_notation' => false,
        'no_unused_imports' => true,
    ])
    ->setFinder($finder)
    ->setCacheFile(__DIR__ . '/.cache/php-cs-fixer.cache');
