<?php

/*
 * This file is part of envatic/profanity.
 *
 * (c) Erik Campobadal <soc@erik.cat>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Envatic\Profanity;

use Envatic\Profanity\Classes\Blocker;

/**
 * This is the profanity builder class.
 *
 * @author Erik Campobadal <soc@erik.cat>
 */
class Builder
{
    /**
     * Return a new chart instance.
     *
     * @param string $type
     * @param string $library
     *
     * @return \Envatic\Profanity\Classes\Blocker
     */
    public static function blocker($text, $blocker = '****' )
    {
        return new Blocker($text, $blocker );
    }
}
