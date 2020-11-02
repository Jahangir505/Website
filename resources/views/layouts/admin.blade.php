<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="{{asset('contents/admin')}}/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('contents/admin')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/sweetalert.min.js"></script>
  </head>
  <body class="app sidebar-mini rtl">
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{url('admin')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        @if(Auth::user()->role_id==1)
        <li><a class="app-menu__item" href="{{url('admin/user')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">User</span></a></li>
        @endif
        <li><a class="app-menu__item" href="{{url('admin/banner')}}"><i class="app-menu__icon fa fa-image"></i><span class="app-menu__label">Banner</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Manage Website</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Basic Information</a></li>
            <li><a class="treeview-item" href="{{url('admin/manage/social')}}" rel="noopener"><i class="icon fa fa-circle-o"></i> Social Media</a></li>
            <li><a class="treeview-item" href="#" rel="noopener"><i class="icon fa fa-circle-o"></i> Page Contents</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Contact Information</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Contact Address</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="{{url('admin/contactus')}}"><i class="app-menu__icon fa fa-comments"></i><span class="app-menu__label">Contact Message</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-recycle"></i><span class="app-menu__label">Recycle</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{url('admin/recycle/banner')}}"><i class="icon fa fa-circle-o"></i> Banner</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="{{url('/')}}" target="_blank"><i class="app-menu__icon fa fa-globe"></i><span class="app-menu__label">Live Site</span></a></li>
        <li><a class="app-menu__item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Logout</span></a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </ul>
    </aside>
    @yield('content')
    <script src="{{asset('contents/admin')}}/js/popper.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/main.js"></script>
    <script src="{{asset('contents/admin')}}/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="{{asset('contents/admin')}}/js/plugins/chart.js"></script>
    <script type="text/javascript" src="{{asset('contents/admin')}}/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{asset('contents/admin')}}/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable();
    </script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]

      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);

      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <script>
      $(document).ready(function(){
        $(document).on('click','#softDelete',function(){
            var deleteID= $(this).data('id');
            $('.modal-body #modal_id').val(deleteID);
        })
      })
    </script>
  </body>
</html>
