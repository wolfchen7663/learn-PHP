## Return Values 
`imagettfbbox()` returns an array with 8 elements representing four points making the bounding box of the text on success and FALSE on error.

key	contents
0	lower left corner, X position
1	lower left corner, Y position
2	lower right corner, X position
3	lower right corner, Y position
4	upper right corner, X position
5	upper right corner, Y position
6	upper left corner, X position
7	upper left corner, Y position

The points are relative to the text regardless of the angle, so "upper left" means in the top left-hand corner seeing the text horizontally.