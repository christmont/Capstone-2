@section('header-main')
<!-- Mobile Button -->
<button id="mobileMenuBtn"></button>    
                <!-- Logo -->
                <span class="logo pull-left">
                    <img src="{{ asset('images/logo_light.png') }}" alt="admin panel" height="50" width="80">
                </span>

                

                <nav>

                    <!-- OPTIONS LIST -->
                    <ul class="nav pull-right">

                        <!-- USER OPTIONS -->
                        <li class="dropdown pull-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img class="user-avatar" alt="" src="assets/images/noavatar.jpg" height="34" /> 
                                <span class="user-name">
                                    <span class="hidden-xs">
                                      {{--  {{ ucwords(Auth::user()->efname) . '  ' . ucwords(Auth::user()->emname) . '  ' . ucwords(Auth::user()->elname) }} --}}<i class="fa fa-angle-down"></i>
                                    </span>
                                </span>
                            </a>
                            <ul class="dropdown-menu hold-on-click">
                                <li><!-- my inbox -->
                                    <a href="#"><i class="fa fa-envelope"></i> Request
                                        <span class="pull-right label label-default">0</span>
                                    </a>
                                </li>

                                <li class="divider"></li>
                                <li><!-- logout -->
                                   
                                </li>
                            </ul>
                        </li>
                        <!-- /USER OPTIONS -->

                    </ul>
                    <!-- /OPTIONS LIST -->

                </nav>
@stop