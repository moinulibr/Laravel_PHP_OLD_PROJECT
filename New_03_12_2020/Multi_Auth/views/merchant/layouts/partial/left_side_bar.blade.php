<!-- Navigation -->
<div class="navigation">
    <!-- Logo -->
    <div class="navigation-header">
        <a class="navigation-logo" href="{{ route('merchant.dashboard.index') }}">
            <img class="logo" src="{{asset('backend/links')}}/{{HS_HEADER_LOGO_BEST_LOGO}}" alt="logo">
            <img class="dark-logo" src="{{asset('backend/links')}}/{{HS_HEADER_LOGO_DARK_LOGO}}" alt="dark logo">
            <img class="small-logo" src="{{asset('backend/links')}}/{{HS_HEADER_LOGO_SMALL_LOGO}}" alt="small logo">
            <img class="small-dark-logo" src="{{asset('backend/links')}}/{{HS_HEADER_LOGO_SMALL_DARK_LOGO}}" alt="small dark logo">
        </a>
        <a href="#" class="small-navigation-toggler"></a>
        <a href="#" class="btn btn-danger mobile-navigation-toggler">
            <i class="ti-close"></i>
        </a>
    </div>
    <!-- ./ Logo -->

  

    <!-----Merchant Menu------>
        @merchant
        <!-- Menu wrapper -->
        <div class="navigation-menu-wrapper">
            <!-- Menu tab -->
            <div class="navigation-menu-tab">
                <ul>
                    {{--  <li style="display: none;">
                        <a href="#" data-menu-target="#dashboardForMerchant">
                            <span class="menu-tab-icon">
                                <i data-feather="users"></i>
                            </span>
                            <span>Users</span>
                        </a>
                    </li>  --}}

                    <li>
                        <a href="#" data-menu-target="#parcelForMerchant">
                            <span class="menu-tab-icon">
                                <i data-feather="layout"></i>
                            </span>
                            <span>Parcel</span>
                        </a>
                    </li>


                    <li>
                        <a href="#" data-menu-target="#paymentForMerchant">
                            <span class="menu-tab-icon">
                                <i data-feather="dollar-sign"></i>
                            </span>
                            <span>Payment</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#reportsForMerchant">
                            <span class="menu-tab-icon">
                                <i data-feather="book"></i>
                            </span>
                            <span>Reports</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-menu-target="#notificationAndMessageForMerchant">
                            <span class="menu-tab-icon">
                                <i data-feather="bell"></i>
                            </span>
                            <span>Notification</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#othersForMerchant">
                            <span class="menu-tab-icon">
                                <i data-feather="arrow-up-right"></i>
                            </span>
                            <span>Others</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('merchant.logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <span class="menu-tab-icon">
                                <i data-feather="log-out"></i>
                            </span>
                            <span style="color:yellow;">Logout</span>
                        </a>
                        <form id="logout-form-ForMerchant" action="{{ route('merchant.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <!-- ./ Menu tab -->
            {{-- -class="{{ request()->is('home') ? 'active' : '' }}" --}}
            <!-- Menu body -->
            <div class="navigation-menu-body">
                <ul id="dashboardForMerchant">
                    <li class="navigation-divider">Dashboard</li>
                    <li>
                        <a class="{{ request()->is('merchant/dashboard/home') ? 'active' : '' }}" href="#">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>


                <ul id="parcelForMerchant">
                    <li class="navigation-divider">Parcel</li>
                    <li>
                        <a class="{{--  {{ request()->is('admin/order/create/*') || request()->is('admin/order/create') ? 'active' : '' }}"  href="{{ route('admin.order.create') }}  --}}">
                            <span class="nav-link-icon" data-feather="plus"></span>
                            <span>Create Parcel</span>
                        </a>
                    </li>
                    @php
                    $assign_pickup = \Crypt::encrypt('assign_pickup');
                    @endphp
                    <li>
                        <a  class='{{--  {{ request()->is("admin/parcel/*") || request()->is("admin/parcel/assign-pickup/status") ? "active" : '' }}  --}}'  href="{{--  {{ route('admin.changeStatus','assign-pickup') }}  --}}">
                            <span class="nav-link-icon" data-feather="repeat"></span>
                            <span>Assign & Receive</span>
                        </a>
                    </li>
                    <li>
                        <a  class="{{--  {{ request()->is('admin/order') || request()->is('admin/order/') ? 'active' : '' }}"  href="{{ route('admin.order.index') }}  --}}">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>All Parcel</span>
                        </a>
                    </li>
                    <li>
                        <a  class="{{--  {{ request()->is('admin/assigned/parcel/*') || request()->is('admin/assigned/parcel/manpower/list') ? 'active' : '' }}  --}}"  href="{{--  {{ route('admin.parcelAssignedManpowerList') }}  --}}">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Print  <small> (Parcel Assigned)</small></span>
                        </a>
                    </li>
                    <li>
                        <a  class="#">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Partial Delivery....</span>
                        </a>
                    </li>
                    {{--
                        <li>
                            <a  href="#">
                                <span class="nav-link-icon" data-feather="life-buoy"></span>
                                <span>All Status</span>
                            </a>
                        </li>
                    --}}
                    {{--
                        <li>
                            <a  href="todo-list.html">
                                <span class="nav-link-icon" data-feather="check-circle"></span>
                                <span>Todo List</span>
                                <span class="badge badge-warning small-badge">2</span>
                            </a>
                        </li>
                        <li>
                            <a  href="file-manager.html">
                                <span class="nav-link-icon" data-feather="file"></span>
                                <span>File Manager</span>
                            </a>
                        </li>
                        <li>
                            <a  href="calendar.html">
                                <span class="nav-link-icon" data-feather="calendar"></span>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a  href="gallery.html">
                                <span class="nav-link-icon" data-feather="image"></span>
                                <span>Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a  href="invoice.html">
                                <span class="nav-link-icon" data-feather="book"></span>
                                <span>Invoice</span>
                            </a>
                        </li>
                    --}}
                    <!---this is for active default menu --->
                    <li style="display: none;">
                        <a  class="{{--  {{ request()->is('admin/order') || request()->is('admin/order/*') ? 'active' : '' }}  --}}" >
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>All Parcel</span>
                        </a>
                    </li>
                    <!---this is for active default menu --->
                </ul>

                <ul id="paymentForMerchant">
                    <li class="navigation-divider">All Payment</li>
                    <li>
                        <a class="{{--  {{ request()->is('admin/merchant/payment*') ? 'activeParent' : '' }}  --}}" href="#">
                            <span class="nav-link-icon" data-feather="book"></span>
                            <span>Merchant</span>
                        </a>
                        <ul>
                            <li>
                                <a  class="{{--  {{ request()->is('admin/merchant/payment/due/bill/summary') || request()->is('admin/merchant/payment/due/bill/parcel/details/*') ? 'active' : '' }}"  href="{{ route('admin.merchantPaymentDueBillSummary') }}  --}}">
                                    Payable Bill  <small> -(Due)</small>
                                </a>
                            </li>
                            <li>
                                <a  class="{{--  {{ request()->is('admin/merchant/payment/paid/invoice/active/list') ? 'active' : '' }}  --}}"  href="{{--  {{ route('admin.activeMerchantPaymentPaidInvoice') }}  --}}">
                                    Payment History <small> -(Paid)</small>
                                </a>
                            </li>
                            <!----for active always by hidden----->
                            <li style="display:none">
                                <a  class="{{--  {{ request()->is('admin/merchant/payment/*') ? 'active' : '' }}  --}}">
                                </a>
                            </li>
                            <!----for active always by hidden----->
                        </ul>
                    </li>
                    <li>
                        <a class="{{--  {{ request()->is('admin/delivery-man/payment*') ? 'activeParent' : '' }}  --}}" href="#">
                            <span class="nav-link-icon" data-feather="book"></span>
                            <span>Delivery Man</span>
                        </a>
                        <ul>
                            <li>
                                <a  class="{{--  {{ request()->is('admin/') ? 'active' : '' }}  --}}"  href="">
                                    Payable Amount
                                </a>
                            </li>
                            <li>
                                <a  class="{{--  {{ request()->is('admin/') ? 'active' : '' }}  --}}"  href="">
                                    Payment History
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul id="reportsForMerchant">
                    <li class="navigation-divider">Reports</li>
                    <li>
                        <a  href="#">
                            <span class="nav-link-icon" data-feather="alert-triangle"></span>
                            <span>Sweet Alert</span>
                        </a>
                    </li>
                    <li>
                        <a  href="#">
                            <span class="nav-link-icon" data-feather="crop"></span>
                            <span>Lightbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="nav-link-icon" data-feather="activity"></span>
                            <span>Charts</span>
                        </a>
                        <ul>
                            <li>
                                <a  href="apexchart.html">Apex Chart</a>
                            </li>
                            <li>
                                <a  href="justgage.html">Justgage</a>
                            </li>
                            <li>
                                <a  href="peity.html">Peity</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul id="notificationAndMessageForMerchant">
                    <li class="navigation-divider">Notification/Message</li>
                    <li>
                        <a  href="#">
                            <span class="nav-link-icon" data-feather="mail"></span>
                            <span>Message/Mail</span>
                            <span class="badge badge-danger">5</span>
                        </a>
                    </li>
                    <li>
                        <a  href="pricing-table.html">
                            <span class="nav-link-icon" data-feather="bell"></span>
                            <span>Notifications</span>
                            <span class="badge badge-danger">5</span>
                        </a>
                    </li>
                </ul>

                <ul id="othersForMerchant">
                    <li class="navigation-divider">Others</li>
                    <li>
                        <a class="{{--  {{ request()->is('admin/area/*') || request()->is('admin/area') ? 'active' : '' }}--}}"href="{{--{{ route('admin.area.index') }}  --}}">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Area</span>
                            <!-- <span class="badge badge-danger">5</span>-->
                        </a>
                    </li>

                    <li>
                        <a class="{{--  {{ request()->is('admin/upazila/*') || request()->is('admin/upazila') ? 'active' : '' }}  --}}" href="{{--  {{ route('admin.upazila.index') }}  --}}">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Upazila</span>
                            <!-- <span class="badge badge-danger">5</span>-->
                        </a>
                    </li>
                    {{--
                        <li>
                            <a  href="#">
                                <span class="nav-link-icon" data-feather="mail"></span>
                                <span>Message/Mail</span>
                                <!-- <span class="badge badge-danger">5</span>-->
                            </a>
                        </li>
                        <li>
                            <a  href="pricing-table.html">
                                <span class="nav-link-icon" data-feather="bell"></span>
                                <span>Notifications</span>
                                <span class="badge badge-danger">5</span>
                            </a>
                        </li>
                    --}}
                </ul>

            </div>
            <!-- ./ Menu body -->
        </div>
        <!-- ./ Menu wrapper -->
        @endmerchant
    <!-----Merchant Menu------>


</div>
<!-- ./ Navigation -->
