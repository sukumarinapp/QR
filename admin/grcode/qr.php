<?php
include "phpqrcode/qrlib.php";
$website = "www.collegelogin.in";
$qr_file_name = "collegelogin.png";
QRcode::png($website, "qr/$qr_file_name", QR_ECLEVEL_H, 3, 10);
