<?php

namespace MarkdownParser;

class Parser implements ParserIF
{
    public static $mdRules = array(
        '/(#+)(.*)/'      => 'self::parseHeader',
        '/\*\*(.*?)\*\*/' => 'self::parseBold',
        '/\*(.*?)\*/'     => 'self::parseItalic',
        '/\n\>(.*)/'      => 'self::parseQuote',
        '/\n\n(.*)\n\n/'  => 'self::parseParagraph',
        '/\n\*(.*)/'      => 'self::parseList'
    );

    public static function parse($text)
    {
        $text = str_replace(array("\r\n", "\r"), "\n", $text);

        foreach (self::$mdRules as $regex => $replaceMethod) {
            $text = preg_replace_callback($regex, $replaceMethod, $text);
        }

        return trim($text);
    }


    public static function parseFile($file)
    {
        if (!file_exists($file)) {
            throw new \InvalidArgumentException('File not found');
        }

        $text = file_get_contents($file);

        if ($text === false) {
            throw new \InvalidArgumentException('File could not be read');
        }

        return self::parse($text);
    }

    public static function parseHeader($regexData)
    {
        $hLevel     = strlen($regexData[1]);
        $headerText = $regexData[2];

        return sprintf('<h%d>%s</h%d>', $hLevel, trim($headerText), $hLevel);
    }

    public static function parseBold($regexData)
    {
        $boldText = $regexData[1];

        return sprintf('<b>%s</b>', trim($boldText));
    }

    public static function parseItalic($regexData)
    {
        $italicText = $regexData[1];

        return sprintf('<i>%s</i>', trim($italicText));
    }

    public static function parseQuote($regexData)
    {
        $quote = $regexData[1];

        return sprintf('<blockquote>%s</blockquote>', trim($quote));
    }

    public static function parseParagraph($regexData)
    {
        $text = $regexData[1];

        return sprintf('<p>%s</p>', trim($text));
    }

    public static function parseList($regexData)
    {
        $text = $regexData[1];

        return sprintf('<ul><li>%s</li></ul>', trim($text));
    }
}
