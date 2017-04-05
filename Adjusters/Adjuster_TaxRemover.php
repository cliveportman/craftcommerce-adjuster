<?php

namespace Commerce\Adjusters;
use Craft\Commerce_LineItemModel;
use Craft\Commerce_OrderAdjustmentModel;
use Craft\Commerce_OrderModel;

class Adjuster_TaxRemover implements Commerce_AdjusterInterface {

    public function adjust(Commerce_OrderModel &$order, array $lineItems = []){

        $myAdjuster = new Commerce_OrderAdjustmentModel();

        $order->baseDiscount = $order->baseDiscount - 5;

        $myAdjuster->type = "Test";
        $myAdjuster->name = "Test Adjuster";
        $myAdjuster->description = "Takes $5 off the order";
        $myAdjuster->amount = -5.0;
        $myAdjuster->orderId = $order->id;

        //if your Adjuster affects lineItems rather than the total, you record the ids here
        $myAdjuster->optionsJson = ['lineItemsAffected'=>null];
        $myAdjuster->included = false;

        return [$myAdjuster];

    }

}
