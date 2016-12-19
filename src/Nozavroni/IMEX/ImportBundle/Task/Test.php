<?php
namespace Nozavroni\IMEX\ImportBundle\Task;

use Robo\Result;
use Robo\Task\BaseTask;

/**
 * Just a test task
 */
class Test extends BaseTask
{
    protected $foo;

    /**
     * Constructor.
     */
    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if ($this->foo == 'bar') {
            return Result::error($this, 'Foo cannot be bar.');
        }

        return Result::success($this);
    }
}
