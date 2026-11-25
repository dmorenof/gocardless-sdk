<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest;

enum PaymentContextCode: string
{
    case BillingGoodsAndServicesInAdvance = 'billing_goods_and_services_in_advance';
    case BillingGoodsAndServicesInArrears = 'billing_goods_and_services_in_arrears';
    case EcommerceMerchantInitiatedPayment = 'ecommerce_merchant_initiated_payment';
    case FaceToFacePointOfSale = 'face_to_face_point_of_sale';
    case TransferToSelf = 'transfer_to_self';
    case TransferToThirdParty = 'transfer_to_third_party';
}
