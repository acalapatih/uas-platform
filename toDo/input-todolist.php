<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Add To Do List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
	<link rel="stylesheet" href="input-todolist.css" />
	<link rel="icon" href="../assets/teenager-icon.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
	<div class="container mt-5 mb-3">
		<div class="d-gip gap-2 col-6 mx-auto">
			<a href="todo.php" class="btn-back btn">Back</a>
		</div>
	</div>
	<div class="container">
		<div class="card w-50 mx-auto">
			<div class="card-header">
				<h5 class="card-title">Add To Do List</h5>
			</div>
			<div class="card-body">
				<form action="prosesInput_todo.php" method="POST">
					<div class="mb-3">
						<label for="description" class="form-label">Task Description</label>
						<textarea required class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Leave some descriptions for the task."></textarea>
					</div>
					<!-- <div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="status" name="status" />
						<label class="form-check-label" for="status" name="status">Done</label>
					</div> -->
					<div class="mb-3">
						<label for="deadline_title" class="form-label" name="deadline_title"">Deadline</label>
						<input name="date" type="date" class="form-control" id="deadline_title" required/>
					</div>
					<button type="submit" class="btn-submit btn">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<script>
		$(function(){
			var dtToday = new Date();
			
			var month = dtToday.getMonth() + 1;
			var day = dtToday.getDate();
			var year = dtToday.getFullYear();
			if(month < 10)
				month = '0' + month.toString();
			if(day < 10)
				day = '0' + day.toString();
			
			var maxDate = year + '-' + month + '-' + day;

			// or instead:
			// var maxDate = dtToday.toISOString().substr(0, 10);

			$('#deadline_title').attr('min', maxDate);
		});
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>