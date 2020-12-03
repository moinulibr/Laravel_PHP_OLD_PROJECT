<?php

    /*
    |-------------------------------------
    | Default Delivery Charge In Dhaka City
    |-------------------------------------
    *///not using this

use App\Model\Backend\Admin\Order\Assign_order;
use App\Model\Backend\Admin\Order\Order_detail;
use App\Model\Backend\Admin\Setting\Merchant\Merchant_setting;
use App\Model\Backend\Admin\SMS\Order\Order_sms_sending;
use App\Model\Location\Address;
use App\Model\Location\Area;
use App\Model\Location\District;
use App\Model\Location\Upazila;
use App\User;

function hh_default_delivery_charge(){
        return 80;
    }

    /*
    |----------------------------------------------------------------------------------------------------------------------------
    |   Assign and Pickup Menu and others
    |---------------------------------------------------------------------------------------------------------
    */
    //Menu Label  Assign and Pickup
    define('HH_ASSIGN_PICKUP_LABEL_ONE','Assign Pickup');
    define('HH_ASSIGN_PICKUP_LABEL_TWO','Receive Pickup');
    define('HH_ASSIGN_PICKUP_LABEL_THREE','Assign Delivery');
    define('HH_ASSIGN_PICKUP_LABEL_FOUR','Delivered');
    define('HH_ASSIGN_PICKUP_LABEL_FIVE','Receive Hold');
    define('HH_ASSIGN_PICKUP_LABEL_SIX','Receive Cancel');
   //Menu Label  Assign and Pickup

   //Route Parameter and    === not changing from here, so go to
        //backend.admin.order.assign_receive.status_top_bar.blade.php
    define('hh_assign_pickup_route_parameter_one','assign-pickup');
    define('hh_assign_pickup_route_parameter_two','receive-pickup');
    define('hh_assign_pickup_route_parameter_three','assign-delivery');
    define('hh_assign_pickup_route_parameter_four','deliverd');
    define('hh_assign_pickup_route_parameter_five','receive-hold');
    define('hh_assign_pickup_route_parameter_six','receive-cancel');
    // its not working.......


    define('HH_ASSIGN_PICKUP_SESSION_PAGE_ID_ONE','assign-pickup');
    define('HH_ASSIGN_PICKUP_SESSION_PAGE_ID_TWO','receive-pickup');
    define('HH_ASSIGN_PICKUP_SESSION_PAGE_ID_THREE','assign-delivery');
    define('HH_ASSIGN_PICKUP_SESSION_PAGE_ID_FOUR','deliverd');
    define('HH_ASSIGN_PICKUP_SESSION_PAGE_ID_FIVE','receive-hold');
    define('HH_ASSIGN_PICKUP_SESSION_PAGE_ID_SIX','receive-cancel');

    //getCurrentStatus
    define('HH_ASSIGN_PICKUP_GET_CURRENT_STATUS_PAGE_ONE',1);
    define('HH_ASSIGN_PICKUP_GET_CURRENT_STATUS_PAGE_TWO',2);
    define('HH_ASSIGN_PICKUP_GET_CURRENT_STATUS_PAGE_THREE',4);
    define('HH_ASSIGN_PICKUP_GET_CURRENT_STATUS_PAGE_FOUR',6);
    define('HH_ASSIGN_PICKUP_GET_CURRENT_STATUS_PAGE_FIVE',8);
    define('HH_ASSIGN_PICKUP_GET_CURRENT_STATUS_PAGE_SIX',14);
    //getCurrentStatus

    //Head Page Title
    define('HH_ASSIGN_PICKUP_HEAD_TITLE_ONE','Assign For Pickup');
    define('HH_ASSIGN_PICKUP_HEAD_TITLE_TWO','Receive From Picker');
    define('HH_ASSIGN_PICKUP_HEAD_TITLE_THREE','Assign For Delivery');
    define('HH_ASSIGN_PICKUP_HEAD_TITLE_FOUR','Deliverd By Delivery Man');
    define('HH_ASSIGN_PICKUP_HEAD_TITLE_FIVE','Receive Hold Parcel');
    define('HH_ASSIGN_PICKUP_HEAD_TITLE_SIX','Receive Cancel Parcel');
    //Head Page Title

    //Page Title
    define('HH_ASSIGN_PICKUP_PAGE_TITLE_ONE','Assign For Pickup');
    define('HH_ASSIGN_PICKUP_PAGE_TITLE_TWO','Assign & Receive  (Pickup Parcel)');
    define('HH_ASSIGN_PICKUP_PAGE_TITLE_THREE','Assign For Delivery');
    define('HH_ASSIGN_PICKUP_PAGE_TITLE_FOUR','Delivered Parcel (BY Delivery Man)');
    define('HH_ASSIGN_PICKUP_PAGE_TITLE_FIVE','Parcel Hold & Receive');
    define('HH_ASSIGN_PICKUP_PAGE_TITLE_SIX','Parcel Cancel & Receive');
     //Page Title

                /*
                |-----------------------------------------------------------------------|------
                |   Assign and Pickup Menu and others  ##### Page No 2 , Receive Pickup |------
                |-----------------------------------------------------------------------|------
                */
                    //Radio Type Label
                    define('HH_ASSIGN_PICKUP_PAGE_2_RECEIVE_PICKUP_RADIO_LABEL_ONE','Parcel Received From Picker');
                    define('HH_ASSIGN_PICKUP_PAGE_2_RECEIVE_PICKUP_RADIO_LABEL_TWO','Parcel Received With Rack From Picker');
                    define('HH_ASSIGN_PICKUP_PAGE_2_RECEIVE_PICKUP_RADIO_LABEL_THREE','Request Accepted , Assign Picker & Received Parcel');
                    define('HH_ASSIGN_PICKUP_PAGE_2_RECEIVE_PICKUP_RADIO_LABEL_FOUR','Request Accepted , Assign Picker & Received With Rack');
                    //Radio Type Label


                    define('HH_ASSIGN_PICKUP_PAGE_2_RECEIVE_PICKUP_RADIO_VALUE_ONE','parcel_received_from_picker');
                    define('HH_ASSIGN_PICKUP_PAGE_2_RECEIVE_PICKUP_RADIO_VALUE_TWO','parcel_received_from_picker_with_rack');
                    define('HH_ASSIGN_PICKUP_PAGE_2_RECEIVE_PICKUP_RADIO_VALUE_THREE','request_accepted_assign_picker_and_received_parcel');
                    define('HH_ASSIGN_PICKUP_PAGE_2_RECEIVE_PICKUP_RADIO_VALUE_FOUR','request_accepted_assign_picker_and_received__with_rack');
                /*
                |-----------------------------------------------------------------------|------
                |   Assign and Pickup Menu and others  ##### Page No 2 , Receive Pickup |------
                |-----------------------------------------------------------------------|------
                */


                /*
                |-----------------------------------------------------------------------------------------------|------
                |   Assign and Pickup Menu and others  ##### Page No 3 ,Assign For Delivery Assign For Delivery |------
                |-----------------------------------------------------------------------------------------------|------
                */
                    //Radio Type Label
                    define('HH_ASSIGN_PICKUP_PAGE_3_ASSIGN_DELIVERY_RADIO_LABEL_ONE','Assigned & Handover To Delivery Man');
                    define('HH_ASSIGN_PICKUP_PAGE_3_ASSIGN_DELIVERY_RADIO_LABEL_TWO','Assigned & Delivery Man Collected Parcel');
                    //Radio Type Label


                    define('HH_ASSIGN_PICKUP_PAGE_3_ASSIGN_DELIVERY_RADIO_VALUE_ONE','assign_to_delivery_man');
                    define('HH_ASSIGN_PICKUP_PAGE_3_ASSIGN_DELIVERY_RADIO_VALUE_TWO','assigned_delivery_man_collected_parcel');
                /*
                |-----------------------------------------------------------------------------------------------|------
                |   Assign and Pickup Menu and others  ##### Page No 3 ,Assign For Delivery Assign For Delivery |------
                |-----------------------------------------------------------------------------------------------|------
                */



                /*
                |-----------------------------------------------------------------------------------------------|------
                |   Assign and Pickup Menu and others  ##### Page No 4 ,Assign For Delivery Assign For Delivery |------
                |-----------------------------------------------------------------------------------------------|------
                */
                    //Radio Type Label
                    define('HH_ASSIGN_PICKUP_PAGE_4_DELIVERED_RADIO_LABEL_ONE','Delivery Completed By Delivery Man');
                    define('HH_ASSIGN_PICKUP_PAGE_4_DELIVERED_RADIO_LABEL_TWO','Delivery Completed By Office');
                    define('HH_ASSIGN_PICKUP_PAGE_4_DELIVERED_RADIO_LABEL_THREE','Delivery Completed By Delivery Man & Office');
                    //Radio Type Label


                    define('HH_ASSIGN_PICKUP_PAGE_4_DELIVERED_RADIO_VALUE_ONE','delivery_completed_by_delivery_man');
                    define('HH_ASSIGN_PICKUP_PAGE_4_DELIVERED_RADIO_VALUE_TWO','delivery_completed_by_office');
                    define('HH_ASSIGN_PICKUP_PAGE_4_DELIVERED_RADIO_VALUE_THREE','delivery_completed_by_delivery_man_office');
                /*
                |-----------------------------------------------------------------------------------------------|------
                |   Assign and Pickup Menu and others  ##### Page No 4 ,Assign For Delivery Assign For Delivery |------
                |-----------------------------------------------------------------------------------------------|------
                */

                /*
                |-----------------------------------------------------------------------|------
                |   Assign and Pickup Menu and others  ##### Page No 5 , Receive Pickup |------
                |-----------------------------------------------------------------------|------
                */
                    //Radio Type Label
                    define('HH_ASSIGN_PICKUP_PAGE_5_RECEIVE_HOLD_RADIO_LABEL_ONE','Parcel Hold (By Delivery Man)'); //By Delivery Man
                    define('HH_ASSIGN_PICKUP_PAGE_5_RECEIVE_HOLD_RADIO_LABEL_TWO','Hold &  Received Parcel');
                    define('HH_ASSIGN_PICKUP_PAGE_5_RECEIVE_HOLD_RADIO_LABEL_THREE','Hold &  Received Parcel With Rack');
                    //Radio Type Label


                    define('HH_ASSIGN_PICKUP_PAGE_5_RECEIVE_HOLD_RADIO_VALUE_ONE','parcel_hold');
                    define('HH_ASSIGN_PICKUP_PAGE_5_RECEIVE_HOLD_RADIO_VALUE_TWO','hold_and_receive_parcel');
                    define('HH_ASSIGN_PICKUP_PAGE_5_RECEIVE_HOLD_RADIO_VALUE_THREE','hold_and_receive_parcel_with_rack');
                /*
                |-----------------------------------------------------------------------|------
                |   Assign and Pickup Menu and others  ##### Page No 5 , Receive Pickup |------
                |-----------------------------------------------------------------------|------
                */


                /*
                |-----------------------------------------------------------------------|------
                |   Assign and Pickup Menu and others  ##### Page No 6 , Receive Pickup |------
                |-----------------------------------------------------------------------|------
                */
                    //Radio Type Label
                    define('HH_ASSIGN_PICKUP_PAGE_6_RECEIVE_CANCEL_RADIO_LABEL_ONE','Parcel Cancel (By Delivery Man)'); //By Delivery Man
                    define('HH_ASSIGN_PICKUP_PAGE_6_RECEIVE_CANCEL_RADIO_LABEL_TWO','Cancel &  Received Parcel');
                    define('HH_ASSIGN_PICKUP_PAGE_6_RECEIVE_CANCEL_RADIO_LABEL_THREE','Cancel &  Received Parcel With Rack');
                    //Radio Type Label


                    define('HH_ASSIGN_PICKUP_PAGE_6_RECEIVE_CANCEL_RADIO_VALUE_ONE','parcel_cancel');
                    define('HH_ASSIGN_PICKUP_PAGE_6_RECEIVE_CANCEL_RADIO_VALUE_TWO','cancel_and_receive_parcel');
                    define('HH_ASSIGN_PICKUP_PAGE_6_RECEIVE_CANCEL_RADIO_VALUE_THREE','cancel_and_receive_parcel_with_rack');
                /*
                |-----------------------------------------------------------------------|------
                |   Assign and Pickup Menu and others  ##### Page No 5 , Receive Pickup |------
                |-----------------------------------------------------------------------|------
                */

    /*
    |--------------------------------------------------------------------------------------------------------------
    |   Assign and Pickup Menu and others   End
    |--------------------------------------------------------------------------------------------------------------------------
    */



    /*
    |--------------------------------------------------------------------------------------------------------------
    |   All Order Status style
    |-----------------------------------------------------------------------------------------------
    */
    function hh_order_status_style($order_status_id)
    {
            switch ($order_status_id) {
            case "1":
                echo "background-color: #ffff8a;color:red;";
                break;
            case "2":
                echo "background-color: #ADFF2F;color:#00008B;";
                break;
            case "3":
                echo "background-color: #4B0082;color:white;";
                break;
            case "4":
                echo "background-color: #6A5ACD;color:#F0F8FF;";
                break;
            case "5":
                echo "background-color: #008080;color:#FFD700;";
                break;
            case "6":
                echo "background-color: #00FFFF;color:#000080;";
                break;
            case "7":
                echo "background-color: #008080;color:#ADFF2F;";
                break;
            case "8":
                echo "background-color: #008000;color:#FFFF00;";
                break;
            case "9":
                echo "background-color: #008000;color:#FFFF00;";
                break;
            case "10":
                echo "background-color: #556B2F;color:#7FFFD4;";
                break;
            case "11":
                echo "background-color: #00CED1;color:#FFFF00;";
                break;
            case "12":
                echo "background-color: #00FF7F;color:#DC143C;";
                break;
            case "13":
                echo "background-color: #A9A9A9;color:#FF0000;";
                break;
            case "14":
                echo "background-color: #BDB76B;color:#00008B;";
                break;
            case "15":
                echo "background-color: #DC143C;color:#FFFF00;";
                break;
            case "16":
                echo "background-color: #8B0000;color:#FFFF00;";
                break;
            case "17":
                echo "background-color: #B22222;color:#FFFF00;";
                break;
            case "18":
                echo "background-color: #FF0000;color:#FFFF00;";
                break;
            case "19":
                echo "background-color: #FF4500;color:#FFFF00;";
                break;
            case "20":
                echo "background-color: #C71585;color:#FFFF00;";
                break;
            case "21":
                echo "background-color: #F08080;color:#FFFF00;";
                break;
            case "22":
                echo "background-color: #FF1493;color:#FFFF00;";
                break;
            case "23":
                echo "background-color: ##800000;color:#FFFF00;";
                break;
            default:
                echo "background-color: green;color:white;";
            }
    }
    /*
    |----------------------------------------------------------------------------------------------
    |   All Order Status style END
    |---------------------------------------------------------------------------------------------------------------
    */


    define('HH_PARCEL_RACK_ACTIVE_STATUS',1);
    define('HH_PARCEL_RACK_OUT_STATUS',2);

    // order table , order_final_status_id table
    define('HH_ORDER_FINAL_STATUS_ID_DEFAULT_NULL',NULL); //order_final_status_id
    define('HH_ORDER_FINAL_STATUS_ID_DELIVERED',1); //order_final_status_id
    define('HH_ORDER_FINAL_STATUS_ID_CANCEL',2); //order_final_status_id

    // order table , order_processing_type_id table
    define('HH_ORDER_PROCESSING_TYPE_ID_PICKUP',1); //order_processing_type_id
    define('HH_ORDER_PROCESSING_TYPE_ID_DELIVERY',2); //order_processing_type_id

    // order table , order_processing_type_id table
    define('HH_ORDER_ASSIGN_ORDER_COLLECTION_STATUS_NOT_DELIVERED',0); //collection_status
    define('HH_ORDER_ASSIGN_ORDER_COLLECTION_STATUS_DELIVERED',1); //collection_status
    define('HH_ORDER_ASSIGN_ORDER_COLLECTION_STATUS_DELIVERED_COLLECTED_AMOUNT',2); //collection_status




    //payment_statuses
    define('HH_PAYMENT_STATUS_ID_DEFAULT_NULL',NULL);
    define('HH_PAYMENT_STATUS_ID_PAID',2);
    define('HH_PAYMENT_STATUS_ID_UN_PAID',1);


    //order status
    define('HH_OFFICE_ACCEPTED_REQUEST',2);
    define('HH_PICKUP_PARCEL',3);
    define('HH_OFFICE_RECEIVE_PARCEL',4);
    define('HH_ASSIGN_FOR_DELIVERY_PARCEL',5);
    define('HH_READY_FOR_DELIVERY_PARCEL',6);


    /*
    |----------------------------------------------------------------------------
    |   Parcel Amount Calculation
    |----------------------------------------------------------------------------
    */
    define('HH_PARCEL_PRICE_PAYMENT_TYPE_ID_CASH_ON_DELIVERY',1); //parcel_price_payment_type_id
    define('HH_PARCEL_PRICE_PAYMENT_TYPE_ID_CASH_BEFORE_DELIVERY',2); //parcel_price_payment_type_id

    define('HH_DELIVERY_CHARGE_TYPE_ID_INCLUDE',1); //delivery_charge_type_id
    define('HH_DELIVERY_CHARGE_TYPE_ID_EXCLUDE',2); //delivery_charge_type_id

    function HH_GET_NET_PRODUCT_AMOUNT($product_amount,$parcel_price_payment_type_id,$delivery_charge_type_id,$delivery_charge = 80)
    {
        $net_product_amount = 00.00;
        if($parcel_price_payment_type_id == HH_PARCEL_PRICE_PAYMENT_TYPE_ID_CASH_ON_DELIVERY)//Cash On Delivery
        {
            $product_amount = $product_amount;
            if($delivery_charge_type_id == HH_DELIVERY_CHARGE_TYPE_ID_INCLUDE)//Include Chagre
            {
                $net_product_amount = $product_amount > 0 ? $product_amount - $delivery_charge : 0;
            }else{
                $net_product_amount =  $product_amount;
            }
        }else{
            $net_product_amount = 00.00;
        }
        return  $net_product_amount;
    }

    /*
    |----------------------------------------------------------------------------
    |   Parcel Amount Calculation
    |----------------------------------------------------------------------------
    */




    /*
    |----------------------------------------------------------------------------
    |   Mobile Sms , Sending
    |----------------------------------------------------------------------------
    */
        function HH_SENDING_SMS($number,$content)
        {
            $url = "http://66.45.237.70/api.php";
            $data= array(
                'username'=>HS_MY_SMS_USERNAME,
                'password'=>HS_MY_SMS_PASSWORD,
                'number'=>"$number",
                'message'=>"$content"
            );

            $ch = curl_init(); // Initialize cURL
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $smsresult = curl_exec($ch);
            $p = explode("|",$smsresult);
            $sendstatus = $p[0];
            return true;
        }


    /*
    |----------------------------------------------------------------------------
    |   SMS CONTENT
    |----------------------------------------------------------------------------
    */
        //========================Not using ================================
        function HH_ORDER_CREATING_SMS_FROM_ADMIN($invoice_no = NULL,$company_name = NULL,$parcel_amount,$customer_name = NULL)
        {
return "Dear Sir/Madam,
Your Parcel  has been booked from ".$company_name.". Your parcel amount is ".$parcel_amount." taka.
Thanked By ".HS_APP_URL;
        } //HH_SENDING_SMS($number,HH_ORDER_CREATING_SMS_FROM_ADMIN($order_data->invoice_no,$company_name,1250));


        //your parcel has been booked from company name
        // SMS FROM Order Controller create order
        function HH_ORDER_CREATING_FROM_MERCHANT($invoice_no = NULL,$company_name = NULL,$parcel_amount)
        {
return "Dear Sir/Madam,
Your Parcel  has been booked from ".$company_name.". Your parcel amount is ".$parcel_amount."
Thanked By ".HS_APP_URL;
        }


        // SMS FROM Order Controller create order
        function HH_ORDER_CREATING_SMS($invoice_no = NULL,$company_name = NULL,$parcel_amount,$customer_name = NULL)
        {
return "Dear Sir/Madam,
Your Parcel  has been booked from ".$company_name.". Your parcel amount is ".$parcel_amount."
Thanked By ".HS_APP_URL;
        }
        //========================Not using ================================





