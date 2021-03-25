<!DOCTYPE html>
<html>
<head>
	<title>List User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid" style="margin: 0 auto;">
		<div class="row justify-content-md-center mt-5">
			<div class="card">
				<div class="card-header">
					User List
					<div class="float-right">
						<a href="{{route('import-user')}}" class="btn btn-primary pr-3"> Import</a>
						<a href="{{route('export-user')}}" class="btn btn-success"> Export</a>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Name</th>
					      <th scope="col">Email</th>
					      <th scope="col">Verified</th>
					      <th scope="col">Created</th>
					      <th scope="col">Updated</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($users as $user)
						    <tr>
						      <th scope="row">{{$user->id}}</th>
						      <td>{{$user->name}}</td>
						      <td>{{$user->email}}</td>
						      <td>{{$user->email_verified_at}}</td>
						      <td>{{$user->created_at}}</td>
						      <td>{{$user->updated_at}}</td>
						    </tr>
					    @endforeach
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>