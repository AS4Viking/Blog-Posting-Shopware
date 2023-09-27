<?php declare(strict_types=1);

namespace Sas\BlogModule\Content\Blog\Events;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\Event\NestedEvent;

class BlogIndexerEvent extends NestedEvent
{
    /**
     * @var array
     */
    protected $ids;

    /**
     * @var Context
     */
    protected $context;

    private array $skip;

    public function __construct(array $ids, Context $context, array $skip = [])
    {
        $this->ids = $ids;
        $this->context = $context;
        $this->skip = $skip;
    }

    public function getIds(): array
    {
        return $this->ids;
    }

    public function getContext(): Context
    {
        return $this->context;
    }

    public function getSkip(): array
    {
        return $this->skip;
    }
}
