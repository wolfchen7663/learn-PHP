<?php
class Water
{
    protected $water;
    public function __construct(string $water)
    {
        $this->water = $water;
    }
    public function make(string $image, string $filename = null, int $pos = 3)
    {
        $this->checkImage($image);
        $res = $this->resource($image);
        $water = $this->resource($this->water);
        $position = $this->position($res, $water, $pos);
        imagecopy($res, $water, $position['x'], $position['y'], 0, 0, imagesx($water), imagesy($water));
        return  $this->showAction($image)($res, $filename ?? $image);
    }
    // 检测文件是否存在或者是否是图片,不是的话，就抛出异常
    protected function checkImage(string $image)
    {
        if (!is_file($image) || getimagesize($image) === false) {
            throw new Exception('FILE IS NOT FOUND');
        }
    }
    //根据图像的类型进行输出
    protected function showAction(string $image)
    {
        $info = getimagesize($image);
        $functions = [
            1 => 'imagegif',
            2 => 'imagejpeg',
            3 => 'imagepng'
        ];
        return $functions[$info[2]];
    }
    //根据图片的类型生成对应的资源
    protected function resource(string $image)
    {
        $info = getimagesize($image);
        /**
         * 
        Array
        (
            [0] => 400
            [1] => 300
            [2] => 2 这就代表图片的类型
            [3] => width="400" height="300"
            [bits] => 8
            [channels] => 3
            [mime] => image/jpeg
        ) * 
         */

        $functions = [
            1 => 'imagecreatefromgif',
            2 => 'imagecreatefromjpeg',
            3 => 'imagecreatefrompng'
        ];
        $call = $functions[$info[2]];
        return $call($image);
    }
    // 水印的位置
    protected function position($res, $water, $pos)
    {
        $info = [
            'x' => 20,
            'y' => 20
        ];
        // 每个数字所代表的位置
        // 1   2    3 
        // 4   5    6
        // 7   8   9 
        switch ($pos) {
            case 1:
                break;
            case 2:
                $info['x'] = imagesx($res) / 2 - imagesx($water) / 2;
                break;
            case 3:
                $info['x'] = imagesx($res)  - imagesx($water);
                break;
            case 4:
                $info['y'] = imagesy($res) / 2 - imagesy($water) / 2;
                break;
            case 5:
                $info['x'] = imagesx($res) / 2 - imagesx($water) / 2;
                $info['y'] = imagesy($res) / 2 - imagesy($water) / 2;
                break;
            case 6:
                $info['x'] = imagesx($res)  - imagesx($water);
                $info['y'] = imagesy($res) / 2 - imagesy($water) / 2;
                break;
            case 7:
                $info['y'] = imagesy($res) - imagesy($water);
                break;
            case 8:
                $info['x'] = imagesx($res) / 2 - imagesx($water) / 2;
                $info['y'] = imagesy($res) - imagesy($water);
                break;
            case 9:
                $info['x'] = imagesx($res)  - imagesx($water);
                $info['y'] = imagesy($res) - imagesy($water);
                break;
        }
        return $info;
    }
}
