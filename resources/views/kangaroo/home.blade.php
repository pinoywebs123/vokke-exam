<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mega Able bootstrap admin template by codedthemes </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="{{URL::to('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{URL::to('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{URL::to('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/icon/themify-icons/themify-icons.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/icon/font-awesome/css/font-awesome.min.css')}}">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/jquery.mCustomScrollbar.css')}}">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/jquery.mCustomScrollbar.css')}}">

       <!-- DevExtreme theme -->
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/23.1.4/css/dx.light.css">
      
  </head>
  <body>
    <!-- Pre-loader start -->
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
            
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>{{Auth::user()->name}}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    
                                    <li class="waves-effect waves-light">
                                        <a href="{{route('logout')}}">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            
                            <div class="p-15 p-b-0">
                               
                            </div>
                            
                            
                            <div class="pcoded-navigation-label" data-i18n="nav.category.forms">MENUS</div>
                            <ul class="pcoded-item pcoded-left-item">
                               
                                <li class="active">
                                    <a href="{{route('home')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Home</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                    
                            </ul>
                    
                           
                    
                            
                        </div>
                    </nav>
                     <div class="pcoded-content">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New Kangaroo</button>
                      <div id="gridContainer"></div>
                     </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Kangaroo Informations</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
           <form id="KangarooForm">

            <div class="form-group">
              <label for="email">Name:</label>
              <input type="text" class="form-control"  id="name" required maxlength="30">
            </div>

            <div class="form-group">
              <label for="email">Nickname:</label>
              <input type="text" class="form-control"  id="nickname" max="30">
            </div>

            <div class="form-group">
              <label for="email">Weight grams:</label>
              <input type="number" class="form-control"  id="weight" step="0.1" required>
            </div>

            <div class="form-group">
              <label for="email">Height inch:</label>
              <input type="number" class="form-control"  id="height" step="0.1" required>
            </div>

            <div class="form-group">
              <label for="email">Gender:</label>
              <select class="form-control" id="gender" required>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
              </select>
            </div>

            <div class="form-group">
              <label for="email">Color:</label>
              <input type="text" class="form-control"  id="color" max="30">
            </div>

            <div class="form-group">
              <label for="email">Friendliness:</label>
              <select class="form-control" id="friendliness" required>
                <option value="friendly">friendly</option>
                <option value="independent">independent</option>
              </select>
            </div>

            <div class="form-group">
              <label for="email">Birthday:</label>
              <input type="date" class="form-control"  id="dob" max="30">
            </div>
            
            
          </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

    <div class="modal" id="editModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Edit Kangaroo Informations</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
           <form id="KangarooForm">

            <div class="form-group">
              <label for="email">Name:</label>
              <input type="text" class="form-control"  id="editname" required maxlength="30">
            </div>

            <div class="form-group">
              <label for="email">Nickname:</label>
              <input type="text" class="form-control"  id="editnickname" max="30">
            </div>

            <div class="form-group">
              <label for="email">Weight grams:</label>
              <input type="number" class="form-control"  id="editweight" step="0.1" required>
            </div>

            <div class="form-group">
              <label for="email">Height inch:</label>
              <input type="number" class="form-control"  id="editheight" step="0.1" required>
            </div>

            <div class="form-group">
              <label for="email">Gender:</label>
              <select class="form-control" id="editgender" required>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
              </select>
            </div>

            <div class="form-group">
              <label for="email">Color:</label>
              <input type="text" class="form-control"  id="editcolor" max="30">
            </div>

            <div class="form-group">
              <label for="email">Friendliness:</label>
              <select class="form-control" id="editfriendliness" required>
                <option value="friendly">friendly</option>
                <option value="independent">independent</option>
              </select>
            </div>

            <div class="form-group">
              <label for="email">Birthday:</label>
              <input type="date" class="form-control"  id="editdob" max="30">
            </div>
            
            
          </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{URL::to('assets/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/pages/widget/excanvas.js')}}"></script>
   <script src="{{URL::to('assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{URL::to('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{URL::to('assets/js/modernizr/modernizr.js')}}"></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{URL::to('assets/js/SmoothScroll.js')}}"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Custom js -->
    <script src="{{URL::to('assets/js/pcoded.min.js')}}"></script>
    <script src="{{URL::to('assets/js/vertical-layout.min.js')}} "></script>
    <script src="{{URL::to('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/js/script.js')}}"></script>
  
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
    <!-- DevExtreme library -->
    <script type="text/javascript" src="https://cdn3.devexpress.com/jslib/23.1.4/js/dx.all.js"></script>


    <script type="text/javascript">
      $(document).ready(function(){
        var token = '{{Session::token()}}';
        var url = '{{route('new_kangaroo')}}';
       

        const customers = [
        @foreach($kangaroos as $kang)
        {
          ID: {{$kang->id}},
          Name: '{{$kang->name}}',
          Weight: '{{$kang->weight}}',
          Height: '{{$kang->height}}',
          Gender: '{{$kang->gender}}',
          Friendliness: '{{$kang->friendliness}}',
          Birthday: '{{$kang->dob}}'
          
        },
        @endforeach

      ];

        $('#gridContainer').dxDataGrid({
          dataSource: customers,
          keyExpr: 'ID',
          columns: ['ID','Name', 'Weight', 'Height', 'Gender', 'Friendliness','Birthday'],
          showBorders: true,
        });

        $("#gridContainer").dxDataGrid({
          // ...
          editing: {},
          onRowClick: function(e) {
              console.log(e.values[0]);
              window.location.replace("{{url('get-kangaroo')}}/"+e.values[0]);

          }
      });


       
        $("#submitBtn").click(function(){
          
          $.ajax({
            url: url,
            type: 'POST',
            data: {
              name: $('#name').val(),
              nickname: $('#editnickname').val(),
              weight: $('#editweight').val(),
              height: $('#editheight').val(),
              gender: $('#editgender').val(),
              color: $('#editcolor').val(),
              friendliness: $('#editfriendliness').val(),
              dob: $('#editdob').val(),
              _token: token
             },
           success: function(result){
             console.log(result);
           }});
   
        });

      });

      


    </script>
</body>


</html>
