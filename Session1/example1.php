<?php
$userName = "Thuan";
$myPhone = "123456789";
$a = 5;
$b = 7;

echo $userName;
echo "<br/>";
echo $myPhone;
function tinhTong($a, $b)
{
    # code...
    return $a + $b;
}
function showText()
{
    # code...
    echo "Demo text";
}
echo "<br/>";
echo tinhTong($a, $b);
echo "<br/>";
echo showText();

echo "<br/>";
$num = 2;
if ($num % 2 == 0) {
    # code...
    echo "Chan";
} else {
    # code...
    echo  "Le";
}

echo "<br/>";
$thang = 12;
switch ($thang) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        # code...
        echo "co 31 ngay";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        # code...
        echo "Day la thang co 30 ngay";
        break;
    case 2:
        echo "Day la thang co 28 hoac 29 ngay";
        break;
    default:
        echo "Khong phai la thang trong nam";
        break;
}
echo "<br/>";
$year = "2016";
if (is_numeric($year)) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                /*
             *  Năm nhuận là năm chia hết cho 4.
             *  Nếu năm đó chia hết cho 100 thì cũng phải chia hết cho 400.
             */
                echo "Năm " . $year . " là năm nhuận"." và tháng 2 có 29 ngày.";
            } else {
                // Năm chia hết cho 4 và 100 nhưng không chia hết cho 400 thì không là năm nhuận.
                echo "Năm " . $year . " không phải là năm nhuận"." và tháng 2 có 29 ngày.";
            }
        } else {
            // Năm chia hết cho 4 nhưng không chia hết cho 100 thì là năm nhuận.
            echo "Năm " . $year . " là năm nhuận"." và tháng 2 có 29 ngày.";
        }
    } else {
        // Năm không chia hết cho 4 thì không phải là năm nhuận.
        echo "Năm " . $year . " không phải là năm nhuận"." và tháng 2 có 29 ngày.";
    }
} else {
    echo "Bạn nhập không phải là năm !";
}
