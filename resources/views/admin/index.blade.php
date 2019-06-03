<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:13:33 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="img/favicon_1.ico">

        <title>My Project One</title>

        <!-- Bootstrap core CSS -->
       @include('admin.cascading')
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
        @include('admin.sidebar')
        <section class="content">
            @include('admin.header')
            <div class="wraper container-fluid">  
              <div class="row">
                  
                 <div class="page-title"> 
                    <h3 class="title">Tenants Dashboard</h3> 
                   
                </div>
                       

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <a href="{{ url('/tenantsForm')}}"><button type="button" class="btn btn-success m-b-5"><i class="fa fa-plus m-r-5"></i> New Tenant</button></a>
                                  <a href="{{ url('/houseform')}}"><button type="button" class="btn btn-primary m-b-5"><i class="fa fa-plus m-r-5"></i>  House Details</button></a>
                                   
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>National ID</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Gender</th>
                                                    <th>Phone Number</th>
                                                    <th>House Number</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                     
                                            <tbody>
                                                @foreach($tenants as $tenant)
                                               <tr>
                                                    <td>{{$tenant->ID_NO}}</td>
                                                    <td>{{$tenant->Firstname}}</td>
                                                    <td>{{$tenant->Lastname}}</td>
                                                    <td>{{$tenant->Gender}}</td>
                                                    <td>{{$tenant->Phone_Number}}</td>
                                                    <td>{{$tenant->House_No}}</td>
                                                    <td>
                                                    <a href='{{url("/showtenant")}}'><button class="btn btn-icon btn-primary m-b-5"> <i class="fa fa-pencil"></i> Edit</button></a> 
                                                   <a href='{{url("/showtenant/$tenant->ID_NO")}}'> <button class="btn btn-icon btn-success m-b-5"> <i class="ion-eye"></i> View</button> </a>
                                                    <button class="btn btn-icon btn-danger m-b-5"> <i class="fa fa-remove"></i> Delete</button> 
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.footer')
        </section>
        
        @include('admin.javascripts')
         <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

    </body>
</html>
