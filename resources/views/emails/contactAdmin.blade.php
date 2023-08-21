<!DOCTYPE html>
<html>
<head>
	<title>Prise de contact</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 m-auto">
				<h1>Prise de contact sur Laravelpower</h1>
				<p>Reception d'une prise de contact avec les éléments suivants:</p>
				<ul>
					<li><strong>Nom</strong> : {{$_POST['name']  }}</li>
					<li><strong>Email</strong> : {{$_POST['email']  }}</li>
					<li><strong>Message</strong> : {{$_POST['message']  }}</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>

