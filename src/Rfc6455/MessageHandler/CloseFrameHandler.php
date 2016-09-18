<?php
/**
 * This file is a part of Woketo package.
 *
 * (c) Ci-tron <dev@ci-tron.org>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\Woketo\Rfc6455\MessageHandler;


use Nekland\Woketo\Rfc6455\Frame;
use Nekland\Woketo\Rfc6455\MessageProcessor;

class CloseFrameHandler implements Rfc6455MessageHandlerInterface
{
    public function supports(Frame $frame)
    {
        // TODO: Implement supports() method.
    }

    public function process(Frame $frame, MessageProcessor $messageProcessor)
    {
        // TODO: Implement process() method.
    }
}
