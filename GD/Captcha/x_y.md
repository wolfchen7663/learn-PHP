```
function imagettftext(
    $image,
    $size,
    $angle,
    $x,
    $y,
    $color,
    $fontfile,
    $text
) { }

@param int $x
The coordinates given by x and y will define the basepoint of the first character (roughly the lower-left corner of the character). This is different from the imagestring, where x and y define the upper-left corner of the first character. For example, "top left" is 0, 0.

@param int $y
The y-ordinate. This sets the position of the fonts baseline, not the very bottom of the character.
```

x 表示的是字符的左下角的x 坐标，y 表示的是 字符的基线的坐标
**详细情况请见imagettftext,png**
