<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('dash-layouts.stylecss')
  <title>Charitify || Fundraising NGO</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
  @include('dash-layouts.topnavbar')
 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @include('dash-layouts.sidebartoptext')

    <!-- Sidebar -->
    @include('dash-layouts.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Breadcrumbs -->
    @include('dash-layouts.breadcrumb')
    <!-- /.Breadcrumbs -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        
        <!-- /.row -->

        

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <section class="content">
      <div class="row">
        <div class="col-12">
    <div class="card">
            <div class="card-header">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if ($show_all_unread_messages->currentPage() > 1)
                  @php($i =  1 + (($show_all_unread_messages->currentPage() - 1) * $show_all_unread_messages->perPage()))
                  @else
                  @php($i = 1)
                  @endif
                  @foreach ($show_all_unread_messages as $mes)
                  <tr>
                      <th class="th-sm">{{ $i++ }}</th>
                      <th class="th-sm">{{ $mes->name }}</th>
                      <th class="th-sm">{{ $mes->email }}</th>
                      <th class="th-sm">{{ $mes->message}}</th>
                      <th class="th-sm"> 
                      <a href="/mark-as-read/{{$mes->id}}" type="submit" class="mr-2"><i class="icon fas fa-check" title="mark as read"></i></a>
                      </th>
                  </tr>
                  @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
          </div>
          </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('dash-layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('dash-layouts.javascript')
</body>
</html>
