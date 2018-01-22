<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<title>ClamWin | ClamWin WebAdmin</title>

    <?php include_once("includes/scripts/header.php"); ?>
    
    <style>
        /* .card > .nav {
            background-color: #161616;
        }
        .tab-content {
            background-color: #303136; 
            color: #fff;
            padding: 5px
        } */
        .card .header {
            padding-left: 0;
            padding-top: 0;
            padding-bottom: 10px;
        }

        .card > .nav > li > a:hover {
            border-bottom: 3px solid;
            border-color: purple;
            color: black;
        }

        .card > .nav > li:not(.active) {
            border-color: purple;
        }

        .card > .nav > li.active > a {
            color: black;
        }

        .card > .nav > li.active > a {
            border-bottom: 3px solid;
            color: black;
            border-color: #ffeb3b !important;
        }

        .table>tbody>tr>td {
            border-top: none;
        }
        
        /*
        https://stackoverflow.com/questions/31184000/making-a-bootstrap-table-column-fit-to-content
        https://stackoverflow.com/questions/20067347/css-for-first-td-of-each-tr-in-certain-table
        */
        .table>tbody>tr>td:first-child {
            width: 1%;
        }

        .content .row::after {
            display: inline;
        }

        .pointerCursor {
            cursor: pointer;
        }
    </style>

</head>
<body>

<div class="wrapper">
    <?php include_once("includes/sidebar.php"); ?>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">ClamWin</a>
                </div>
                <?php include_once("includes/navbar.php"); ?>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <ul class="nav nav-justified pills-secondary" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link" data-toggle="tab" href="#general" role="tab">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#filters" role="tab">Filters</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#internet-updates" role="tab">Internet Updates</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#proxy" role="tab">Proxy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#scheduled-scans" role="tab">Scheduled Scans</a>
                                </li>
                            </ul>    
                                
                            <ul class="nav nav-justified pills-secondary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#email-alerts" role="tab">Email Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#limits" role="tab">Limits</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#file-locations" role="tab">File Locations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#reports" role="tab">Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#email-scanning" role="tab">Email Scanning</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#advanced" role="tab">Advanced</a>
                                </li>
                            </ul>


                            <!-- Tab panels -->
                            <div class="tab-content">

                                <!--General-->
                                <div class="tab-pane fade in active" id="general" role="tabpanel">
                                   
                                    <div class="content">
                                        <div class="header">
                                            <h4 class="title">Scanning Options</h4>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-full-width">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <input id="infectedonly" type="checkbox" checked>
                                                                            <label for="infectedonly"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>Display Infected Files Only</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <input id="scanrecursive" type="checkbox" checked>
                                                                            <label for="scanrecursive"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>Scan in Subdirectories</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <input id="checkbox3" type="checkbox" checked>
                                                                            <label for="checkbox3"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>Display File Scanned % Progress Indicator</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div> <!-- .table-full-width -->
                                                </div> <!-- .col-md-12 -->
                                            </div> <!-- .row -->

                                            <div class="header">
                                                <h4 class="title">Infected Files</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-full-width">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="radio">
                                                                            <input class="form-check-input" name="infected" id="reportinfected" type="radio" value="reportinfected" checked>
                                                                            <label class-"form-check-label" for="reportinfected"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>Report Only</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="radio">
                                                                            <input class="form-check-input" name="infected" id="removeinfected" type="radio" value="removeinfected">
                                                                            <label for="removeinfected"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>Remove (Use Carefully)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="radio">
                                                                            <input class="form-check-input" name="infected" id="moveinfected" type="radio" value="moveinfected">
                                                                            <label class="form-check-label" for="moveinfected"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>Move To Quarentine Folder</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>
                                                                        <div class="input">
                                                                            <input id="quarantinedir" name="quarentinedir" class="form-control" type="text" disabled>
                                                                            <label for="quarentinedir">Keep in blank to use quarentine default folder.</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <input id="kill" type="checkbox" checked>
                                                                            <label for="kill"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>Unload Infected Programs from Computer Memory</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div> <!-- .table-full-width -->
                                                </div> <!-- .col-md-12 -->
                                            </div> <!-- .row -->
                                                
                                            <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div> <!-- .content -->
                                </div>
                                <!--/.General-->

                                <!--Filters-->
                                <div class="tab-pane fade" id="filters" role="tabpanel">
                                    <br>

                                    <p>Panel 2.</p>

                                </div>
                                <!--/.Filters-->

                                <!--Internet Updates-->
                                <div class="tab-pane fade" id="internet-updates" role="tabpanel">
                                    <br>

                                    <p>Panel 3.</p>

                                </div>
                                <!--/.Internet Updates-->

                                <!--Proxy-->
                                <div class="tab-pane fade" id="proxy" role="tabpanel">
                                    <br>

                                    <p>Panel 4.</p>

                                </div>
                                <!--/.Proxy-->

                                <!--Scheduled Scans-->
                                <div class="tab-pane fade" id="scheduled-scans" role="tabpanel">
                                    <br>

                                    <p>Panel 4.</p>

                                </div>
                                <!--/.Scheduled Scans-->

                                <!--Email Alerts-->
                                <div class="tab-pane fade" id="email-alerts" role="tabpanel">
                                    <br>

                                    <p>Panel 4.</p>

                                </div>
                                <!--/.Email Alerts-->

                                <!--Limits-->
                                <div class="tab-pane fade" id="limits" role="tabpanel">
                                    <br>

                                    <p>Panel 4.</p>

                                </div>
                                <!--/.Limits-->

                                <!--File Locations-->
                                <div class="tab-pane fade" id="file-locations" role="tabpanel">
                                    <br>

                                    <p>Panel 4.</p>

                                </div>
                                <!--/.File Locations-->

                                <!--Reports-->
                                <div class="tab-pane fade" id="reports" role="tabpanel">
                                    <br>

                                    <p>Panel 4.</p>

                                </div>
                                <!--/.Reports-->

                                <!--Email Scanning-->
                                <div class="tab-pane fade" id="email-scanning" role="tabpanel">
                                    <br>

                                    <p>Panel 4.</p>

                                </div>
                                <!--/.Email Scanning-->

                                <!--Advanced-->
                                <div class="tab-pane fade" id="advanced" role="tabpanel">
                                    <br>

                                    <p>Panel 4.</p>

                                </div>
                                <!--/.Advanced-->

                            </div>
                            <!--/.Tab-Panels-->

                        </div> <!-- .card -->
                    </div> <!-- .col-md-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div> <!-- .content -->

        <?php include_once("includes/footer.php"); ?>

    </div>
