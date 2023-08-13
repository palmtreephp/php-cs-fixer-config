<?php

declare(strict_types=1);

namespace Palmtree\PhpCsFixerConfig;

final class Config extends \PhpCsFixer\Config
{
    public function __construct()
    {
        parent::__construct('Palmtree');

        $this->setRules([
            '@Symfony' => true,
            '@Symfony:risky' => true,
            'declare_strict_types' => true,
            // Prevent Psalm inline annotations being stripped. https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/4446
            'phpdoc_to_comment' => false,
            'concat_space' => ['spacing' => 'one'],
            'fopen_flags' => false,
            'ordered_imports' => true,
            'protected_to_private' => false,
            'binary_operator_spaces' => [
                'operators' => [
                    // Prevent spaces being added in PHP8 union types
                    '|' => null,
                ],
            ],
            // Bad yoda style is
            'yoda_style' => false,
            'phpdoc_annotation_without_dot' => false,
            'cast_spaces' => ['space' => 'none'],
            'no_superfluous_phpdoc_tags' => [
                'allow_mixed' => true,
            ],
            'echo_tag_syntax' => false,
            'global_namespace_import' => [
                'import_constants' => false,
                'import_classes' => false,
            ],
            'void_return' => true,
            'single_line_throw' => false,
            'use_arrow_functions' => true,
        ]);

        $this->setRiskyAllowed(true);
    }
}
