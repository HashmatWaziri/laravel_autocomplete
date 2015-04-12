
 <!doctype html>

<html>
		<head>
			
<link href="{{ URL::asset('css/font-awesome.css') }}" type="text/css" rel="stylesheet" />
                <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" type="text/css" />
                
                        
				
				
							
				
		</head>

		<body>
 
 
        
 <div class="game_description">
                    {{ Form::open(array('url' => 'download')) }}
                    {{ Form::submit('Download', array('class'=> 'btn btn-primary', 'role'=>'button')) }}
                    {{ Form::close() }}</div>
           
           
                  
           
          </body>
</html>