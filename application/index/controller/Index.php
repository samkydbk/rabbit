<?php
namespace app\index\controller;

use app\index\controller\MqProducer;

class Index
{
    public function index()
    {
        echo 'tp';
    }

    /**
     * Description
     * @Author Sam<zhang.yongtao1@byd.com>
     * @DateTime 2021-02-08
     * @param string $name
     * @return void
     */
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function send()
    {
        $consumer = new MqProducer();//生产者
        $consumer->pushMessage('time:'. date('Y-m-d H:i:s').' your mother call you back home ');
    }
}
