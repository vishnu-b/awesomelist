<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Awesome List</title>
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
	            <form role="form">
                    <div class="form-group col-md-11">
                        <input type="text" class="form-control" placeholder="Add New List Item" id="item">
                    </div>
                    <div class="col-md-1">
                        <input type="button" class="btn btn-success" value="Add"/>
                	</div>
	            </form>
	        </div>

	        <div class="row">
	        	<div class="col-md-12">
	            	<div class="panel with-nav-tabs panel-success">
		                <div class="panel-heading">
	                        <ul class="nav nav-tabs">
	                            <li role="presentation" class="col-md-6 text-center active"><a href="#pending" data-toggle="tab" aria-expanded="">Pending</a></li>
	                            <li role="presentation" class="col-md-6 text-center"><a href="#completed" data-toggle="tab" aria-expanded="false">Completed</a></li>
	                        </ul>
		                </div>
		                <div class="panel-body">
		                    <div class="tab-content">
		                        <div role="tabpanel" class="tab-pane active" id="pending">
		                        	<div class="row" v-repeat="items">
		                        		<div class="col-md-12">
		                        			<input type="checkbox">@{{ item }}
		                        		</div>
		                        	</div>
		                        </div>
		                        <div role="tabpanel" class="tab-pane" id="completed">

	                		    </div>
		                    </div>
		                </div>
	            	</div>
	        	</div>
	        </div>
		</div>

		<script src="/awesomelist/js/app.js"></script>
		<script src="/awesomelist/js/list.js"></script>
	</body>
</html>
