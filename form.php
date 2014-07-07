<!doctype html>
<html>
<head>    
	<meta charset="UTF-8">    
	<title>Интернет-магазин</title>    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="call.js" type="text/javascript"></script>
</head>
	
<body>
<form role="form" action="" method="post" accept-charset="utf-8" class="form-horizontalthere" id="formcastIM" style="width: 250px; margin: 0 auto;" >
	<fieldset>
		<div class="form-group input-group-lg" style="width: 100%; margin-left: 0px;">
			<input class="form-control" placeholder="Имя" name="name" type="text" id="form_name"  required style="width: 100%;">
		</div>
		<div class="form-group input-group-lg" style="width: 100%; margin-left: 0px;">
			<input class="form-control" placeholder="Телефон" name="phone" type="text"  id="form_phone" required style="width: 100%;">
		</div>
		<div class="form-group input-group-lg" style="width: 100%; margin-left: 0px;">
			<input class="form-control" placeholder="Email" name="email" type="email"  id="form_email" required style="width: 100%;">
		</div>
		<div class="form-group input-group-lg" style="margin-top: 10px;" style="width: 100%; margin-left: 0px;">
			<p style="text-align: center;"><span class="pricely-button"><button id="order_email" type="submit" name="submit" class="bottom">Заказать</button></span></p>                                        
		</div>
		<p style="text-align: center;"><span id="castclose" style="border-bottom: 1px dashed #dfdfdf; color: black; ">Закрыть</span></p>
	</fieldset>
</form>
</body>
</html>