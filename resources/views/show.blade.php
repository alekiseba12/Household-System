<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:22:59 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/favicon_1.ico">

        <title>Tenant-Home</title>

        


        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />


        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/helper.css" rel="stylesheet">
        

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62751496-1', 'auto');
  ga('send', 'pageview');

</script>

    </head>


    <body>

        <!-- Aside Start-->
       @include('admin.sidebar')
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
           @include('admin.header')
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Tenant Information</h3> 
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                <h4>Invoice</h4>
                            </div> -->
                            <div class="panel-body">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h4 class="text-right"><img src="img/logo_dark.png" alt="velonic"></h4>
                                        
                                    </div>
                                    <div class="pull-right">
                                        @foreach($tenants as $tenant)
                                        <h4>National ID <br>
                                            <strong>{{$tenant->ID_NO}}</strong>
                                        </h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="pull-left m-t-30">
                                            <address>
                                              <strong>TENANT DETAILS</strong><br>
                                              {{$tenant->Firstname.'  '.$tenant->Lastname}}<br>
                                              {{$tenant->Location.' '.$tenant->Address}}<br>
                                              <abbr title="Phone"></abbr> (+254) {{$tenant->Phone_Number}}
                                              </address>
                                        </div>
                                        <div class="pull-right m-t-30">
                                            <p><strong>Entrance Date: </strong> {{$tenant->created_at}}</p>
                                            <p class="m-t-10"><strong>House Number: </strong> <span class="label label-warning">{{$tenant->House_No}}</span></p>
                                            <p class="m-t-10"><strong>House Amount: </strong> Ksh 8,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-h-50"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table m-t-30">
                                                <thead>
                                                    <tr><th>#</th>
                                                    <th>Payment Date</th>
                                                    <th>M-pesa Code</th>
                                                    <th>Amount Paid</th>
                                                    <th>Status</th>
                                                    
                                                </tr></thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>LCD</td>
                                                        <td>Lorem ipsum dolor sit amet.</td>
                                                        <td>Ksh 8,000</td>
                                                        <td><span class="label label-success">Paid</span></td>
                                                        
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="row" style="border-radius: 0px;">
                                    <div class="col-md-3 col-md-offset-9">
                                        <p class="text-right"><b>Sub-total:</b> 2930.00</p>
                                        <p class="text-right">Discout: 12.9%</p>
                                        <p class="text-right">VAT: 12.9%</p>
                                        <hr>
                                        <h3 class="text-right">USD 2930.00</h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="hidden-print">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-inverse"><i class="fa fa-print"></i></a>
                                        <a href="#" class="btn btn-primary">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
           @include('admin.footer')            <!-- Footer Ends -->


        </section>
        <!-- Main Content Ends -->


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>


        <script src="js/jquery.app.js"></script>


    </body>

<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:23:00 GMT -->
</html>
