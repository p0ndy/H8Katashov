<!DOCTYPE html>
<html>
	<head>
        
		
        <link rel="stylesheet" href="/public/css/style.css">
        
	</head>
	<body>
		
    
       

		@if (is_array($b['products'][$Pid] ))
					{{$b['products'][$Pid]['name']}}
					{{$b['products'][$Pid]['cost']}}
					@if ($b['products'][$Pid]['inStock'] == 1)
					В наличии
					@else
					Нету
					{{$b['products'][$Pid]['desc']}}
					@endif
					@endif


		

	</body>
</html>


