<?php

namespace BlockLayoutSkeleton\Site\BlockLayout;

use Omeka\Api\Representation\SiteRepresentation;
use Omeka\Api\Representation\SitePageBlockRepresentation;
use Omeka\Api\Representation\SitePageRepresentation;
use Omeka\Site\BlockLayout\AbstractBlockLayout;
use Zend\Form\Element\Textarea;
use Zend\View\Renderer\PhpRenderer;

class Skeleton extends AbstractBlockLayout
{
    public function getLabel()
    {
        return 'Skeleton'; // @translate
    }

    public function form(PhpRenderer $view, SiteRepresentation $site, SitePageRepresentation $page = null, SitePageBlockRepresentation $block = null)
    {
        return $view->translate('Skeleton');
    }

    public function render(PhpRenderer $view, SitePageBlockRepresentation $block)
    {
        return $view->partial('block-layout-skeleton/common/block-layouts/skeleton', ['block' => $block]);
    }
}
