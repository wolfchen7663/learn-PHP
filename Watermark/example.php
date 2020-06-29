<?php
$origin = imagecreatefromjpeg('origin.jpg');
$water = imagecreatefrompng('water.png');
//将water这张照片完整的截取放在origin的(100, 0)处
imagecopy($origin, $water, 100, 0, 0, 0, imagesx($water), imagesy($water));

//Copy a part of src_im onto dst_im starting at the x,y coordinates src_x, src_y with a width of src_w and a height of src_h.
// The portion defined will be copied onto the x,y coordinates, dst_x and dst_y.
/**
 * 
 * imagecopy ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h ) : bool
将 src_im 图像中坐标从 src_x，src_y 开始，宽度为 src_w，高度为 src_h 的一部分拷贝到 dst_im 图像中坐标为 dst_x 和 dst_y 的位置上。
 */
header("Content-type:image/jpeg");
imagejpeg($origin);
