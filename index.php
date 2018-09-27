<html>
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<title></title>
</head>
<body>
	<div class="container">
		<div class="row"></div>
		<center><h1>Todone!</h1></center>
		<button type="button" data-target="#myModal" data-toggle="modal" class = "btn btn-success">+Add Todo</button>
		<button type="button" class = "btn-default">Sort</button>
		<div class="col-md-10 col-md-offset-1">
			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Add Todo</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label>Todo details</label>
									<input type="text" required name="task" class="form-control">
								</div>
								<input type="submit" name="send" value="send" class="btn btn-success">
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
			</div>
			<table class="table">
				<hr><br>
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Date</th>
						<th scope="col">Task</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>9-27-18</td>
						<td>Finish this app</td>
						
						<td><a href="" class="btn btn-default pull-right">Edit</a> </td>
						<td><a href="" class="btn btn-success">DONE</a></td>


					</tr>

				</tbody>
			</table>
		</div>	

	</body>
	</html>