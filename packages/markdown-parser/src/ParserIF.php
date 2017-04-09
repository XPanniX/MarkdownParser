<?php

namespace MarkdownParser;

interface ParserIF
{
    /**
     * Parses a markdown formatted string to HTML
     *
     * @param string $text - A markdown formatted text
     * @return string - HTML
     */
    public static function parse($text);

}
