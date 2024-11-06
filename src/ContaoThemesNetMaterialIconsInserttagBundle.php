<?php

declare(strict_types=1);

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

namespace ContaoThemesNet\MaterialIconsInserttag;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoThemesNetMaterialIconsInserttagBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
