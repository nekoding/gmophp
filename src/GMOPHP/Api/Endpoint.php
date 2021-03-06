<?php

namespace GMOPHP\Api;

class Endpoint
{
  public static $apiEndpoint = array(
    'entryTran'                     => 'EntryTran.idPass',
    'execTran'                      => 'ExecTran.idPass',
    'alterTran'                     => 'AlterTran.idPass',
    'tdVerify'                      => 'SecureTran.idPass',
    'changeTran'                    => 'ChangeTran.idPass',
    'saveCard'                      => 'SaveCard.idPass',
    'deleteCard'                    => 'DeleteCard.idPass',
    'searchCard'                    => 'SearchCard.idPass',
    'tradedCard'                    => 'TradedCard.idPass',
    'saveMember'                    => 'SaveMember.idPass',
    'deleteMember'                  => 'DeleteMember.idPass',
    'searchMember'                  => 'SearchMember.idPass',
    'updateMember'                  => 'UpdateMember.idPass',
    'bookSalesProcess'              => 'BookSalesProcess.idPass',
    'unbookSalesProcess'            => 'UnbookSalesProcess.idPass',
    'searchBookingInfo'             => 'SearchBookingInfo.idPass',
    'searchTrade'                   => 'SearchTrade.idPass',
    'entryTranSuica'                => 'EntryTranSuica.idPass',
    'execTranSuica'                 => 'ExecTranSuica.idPass',
    'entryTranEdy'                  => 'EntryTranEdy.idPass',
    'execTranEdy'                   => 'ExecTranEdy.idPass',
    'entryTranCvs'                  => 'EntryTranCvs.idPass',
    'execTranCvs'                   => 'ExecTranCvs.idPass',
    'cvsCancel'                     => 'CvsCancel.idPass',
    'entryTranPayEasy'              => 'EntryTranPayEasy.idPass',
    'execTranPayEasy'               => 'ExecTranPayEasy.idPass',
    'entryTranPaypal'               => 'EntryTranPaypal.idPass',
    'execTranPaypal'                => 'ExecTranPaypal.idPass',
    'paypalStart'                   => 'PaypalStart.idPass',
    'cancelTranPaypal'              => 'CancelTranPaypal.idPass',
    'entryTranWebmoney'             => 'EntryTranWebmoney.idPass',
    'execTranWebmoney'              => 'ExecTranWebmoney.idPass',
    'webmoneyStart'                 => 'WebmoneyStart.idPass',
    'paypalSales'                   => 'PaypalSales.idPass',
    'cancelAuthPaypal'              => 'CancelAuthPaypal.idPass',
    'entryTranAu'                   => 'EntryTranAu.idPass',
    'execTranAu'                    => 'ExecTranAu.idPass',
    'auStart'                       => 'AuStart.idPass',
    'auCancelReturn'                => 'AuCancelReturn.idPass',
    'auSales'                       => 'AuSales.idPass',
    'deleteAuOpenID'                => 'DeleteAuOpenID.idPass',
    'entryTranDocomo'               => 'EntryTranDocomo.idPass',
    'execTranDocomo'                => 'ExecTranDocomo.idPass',
    'docomoStart'                   => 'DocomoStart.idPass',
    'docomoCancelReturn'            => 'DocomoCancelReturn.idPass',
    'docomoSales'                   => 'DocomoSales.idPass',
    'entryTranDocomoContinuance'    => 'EntryTranDocomoContinuance.idPass',
    'execTranDocomoContinuance'     => 'ExecTranDocomoContinuance.idPass',
    'docomoContinuanceSales'        => 'DocomoContinuanceSales.idPass',
    'docomoContinuanceCancelReturn' => 'DocomoContinuanceCancelReturn.idPass',
    'docomoContinuanceUserChange'   => 'DocomoContinuanceUserChange.idPass',
    'docomoContinuanceUserEnd'      => 'DocomoContinuanceUserEnd.idPass',
    'docomoContinuanceShopChange'   => 'DocomoContinuanceShopChange.idPass',
    'docomoContinuanceShopEnd'      => 'DocomoContinuanceShopEnd.idPass',
    'docomoContinuanceStart'        => 'DocomoContinuanceStart.idPass',
    'entryTranJibun'                => 'EntryTranJibun.idPass',
    'execTranJibun'                 => 'ExecTranJibun.idPass',
    'jibunStart'                    => 'JibunStart.idPass',
    'entryTranSb'                   => 'EntryTranSb.idPass',
    'execTranSb'                    => 'ExecTranSb.idPass',
    'sbStart'                       => 'SbStart.idPass',
    'sbCancel'                      => 'SbCancel.idPass',
    'sbSales'                       => 'SbSales.idPass',
    'entryTranAuContinuance'        => 'EntryTranAuContinuance.idPass',
    'execTranAuContinuance'         => 'ExecTranAuContinuance.idPass',
    'auContinuanceStart'            => 'AuContinuanceStart.idPass',
    'auContinuanceCancel'           => 'AuContinuanceCancel.idPass',
    'auContinuanceChargeCancel'     => 'AuContinuanceChargeCancel.idPass',
    'entryTranJcbPreca'             => 'EntryTranJcbPreca.idPass',
    'execTranJcbPreca'              => 'ExecTranJcbPreca.idPass',
    'jcbPrecaBalanceInquiry'        => 'JcbPrecaBalanceInquiry.idPass',
    'jcbPrecaCancel'                => 'JcbPrecaCancel.idPass',
    'searchTradeMulti'              => 'SearchTradeMulti.idPass',
    'entryTranVirtualaccount'       => 'EntryTranVirtualaccount.idPass',
    'execTranVirtualaccount'        => 'ExecTranVirtualaccount.idPass',
    'entryTranNetcash'              => 'EntryTranNetcash.idPass',
    'execTranNetcash'               => 'ExecTranNetcash.idPass',
    'netcashStart'                  => 'NetCashStart.idPass',
    'entryTranRakutenid'            => 'EntryTranRakutenId.idPass',
    'execTranRakutenid'             => 'ExecTranRakutenId.idPass',
    'rakutenidStart'                => 'RakutenIdStart.idPass',
    'rakutenidSales'                => 'RakutenIdSales.idPass',
    'rakutenidCancel'               => 'RakutenIdCancel.idPass',
    'rakutenidChange'               => 'RakutenIdChange.idPass',
    'entryTranLinePay'              => 'EntryTranLinepay.idPass',
    'execTranLinePay'               => 'ExecTranLinepay.idPass',
    'lineStart'                     => 'LinepayStart.idPass',
    'lineSales'                     => 'LinepaySales.idPass',
    'lineCancel'                    => 'LinepayCancelReturn.idPass',
    'entryTranNetid'                => 'EntryTranNetid.idPass',
    'execTranNetid'                 => 'ExecTranNetid.idPass',
    'netidStart'                    => 'NetidStart.idPass',
    'netidSales'                    => 'SalesTranNetid.idPass',
    'netidCancel'                   => 'CancelTranNetid.idPass',
    'netidChange'                   => 'ChangeTranNetid.idPass',
    'webmoneyRefund'                => 'RefundWebmoney.idPass',
    'entryTranApplePay'             => 'EntryTranBrandtoken.idPass',
    'execTranApplePay'              => 'ExecTranBrandtoken.idPass',
    'applePaySales'                 => 'SalesTranBrandtoken.idPass',
    'applePayCancel'                => 'VoidTranBrandtoken.idPass',
    'applePayRefund'                => 'RefundTranBrandtoken.idPass',
    'applePayChange'                => 'ChageTranBrandtoken.idPass',
    'applePayPostTrade'             => 'TradedBrandtoken.idPass',
    'applePayDeleteToken'           => 'DeleteTranBrandtoken.idPass',
    'applePaySearch'                => 'SearchBrandtoken.idPass',
    'entryTranGANB'                 => 'EntryTranGANB.idPass',
    'execTranGANB'                  => 'ExecTranGANB.idPass',
    'ganbCancel'                    => 'CancelTranGANB.idPass',
    'ganbInquiry'                   => 'InquiryTransferGANB.idPass',
    'entryTranPaypay'               => 'EntryTranPaypay.idPass',
    'execTranPaypay'                => 'ExecTranPaypay.idPass',
    'paypaySales'                   => 'PaypaySales.idPass',
    'paypayCancel'                  => 'PaypayCancelReturn.idPass',
  );
}
