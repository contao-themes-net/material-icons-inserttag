<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace ContaoThemesNet\MaterialIconsInserttag\Tests;

use ContaoThemesNet\MaterialIconsInserttag\ContaoThemesNetMaterialIconsInserttag;
use PHPUnit\Framework\TestCase;

class ContaoThemesNetMaterialIconsInserttagTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoThemesNetMaterialIconsInserttag();

        $this->assertInstanceOf('ContaoThemesNet\MaterialIconsInserttag\ContaoThemesNetMaterialIconsInserttag', $bundle);
    }
}
