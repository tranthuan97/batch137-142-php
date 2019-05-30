<?php
for ($i = 0; $i < 9; $i++) {
    # code...
    echo $i;
    echo "<br/>";
}

for ($i = 1; $i < 100; $i++) {
    # code...
    echo "<br/>";
    if ($i % 15 == 0) {
        # code...
        echo "So " . $i . " chia het cho 15";
    } else if ($i % 5 == 0 || $i % 3 == 0) {
        # code...
        if ($i % 3 == 0) {
            # code...
            echo "So " . $i . " chia het cho 3";
        } else {
            # code...
            echo "So " . $i . " chia het cho 5";
        }
    }
}
