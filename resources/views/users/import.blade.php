<!DOCTYPE html>
<html>
<head>
	<title>Import User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin: 0 auto;">
		<div class="row justify-content-md-center mt-5">
			<div class="card">
				<div class="card-header">
				Import User
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						@csrf
					  <div class="form-group">
					    <input type="file" class="form-control-file" name="excelFile" id="exampleFormControlFile1">
					    @if($errors->has('excelFile'))
					    	<span class="text-danger">{{$errors->first('excelFile')}}</span>
					    @endif
					  </div>
					  <button class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>