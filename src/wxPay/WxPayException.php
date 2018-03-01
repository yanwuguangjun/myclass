<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/1 0001
 * Time: 22:04
 */

namespace wxPay;


class WxPayException extends \Exception {
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
