<?php declare(strict_types=1);

namespace DCSG\StringyTemplate;

use StringTemplate\SprintfEngine;
use Stringy\StaticStringy;

class S extends StaticStringy
{
    /**
     * @var SprintfEngine
     */
    private static $engine;

    /**
     * Returns a Strings that renders the template placeholders, delimited by {}.
     * The engined used is the String Template Sprintf Engine.
     *
     * e.g.: 'Hello my name is {name}', where ['name' => 'Daniel'], will render 'Hello my name is Daniel'.
     *
     * Notes: All placeholders must have a value otherwise they will be render.
     *
     * @param string $template The template with placeholders to be replaced
     * @param array $values The 'placeholder' => 'value' map
     * @return string The String with the placeholders replaced with their values.
     */
    public static function render(string $template, array $values): string
    {
        return self::getEngine()->render($template, $values);
    }

    /**
     * Returns a String that concatenates the array contented with the defined "glue".
     *
     * e.g.: ['one', 'two'] with a glue being ', ' it will render 'one, two'.
     *
     * @param array $pieces The array to be concatenated
     * @param string $glue The glue to concatenate the array content
     * @return string The concatenated String
     */
    public static function join(array $pieces, $glue = ' '): string
    {
        return implode($glue, $pieces);
    }

    private static function getEngine(): SprintfEngine
    {
        if (self::$engine instanceof SprintfEngine) {
            return self::$engine;
        }

        return self::$engine = new SprintfEngine();
    }
}
