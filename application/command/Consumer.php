<?php

declare(strict_types = 1);

namespace app\command;

use app\index\controller\MqConsumer;
use think\console\Command;
use think\console\Input;
use think\console\input\Argument;
use think\console\input\Option;
use think\console\Output;

class Consumer extends Command
{
    protected function configure()
    {
        // 指令配置
        //自定义的命令 php think consumer 这样去调用了
        $this->setName('consumer')->setDescription('the consumer command');
    }

    protected function execute(Input $input, Output $output)
    {
        $consumer = new MqConsumer();
        $consumer->start();//调用消费者
    }
}
