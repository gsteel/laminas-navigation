<?php

declare(strict_types=1);

namespace LaminasTest\Navigation\TestAsset;

use Laminas\Navigation\Page\AbstractPage;
use Traversable;

class AbstractContainer extends \Laminas\Navigation\AbstractContainer
{
    /**
     * @param AbstractPage|array|Traversable $page
     */
    public function addPage($page)
    {
        parent::addPage($page);
        $this->pages = [];
    }
}
