<?php
class Water
{
    protected $water;
    public function __construct(string $water)
    {
        $this->water = $water;
    }
    public function make(string $image, $filename = null, $pos = 3)
    {
        // check image
        $this->checkImage($image);
        // image to resource
        $res = $this->resource($image);
        $water = $this->resource($this->water);
        //set dest position
        $position = $this->setPosition($res, $water, $pos);
        //add water
        imagecopy($res, $water, $position['x'], $position['y'], 0, 0, imagesx($water), imagesy($water));
        // show image
        $this->showAction($image)($res, $filename ?? $image);
    }
    protected function resource(string $image)
    {
        $info = getimagesize($image);
        $functions = [
            1 => 'imagecreatefromgif',
            2 => 'imagecreatefromjpeg',
            3 => 'imagecreatefrompng'

        ];
        $call = $functions[$info[2]];
        return $call($image);
    }
    protected function checkImage(string $image)
    {
        if (!is_file($image) || getimagesize($image) === false) {
            throw new Exception('FILE NOT FOUND');
        } else {
            return $image;
        }
    }
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
    protected function setPosition($res, $water, $pos)
    {
        $info = [
            'x' => 20,
            'y' => 20
        ];
        switch ($pos) {
            case 1:
                break;
            case 2:
                $info['x'] = imagesx($res) / 2 - imagesx($water) / 2;
                break;
            case 3:
                $info['x'] = imagesx($res) - imagesx($water);
                break;
            case 4:
                $info['y'] = imagesy($res) / 2 - imagesy($water) / 2;
                break;
            case 5:
                $info['x'] = imagesx($res) / 2 - imagesx($water) / 2;
                $info['y'] = imagesy($res) / 2 - imagesy($water) / 2;
                break;
            case 6:
                $info['x'] = imagesx($res) - imagesx($water);
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
                $info['x'] = imagesx($res) - imagesx($water);
                $info['y'] = imagesy($res) - imagesy($water);
                break;
        }
        return $info;
    }
}
