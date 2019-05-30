<?php
for ($i = 0; $i < 9; $i++) {
    # code...
    echo $i;
    echo "<br/>";
}
// for ($i = 1; $i < 100; $i++) {
//     # code...
//     if ($i % 15 == 0) {
//         # code...
//         echo "So " . $i . " chia het cho 15";
//         echo "<br/>";
//     } else if ($i % 5 == 0 || $i % 3 == 0) {
//         # code...
//         if ($i % 3 == 0) {
//             # code...
//             echo "So " . $i . " chia het cho 3";
//             echo "<br/>";
//         } else {
//             # code...
//             echo "So " . $i . " chia het cho 5";
//             echo "<br/>";
//         }
//     }
// }

// Bài tập 1
echo "<br/>";
$book1 = 27;
$book2 = $book1 / 3;
$num = 0;
echo "Số sách ban đầu: Bình có: " . $book1 . ", Minh có: " . $book2;
while ($book1 != $book2 * 2) {
    # code...
    $num++;
    $book1--;
    $book2++;
}
echo "<br/>Số sách sau khi chuyển: Bình có: " . $book1 . ", Minh có: " . $book2;
echo "<br/>Số sách Bình đã chuyển cho Minh: " . $num;

// Bài tập 2
echo "<br/>";
echo "<br/>";
$vo = 0;
$keo = 0;
$money = 2000;
while ($money != 0) {
    # code...
    $keo++;
    $vo++;
    $money -= 200;
}
echo "Với số tiền 2000, ta có: <br/>";
echo "1 viên kẹo: 200, 2 vỏ kẹo được 1 viên kẹo: <br/>";
while ($vo >= 2) {
    # code...
    $keo++;
    $vo--;
}
echo "Tổng số kẹo mua được là: " . $keo . " viên kẹo.";
echo "<br/>Vỏ kẹo: " . $vo;

// Bài tập 3
echo "<br/><br/>";
$candy = 0;
$euro = 0;
$usd = 0;
while ($candy < 50) {
    # code...
    $usd -= 5;
    $candy++;
    $euro += 3;
    while ($euro >= 2) {
        # code...
        $euro -= 2;
        $usd += 3;
        $candy++;
    }
}
echo "Số tiền USD dùng để mua 50 viên kẹo là: " . $usd;

// Bài tập 4
// Giải hệ pt bậc nhất 2 ẩn bằng phương pháp Cramer:
// 1a + 1b = 50
// 2/5a + 3/4b = 27

//     D = a1 * b2 - a2 * b1;
//     Dx = c1 * b2 - c2 * b1;
//     Dy = a1 * c2 - a2 * c1;
// if (D == 0) {
//     if (c1 == c2)
//         echo "He phuong trinh co vo so nghiem";
//     else
//         echo "He phuong trinh vo nghiem";
// }
// else {
//     x = Dx / D;
//     y = Dy / D;
//     echo "He phuong trinh nghiem";
//     echo "x = " .x;
//     echo "y = " .y;
// }

$a1 = 1;
$b1 = 1;
$c1 = 50;
$a2 = 2 / 5;
$b2 = 3 / 4;
$c2 = 27;

$D = $a1 * $b2 - $a2 * $b1;
$Dx = $c1 * $b2 - $c2 * $b1;
$Dy = $a1 * $c2 - $a2 * $c1;
$x = $Dx / $D;
$y = $Dy / $D;
echo "<br/>";
echo "<br/>Dũng có 50 viên bi, mỗi loại lần lượt là: ";
echo "<br/>Bi xanh: " . $x;
echo "<br/>Bi đỏ: " . $y;

// Bài tập 5
$total = 120;
$red = $total * 1 / 5;
$blue = 120 * 30 / 100;
echo "<br/>";
echo "<br/>Tổng số viên bi: 120 viên";
echo "<br/>- Bi đỏ chiếm 1/5 tổng số bi: " . $red;
echo "<br/>- Bi xanh chiếm 30% tổng số bi: " . $blue;

$residual = $total - ($red + $blue);
// tỉ số 3/7 => 3 + 7 = 10 (phần)
$white = $residual / 10 * 3;
$yellow = $residual - $white;
echo "<br/>Tỉ số giữa bi trắng và bi vàng là 3/7:";
echo "<br/>- Bi trắng: " . $white;
echo "<br/>- Bi vàng: " . $yellow;