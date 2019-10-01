<?php
declare(strict_types=1);

namespace Yiisoft\Data\Reader\Iterable\Processor;

use Yiisoft\Data\Reader\Filter\FilterProcessorInterface;

class Like implements IterableProcessorInterface, FilterProcessorInterface
{

    public function getOperator(): string
    {
        return \YiiSoft\Data\Reader\Filter\Like::getOperator();
    }

    public function match(array $item, array $arguments, array $filterProcessors): bool
    {
        [$field, $value] = $arguments;
        return stripos($item[$field], $value) !== false;
    }

}