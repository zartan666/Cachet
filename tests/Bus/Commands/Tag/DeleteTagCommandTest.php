<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\Tag;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\Tag\DeleteTagCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\Tag\DeleteTagCommandHandler;
use CachetHQ\Cachet\Models\Tag;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the delete tag command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class DeleteTagCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = [
            'tag' => new Tag(),
        ];

        $object = new DeleteTagCommand(
            $params['tag']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return false;
    }

    protected function getHandlerClass()
    {
        return DeleteTagCommandHandler::class;
    }
}
