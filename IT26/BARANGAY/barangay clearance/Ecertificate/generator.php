<?php
if (isset($_POST['certificate'])) {
    $Name = $_POST['Name'];
    $Course = $_POST['Course'];

    header('content-type:image/png');
    $font_normal = "ALGER.TTF";
    $font_style = "BODONI BK BT BOOK ITALIC.TTF";
    $font_bold = "BODONI BK BT BOOK.TTF";

    $message_1 = "Certificate of Completion";
    $message_2 = "This is to certify that";
    $message_3 = "has successfully completed the course.";
    $current_date = date("Y-m-d");
    $signature = "[KnowlegdeNest]";

    $image = imagecreatefrompng("White Certificate Of Appreciation Simple Modern Certificate.png");
    $color = imagecolorallocate($image, 19, 21, 22);

    imagettftext($image, 100, 0, 350, 680, $color, $font_bold, $message_1);
    imagettftext($image, 30, 0, 200, 780, $color, $font_normal, $message_2);
    imagettftext($image, 40, 0, 700, 780, $color, $font_style, $Name);
    imagettftext($image, 30, 0, 1020, 780, $color, $font_normal, $message_3);
    imagettftext($image, 70, 0, 550, 900, $color, $font_style, $Course);

    imagettftext($image, 40, 0, 500, 1150, $color, $font_normal, $current_date);
    imagettftext($image, 40, 0, 1100, 1150, $color, $font_normal, $signature);

    $fileName = $Name . '.png';
    header('content-disposition:attachment; filename="' . $fileName . '"');
    imagepng($image);
    imagedestroy($image);
}