/*
|-----------------------------------------------------------------------------
| All SMS are sending properly
|------------------------------------------------
*/
        // SMS Used This link to ->
        //To Customer -> Order Parcel Receiving time
        function HH_ORDER_PARCEL_RECEIVING_SMS_FROM_ADMIN($customer_name = NULL , $invoice_no = NULL,$company_name = NULL,$parcel_amount,$delivery_charge_type_id)
        {
            if($delivery_charge_type_id == HH_DELIVERY_CHARGE_TYPE_ID_EXCLUDE)
            {
                $with_service_charge = " with delivery charge is ";
            }else{
                $with_service_charge = " is ";
            }
return "Dear ".$customer_name.",
Your Parcel  has been booked from ".$company_name.". Your parcel amount".$with_service_charge . $parcel_amount." taka.
Thanked By ".HS_APP_URL;
        } //HH_SENDING_SMS($number,HH_ORDER_PARCEL_RECEIVING_SMS_FROM_ADMIN($customer_name,$invoice_no,$company_name,$parcel_amount));




        // SMS Used This link to ->
        // Assigned for delivery sms - to merchant
        function HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_MERCHANT($company_name = NULL,$invoice_no = NULL,$delivery_man_name, $delivery_man_phone)
        {
return "Dear ".$company_name.",
Your Parcel (Invoice No- '" . $invoice_no . "') is assigned to delivery man. Delivery Man : ".$delivery_man_name.", Cell - ".$delivery_man_phone."
Thanked By ".HS_APP_URL;
        }// HH_SENDING_SMS($number,HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_MERCHANT($company_name,$invoice_no,$delivery_man_name, $delivery_man_phone));


        // SMS Used This link to ->
        // Assigned for delivery sms - to merchant
        function HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_CUSTOMER($customer_name = NULL,$invoice_no = NULL,$delivery_man_name, $delivery_man_phone)
        {
return "Dear ".$customer_name.",
Your Parcel (Invoice No- '" . $invoice_no . "') is assigned to delivery man. The Parcel will be reached on Expected day and time. Delivery Man : ".$delivery_man_name.", Cell - ".$delivery_man_phone."
Thanked By ".HS_APP_URL;
        }// HH_SENDING_SMS($number,HH_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_CUSTOMER($customer_name,$invoice_no,$delivery_man_name, $delivery_man_phone));


    // SMS Used This link to ->
    // Delivery Completed / Success SMS to Merchant
    function HH_ORDER_DELIVERED_SMS_FROM_ADMIN($company_name = NULL,$invoice_no,$collect_only_product_amount = NULL)
    {
return "Dear ".$company_name.",
Your Parcel (Invoice No- '" . $invoice_no . "') has been delivered successfully. Please Collect your Condition ".$collect_only_product_amount." taka.
Thanked By ".HS_APP_URL;
    }// HH_SENDING_SMS($number,HH_ORDER_Delivered_SMS_FROM_ADMIN($company_name,$invoice_no,$collect_only_product_amount));



    // SMS Used This link to ->
    // Delivery HOLD SMS to Merchant
    function HH_ORDER_DELIVERY_HOLD_SMS_FROM_ADMIN($company_name = NULL,$invoice_no)
    {
return "Dear ".$company_name.",
Your Parcel (Invoice No- '" . $invoice_no . "') has been Hold by customer. Please contract with customer.
Thanked By ".HS_APP_URL;
    }// HH_SENDING_SMS($number,HH_ORDER_DELIVERY_HOLD_SMS_FROM_ADMIN($company_name,$invoice_no));



    // SMS Used This link to ->
    // Delivery Cancel SMS to Merchant
    function HH_ORDER_DELIVERY_CANCEL_SMS_FROM_ADMIN($company_name = NULL,$invoice_no)
    {
return "Dear ".$company_name.",
Your Parcel (Invoice No- '" . $invoice_no . "') has been Canceled by customer. Please contract with customer.
Thanked By ".HS_APP_URL;
    }// HH_SENDING_SMS($number,HH_ORDER_DELIVERY_CANCEL_SMS_FROM_ADMIN($company_name,$invoice_no));




    //  Insert In order_sms_sendings table
    function HH_INSERT_ORDER_SMS_SENDING($order_id, $sending_method = NULL,$sending_method_parameter = NULL,$sms_note = NULL
    ,$total_sms = NULL,$content = NULL,$content_lenght = NULL)
    {
        $sms = new Order_sms_sending();
        $sms->order_id = $order_id;
        $sms->sending_method = $sending_method;
        $sms->sending_method_parameter = $sending_method_parameter;
        $sms->sms_note = $sms_note;
        $sms->sms_delivery_status = 1;
        $sms->branch_id = hs_branch_id;

        $sms->sms_count = $total_sms?$total_sms:1;
        $sms->sms_content = $content;
        $sms->sms_lenght = $content_lenght;
        $sms->save();
        return $sms;
    }

    //sms count
    function sms_count($content,$language = 'english')
    {
        if($language == 'english'){
            $sms_base = 160;
        }else{
            $sms_base = 160;
        }
        return ceil($content/$sms_base);
    }

