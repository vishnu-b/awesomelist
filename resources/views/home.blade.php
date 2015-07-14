<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Awesome List</title>
		<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
		<link href="/awesomelist/css/app.css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container" id="list">
			<h1 class="text-center">Awesome List</h1>
			<hr>
			<div class="row">
				<form method="POST" v-on="submit: onSubmitForm">
					<div class="form-group input-group-lg col-md-11">
						<input type="text" class="form-control" placeholder="Add New List Item" id="item" name="item" v-model="newItem.item"  required>
					</div>
					<div class="col-md-1">
						<input type="submit" class="btn btn-lg btn-default" value="Add">
					</div>
				</form>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="panel with-nav-tabs panel-success">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Pending List</h3>
							</div>
							<ul class="list-group" v-cloak>
								<li class="list-group-item" v-repeat="item: items | inComplete">
									<label>@{{ item.item }}</label>
									<button class="delete"
													v-on="click: deleteItem(item)"\
													data-toggle="tooltip"
													data-placement="top"
													title="Delete item"
									>
										<i class="fa fa-trash-o"></i>
									</button>
									<button class="complete"
													v-on="click: completeItem(item)"
													data-toggle="tooltip"
													data-placement="top"
													title="Mark item as complted"
									>
										<i class="fa fa-check"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel with-nav-tabs panel-success">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Completed List</h3>
							</div>
							<ul class="list-group">
								<li class="list-group-item" v-repeat="item: items | complete">
									<label>@{{ item.item }}</label>
									<button class="delete"
													v-on="click: deleteItem(item)"\
													data-toggle="tooltip"
													data-placement="top"
													title="Delete item"
									>
										<i class="fa fa-trash-o"></i>
									</button>
									<button class="undo"
													v-on="click: moveToInComplete(item)"
													data-toggle="tooltip"
													data-placement="top"
													title="Move to pending list!"
									>
										<i class="fa fa-undo"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="/awesomelist/js/app.js"></script>
		<script src="/awesomelist/js/list.js"></script>
	</body>
</html>
