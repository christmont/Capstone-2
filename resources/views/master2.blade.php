<!doctype html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="{{ url('images/pao.jpg') }}">
        <title>Public Attorney's Office</title>
        <meta name="description" content="" />
        <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

        <!-- WEB FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap/css/bootstrap.min.css') }}" />
        <!-- THEME CSS -->
        <link href="{{ asset('css/essentials.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
          
        <link href="{{ asset('css/color_scheme/green.css') }}" rel="stylesheet" id="color_scheme">
        <link rel="stylesheet" type="text/css" href="{{asset('css/layout-datatables.css')}}">
         <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.datetimepicker.css')}}">
         <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datetimepicker.css')}}">
    </head>
    <!--
        .boxed = boxed version
    -->
    <body>


        <!-- WRAPPER -->
        <div id="wrapper" class="clearfix">

         


            <!-- HEADER -->
            <header id="header">
                
                @yield('header-main')

            </header>
            <!-- /HEADER -->
            

  
                <section>
                    @yield('content')
                </section>            


        </div>

                <footer class="footer">
                        <div class="row">   <br>
                    <STRONG><h7 class="pull-right">PUBLIC ATTORNEY'S OFFICE</h7></STRONG>
                    </div>
                </footer>

    
        <!-- JAVASCRIPT FILES -->

       
        <!-- PAGE LEVEL SCRIPT -->
        <script type="text/javascript" src="{{URL::asset('js/scripts.js')}}"></script>
        <script type= "text/javascript" src="{{asset('js/jquery-3.3.1.min.js') }}"></script>   
        <script type= "text/javascript" src="{{URL::asset('js/app.js') }}"></script>
         <script type= "text/javascript" src="{{URL::asset('js/jquery.datetimepicker.full.js') }}"></script>
      <script type= "text/javascript" src="{{URL::asset('js/jquery.datetimepicker.js') }}"></script>
        <script type= "text/javascript" src="{{URL::asset('js/bootstrap-datetimepicker.js') }}"></script>
        <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
        <script type="text/javascript">
            var plugin_path = "{{URL::asset('plugins')}}/"
        </script>
        <script src="{{URL:: asset('js/moment.min.js') }}"></script>
        <script type="text/javascript">
            loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
                loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){
                    loadScript(plugin_path + "select2/js/select2.full.min.js", function(){

                        if (jQuery().dataTable) {

                            function restoreRow(oTable, nRow) {
                                var aData = oTable.fnGetData(nRow);
                                var jqTds = $('>td', nRow);

                                for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                                    oTable.fnUpdate(aData[i], nRow, i, false);
                                }

                                oTable.fnDraw();
                            }

                            function editRow(oTable, nRow) {
                                var aData = oTable.fnGetData(nRow);
                                var jqTds = $('>td', nRow);
                                jqTds[0].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[0] + '">';
                                jqTds[1].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[1] + '">';
                                jqTds[2].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[2] + '">';
                                jqTds[3].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[3] + '">';
                                jqTds[4].innerHTML = '<a class="edit" href="">Save</a>';
                                jqTds[5].innerHTML = '<a class="cancel" href="">Cancel</a>';
                            }

                            function saveRow(oTable, nRow) {
                                var jqInputs = $('input', nRow);
                                oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                                oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                                oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
                                oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
                                oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 4, false);
                                oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 5, false);
                                oTable.fnDraw();
                            }

                            function cancelEditRow(oTable, nRow) {
                                var jqInputs = $('input', nRow);
                                oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                                oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                                oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
                                oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
                                oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 4, false);
                                oTable.fnDraw();
                            }

                            var table = $('#sample_editable_1');

                            var oTable = table.dataTable({
                                "lengthMenu": [
                                    [5, 15, 20, -1],
                                    [5, 15, 20, "All"] // change per page values here
                                ],
                                // set the initial value
                                "pageLength": 10,

                                "language": {
                                    "lengthMenu": " _MENU_ records"
                                },
                                "columnDefs": [{ // set default column settings
                                    'orderable': true,
                                    'targets': [0]
                                }, {
                                    "searchable": true,
                                    "targets": [0]
                                }],
                                "order": [
                                    [0, "asc"]
                                ] // set first column as a default sort by asc
                            });

                            var tableWrapper = $("#sample_editable_1_wrapper");

                            tableWrapper.find(".dataTables_length select").select2({
                                showSearchInput: false //hide search box with special css class
                            }); // initialize select2 dropdown

                            var nEditing = null;
                            var nNew = false;

                            $('#sample_editable_1_new').click(function (e) {
                                e.preventDefault();

                                if (nNew && nEditing) {
                                    if (confirm("Previose row not saved. Do you want to save it ?")) {
                                        saveRow(oTable, nEditing); // save
                                        $(nEditing).find("td:first").html("Untitled");
                                        nEditing = null;
                                        nNew = false;

                                    } else {
                                        oTable.fnDeleteRow(nEditing); // cancel
                                        nEditing = null;
                                        nNew = false;
                                        
                                        return;
                                    }
                                }

                                var aiNew = oTable.fnAddData(['', '', '', '', '', '']);
                                var nRow = oTable.fnGetNodes(aiNew[0]);
                                editRow(oTable, nRow);
                                nEditing = nRow;
                                nNew = true;
                            });

                            table.on('click', '.delete', function (e) {
                                e.preventDefault();

                                if (confirm("Are you sure to delete this row ?") == false) {
                                    return;
                                }

                                var nRow = $(this).parents('tr')[0];
                                oTable.fnDeleteRow(nRow);
                                alert("Deleted! Do not forget to do some ajax to sync with backend :)");
                            });

                            table.on('click', '.cancel', function (e) {
                                e.preventDefault();

                                if (nNew) {
                                    oTable.fnDeleteRow(nEditing);
                                    nNew = false;
                                } else {
                                    restoreRow(oTable, nEditing);
                                    nEditing = null;
                                }
                            });

                            table.on('click', '.edit', function (e) {
                                e.preventDefault();

                                /* Get the row as a parent of the link that was clicked on */
                                var nRow = $(this).parents('tr')[0];

                                if (nEditing !== null && nEditing != nRow) {
                                    /* Currently editing - but not this row - restore the old before continuing to edit mode */
                                    restoreRow(oTable, nEditing);
                                    editRow(oTable, nRow);
                                    nEditing = nRow;
                                } else if (nEditing == nRow && this.innerHTML == "Save") {
                                    /* Editing this row and want to save it */
                                    saveRow(oTable, nEditing);
                                    nEditing = null;
                                    alert("Updated! Do not forget to do some ajax to sync with backend :)");
                                } else {
                                    /* No edit in progress - let's start one */
                                    editRow(oTable, nRow);
                                    nEditing = nRow;
                                }
                            });

                        }

                    });
                });
            });
        </script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker6,#datetimepicker7').datetimepicker({
  defaultDate:new Date(), 
  pickTime: false
});

$("#datetimepicker6").on("dp.change",function (e) {
   $('#datetimepicker7').data("DateTimePicker").setMinDate(e.date.add(1, 'D'));
});
$("#datetimepicker7").on("dp.change",function (e) {
  $('#datetimepicker6').data("DateTimePicker").setMaxDate(e.date.add(1, 'D')); 
});
    });

</script>

// <script>
    $(function(){
        $('.tab-content').hide();
        $('ul.nav-tabs li:first').addClass('active');
        $('.tab-content:first').show();
        $('ul.nav-tabs li').on('click',function(){
            $('ul.nav-tabs li').removeClass('active');
            $(this).addClass('active')
            $('.tab-content').hide();
            var activeTab = $(this).find('a').attr('href');
            $(activeTab).show();
            return false;
        });
    })
  $('.btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});
   $('.btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});

// </script>
    </body>
</html>