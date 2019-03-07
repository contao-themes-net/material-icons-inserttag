<?php

/*
 * Material Icons Inserttag Bundle for Contao Open Source CMS
 *
 * Copyright (c) 2019 pdir / digital agentur // pdir GmbH
 * @package    material-icons-inserttag
 * @link       https://github.com/contao-themes-net/material-icons-inserttag
 * @author     Philipp Seibt <develop@pdir.de>
 * @license    LGPL-3.0-or-later
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ContaoThemesNet\MaterialIconsInserttag\EventListener;

class HookListener
{
    /**
     * Replace the insert tag.
     *
     * @param string $tag the insert tag
     *
     * @return bool|string
     */
    public function onReplaceInsertTags($tag)
    {
        if (preg_match('/^mi([bsrl]?)\:\:/', $tag)) {
            return $this->replaceIconInsertTag($tag);
        }

        return false;
    }

    /**
     * Replace the icon insert tag.
     *
     * @param string $tag the given tag
     *
     * @return string
     */
    private function replaceIconInsertTag($tag)
    {
        $parts = explode('::', $tag);
        $classes = '';
        if (null !== $parts[2]) {
            $classes = $parts[2].' ';
        }

        $tag = '<i class="'.$classes.'material-icons">'.$parts[1].'</i>';

        return $tag;
    }
}
