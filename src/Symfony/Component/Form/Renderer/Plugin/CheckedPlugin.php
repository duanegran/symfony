<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license infieldation, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Renderer\Plugin;

use Symfony\Component\Form\Renderer\RendererInterface;
use Symfony\Component\Form\FieldInterface;

class CheckedPlugin implements RendererPluginInterface
{
    public function setUp(FieldInterface $field, RendererInterface $renderer)
    {
        $renderer->setVar('checked', (bool)$field->getData());
    }
}