</div>

<?php include_once("includes/scripts/footer.php"); ?>

    <script>
    	$(document).ready(function(){
            // https://stackoverflow.com/questions/27557923/change-cursor-to-pointer-on-hover-plain-text-like-a
            $('td').contents().filter(function() {
                return this.nodeType === 3;
            }).wrap('<span class="pointerCursor" />');

            $('.pointerCursor').on('click', function() {
                // https://stackoverflow.com/questions/12268090/get-prev-input-element-by-jquery
                var input = $(this).closest('tr').find('input')

                var isChecked = input.prop('checked');
                if ((isChecked) && (input.is(':radio')))
                {
                    return;
                }

                // https://stackoverflow.com/questions/24410581/changing-prop-using-jquery-does-not-trigger-change-event
                input.prop('checked', !input.prop('checked')).change();
            });
            
            $('input[name="infected"]').on('change', function() {
                var isChecked = $('#moveinfected').prop('checked');

                if (isChecked) {
                    $('input[name="quarentinedir"]').attr('disabled', false).focus();
                } else {
                    $('input[name="quarentinedir"]').attr('disabled', 'disabled');
                }
            });

            // https://stackoverflow.com/questions/18999501/bootstrap-3-keep-selected-tab-on-page-refresh
            $('.pills-secondary a').click(function(e) {
                e.preventDefault();
                $(this).tab('show');
            });

            // store the currently selected tab in the hash value
            $("ul.pills-secondary > li > a").on("shown.bs.tab", function(e) {
                var href = $(e.target).attr("href");
                var id = href.substr(1);
                window.location.hash = id;
                
                // https://stackoverflow.com/questions/30893353/bootstrap-mulitple-nav-tabs-for-tab-content
                // set all nav tabs to inactive
                $('.pills-secondary li').removeClass('active');

                // get all nav tabs matching the href and set to active
                $('.pills-secondary li a[href="'+href+'"]').closest('li').addClass('active');

                // active tab
                $('.tab-pane').removeClass('active');
                $('.tab-pane'+href).addClass('active');
            });

            // on load of the page: switch to the currently selected tab
            var hash = window.location.hash;
            $('.pills-secondary a[href="' + hash + '"]').tab('show');
    	});
    </script>

</body>
</html>
