<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$vnp_TmnCode = "YZC5LGYA"; //Mã định danh merchant kết nối (Terminal Id)
$vnp_HashSecret = "KLWPUHQVRSMQSOHSYCCTHPONZOKOKJTU"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/PHP1/duan1/index.php?act=checkout";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
//Config input format
//Expire
$startTime = date("YmdHis");
$expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));
$total = $_GET['total'];
//END CONFIG
$vnp_TxnRef = rand(10, 10000);
$vnp_OrderInfo = 'CHECKOUT ';
$vnp_OrderType = 'other';
$vnp_Amount = $total * 2428000;
$vnp_Locale = "VN";
$vnp_BankCode = 'NCB';
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
// //Add Params of 2.0.1 Version
// $vnp_ExpireDate = $_POST['txtexpire'];
// //Billing
// $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
// $vnp_Bill_Email = $_POST['txt_billing_email'];
// $fullName = trim($_POST['txt_billing_fullname']);
// if (isset($fullName) && trim($fullName) != '') {
//     $name = explode(' ', $fullName);
//     $vnp_Bill_FirstName = array_shift($name);
//     $vnp_Bill_LastName = array_pop($name);
// }
// $vnp_Bill_Address = $_POST['txt_inv_addr1'];
// $vnp_Bill_City = $_POST['txt_bill_city'];
// $vnp_Bill_Country = $_POST['txt_bill_country'];
// $vnp_Bill_State = $_POST['txt_bill_state'];
// // Invoice
// $vnp_Inv_Phone = $_POST['txt_inv_mobile'];
// $vnp_Inv_Email = $_POST['txt_inv_email'];
// $vnp_Inv_Customer = $_POST['txt_inv_customer'];
// $vnp_Inv_Address = $_POST['txt_inv_addr1'];
// $vnp_Inv_Company = $_POST['txt_inv_company'];
// $vnp_Inv_Taxcode = $_POST['txt_inv_taxcode'];
// $vnp_Inv_Type = $_POST['cbo_inv_type'];
$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    // "vnp_ExpireDate" => $vnp_ExpireDate,
    // "vnp_Bill_Mobile" => $vnp_Bill_Mobile,
    // "vnp_Bill_Email" => $vnp_Bill_Email,
    // "vnp_Bill_FirstName" => $vnp_Bill_FirstName,
    // "vnp_Bill_LastName" => $vnp_Bill_LastName,
    // "vnp_Bill_Address" => $vnp_Bill_Address,
    // "vnp_Bill_City" => $vnp_Bill_City,
    // "vnp_Bill_Country" => $vnp_Bill_Country,
    // "vnp_Inv_Phone" => $vnp_Inv_Phone,
    // "vnp_Inv_Email" => $vnp_Inv_Email,
    // "vnp_Inv_Customer" => $vnp_Inv_Customer,
    // "vnp_Inv_Address" => $vnp_Inv_Address,
    // "vnp_Inv_Company" => $vnp_Inv_Company,
    // "vnp_Inv_Taxcode" => $vnp_Inv_Taxcode,
    // "vnp_Inv_Type" => $vnp_Inv_Type
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}
if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
    $inputData['vnp_Bill_State'] = $vnp_Bill_State;
}

//var_dump($inputData);
ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
$returnData = array(
    'code' => '00', 'message' => 'success', 'data' => $vnp_Url
);
$re  = $_GET['redirect'];
if ($re == '1') {
    header('Location: ' . $vnp_Url);
    die();
} else {
    echo json_encode($returnData);
}
    // vui lòng tham khảo thêm tại code demo