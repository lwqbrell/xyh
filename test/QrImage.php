<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/30
 * Time: 16:29
 */

namespace test;
use \PHPQRCode\QRcode;


class QrImage
{
    static function getQrImage(){
        QRcode::png("this is qrcode", "./testQrcode.png", 'L', 4, 2);
    }
}