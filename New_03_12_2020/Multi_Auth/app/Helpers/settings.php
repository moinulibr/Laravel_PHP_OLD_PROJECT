<?php

    /*
    |-------------------------------------
    | Default Delivery Charge In Dhaka City
    |-------------------------------------
    */

use App\Model\Backend\Admin\Setting\Service\Service_charge_setting;
use Illuminate\Support\Facades\Auth;


    /*
    |----------------------------------------------
    | User Role and Others
    |--------------------------------------------
    */
        define('HS_SUPER_ADMIN_USER_ROLE_ID',1);
        define('HS_ADMIN_USER_ROLE_ID',2);
        define('HS_MANAGER_USER_ROLE_ID',3);
        define('HS_MERCHANT_USER_ROLE_ID',4);
        define('HS_DELIVERYMAN_USER_ROLE_ID',5);

        // use before maybe
        define('HS_SUPPER_ADMIN_ROLE',1);
        define('HS_ADMIN_ROLE',2);
    /*
    |----------------------------------------------
    | User Role and Others
    |--------------------------------------------
    */


    /*
    |----------------------------------------------
    | User Approval Status //user_approval_status_id
    |--------------------------------------------
    */
        define('HS_USER_APPROVAL_STATUS_ID_PENDING',1);
        define('HS_USER_APPROVAL_STATUS_ID_APPROVED',2);
        define('HS_USER_APPROVAL_STATUS_ID_SUSPENDED',3);
    /*
    |----------------------------------------------
    | User Approval Status
    |--------------------------------------------
    */



    /*
    |---------------------------------------------------------------------------------------------------------------------------
    | Admin and Merchant Login From show
    |--------------------------------------------
    */
        // Route Name For Admin and Merchant login and post login
        define('HS_MERCHANT_LOGIN_WEB_ROUTE_NAME','merchant.login');
        define('HS_ADMIN_LOGIN_WEB_ROUTE_NAME','admin.login');

        //Login  URL Set /value
        define('HS_MERCHANT_LOGIN_ROUTE_SET_FOR_AUTHENTICATESUSERS_SHOWLOGINFORM',merchantLoginUrlAttribute());
        define('HS_ADMIN_LOGIN_ROUTE_SET_FOR_AUTHENTICATESUSERS_SHOWLOGINFORM',adminLoginUrlAttribute());

        // check URL by request()->is() method  AUTHENTICATESUSERS
        define('HS_REQUEST_IS_ROUTE_FOR_MERCHANT_AUTHENTICATESUSERS_SHOWLOGINFORM',merchantLoginUrlAttribute());
        define('HS_REQUEST_IS_ROUTE_FOR_ADMIN_AUTHENTICATESUSERS_SHOWLOGINFORM',adminLoginUrlAttribute());

        // Admin url attribute
        function adminLoginUrlAttribute()
        {
            return 'admin/'.'sifat'.'/login';
        }
        // Merchant Url Attribute
        function merchantLoginUrlAttribute()
        {
            return 'login';
        }

        //Auth::guard('merchant')->user()->name
        /*# Merchant Dashboard after login */
        define('HS_MERCHANT_DASHBOARD_URL_ALFTER_LOGIN','merchant/dashboard/home');
        define('HS_MERCHANT_DASHBOARD_ROUTE_NAME_ALFTER_LOGIN','merchant.dashboard.index');
        /*# Merchant Dashboard after login */

        //after merchant login, password field will be null
        define('HS_MERCHANT_AFTER_LOGIN_PASSWORD_FIELD_NULL_ACTIVE',NULL);
        define('HS_MERCHANT_AFTER_LOGIN_OTP_FIELD_NULL_ACTIVE',0);

        //before merchant logout, password field will be null
        define('HS_MERCHANT_BEFORE_LOGOUT_PASSWORD_FIELD_NULL_ACTIVE',NULL);
        define('HS_MERCHANT_BEFORE_LOGOUT_OTP_FIELD_NULL_ACTIVE',1);
    /*
    |----------------------------------------------
    | Admin and Merchant Login From show
    |-------------------------------------------------------------------------------------------------------------------------
    */



    /*
    |----------------------------------------------
    | Rack Setting
    |--------------------------------------------
    */
    define('RACK_ACTIVE_STATUS',1);


    /*
    |----------------------------------------------
    | Branch Setting
    |--------------------------------------------
    */
    define('hs_branch_id', branch_id());
    function branch_id(){
        return 1;
        return Auth::user()->branch_id;
    }
    /*
    |----------------------------------------------
    | Delivery Charge  Setting
    |--------------------------------------------
    */
    function hs_default_delivery_charge(){
        return 80;
    }

    /*
    |---------------------------------------------------------------------------------
    | Merchant COD  Charge
    |---------------------------------------------------------------------------------
    */
        define('HS_C_O_D_CHARGE_ACTIVATE_STATUS',1);//1 = active  , 0 = inactive,
        define('HS_C_O_D_CHARGE_TYPE', 'parcent'); // fixed

        define('HS_C_O_D_CHARGE_DEFAULT_VALUE_FIXED', 0);
        define('HS_C_O_D_CHARGE_DEFAULT_VALUE_PARCENT', 0);

        function HS_COD_CHARGE($product_charge)
        {
            if(HS_C_O_D_CHARGE_ACTIVATE_STATUS == 1)
            {
                if(HS_C_O_D_CHARGE_TYPE == "parcent")
                {
                   return $product_charge * HS_C_O_D_CHARGE_DEFAULT_VALUE_PARCENT / 100;
                }else{
                    return HS_C_O_D_CHARGE_DEFAULT_VALUE_FIXED;
                }
            }else{
                return 00.00;
            }
        }
    /*
    |---------------------------------------------------------------------------------
    | Merchant COD  Charge
    |---------------------------------------------------------------------------------
    */





    define('HS_RETURN_CHARGE_ACTIVATE_STATUS',1);//1 = active  , 0 = inactive,
    define('HS_RETURN_CHARGE_TYPE', 'parcent'); // fixed

    define('HS_RETURN_CHARGE_DEFAULT_VALUE_FIXED', 0);
    define('HS_RETURN_CHARGE_DEFAULT_VALUE_PARCENT', 0);
    /*
    |---------------------------------------------------------------------------------
    | Merchant  Return Charge
    |---------------------------------------------------------------------------------
    */


    /*
    |---------------------------------------------------------------------------------
    | Merchant  Return Charge
    |---------------------------------------------------------------------------------
    */





    define('HS_DELIVERY_MAN_RETURN_CHARGE', 0);

    define('HS_PICKER_MAN_PICKUP_CHARGE', 0);
    define('HS_PICKER_MAN_PICKUP_RETURN_CHARGE', 0);
    /*
    |---------------------------------------------------------------------------------
    | Delivery Man, Pickup Charge  Return Charge
    |---------------------------------------------------------------------------------
    */
        function HS_DELIVERY_SERVICE_CHARGE($service_charge_setting_id)
        {
            $charge =  Service_charge_setting::findOrFail($service_charge_setting_id);
            return $charge->service_charge;
        }

        function HS_DELIVERY_MAN_DELIVERY_CHARGE($service_charge_setting_id)
        {
            $charge =  Service_charge_setting::findOrFail($service_charge_setting_id);
            return $charge->delivery_charge;
        }

        function HS_PICKER_MAN_PICKUP_CHARGE($service_charge_setting_id)
        {
            $charge =  Service_charge_setting::findOrFail($service_charge_setting_id);
            return $charge->pickup_chagre;
        }

    /*
    |---------------------------------------------------------------------------------
    | Delivery Man, Pickup Charge  Return Charge
    |---------------------------------------------------------------------------------
    */


    // Merchant Payment Invoice
    //Service provider Company Name
    define('HS_COMPANY_SHORT_NAME', 'DBDC');
    //payment_invoice_no
    define('HS_PAYMENT_INVOICE_NO',HS_COMPANY_SHORT_NAME.date('Y').date('d').date('m').date('his').mt_rand(10,99));


    define('HS_APP_URL',"deshdelivery.com");

    define('HS_APP_NAME','Desh Delivery'); // Please change the .env file APP_NAME ... both have to same name

    define('HS_COMPANY_PHONE_1',"01311479091");
    define('HS_COMPANY_PHONE_2',"01311479094");
    define('HS_COMPANY_ADDRESS_HOME','98/2');
    define('HS_COMPANY_ADDRESS_ROAD','');
    define('HS_COMPANY_ADDRESS_AREA',"Begum Rokeya Sharani");
    define('HS_COMPANY_ADDRESS_LOCATION',"Mirpur-10, Dhaka");





    /*
    |-----------------------About SMS , Setting , Sending And content--------------------
    |
    |----------------------------------------------------------------------------
    |   Mobile Sms MY Password and Username
    |----------------------------------------------------------------------------
    */
        define('HS_MY_SMS_USERNAME','01712794033');
        define('HS_MY_SMS_PASSWORD','bulksmsPassword@Strong9295');
    /*
    |----------------------------------------------------------------------------
    |   Mobile Sms MY Password and Username
    |------------------------------------------------------------------------------------------------
    */

    /*
    |---------------------------------------------------------------------------------------------------
    |   Mobile Sms Permission
    |-------------------------------------------------------------------------
    */
        define('HS_ORDER_PARCEL_RECEIVING_SMS_FROM_ADMIN_PERMISSION',1);
        define('HS_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_MERCHANT_PERMISSION',1);
        define('HS_ORDER_ASSIGNING_FOR_DELIVERY_SMS_TO_CUSTOMER_PERMISSION',1);
        define('HS_ORDER_DELIVERED_SMS_FROM_ADMIN_PERMISSION',1);

        define('HS_ORDER_DELIVERY_HOLD_SMS_FROM_ADMIN_PERMISSION',0);
        define('HS_ORDER_DELIVERY_CANCEL_SMS_FROM_ADMIN_PERMISSION',0);
    /*
    |----------------------------------------------------------------------------
    |   Mobile Sms Permission
    |------------------------------------------------------------------------------------------------
    */












    /*
    |---------------------------------------------------------------------------------------------------
    |  Merchant Menu
    |-------------------------------------------------------------------------
    */
        define('HS_MERCHANT_PARENT_MENU_ONE','');






    /*
    |----------------------------------------------------------------------------
    |   Merchant Menu
    |------------------------------------------------------------------------------------------------
    */






    /*
    |---------------------------------------------------------------------------------------------------
    |  Software Same logo , Loader and other
    |-------------------------------------------------------------------------
    */
        define('HS_HEAD_TITLE_LOGO','assets/media/image/logo/logo-black.png');

        define('HS_PRELOADER_ACTIVATION',1);
        define('HS_PRELOADER_LOGO','assets/media/image/logo/logo-black.png');
        define('HS_PRELOADER_IMAGE','assets/media/image/logo/dark-logo.png');

        //Software Header Logo
        define('HS_HEADER_LOGO_BEST_LOGO','assets/media/image/logo/logo.png');
        define('HS_HEADER_LOGO_DARK_LOGO','assets/media/image/logo/dark-logo.png');
        define('HS_HEADER_LOGO_SMALL_LOGO','assets/media/image/logo/small-logo.png');
        define('HS_HEADER_LOGO_SMALL_DARK_LOGO','assets/media/image/logo/small-dark-logo.png');

        //right side Profile Image and others
        define('HS_HEADER_RIGHT_SIDE_PROFILE_PICTURE_FRONT_LINK','assets/media/image/user/man_avatar3.jpg');
        define('HS_HEADER_RIGHT_SIDE_BACKGROUND_PROFILE_PICTURE_DROPDOWN_LINK','assets/media/image/image1.jpg');
        define('HS_HEADER_RIGHT_SIDE_PROFILE_PICTURE_DROPDOWN_LINK','assets/media/image/user/man_avatar3.jpg');

        //Software Footer logo and content
        define('HS_FOOTER_MY_IDENTIFY',"DOTCOOM");
        define('HS_FOOTER_MY_IDENTIFY_LINK',"dotcoom.com");
        define('HS_FOOTER_MY_OTHERS_LINK_01','Licenses');
        define('HS_FOOTER_MY_OTHERS_LINK_02','Change Log');
        define('HS_FOOTER_MY_OTHERS_LINK_03','Get Help');

    /*
    |----------------------------------------------------------------------------
    |   Software Same logo , Loader and other
    |------------------------------------------------------------------------------------------------
    */



