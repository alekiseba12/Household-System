<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:19:52 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/favicon_1.ico">

        <title>My Project</title>

        


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
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="index.html" class="logo-expanded">
                    <i class="ion-social-buffer"></i>
                    <span class="nav-label">Velonic</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
          @include('admin.navigation')
                
        </aside>
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
                    <h3 class="title">Payment Dashboard</h3> 
                </div>
                
                <div class="row">
                
                      <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Payments Entry Form</h3></div>
                            <div class="panel-body">
                                <form role="form" action="{{url('/addpayment')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Tenant ID">Tenant ID</label>
                                        <input type="text" class="form-control" id="user id" placeholder="Tenant ID" name="User_id" required>
                                    </div>
                                     <div class="form-group">
                                        <label for="M-Pesa code">M-Pesa Code</label>
                                        <input type="text" class="form-control" id="mpesa" placeholder="M-Pesa Code" name="Mpesa_code" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Payment Amount">Payment Amount</label>
                                        <input type="text" class="form-control" id="house amount" placeholder="Payment Amount" name="Amount" required>
                                    </div>
                                   
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col-->
                    
                     <div class="col-md-6">
                        <div class="panel panel-color panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">House Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-striped">
                                            <thead>

                                                   
                                                    <th>Tenant ID</th>
                                                    <th>M-Pesa Code</th>
                                                    <th>Amount</th>
                                                    <th>Payment Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @foreach($payments->all() as $payment)
                                                <tr>
                                                <tr>
                                                    
                                                    <td>{{$payment->User_id}}</td>
                                                    <td>{{$payment->Mpesa_code}}</td>
                                                    <td>{{$payment->Amount}}</td>
                                                    <td>{{$payment->created_at}}</td>
                                                </tr>
                                                
                                                @endforeach
                                                      
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- col -->
                    <!-- Horizontal form -->
              

                </div> <!-- End row -->

            </div>
            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            @include('admin.footer')
            <!-- Footer Ends -->



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

<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:19:52 GMT -->
</html>
