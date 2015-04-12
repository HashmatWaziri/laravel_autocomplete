

<html>
		<head>
			
<link href="{{ URL::asset('css/font-awesome.css') }}" type="text/css" rel="stylesheet" />
                <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" type="text/css" />
                        
				
				
							
				
		</head>

		<body>


@if ($errors->any())
        <div class="panel panel-warning">
    <div class="panel-heading">
        Errors
    </div>
    <div class="panel-body">
        <!-- -->
        <ul>
        {{ implode('', $errors->all('<li>:message</li>')) }}
</ul>
        @endif
    </div>
</div>

        </body>
        </html>
        