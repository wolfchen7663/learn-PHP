<?php
class Captcha
{
    //用户自定义尺寸
    protected $width;
    protected $height;
    protected $res;
    // 验证码位数
    protected $len;
    protected $code;
    public function __construct(int $width = 100, int $height = 30, int $len = 5)
    {
        $this->width = $width;
        $this->height = $height;
        $this->len  = $len;
    }
    public function render()
    {
        $res =  imagecreatetruecolor($this->width, $this->height);
        $this->res = $res;
        imagefill($this->res, 0, 0, imagecolorallocate($this->res, 200, 200, 200));
        $this->text();
        $this->randomPix();
        $this->randomLine();
        $this->show();
        return $this->code;
    }
    // 绘制验证码
    protected function text()
    {
        $font = realpath('Cascadia.ttf');
        $font_size = 20;
        $angle = mt_rand(-20, 20);
        $x = $this->width / $this->len;
        //得到装着文本的盒子
        $box = imagettfbbox($font_size, $angle, $font, $this->randomCode()[0]);
        // boxHeight 文字的高度
        $boxHeight = abs($box[1] - $box[7]);
        for ($i = 0; $i < $this->len; $i++) {
            $this->code .= $code = $this->randomCode()[$i];
            // 这里的y指的是文字的基线，也就是文字的底部那条线 到坐标的高度
            imagettftext($this->res,  $font_size, $angle, $x * $i + 5, ($this->height / 2 + $boxHeight / 2), $this->randomTextColor(), $font, $code);
        }
    }
    // 生成随机的文字
    protected function randomCode()
    {
        $code = '';
        $model = '0123456789qwertyuioplkjhgfdsazxcvbnm';
        for ($i = 0; $i < $this->len; $i++) {
            $index = mt_rand(0, strlen($model) - 1);
            $code .= strtoupper($model[$index]);
        }
        return $code;
    }
    //生成颜色随机的干扰线
    protected function randomLine()
    {
        for ($i = 0; $i < 10; $i++) {
            //随机宽度
            imagesetthickness($this->res, mt_rand(0, 3));
            imageline(
                $this->res,
                mt_rand(0, $this->width),
                mt_rand(0, $this->height),
                mt_rand(0, $this->width),
                mt_rand(0, $this->height),
                $this->randomColor()
            );
        }
    }
    // 生成颜色随机的干扰点
    protected function randomPix()
    {
        for ($i = 0; $i < 300; $i++) {
            imagesetpixel($this->res, mt_rand(0, $this->width), mt_rand(0, $this->height), $this->randomColor());
        }
    }
    // 生成随机的颜色
    protected function randomColor()
    {
        return imagecolorallocate($this->res, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    }
    // 生成随机的文字颜色
    protected function randomTextColor()
    {
        return imagecolorallocate($this->res, mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100));
    }
    // 显示渲染
    protected function show()
    {
        header('Content-type:image/png');
        imagepng($this->res);
    }
}
