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
                    <h3 class="title">Tenants Dashboard</h3> 
                </div>
                 @if(session()->has('response'))
               <div class=" col-md-8 alert alert-success">
                {{ session()->get('response') }}
                     </div>
                 @endif

                 @if ($errors->any())
               <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                   @endforeach
    </ul>
    </div>
@endif
                <div class="row">
                    <!-- Basic example -->
                    <div class="col-md-12">
                        <div class="panel panel-color panel-success">
                            <div class="panel-heading"><h3 class="panel-title">Manage Tenant Details</h3></div>
                            <div class="panel-body">
                                <form role="form" action="{{url('/newtenant')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="admin_no">National ID</label>
                                        <input type="text" class="form-control" id="admin_no" placeholder="National ID" name="ID_NO" required>
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="surname">First Name</label>
                                        <input type="text" class="form-control" id="surname" placeholder="First Name" name="Firstname" required="autofocus">
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="family name">Last Name</label>
                                        <input type="text" class="form-control" id="family_name" placeholder="Last Name" name="Lastname" required>
                                    </div>
                                </div>
                                
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <input type="text" class="form-control" id="gender" placeholder="Gender"  name="Gender" required>
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control" id="location" placeholder="Location" name="Location" required>
                                    </div>
                                </div>
                                
                                    <div class="form-group col-md-4">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="Address" name="Address" required>
                                  
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="date_birth">Phone Number</label>
                                        <input type="text" class="form-control" id="date_birth" placeholder="Phone Number" name="Phone_Number" required>
                                  
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="primary school">Profile Picture</label>
                                        <input type="file" class="form-control" id="Primary School" placeholder="Profile Pic" name="Profile_pic">
                                  
                                </div>
                                 <label class="col-lg-2 control-label" for="name1">House Number </label>
                                            <div class="form-group col-md-4">
                                                <select id="house" name="house_No" type="text" class="required form-control" Placeholder="Select House Number" required="required">
                                                    <option value="">Select House Number</option>
                                                    @if(count($houses)>0)
                                                    @foreach($houses->all() as $house)  
                                                    <option value="{{$house->house_No}}">{{$house->house_No}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                
                                  
                                 <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                                </form>
                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col-->
                    
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
