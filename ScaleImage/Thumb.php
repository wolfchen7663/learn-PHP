<?php
class Thumb
{
    // 传入的width height 指的是画布的宽高
    public function make(string $image, string $filename, int $width, int  $height, int  $type = 3)
    {
        // pic res
        $resImage = $this->resource($image);
        // paint res
        $info = $this->getSize($width, $height, imagesx($resImage), imagesy($resImage), $type);
        //这里传入的是计算之后的宽度 高度, 因为画布的宽高是需要根据模式进行调节的
        $resPaint = imagecreatetruecolor($info[0], $info[1]);

        // scale pic
        imagecopyresampled($resPaint, $resImage, 0, 0, 0, 0, $info[0], $info[1], $info[2], $info[3]);
        $this->saveAction($image)($resPaint, $filename);
    }
    //get size 取得画布的实时宽高 这里是重点
    protected function getSize(int $pw, int $ph, int $iw, int $ih, int $type)
    {
        switch ($type) {
                // 保留画布宽度不变，高度自动
            case 1:
                $ph = $pw / $iw * $ih;
                break;
            case 2:
                // 保留画布高度不变，宽度自动
                $pw = $ph / $ih * $iw;
                break;
            case 3:
            default:
                // 保持画布不改变
                if ($iw / $pw > $ih / $ph) {
                    $iw  = $ih / $ph * $pw;
                } else {
                    $ih = $iw / $pw * $ph;
                }
                break;
        }

        return [$pw, $ph, $iw, $ih];
    }
    //check is image or not           
    protected function checkImage(string $image)
    {
        if (!is_file($image) || getimagesize($image) === false) {
            throw new Exception('FILE NOT FOUND!');
        }
        return $image;
    }
    // image to resource
    protected function resource(string $image)
    {
        //转换成资源前检测是否是图片
        $image = $this->checkImage($image);
        $info = getimagesize($image);
        $function = [
            1 => 'imagecreatefromgif',
            2 => 'imagecreatefromjpeg',
            3 => 'imagecreatefrompng'

        ];
        $call = $function[$info[2]];
        return $call($image);
    }
    // save the file 保存缩略图到指定的文件
    protected function saveAction(string $image)
    {
        $info = getimagesize($image);
        $function = [
            1 => 'imagegif',
            2 => 'imagejpeg',
            3 => 'imagepng'
        ];
        return $function[$info[2]];
    }
}
