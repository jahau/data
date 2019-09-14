<?php
declare(strict_types=1);

namespace Yiisoft\Data\Reader;

use Yiisoft\Data\Reader\Filter\FilterInterface;
use Yiisoft\Data\Reader\Filter\Unit\FilterUnitInterface;

interface FilterableDataInterface
{
    public function withFilter(FilterInterface $filter);
    public function withFilterUnits(FilterUnitInterface... $filterUnits);
}