/*
|-----------------------------------------------------
| All SMS are sending properly End
|-----------------------------------------------------------------------------------------
*/



    /*
    |--------------------------------------------------------------------------------------------------
    | Address   , District , Upazia , Area
    |------------------------------------------------
    */
    function HH_DISTRICT_NAME($district_id)
    {
        $result = District::findOrFail($district_id);
        if($result)
        {
            return $result->name;
        }
        return "";
    }
    function HH_UPAZILA_NAME($upazila_id)
    {
        $result = Upazila::findOrFail($upazila_id);
        if($result)
        {
            return $result->name;
        }
        return "";
    }
    function HH_ADDRESS_NAME($address_id)
    {
        $result = Address::findOrFail($address_id);
        if($result)
        {
            return $result->address;
        }
        return "";
    }
    function HH_AREA_NAME($area_id)
    {
        $result = Area::findOrFail($area_id);
        if($result)
        {
            return $result->area_name;
        }
        return "";
    }
    /*
    |---------------------------------------------------------------------
    | Address  , District , Upazia , Area
    |------------------------------------------------------------------------------------------------
    */


    /*
    |--------------------------------------------------------------------------------------------------
    | GET Merchant Setting details  && Delivery Man Details
    |----------------------------------------------------
    */

    function HH_GET_MERCHANT_SETTING_DETAILS($merchant_id)
    {
        return Merchant_setting::where('merchant_id',$merchant_id)->first();
    }

    // delivery man
    function HH_GET_DELIVERY_MAN_DETAILS($delivery_man_id)
    {
        return User::findOrFail($delivery_man_id);
    }

    // Merchant
    function HH_GET_MERCHANT_DETAILS($merchant_id)
    {
        return User::findOrFail($merchant_id);
    }
    /*
    |---------------------------------------------------------------------
    | GET Merchant Setting details  && Delivery Man Details
    |------------------------------------------------------------------------------------------------
    */

    /*
    |-----------------------------------------------------------------------------------------------
    | GET Delivery  and picker Assign Order details
    |----------------------------------------------------------------------
    */
        function HH_GET_ASSIGN_ORDER_FOR_DELIVERY($order_id)
        {
            return Assign_order::where('order_id',$order_id)
                        ->where('order_processing_type_id',HH_ORDER_PROCESSING_TYPE_ID_DELIVERY)
                        ->first();
        }

        function HH_GET_ASSIGN_ORDER_FOR_PICKUP($order_id)
        {
            return Assign_order::where('order_id',$order_id)
                        ->where('order_processing_type_id',HH_ORDER_PROCESSING_TYPE_ID_PICKUP)
                        ->first();
        }
    /*
    |---------------------------------------------------------------------
    | GET Delivery  and picker Assign Order details
    |------------------------------------------------------------------------------------------------
    */

    function HH_GET_ORDER_DETAILS($order_id)
    {
    return Order_detail::where('order_id',$order_id)->first();
    }


    define('HH_ORDER_ASSIGNING_STATUS_ID_ACCEPTED', 2);//order_assigning_status_id = 2


    /*
    |------------------------------------------------------------
    | its uses AuthenticatesUsers trait , and showLoginForm method
        if(request()->is('login'))
        {
            return redirect()->route('merchant.login');
        }
       else if(request()->is('admin/login'))
        {
            return view('auth.login');
        }else{
            return redirect()->route('merchant.login');
        }
    | its uses AuthenticatesUsers trait , and showLoginForm method
    |------------------------------------------------------------
    */










