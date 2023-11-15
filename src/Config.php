<?php

declare(strict_types=1);

namespace Palmtree\PhpCsFixerConfig;

final class Config extends \PhpCsFixer\Config
{
    public function __construct()
    {
        parent::__construct('Destination');

        $this->setRules([
            '@Symfony' => true,
            '@Symfony:risky' => true,
            'declare_strict_types' => true,
            'concat_space' => ['spacing' => 'one'],
            'fopen_flags' => false,
            'ordered_imports' => true,
            'protected_to_private' => false,
            // Prevent Psalm/PHPStan inline annotations being stripped. https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/4446
            'phpdoc_to_comment' => false,
            // Bad yoda style is
            'yoda_style' => false,
            'phpdoc_annotation_without_dot' => false,
            'cast_spaces' => ['space' => 'none'],
            'echo_tag_syntax' => false,
            'global_namespace_import' => [
                'import_constants' => false,
                'import_classes' => false,
            ],
            'void_return' => true,
            'single_line_throw' => false,
            'use_arrow_functions' => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'trailing_comma_in_multiline' => [
                'after_heredoc' => false,
                'elements' => ['arguments', 'arrays', 'match', 'parameters'],
            ],
        ]);

        $this->setRiskyAllowed(true);
    }
}
