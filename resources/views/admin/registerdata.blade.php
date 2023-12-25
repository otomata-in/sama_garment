@extends('layouts.admin')

@section('content')

<div class="db-breadcrumb">
	<h4 class="breadcrumb-title"></h4>
	<ul class="db-breadcrumb-list">
		<li><a href="#"><i class="fa fa-home"></i>Admin</a>
		<li>Registration</li>
		<li>Inbox</li>
	</ul>
</div>
<div class="row">
	<!-- Your Profile Views Chart -->
	<div class="col-lg-12 m-b30">
		<div class="widget-box">
			<div class="email-wrapper">
				
				<!-- <div class="email-menu-bar">

					<div class="email-menu-bar-inner">
						<ul>
							<li class="active"><a href="mailbox.html"><i class="fa fa-envelope-o"></i>Inbox <span class="badge badge-success">8</span></a></li>
							<li><a href="mailbox.html"><i class="fa fa-trash-o"></i>Trash</a></li>
						</ul>
					</div>
				</div> -->
				<div class="mail-list-container">
					<div class="mail-toolbar">

					<a href="/admin/registration/export" class="btn btn-success">Excel <i class="fa fa-download"></i></a>


						<div class="next-prev-btn">
							@if ($datas->hasMorePages())
							<a href="{{$datas->previousPageUrl()}}"><i class="fa fa-angle-left"></i></a>
							<a href="{{$datas->nextPageUrl()}}"><i class="fa fa-angle-right"></i></a>
							@endif
						</div>
					</div>
					<div class="mail-box-list">

						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Name</th>
									<th scope="col">Email</th>
									<th scope="col">Phone</th>
									<th scope="col">Message</th>
									<th scope="col">Date</th>
									<!-- <th scope="col"></th> -->
								</tr>
							</thead>
							<tbody>
								@foreach ($datas as $d)
								<tr>
									<th scope="row">{{ $loop->iteration + $datas->firstItem() - 1 }}</th>
									<td>{{$d->r_name}}</td>
									<td>{{$d->r_email}}</td>
									<td>{{$d->r_phone}}</td>
									<td>{{$d->r_message}}</td>
									<td>{{date('d-m-Y h:i:s A', strtotime($d->created_at))}}</td>
									<!-- <td>
										<li data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></li>
									</td> -->
								</tr>
								@endforeach
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Your Profile Views Chart END-->
</div>



@endsection