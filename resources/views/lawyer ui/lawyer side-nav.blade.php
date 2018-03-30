@section('nav')
<ul class="nav nav-list">
                        <li class="active" style="background-color: #182634;"><!-- dashboard -->
                            <a href="/lawyerside/show"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-home"></i> <span>Home </span>
                            </a>
                        </li>
                        <li style="background-color: #182634">
                             <a href="profile" style="background-color: #182634"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-user"></i> <span>Profile </span>
                            </a>
                        </li>
                         <li style="background-color: #182634">
                             <a href="/notary/show" style="background-color: #182634"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-files-o"></i> <span>Notary </span>
                            </a>
                        </li>
                         <li style="background-color: #182634">
                             <a href="/walkin/show" style="background-color: #182634"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-file"></i> <span>Legal Documentation </span>
                            </a>
                        </li>
                         <li style="background-color: #182634">
                             <a href="/inquest/show" style="background-color: #182634"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-hand-lizard-o"></i> <span>Inquest </span>
                            </a>
                        </li>
                       <li style="background-color: #182634">
                            <a href="#" style="background-color: #182634">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-briefcase"></i> <span>Case </span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/lawyerclient/show">Cases Handled</a></li>
                                <li><a href="/lawyershow/managecase">Manage Case</a></li>
                               </ul>
                        </li>
                        <li style="background-color: #182634">
                            <a href="/lawyerschedule/show" style="background-color: #182634">
                                <i class="main-icon fa fa-calendar"></i> <span>Schedules</span>
                            </a>
                        </li>  
</ul>
@stop