<?php
class Captcha
{
    protected $width;
    protected $height;
    protected $image;
    protected $len;
    protected $code;
    public function __construct($width = 100, $height = 30, $len = 5)
    {
        $this->width = $width;
        $this->height = $height;
        $this->len = $len;
    }
    public function render()
    {
        $image = imagecreatetruecolor($this->width, $this->height);
        $this->image = $image;
        imagefill($this->image, 0, 0, imagecolorallocate($this->image, 200, 200, 200));
        $this->text();
        $this->pix();
        $this->line();
        $this->show();
        return $this->code;
    }
    protected function show()
    {
        header("Content-type:image/png");
        imagepng($this->image);
        imagedestroy($this->image);
    }
    protected function text()
    {

        $size = 20;
        $angle = mt_rand(-20, 20);
        $x = $this->width / $this->len;
        $font = realpath('./fonts/Cascadia.ttf');
        $text = '0123456789qwertyuioplkjhgfdsazxcvbnm';
        $box = imagettfbbox($size, $angle, $font, $text[0]);
        $height = abs($box[7] - $box[1]);
        $y = $this->height / 2 + $height / 2;
        for ($i = 0; $i < $this->len; $i++) {
            $this->code .= $code = $text[mt_rand(0, strlen($text) - 1)];
            imagettftext($this->image, $size, $angle, $x * $i + 5, $y, $this->textColor(), $font, $code);
        }
    }
    protected function pix()
    {
        for ($i = 0; $i < 200; $i++) {
            imagesetpixel($this->image, mt_rand(0, $this->width), mt_rand(0, $this->height), $this->color());
        }
    }
    protected function line()
    {
        for ($i = 0; $i < 10; $i++) {
            imagesetthickness($this->image, mt_rand(0, 3));
            imageline($this->image, mt_rand(0, $this->width), mt_rand(0, $this->height), mt_rand(0, $this->width), mt_rand(0, $this->height), $this->color());
        }
    }
    protected function color()
    {
        return imagecolorallocate($this->image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    }
    protected function textColor()
    {
        return imagecolorallocate($this->image, mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100));
    }
}
