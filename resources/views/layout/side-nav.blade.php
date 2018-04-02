@section('side-nav')
<ul class="nav nav-list">
                        <li class="active"><!-- dashboard -->
                            <a class="dashboard" href="/home"><!-- warning - url used by default by ajax (if eneabled) -->
                                <i class="main-icon fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-folder"></i> <span>Request </span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/client/show">New Request</a></li>
                              {{--   <li><a href="/walkin/show">Legal Documentation</a></li>
                                <li><a href="/notary/show">Administration of oath</a></li> --}}
                                <li><a href="/approve/show">Approved Requests</a></li>
                               </ul>
                        </li>
                       <li>
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-briefcase"></i> <span>Case </span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/request/showlawyers">Lawyers</a></li>
                                <li><a href="/managecase">Manage Case</a></li>
                               </ul>
                        </li>
                         <li class="submenu">
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-gears"></i> <span>Maintenance</span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/position/show">Position</a></li>
                                <li><a href="/employee/show">Employees</a></li>
                                <li><a href="#"><i class="fa fa-menu-arrow pull-right"></i> Client Info</a>
                                    <ul>
                                
                                <li><a href="/religion/show">Religion</a></li>
                                <li><a href="/citizenship/show">Citizenship</a></li>
                             <li><a href="/language/show">Language Spoken</a></li>
                                <li><a href="/education/show">Educational Attainment </a></li>
                                </li></ul>
                                
                               
                                                            
                                <li><a href="#"><i class="fa fa-menu-arrow pull-right"></i>Case Information</a><ul>
                              <li><a href="/courttype/show">Court type</a></li>

                             <li><a href="/branch/show">Branch</a></li>
                             <li><a href="/court/show">Court  </a></li>    
                             <li><a href="/casecategory/show">Case Category </a></li>    
                             <li><a href="/lawsuit/show">Case</a></li>
                             <li><a href="/caseinvolvement/show">Case Involvement </a></li>
                             <li><a href="/casetype/show">Case Type</a></li>
                             <li><a href="/casestatus/show">Case Status</a></li>
                             <li><a href="/decision/show">Decision</a></li>
                             
                                

                                </li></ul>
                                <li><a href="/natureofrequest/show">Nature of Request</a></li>
                                <li><a href="/reqstat/show">Request Status</a></li>
                                <li><a href="/reason/show">Reason</a></li>
                                <li><a href="/scheduletype/show">Schedule Type</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-calendar"></i> <span>Schedules </span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/schedule/show">Hearing Schedule</a></li>
                                <li><a href="/show/inquesttable">Inquest Schedule</a></li>
                               </ul>
                        </li>
                        <li>
                        <li>
                            <a href="/casehistory/show">
                                <i class="main-icon fa fa-history"></i> <span>Case History</span>
                            </a>
                        </li>
                          <li>
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-database"></i> <span>Queries </span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/show/mostcasetype">Most cases handled by case type</a></li>
                               {{--  <li><a href="/show/lawyercases">Most cases handled by lawyer</a></li> --}}
                                <li><a href="/show/pendingcase">Pending Cases</a></li>
                               </ul>
                        </li>
                      
                        <li>
                            <a href="#">
                                <i class="fa fa-menu-arrow pull-right"></i>
                                <i class="main-icon fa fa-print"></i> <span>Reports </span>
                            </a>
                            <ul><!-- submenus -->
                                <li><a href="/show/yearendreport">Year End Inventory of Cases</a></li>
                                 <li><a href="/show/bycourt"> Inventory of Cases per Court</a></li>
                                 <li><a href="/show/inquesttable">Monthly Inquest Schedule</a></li>
                               </ul>
                        </li>
                              
</ul>
@stop 