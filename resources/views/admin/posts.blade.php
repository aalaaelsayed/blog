<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')


<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="{{ Route ('index') }}" class="site_title"><i class="fa fa-car"></i> <span>Blog Admin</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					@include('admin.includes.profile')


					<br />

							<!-- sidebar menu -->
			
							@include('admin.includes.sidebar')

							<!-- /menu footer buttons -->
							@include('admin.includes.buttons')
				</div>
			</div>

			<!-- top navigation -->
			@include('admin.includes.topNavigation')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Posts</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Posts</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Content</th>
                          <th>Active</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>


                      <tbody>
                      @foreach($Posts as $post)

                        <tr>
                          <td>{{ $post->title }}</td>
                          <td>{{ $post->content }}</td>
                          <td>@if($post->active)yes @else no @endif</td>
                          <td> <a  href="editpost/{{ $post->id }}"><img src="{{asset('assets/admin/images/edit.png')}}" alt="Edit"> </a></td>
                          <td><a  href="deletePost/{{ $post->id }}"><img src="{{asset('assets/admin/images/delete.png')}}" alt="Delete"></a></td>
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
          </div>
        </div>
        <!-- /page content -->
        @include('admin.includes.footer')

			
</body></html>