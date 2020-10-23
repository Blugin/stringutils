<?php

/*
 *
 *  ____                           _   _  ___
 * |  _ \ _ __ ___  ___  ___ _ __ | |_| |/ (_)_ __ ___
 * | |_) | '__/ _ \/ __|/ _ \ '_ \| __| ' /| | '_ ` _ \
 * |  __/| | |  __/\__ \  __/ | | | |_| . \| | | | | | |
 * |_|   |_|  \___||___/\___|_| |_|\__|_|\_\_|_| |_| |_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the MIT License. see <https://opensource.org/licenses/MIT>.
 *
 * @author  PresentKim (debe3721@gmail.com)
 * @link    https://github.com/PresentKim
 * @license https://opensource.org/licenses/MIT MIT License
 *
 *   (\ /)
 *  ( . .) ♥
 *  c(")(")
 */

declare(strict_types=1);

namespace blugin\utils\string;

class StringUtil{
    private function __construct(){
    }

    public static function stripSpace(string $string) : string{
        return preg_replace('/\s+/', '', $string);
    }

    public static function equals(string $a, string $b, bool $caseSensitive = true) : bool{
        return ($caseSensitive ? strcmp($a, $b) : strcasecmp($a, $b)) === 0;
    }

    public static function indexOf(string $haystack, string $needle, bool $caseSensitive = true) : int{
        $ret = ($caseSensitive ? strpos($haystack, $needle) : stripos($haystack, $needle));
        return $ret === false ? -1 : $ret;
    }

    public static function startsWith(string $haystack, string $needle, bool $caseSensitive = true) : bool{
        return $needle === "" || self::indexOf($haystack, $needle, $caseSensitive) === 0;
    }

    public static function endsWith(string $haystack, string $needle, bool $caseSensitive = true) : bool{
        return $needle === "" || self::equals(substr($haystack, -strlen($needle)), $needle, $caseSensitive);
    }

    public static function contains(string $haystack, string $needle, bool $caseSensitive = true) : bool{
        return $needle === "" || self::indexOf($haystack, $needle, $caseSensitive) !== -1;
    }

    public static function removeExtension(string $string) : string{
        return substr($string, 0, (strrpos($string, ".")));
    }
}