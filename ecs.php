<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;

$date = date('Y');

$GLOBALS['ecsHeader'] = <<<EOF
Material Icons Inserttag Bundle for Contao Open Source CMS

Copyright (c) $date pdir / digital agentur // pdir GmbH
@package    material-icons-inserttag
@link       https://github.com/contao-themes-net/material-icons-inserttag
@author     Philipp Seibt <develop@pdir.de>
@license    LGPL-3.0-or-later
For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

return static function (ContainerConfigurator $containerConfigurator) {
    $containerConfigurator->import(__DIR__.'/vendor/contao/easy-coding-standard/config/set/contao.php');

    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::LINE_ENDING, "\n");

    $services = $containerConfigurator->services();
    $services
        ->set(HeaderCommentFixer::class)
        ->call('configure', [[
            'header' => $GLOBALS['ecsHeader'],
        ]])
    ;
};
