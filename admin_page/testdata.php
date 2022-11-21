<?php
    session_start();
    require("../Models/clsOrder.php");
    require_once("../Models/clsOrderDetail.php");
    
    $order_id = "";
    if(isset($_REQUEST["order_id"]))
    {
      $order_id=$_REQUEST["order_id"];
    }
    $clsOrder = new clsOrder();
    $order=$clsOrder->getOrderById($order_id);
    $clsOrderDetail=new clsOrderDetail();
    $orderDetail=$clsOrderDetail->getOrderDetail($order_id);
    $allProduct='';
    foreach ($orderDetail as $value) {
      $nameProduct = $clsOrderDetail->getNameProduct($value["product_id"]) ;
      $size= $value["size"] ;
      switch($size){
          
          case 1: $size="S";break;
          case 2: $size="M";break;
          case 3: $size="L";break;
     
        };
$allProduct.='<tr>
<th scope="row">'. $value["id"].'</th>
<td>'.$nameProduct .'</td>
<td>'. $size.'</td>
<td>$ '. $value["price"] .'</td>
<td> '. $value["num"] .'</td>
<td>$ '. $value["total_money"] .'</td>
</tr>';

      }
    $body    = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
    <html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
      <title></title>
      <meta name="generator" content="LibreOffice 6.3.2.2 (Linux)"/>
      <meta name="author" content="PC"/>
      <meta name="created" content="2021-08-24T05:36:00"/>
      <meta name="changedby" content="PC"/>
      <meta name="changed" content="2021-08-24T05:44:00"/>

      <style type="text/css">
        @page { size: 8.5in 11in; margin-right: 0.79in; margin-top: 0.98in; margin-bottom: 0.98in }
        p { margin-bottom: 0.1in; direction: ltr; color: #000000; line-height: 115%; orphans: 2; widows: 2; background: transparent }
        p.western { font-family: "Calibri", sans-serif; font-size: 11pt; so-language: en-US }
        p.cjk { font-family: "Calibri", sans-serif; font-size: 11pt }
        p.ctl { font-family: "Times New Roman", serif; font-size: 11pt; so-language: ar-SA };
       
       
      </style>
      <style>
 
      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
      
      tr:nth-child(even) {
        background-color: #dddddd;
      }
      </style>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    </head>
 
    <body lang="en-US" text="#000000" link="#000080" vlink="#800000" dir="ltr">
    <div class="container">
    <p class="western mt-5" align="center" style="margin-bottom: 0.11in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 12pt"><b>
    CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM</b></font></font></font></p>
    <p class="western" align="center" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt"><u><b>&#272;&#7897;c
    l&#7853;p &ndash; T&#7921; do &ndash; H&#7841;nh ph&uacute;c<br/>
    </b></u></font></font></font><br/>
    <br/>
    
    </p>
    <p class="western" align="center" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt"><b>&#272;&#416;N
    &#272;&#7862;T H&Agrave;NG</b></font></font></font></p>
    <p class="western" align="center" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt"><i>S&#7889;:
    <?= $order["id"] ?></i></font></font></font></p>
    <p class="western" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt">K&iacute;nh
    g&#7917;i: 
    '.$order["fullname"].' </font></font></font></p>
    <p class="western" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt">Cảm ơn Bạn đã tin tưởng Shop chúng tôi. Rất vui vì được phục vụ bạn ! </font></font></font></p>
    <p class="western" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    Nội dung đơn hàng như sau: </p>
    <table  style="font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;">
     
        <tr>
          <th scope="col">ID  </th>
          <th scope="col">Tên sản phẩm</th>
          <th scope="col">Kích cỡ</th>
          <th scope="col">Đơn giá</th>
          <th scope="col">Số lượng</th>
          <th scope="col">Tổng</th>
        </tr>
     
   
        '.$allProduct.'
        <tr>
          <th colspan="5">Tổng tiền đơn hàng</th>
          
          <td>'.$order["total_money"].'</td>
        </tr>
        
       
    
    
    </table>
    <p class="western" style="margin-bottom: 0in; line-height: 100%"><br/>
    
    </p>
    <p class="western" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt"><b>T&#7893;ng
    c&#7897;ng:</b></font></font></font></p>
    <p class="western" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt">Th&#7901;i
    gian giao
    h&agrave;ng: 3 ngày</font></font></font></p>
    <p class="western" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt">&#272;&#7883;a
    &#273;i&#7875;m giao
    h&agrave;ng:'.$order["address"].'</font></font></font></p>
    <p class="western" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt">Ph&#432;&#417;ng
    th&#7913;c thanh to&aacute;n:</font></font></font></p>
    <p class="western" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt">-&nbsp;Thanh
    to&aacute;n b&#7857;ng ti&#7873;n m&#7863;t ho&#7863;c chuy&#7875;n
    kho&#7843;n</font></font></font></p>
    <p class="western" style="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
    <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt">-&nbsp;Thanh
    to&aacute;n tr&#432;&#7899;c 50% gi&aacute; tr&#7883; h&#7907;p &#273;&#7891;ng,
    50% c&ograve;n l&#7841;i thanh to&aacute;n sau khi giao h&agrave;ng.</font></font></font></p>
    <table width="625" cellpadding="7" cellspacing="0">
      <col width="295"/>
    
      <col width="302"/>
    
      <tr valign="top">
        <td width="295" height="88" style="border: none; padding: 0in"><p class="western">
          <br/>
    
          </p>
        </td>
        <td width="302" style="border: none; padding: 0in"><p class="western" align="right" style="margin-bottom: 0.11in">
          <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt"><i>21,
          ng&agrave;y 11 th&aacute;ng n&#259;m 2022</i></font></font></font></p>
          <p class="western" align="center" style="margin-top: 0.19in; margin-bottom: 0.19in">
          <font color="#333333"><font face="Times New Roman, serif"><font size="3" style="font-size: 13pt"><b>GI&Aacute;M
          &#272;&#7888;C</b></font></font></font></p>
          <p class="western"><br/>
                           Team 2 Project
          </p>
        </td>
      </tr>
    </table>
    <p class="western" style="margin-bottom: 0.11in; line-height: 107%"><br/>
    <br/>
    
    </p>
    </div>

    </body>
    </html>';
    echo $body;
?>
