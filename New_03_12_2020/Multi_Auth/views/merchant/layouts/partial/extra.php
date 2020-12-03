    <!-----Admin Menu Start------>
    {{--  @admin  --}}
        <!-- Menu wrapper -->
        <div class="navigation-menu-wrapper">
            <!-- Menu tab -->
            <div class="navigation-menu-tab">
                <ul>
                    <li style="display: none;">
                        <a href="#" data-menu-target="#dashboard">
                            <span class="menu-tab-icon">
                                <i data-feather="users"></i>
                            </span>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#users">
                            <span class="menu-tab-icon">
                                <i data-feather="users"></i>
                            </span>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#parcel">
                            <span class="menu-tab-icon">
                                <i data-feather="layout"></i>
                            </span>
                            <span>Parcel</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#rack">
                            <span class="menu-tab-icon">
                                <i data-feather="square"></i>
                            </span>
                            <span>Rack</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-menu-target="#finalCollectionFromDeliveryMan">
                            <span class="menu-tab-icon">
                                <i data-feather="layers"></i>
                            </span>
                            <span>Collection</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#payment">
                            <span class="menu-tab-icon">
                                <i data-feather="dollar-sign"></i>
                            </span>
                            <span>Payment</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#reports">
                            <span class="menu-tab-icon">
                                <i data-feather="book"></i>
                            </span>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#cancelResons">
                            <span class="menu-tab-icon">
                                <i data-feather="framer"></i>
                            </span>
                            <span>Cancel</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#notificationAndMessage">
                            <span class="menu-tab-icon">
                                <i data-feather="bell"></i>
                            </span>
                            <span>Notification</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#others">
                            <span class="menu-tab-icon">
                                <i data-feather="arrow-up-right"></i>
                            </span>
                            <span>Others</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <span class="menu-tab-icon">
                                <i data-feather="log-out"></i>
                            </span>
                            <span style="color:yellow;">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <!-- ./ Menu tab -->
            {{-- -class="{{ request()->is('home') ? 'active' : '' }}" --}}
            <!-- Menu body -->
            <div class="navigation-menu-body">
                <ul id="dashboard">
                    <li class="navigation-divider">Dashboard</li>
                    <li>
                        <a class="{{ request()->is('home') ? 'active' : '' }}" href="#">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>

                <ul id="users">
                    <li class="navigation-divider">Users</li>
                    <li>
                        <a href="#" class="{{ request()->is('admin/user/create/*') || request()->is('admin/user/create') ? 'activeParent' : '' }}">
                            <span class="nav-link-icon" data-feather="plus"></span>
                            <span>Create User</span>
                        </a>
                        <ul>
                            <li>
                                <a class="{{ request()->is('admin/user/create/merchant') ? 'active' : '' }}"  href="{{ route('admin.user.create','merchant') }}">Merchant</a>
                            </li>
                            <li>
                                <a  class="{{ request()->is('admin/user/create/delivery-man') ? 'active' : '' }}"  href="{{ route('admin.user.create','delivery-man') }}">Delivery Man</a>
                            </li>
                            <li>
                                <a class="{{ request()->is('admin/user/create/manager') ? 'active' : '' }}"  href="{{ route('admin.user.create','manager') }}">Manager</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="{{ request()->is('admin/user/view/active/*') || request()->is('admin/user/view/active') ? 'activeParent' : '' }}" href="#">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Active Users List</span>
                        </a>
                        <ul>
                            <li>
                                <a  class="{{ request()->is('admin/user/view/active/merchant') ? 'active' : '' }}"  href="{{ route('admin.user.view',['active','merchant']) }}">
                                    Merchant
                                    <span class="badge badge-success ">0</span>
                                </a>
                            </li>
                            <li>
                                <a  class="{{ request()->is('admin/user/view/active/delivery-man') ? 'active' : '' }}"  href="{{ route('admin.user.view',['active','delivery-man']) }}">
                                    Delivery Man
                                    <span class="badge badge-success">0</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('admin/user/view/active/manager') ? 'active' : '' }}"  href="{{ route('admin.user.view',['active','manager']) }}">
                                    Manager
                                    <span class="badge badge-success">0</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="{{ request()->is('admin/user/view/pending/*') || request()->is('admin/user/view/pending') ? 'activeParent' : '' }}" href="#">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Pending Users List</span>
                        </a>
                        <ul>
                            <li>
                                <a  class="{{ request()->is('admin/user/view/pending/merchant') ? 'active' : '' }}"  href="{{ route('admin.user.view',['pending','merchant']) }}">
                                    Merchant
                                    <span class="badge badge-warning">0</span>
                                </a>
                            </li>
                            <li>
                                <a  class="{{ request()->is('admin/user/view/pending/delivery-man') ? 'active' : '' }}"  href="{{ route('admin.user.view',['pending','delivery-man']) }}">
                                    Delivery Man
                                    <span class="badge badge-warning">0</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('admin/user/view/pending/manager') ? 'active' : '' }}"  href="{{ route('admin.user.view',['pending','manager']) }}">
                                    Manager
                                    <span class="badge badge-warning">0</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="{{ request()->is('admin/user/view/suspend/*') || request()->is('admin/user/view/suspend') ? 'activeParent' : '' }}" href="#">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Suspended Users</span>
                        </a>
                        <ul>
                            <li>
                                <a  class="{{ request()->is('admin/user/view/suspend/merchant') ? 'active' : '' }}"  href="{{ route('admin.user.view',['suspend','merchant']) }}">
                                    Merchant
                                    <span class="badge badge-danger">0</span>
                                </a>
                            </li>
                            <li>
                                <a  class="{{ request()->is('admin/user/view/suspend/delivery-man') ? 'active' : '' }}"  href="{{ route('admin.user.view',['suspend','delivery-man']) }}">
                                    Delivery Man
                                    <span class="badge badge-danger">0</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('admin/user/view/suspend/manager') ? 'active' : '' }}"  href="{{ route('admin.user.view',['suspend','manager']) }}">
                                    Manager
                                    <span class="badge badge-danger">0</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="#">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Merchant Panel</span>
                        </a>
                    </li>
                </ul>

                <ul id="parcel">
                    <li class="navigation-divider">Parcel</li>
                    <li>
                        <a class="{{ request()->is('admin/order/create/*') || request()->is('admin/order/create') ? 'active' : '' }}"  href="{{ route('admin.order.create') }}">
                            <span class="nav-link-icon" data-feather="plus"></span>
                            <span>Create Parcel</span>
                        </a>
                    </li>
                    @php
                    $assign_pickup = \Crypt::encrypt('assign_pickup');
                    @endphp
                    <li>
                        <a  class='{{ request()->is("admin/parcel/*") || request()->is("admin/parcel/assign-pickup/status") ? "active" : '' }}'  href="{{ route('admin.changeStatus','assign-pickup') }}">
                            <span class="nav-link-icon" data-feather="repeat"></span>
                            <span>Assign & Receive</span>
                        </a>
                    </li>
                    <li>
                        <a  class="{{ request()->is('admin/order') || request()->is('admin/order/') ? 'active' : '' }}"  href="{{ route('admin.order.index') }}">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>All Parcel</span>
                        </a>
                    </li>
                    <li>
                        <a  class="{{ request()->is('admin/assigned/parcel/*') || request()->is('admin/assigned/parcel/manpower/list') ? 'active' : '' }}"  href="{{ route('admin.parcelAssignedManpowerList') }}">
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
                        <a  class="{{ request()->is('admin/order') || request()->is('admin/order/*') ? 'active' : '' }}" >
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>All Parcel</span>
                        </a>
                    </li>
                    <!---this is for active default menu --->
                </ul>

                <ul id="rack">
                    <li class="navigation-divider">Parcel</li>

                    <li>
                        <a  href="#">
                            <span class="nav-link-icon" data-feather="repeat"></span>
                            <span>All Parcel in Rack</span>
                        </a>
                    </li>
                    <li>
                        <a  href="#">
                            <span class="nav-link-icon" data-feather="plus"></span>
                            <span>Posting Parcel in Rack</span>
                        </a>
                    </li>
                    <li>
                        <a  href="#">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Rack List (Counted)</span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('admin/rack*') ? 'active' : '' }}" href="{{ route('admin.rack.index') }}">
                            <span class="nav-link-icon" data-feather="plus"></span>
                            <span>Rack (Create & List)</span>
                        </a>
                    </li>
                </ul>

                <ul id="finalCollectionFromDeliveryMan">
                    <li class="navigation-divider">Collection Balance/Parcel</li>
                    <li>
                        <a  class="{{  request()->is('admin/collection/delivered/parcel/amount') || request()->is('admin/collection/delivered/parcel/amount/*') ? 'active' : '' }}"  href="{{ route('admin.collectionDeliveredParcelAmount') }}">
                            <span class="nav-link-icon">
                                <i data-feather="dollar-sign"></i>
                            </span>
                            <span>Parcel Amount</span>
                        </a>
                    </li>
                    {{--
                        <li>
                            <a  href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="layout"></i>
                                </span>
                                <span>Collect Parcel</span>
                            </a>
                        </li>
                    --}}
                    {{--
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="layers"></i>
                                </span>
                                <span>Basic Components</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="alert.html">Alerts</a></li>
                                <li>
                                    <a  href="accordion.html">Accordion</a>
                                </li>
                            </ul>
                        </li>
                    --}}
                </ul>

                <ul id="payment">
                    <li class="navigation-divider">All Payment</li>
                    <li>
                        <a class="{{ request()->is('admin/merchant/payment*') ? 'activeParent' : '' }}" href="#">
                            <span class="nav-link-icon" data-feather="book"></span>
                            <span>Merchant</span>
                        </a>
                        <ul>
                            <li>
                                <a  class="{{ request()->is('admin/merchant/payment/due/bill/summary') || request()->is('admin/merchant/payment/due/bill/parcel/details/*') ? 'active' : '' }}"  href="{{ route('admin.merchantPaymentDueBillSummary') }}">
                                    Payable Bill  <small> -(Due)</small>
                                </a>
                            </li>
                            <li>
                                <a  class="{{ request()->is('admin/merchant/payment/paid/invoice/active/list') ? 'active' : '' }}"  href="{{ route('admin.activeMerchantPaymentPaidInvoice') }}">
                                    Payment History <small> -(Paid)</small>
                                </a>
                            </li>
                            <!----for active always by hidden----->
                            <li style="display:none">
                                <a  class="{{ request()->is('admin/merchant/payment/*') ? 'active' : '' }}">
                                </a>
                            </li>
                            <!----for active always by hidden----->
                        </ul>
                    </li>
                    <li>
                        <a class="{{ request()->is('admin/delivery-man/payment*') ? 'activeParent' : '' }}" href="#">
                            <span class="nav-link-icon" data-feather="book"></span>
                            <span>Delivery Man</span>
                        </a>
                        <ul>
                            <li>
                                <a  class="{{ request()->is('admin/') ? 'active' : '' }}"  href="">
                                    Payable Amount
                                </a>
                            </li>
                            <li>
                                <a  class="{{ request()->is('admin/') ? 'active' : '' }}"  href="">
                                    Payment History
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul id="reports">
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

                <ul id="cancelResons">
                    <li class="navigation-divider">Cancel</li>
                    <li>
                        <a  href="timeline.html">
                            <span class="nav-link-icon" data-feather="plus"></span>
                            <span>Create Resons</span>
                        </a>
                    </li>
                    <li>
                        <a  href="pricing-table.html">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Resons List</span>
                        </a>
                    </li>
                </ul>
                <ul id="notificationAndMessage">
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

                <ul id="others">
                    <li class="navigation-divider">Others</li>
                    <li>
                        <a class="{{ request()->is('admin/area/*') || request()->is('admin/area') ? 'active' : '' }}"href="{{ route('admin.area.index') }}">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Area</span>
                            <!-- <span class="badge badge-danger">5</span>-->
                        </a>
                    </li>

                    <li>
                        <a class="{{ request()->is('admin/upazila/*') || request()->is('admin/upazila') ? 'active' : '' }}" href="{{ route('admin.upazila.index') }}">
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
        {{--  @endadmin  --}}
    <!-----Admin Menu End------>


        <!-----Merchant Menu------>
      {{--    @merchant  --}}
        <!-- Menu wrapper -->
        <div class="navigation-menu-wrapper">
            <!-- Menu tab -->
            <div class="navigation-menu-tab">
                <ul>
                    <li style="display: none;">
                        <a href="#" data-menu-target="#dashboard">
                            <span class="menu-tab-icon">
                                <i data-feather="users"></i>
                            </span>
                            <span>Users</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-menu-target="#parcel">
                            <span class="menu-tab-icon">
                                <i data-feather="layout"></i>
                            </span>
                            <span>Parcel</span>
                        </a>
                    </li>


                    <li>
                        <a href="#" data-menu-target="#payment">
                            <span class="menu-tab-icon">
                                <i data-feather="dollar-sign"></i>
                            </span>
                            <span>Payment</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#reports">
                            <span class="menu-tab-icon">
                                <i data-feather="book"></i>
                            </span>
                            <span>Reports</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" data-menu-target="#notificationAndMessage">
                            <span class="menu-tab-icon">
                                <i data-feather="bell"></i>
                            </span>
                            <span>Notification</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-menu-target="#others">
                            <span class="menu-tab-icon">
                                <i data-feather="arrow-up-right"></i>
                            </span>
                            <span>Others</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <span class="menu-tab-icon">
                                <i data-feather="log-out"></i>
                            </span>
                            <span style="color:yellow;">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <!-- ./ Menu tab -->
            {{-- -class="{{ request()->is('home') ? 'active' : '' }}" --}}
            <!-- Menu body -->
            <div class="navigation-menu-body">
                <ul id="dashboard">
                    <li class="navigation-divider">Dashboard</li>
                    <li>
                        <a class="{{ request()->is('home') ? 'active' : '' }}" href="#">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>


                <ul id="parcel">
                    <li class="navigation-divider">Parcel</li>
                    <li>
                        <a class="{{ request()->is('admin/order/create/*') || request()->is('admin/order/create') ? 'active' : '' }}"  href="{{ route('admin.order.create') }}">
                            <span class="nav-link-icon" data-feather="plus"></span>
                            <span>Create Parcel</span>
                        </a>
                    </li>
                    @php
                    $assign_pickup = \Crypt::encrypt('assign_pickup');
                    @endphp
                    <li>
                        <a  class='{{ request()->is("admin/parcel/*") || request()->is("admin/parcel/assign-pickup/status") ? "active" : '' }}'  href="{{ route('admin.changeStatus','assign-pickup') }}">
                            <span class="nav-link-icon" data-feather="repeat"></span>
                            <span>Assign & Receive</span>
                        </a>
                    </li>
                    <li>
                        <a  class="{{ request()->is('admin/order') || request()->is('admin/order/') ? 'active' : '' }}"  href="{{ route('admin.order.index') }}">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>All Parcel</span>
                        </a>
                    </li>
                    <li>
                        <a  class="{{ request()->is('admin/assigned/parcel/*') || request()->is('admin/assigned/parcel/manpower/list') ? 'active' : '' }}"  href="{{ route('admin.parcelAssignedManpowerList') }}">
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
                        <a  class="{{ request()->is('admin/order') || request()->is('admin/order/*') ? 'active' : '' }}" >
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>All Parcel</span>
                        </a>
                    </li>
                    <!---this is for active default menu --->
                </ul>

                <ul id="payment">
                    <li class="navigation-divider">All Payment</li>
                    <li>
                        <a class="{{ request()->is('admin/merchant/payment*') ? 'activeParent' : '' }}" href="#">
                            <span class="nav-link-icon" data-feather="book"></span>
                            <span>Merchant</span>
                        </a>
                        <ul>
                            <li>
                                <a  class="{{ request()->is('admin/merchant/payment/due/bill/summary') || request()->is('admin/merchant/payment/due/bill/parcel/details/*') ? 'active' : '' }}"  href="{{ route('admin.merchantPaymentDueBillSummary') }}">
                                    Payable Bill  <small> -(Due)</small>
                                </a>
                            </li>
                            <li>
                                <a  class="{{ request()->is('admin/merchant/payment/paid/invoice/active/list') ? 'active' : '' }}"  href="{{ route('admin.activeMerchantPaymentPaidInvoice') }}">
                                    Payment History <small> -(Paid)</small>
                                </a>
                            </li>
                            <!----for active always by hidden----->
                            <li style="display:none">
                                <a  class="{{ request()->is('admin/merchant/payment/*') ? 'active' : '' }}">
                                </a>
                            </li>
                            <!----for active always by hidden----->
                        </ul>
                    </li>
                    <li>
                        <a class="{{ request()->is('admin/delivery-man/payment*') ? 'activeParent' : '' }}" href="#">
                            <span class="nav-link-icon" data-feather="book"></span>
                            <span>Delivery Man</span>
                        </a>
                        <ul>
                            <li>
                                <a  class="{{ request()->is('admin/') ? 'active' : '' }}"  href="">
                                    Payable Amount
                                </a>
                            </li>
                            <li>
                                <a  class="{{ request()->is('admin/') ? 'active' : '' }}"  href="">
                                    Payment History
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul id="reports">
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

                <ul id="notificationAndMessage">
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

                <ul id="others">
                    <li class="navigation-divider">Others</li>
                    <li>
                        <a class="{{ request()->is('admin/area/*') || request()->is('admin/area') ? 'active' : '' }}"href="{{ route('admin.area.index') }}">
                            <span class="nav-link-icon" data-feather="list"></span>
                            <span>Area</span>
                            <!-- <span class="badge badge-danger">5</span>-->
                        </a>
                    </li>

                    <li>
                        <a class="{{ request()->is('admin/upazila/*') || request()->is('admin/upazila') ? 'active' : '' }}" href="{{ route('admin.upazila.index') }}">
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
        {{--  @endmerchant  --}}
    <!-----Merchant Menu------>