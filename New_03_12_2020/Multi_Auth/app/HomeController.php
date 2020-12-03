<?php

namespace App\Http\Controllers;

use App\Model\Backend\Admin\SMS\Order\Order_sms_sending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
    
        
        
        /*
        |----------------------------------------------
        | SMS Processing from database
        |-------------------------------------------
        */
        //function sms_processing_from_database()
        //{
           /*  $order_sms = Order_sms_sending::where('sms_delivery_status',0)
                                            //->where('sending_method','HH_ORDER_PARCEL_RECEIVING_SMS_FROM_ADMIN')
                                            ->where('branch_id',Auth::user()->branch_id)
                                            ->get();
            foreach($order_sms as $sms)
            {
                $number =$sms->orders->customers->customer_phone;
                $customer_name =$sms->orders->customers->customer_name;
                $invoice_no = $sms->orders->invoice_no;
                $merchant_setting = HH_GET_MERCHANT_SETTING_DETAILS($sms->orders->merchant_id);
                $company_name = $merchant_setting->company_name;


                if($sms->orders->delivery_charge_type_id == HH_DELIVERY_CHARGE_TYPE_ID_EXCLUDE)
                {
                    $parcel_amount = $sms->orders->product_amount + $sms->orders->delivery_charge;
                }
                else{
                    $parcel_amount = $sms->orders->product_amount;
                }
                $delivery_type_id = $sms->orders->delivery_charge_type_id;

                $customer_number =$sms->orders->customers->customer_phone;
                $merchant = HH_GET_MERCHANT_DETAILS($sms->orders->merchant_id);
                $merchant_number = $merchant->phone;

                $assign_delivery =  HH_GET_ASSIGN_ORDER_FOR_DELIVERY($sms->order_id);
                if($assign_delivery)
                {
                    $delivery_man_id = $assign_delivery->delivery_man_picker_id;
                    $deliveryMANname = HH_GET_DELIVERY_MAN_DETAILS($delivery_man_id);
                    $delivery_man_name = $deliveryMANname->name;
                    $delivery_man_phone = $deliveryMANname->phone;
                }

                $collect_only_product_amount  = $sms->orders->net_product_amount;


                if($sms->sending_method == 'HH_ORDER_PARCEL_RECEIVING_SMS_FROM_ADMIN')
                {
                    HH_SENDING_SMS($number,HH_ORDER_PARCEL_RECEIVING_SMS_FROM_ADMIN($customer_name,$invoice_no,$company_name,$parcel_amount,$delivery_type_id));

                    $content = HH_ORDER_PARCEL_RECEIVING_SMS_FROM_ADMIN($customer_name,$invoice_no,$company_name,$parcel_amount,$delivery_type_id);
                    $content_lenght = strlen(HH_ORDER_PARCEL_RECEIVING_SMS_FROM_ADMIN($customer_name,$invoice_no,$company_name,$parcel_amount,$delivery_type_id));
                    $total_sms = sms_count($content_lenght);

                    //update sms_delivery_status
                    $sms->sms_delivery_status = 1;
                    $sms->sms_count = $total_sms;
                    $sms->sms_content = $content;
                    $sms->sms_lenght = $content_lenght;
                    $sms->save();
                }


                //HH_SENDING_SMS($number,HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_MERCHANT($company_name,$invoice_no,$delivery_man_name, $delivery_man_phone));
                if($sms->sending_method == 'HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_MERCHANT')
                {
                    //===========this is for Merchant=================
                    HH_SENDING_SMS($merchant_number,HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_MERCHANT($company_name,$invoice_no,$delivery_man_name, $delivery_man_phone));

                    $content = HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_MERCHANT($company_name,$invoice_no,$delivery_man_name, $delivery_man_phone);
                    $content_lenght = strlen(HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_MERCHANT($company_name,$invoice_no,$delivery_man_name, $delivery_man_phone));
                    $total_sms = sms_count($content_lenght);
                    //update sms_delivery_status
                    $sms->sms_delivery_status = 1;
                    $sms->sms_count = $total_sms;
                    $sms->sms_content = $content;
                    $sms->sms_lenght = $content_lenght;
                    $sms->save();
                }

                if($sms->sending_method == 'HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_CUSTOMER')
                {
                    //===========this is for customer=================
                    HH_SENDING_SMS($customer_number,HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_CUSTOMER($customer_name,$invoice_no,$delivery_man_name, $delivery_man_phone));

                    $content = HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_CUSTOMER($customer_name,$invoice_no,$delivery_man_name, $delivery_man_phone);
                    $content_lenght = strlen(HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_CUSTOMER($customer_name,$invoice_no,$delivery_man_name, $delivery_man_phone));
                    $total_sms = sms_count($content_lenght);

                    //update sms_delivery_status
                    $sms->sms_delivery_status = 1;
                    $sms->sms_count = $total_sms;
                    $sms->sms_content = $content;
                    $sms->sms_lenght = $content_lenght;
                    $sms->save();
                }


                // HH_SENDING_SMS($number,HH_ORDER_Delivered_SMS_FROM_ADMIN($company_name,$invoice_no,$collect_only_product_amount));
                if($sms->sending_method == 'HH_ORDER_DELIVERED_SMS_FROM_ADMIN')
                {
                    HH_SENDING_SMS($merchant_number,HH_ORDER_Delivered_SMS_FROM_ADMIN($company_name,$invoice_no,$collect_only_product_amount));

                    $content = HH_ORDER_Delivered_SMS_FROM_ADMIN($company_name,$invoice_no,$collect_only_product_amount);
                    $content_lenght = strlen(HH_ORDER_Delivered_SMS_FROM_ADMIN($company_name,$invoice_no,$collect_only_product_amount));
                    $total_sms = sms_count($content_lenght);

                    //update sms_delivery_status
                    $sms->sms_delivery_status = 1;
                    $sms->sms_count = $total_sms;
                    $sms->sms_content = $content;
                    $sms->sms_lenght = $content_lenght;
                    $sms->save();
                }



                // HH_SENDING_SMS($number,HH_ORDER_DELIVERY_HOLD_SMS_FROM_ADMIN($company_name,$invoice_no));
                if($sms->sending_method == 'HH_ORDER_DELIVERY_HOLD_SMS_FROM_ADMIN')
                {
                    HH_SENDING_SMS($merchant_number,HH_ORDER_DELIVERY_HOLD_SMS_FROM_ADMIN($company_name,$invoice_no));

                    $content = HH_ORDER_DELIVERY_HOLD_SMS_FROM_ADMIN($company_name,$invoice_no);
                    $content_lenght = strlen(HH_ORDER_DELIVERY_HOLD_SMS_FROM_ADMIN($company_name,$invoice_no));
                    $total_sms = sms_count($content_lenght);

                    //update sms_delivery_status
                    $sms->sms_delivery_status = 1;
                    $sms->sms_count = $total_sms;
                    $sms->sms_content = $content;
                    $sms->sms_lenght = $content_lenght;
                    $sms->save();
                }

                // HH_SENDING_SMS($number,HH_ORDER_DELIVERY_CANCEL_SMS_FROM_ADMIN($company_name,$invoice_no));
                if($sms->sending_method == 'HH_ORDER_DELIVERY_CANCEL_SMS_FROM_ADMIN')
                {

                    HH_SENDING_SMS($merchant_number,HH_ORDER_DELIVERY_CANCEL_SMS_FROM_ADMIN($company_name,$invoice_no));

                    $content = HH_ORDER_DELIVERY_CANCEL_SMS_FROM_ADMIN($company_name,$invoice_no);
                    $content_lenght = strlen(HH_ORDER_DELIVERY_CANCEL_SMS_FROM_ADMIN($company_name,$invoice_no));
                    $total_sms = sms_count($content_lenght);

                    //update sms_delivery_status
                    $sms->sms_delivery_status = 1;
                    $sms->sms_count = $total_sms;
                    $sms->sms_content = $content;
                    $sms->sms_lenght = $content_lenght;
                    $sms->save();
                }
            } */
        //}

        //return view('backend.merchant.layouts.app');
        return view('layouts.partial.new_page');
        return view('home');
    }
}
