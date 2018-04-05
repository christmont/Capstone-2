@section('header-main')
<!-- Mobile Button -->
<button id="mobileMenuBtn"></button>    
                <!-- Logo -->
                

                

                <nav>

                    <!-- OPTIONS LIST -->
                    <ul class="nav pull-right">

                        <!-- USER OPTIONS -->
                        <li class="dropdown pull-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img class="user-avatar" alt="" src="assets/images/noavatar.jpg" height="34" /> 
                                <span class="user-name">
                                    <span class="hidden-xs">
                                       {{ ucwords(Auth::user()->efname) . '  ' . ucwords(Auth::user()->emname) . '  ' . ucwords(Auth::user()->elname) }}<i class="fa fa-angle-down"></i>
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
                                    <form id="logout" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                    <a onclick="document.getElementById('logout').submit(); return false;"><i class="fa fa-power-off"></i> Log Out</a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <!-- /USER OPTIONS -->

                    </ul>
                    <!-- /OPTIONS LIST -->

                </nav>
@stop