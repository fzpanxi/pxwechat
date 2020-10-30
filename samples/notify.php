<?php
$notify = new WxPayNotify();
//data==false，参数/验签/支付状态不对。
$data = $notify->GetNotifyData($config);
var_dump($data);
//业务逻辑处理
//订单号 $data['out_trade_no']