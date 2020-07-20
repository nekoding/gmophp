<?php

namespace GMOPHP\Params;

class Input
{
  public static $params = array(
    'access_id' => array(
      'key' => 'AccessID',
      'length' => 32,
    ),
    'access_pass' => array(
      'key' => 'AccessPass',
      'length' => 32,
    ),
    'account_timing_kbn' => array(
      'key' => 'AccountTimingKbn',
      'max-length' => 2,
    ),
    'account_timing' => array(
      'key' => 'AccountTiming',
      'max-length' => 2,
    ),
    'amount' => array(
      'key' => 'Amount',
      'max-length' => 6,
      'integer' => TRUE,
    ),
    'approve' => array(
      'key' => 'Approve',
      'max-length' => 7,
    ),
    'approval_no' => array(
      'key' => 'ApprovalNo',
      'max-length' => 16,
    ),
    'cancel_amount' => array(
      'key' => 'CancelAmount',
      'max-length' => 6,
      'integer' => TRUE,
    ),
    'cancel_tax' => array(
      'key' => 'CancelTax',
      'max-length' => 6,
      'integer' => TRUE,
    ),
    'card_name' => array(
      'key' => 'CardName',
      'max-length' => 10,
    ),
    'card_no' => array(
      'key' => 'CardNo',
      'min-length' => 10,
      'max-length' => 16,
    ),
    'card_pass' => array(
      'key' => 'CardPass',
      'max-length' => 20,
    ),
    'card_seq' => array(
      'key' => 'CardSeq',
      'allow' => array(0, 1),
    ),
    'carry_info' => array(
      'key' => 'CarryInfo',
      'max-length' => 34,
    ),
    'client_field_1' => array(
      'key' => 'ClientField1',
      'max-length' => 100,
    ),
    'client_field_2' => array(
      'key' => 'ClientField2',
      'max-length' => 100,
    ),
    'client_field_3' => array(
      'key' => 'ClientField3',
      'max-length' => 100,
    ),
    'client_field_flag' => array(
      'key' => 'ClientFieldFlag',
      'allow' => array(0, 1),
    ),
    'commodity' => array(
      'key' => 'Commodity',
      'max-length' => 48,
    ),
    'confirm_base_date' => array(
      'key' => 'ConfirmBaseDate',
      'length' => 2,
    ),
    'continuance_month' => array(
      'key' => 'ContinuanceMonth',
      'length' => 6,
    ),
    'convenience' => array(
      'key' => 'Convenience',
      'max-length' => 5,
    ),
    'create_member' => array(
      'key' => 'CreateMember',
      'allow' => array(0, 1),
    ),
    'currency' => array(
      'key' => 'Currency',
      'allow' => '/^[a-zA-Z]{3}$/',
    ),
    'customer_kana' => array(
      'key' => 'CustomerKana',
      'max-length' => 40,
    ),
    'customer_name' => array(
      'key' => 'CustomerName',
      'max-length' => 40,
    ),
    'default_flag' => array(
      'key' => 'DefaultFlag',
      'allow' => array(0, 1),
    ),
    'delete_flag' => array(
      'key' => 'DeleteFlag',
      'allow' => array(0, 1),
    ),
    'device_category' => array(
      'key' => 'DeviceCategory',
      'allow' => array(0, 1),
    ),
    'disp_mail_address' => array(
      'key' => 'DispMailAddress',
      'max-length' => 100,
    ),
    'disp_phone_number' => array(
      'key' => 'DispPhoneNumber',
      'max-length' => 13,
    ),
    'disp_shop_name' => array(
      'key' => 'DispShopName',
      'max-length' => 50,
    ),
    'display_date' => array(
      'key' => 'DisplayDate',
      'length' => 6,
    ),
    'docomo_disp_1' => array(
      'key' => 'DocomoDisp1',
      'max-length' => 40,
    ),
    'docomo_disp_2' => array(
      'key' => 'DocomoDisp2',
      'max-length' => 40,
    ),
    'eddy_add_info_1' => array(
      'key' => 'EdyAddInfo1',
      'max-length' => 180,
    ),
    'eddy_add_info_2' => array(
      'key' => 'EdyAddInfo2',
      'max-length' => 320,
    ),
    'expire' => array(
      'key' => 'Expire',
      'allow' => '/^\d{4}$/',
    ),
    'first_account_date' => array(
      'key' => 'FirstAccountDate',
      'allow' => '/^\d{8}$/',
    ),
    'first_amount' => array(
      'key' => 'FirstAmount',
      'max-length' => 7,
      'integer' => TRUE,
    ),
    'first_tax' => array(
      'key' => 'FirstTax',
      'max-length' => 7,
      'integer' => TRUE,
    ),
    'first_month_free_flag' => array(
      'key' => 'FirstMonthFreeFlag',
      'allow' => array(0, 1),
    ),
    'forward' => array(
      'key' => 'Forward',
      'max-length' => 7,
    ),
    'holder_name' => array(
      'key' => 'HolderName',
      'max-length' => 50,
    ),
    'http_accept' => array(
      'key' => 'HttpAccept',
    ),
    'http_user_agent' => array(
      'key' => 'HttpUserAgent',
    ),
    'item_code' => array(
      'key' => 'ItemCode',
      'max-length' => 7,
    ),
    'item_name' => array(
      'key' => 'ItemName',
      'max-length' => 40,
    ),
    'job_cd' => array(
      'key' => 'JobCd',
      'allow' => array(),
    ),
    'last_month_free_flag' => array(
      'key' => 'LastMonthFreeFlag',
      'allow' => array(0, 1),
    ),
    'md' => array(
      'key' => 'MD',
      'max-length' => 32,
    ),
    'mail_address' => array(
      'key' => 'MailAddress',
      'max-length' => 256,
    ),
    'member_id' => array(
      'key' => 'MemberID',
      'max-length' => 60,
    ),
    'member_name' => array(
      'key' => 'MemberName',
      'max-length' => 255,
    ),
    'member_no' => array(
      'key' => 'MemberNo',
      'max-length' => 20,
    ),
    'method' => array(
      'key' => 'Method',
      'allow' => array(1, 2, 3, 4, 5),
    ),
    'order_id' => array(
      'key' => 'OrderID',
      'max-length' => 27,
    ),
    'pa_res' => array(
      'key' => 'PaRes',
    ),
    'process_date' => array(
      'key' => 'ProcessDate',
      'length' => 14,
    ),
    'pay_description' => array(
      'key' => 'PayDescription',
      'max-length' => 40,
    ),
    'pay_times' => array(
      'key' => 'PayTimes',
      'max-length' => 2,
      'integer' => TRUE,
    ),
    'pay_type' => array(
      'key' => 'PayType',
      'allow' => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14),
    ),
    'payment_term_day' => array(
      'key' => 'PaymentTermDay',
      'max-length' => 2,
      'integer' => TRUE,
    ),
    'payment_term_sec' => array(
      'key' => 'PaymentTermSec',
      'max' => 86400,
      'integer' => TRUE,
    ),
    'receipts_disp_1' => array(
      'key' => 'ReceiptsDisp1',
      'max-length' => 60,
    ),
    'receipts_disp_2' => array(
      'key' => 'ReceiptsDisp2',
      'max-length' => 60,
    ),
    'receipts_disp_3' => array(
      'key' => 'ReceiptsDisp3',
      'max-length' => 60,
    ),
    'receipts_disp_4' => array(
      'key' => 'ReceiptsDisp4',
      'max-length' => 60,
    ),
    'receipts_disp_5' => array(
      'key' => 'ReceiptsDisp5',
      'max-length' => 60,
    ),
    'receipts_disp_6' => array(
      'key' => 'ReceiptsDisp6',
      'max-length' => 60,
    ),
    'receipts_disp_7' => array(
      'key' => 'ReceiptsDisp7',
      'max-length' => 60,
    ),
    'receipts_disp_8' => array(
      'key' => 'ReceiptsDisp8',
      'max-length' => 60,
    ),
    'receipts_disp_9' => array(
      'key' => 'ReceiptsDisp9',
      'max-length' => 60,
    ),
    'receipts_disp_10' => array(
      'key' => 'ReceiptsDisp10',
      'max-length' => 60,
    ),
    'receipts_disp_11' => array(
      'key' => 'ReceiptsDisp11',
      'max-length' => 42,
    ),
    'receipts_disp_12' => array(
      'key' => 'ReceiptsDisp12',
      'max-length' => 12,
    ),
    'receipts_disp_13' => array(
      'key' => 'ReceiptsDisp13',
      'max-length' => 11,
    ),
    'redirect_url' => array(
      'key' => 'RedirectURL',
      'max-length' => 200,
    ),
    'register_disp_1' => array(
      'key' => 'RegisterDisp1',
      'max-length' => 32,
    ),
    'register_disp_2' => array(
      'key' => 'RegisterDisp2',
      'max-length' => 32,
    ),
    'register_disp_3' => array(
      'key' => 'RegisterDisp3',
      'max-length' => 32,
    ),
    'register_disp_4' => array(
      'key' => 'RegisterDisp4',
      'max-length' => 32,
    ),
    'register_disp_5' => array(
      'key' => 'RegisterDisp5',
      'max-length' => 32,
    ),
    'register_disp_6' => array(
      'key' => 'RegisterDisp6',
      'max-length' => 32,
    ),
    'register_disp_7' => array(
      'key' => 'RegisterDisp7',
      'max-length' => 32,
    ),
    'register_disp_8' => array(
      'key' => 'RegisterDisp8',
      'max-length' => 32,
    ),
    'reserve_no' => array(
      'key' => 'ReserveNo',
      'max-length' => 20,
    ),
    'ret_url' => array(
      'key' => 'RetURL',
      'max-length' => 256,
    ),
    'security_code' => array(
      'key' => 'SecurityCode',
      'max-length' => 4,
    ),
    'seq_mode' => array(
      'key' => 'SeqMode',
      'allow' => array(0, 1),
    ),
    'service_name' => array(
      'key' => 'ServiceName',
      'max-length' => 48,
    ),
    'service_tel' => array(
      'key' => 'ServiceTel',
      'max-length' => 15,
    ),
    'shop_id' => array(
      'key' => 'ShopID',
      'length' => 13,
    ),
    'shop_mail_address' => array(
      'key' => 'ShopMailAddress',
      'max-length' => 256,
    ),
    'shop_pass' => array(
      'key' => 'ShopPass',
      'length' => 10,
    ),
    'site_id' => array(
      'key' => 'SiteID',
      'length' => 13,
    ),
    'site_pass' => array(
      'key' => 'SitePass',
      'length' => 20,
    ),
    'status' => array(
      'key' => 'Status',
      'max-length' => 15,
    ),
    'suica_add_info_1' => array(
      'key' => 'SuicaAddInfo1',
      'max-length' => 256,
    ),
    'suica_add_info_2' => array(
      'key' => 'SuicaAddInfo2',
      'max-length' => 256,
    ),
    'suica_add_info_3' => array(
      'key' => 'SuicaAddInfo3',
      'max-length' => 256,
    ),
    'suica_add_info_4' => array(
      'key' => 'SuicaAddInfo4',
      'max-length' => 256,
    ),
    'tax' => array(
      'key' => 'Tax',
      'max-length' => 6,
      'integer' => TRUE,
    ),
    'td_flag' => array(
      'key' => 'TdFlag',
      'allow' => array(0, 1),
    ),
    'td_tenant_name' => array(
      'key' => 'TdTenantName',
      'max-length' => 25,
    ),
    'tel_no' => array(
      'key' => 'TelNo',
      'max-length' => 13,
    ),
    'token' => array(
      'key' => 'Token',
      'max-length' => 256,
    ),
    'tran_id' => array(
      'key' => 'TranID',
      'max-length' => 28,
    ),
    'user' => array(
      'key' => 'User',
    ),
    'version' => array(
      'key' => 'Version',
    ),
    'trade_days' => array(
      'key' => 'TradeDays',
      'max-length' => 2
    ),
    'trade_reason' => array(
      'key' => 'TradeReason',
      'max-length' => 64
    ),
    'trade_client_name' => array(
      'key' => 'TradeClientName',
      'max-length' => 64
    ),
    'trade_client_mailaddress' => array(
      'key' => 'TradeClientMailaddress',
      'max-length' => 256
    ),
    'netcash_pay_type' => array(
      'key' => 'NetCashPayType',
      'max-length' => 40
    ),
    'error_url' => array(
      'key' => 'ErrorRcvURL',
      'max-length'  => 2048
    ),
    'item_id' => array(
      'key' => 'ItemId',
      'max-length'  => 100
    ),
    'product_name' => array(
      'key' => 'ProductName',
      'max-length'  => '4000'
    ),
    'product_image_url' => array(
      'key' => 'ProductImageUrl',
      'max-length'  => 500
    ),
    'use_coupon' => array(
      'key' => 'UseCoupon',
      'max-length'  => 1
    ),
    'multi_item'  => array(
      'key'   => 'MultiItem',
      'max-length' => 30000
    ),
    'token_type'  => array(
      'key' => 'TokenType',
      'max-length'  => 1
    )
  );
}
