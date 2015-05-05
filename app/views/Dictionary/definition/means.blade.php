<!DOCTYPE html>
<html>

<title>Laravel Autocomplete</title>
<meta charset="utf-8">
<link href="{{URL::asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" >
<link href="{{URL::asset('css/style.css')}}" type="text/css" rel="stylesheet" >
<link rel="stylesheet" href="//codeorigin.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="{{URL::asset('js/modernizr.js')}}"></script> <!-- Modernizr -->

<body>
 
 <div class="page-header" id="page-header">
<nav class="navbar navbar-default">
 <div class="container-fluid">
  
  <!-- Navigation Menu  -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background: #00bdf2;">
 

<!--  1: create a text field to accept user input that will be used for autocmplete script -->

 {{ Form::open(array('url' => 'words/means/', 'class' => 'navbar-form navbar-left', 'method' => 'POST')) }}
 {{ Form::text('auto',$value = null, array('placeholder' => 'Please type a word or phrase', 'id' => 'auto', 'class' => 'form-control')) }}
 {{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
 {{ Form::close() }}
 


 <ul class="nav navbar-nav">
      <li class="active" id="dictionary"><a href="{{ URL::to('/index') }}">Dictionary<span class="sr-only">(current)</span></a></li>
      <li id="synonyms"><a href="{{ URL::to('/thesaurus') }}" >Synonyms</a></li>
        <li class="dropdown" id="grammar">
         <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Grammar<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        <li class="dropdown" id="explore">
         <a href="../explore/explore.blade.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" 
         id="explore">Explore<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        </li>
      </ul>  
   
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

 <div class="cd-pricing-container cd-full-width cd-secondary-theme">
		<ul class="cd-pricing-list cd-bounce-invert">
			
               <li class="cd-popular">
				<ul class="cd-pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="cd-pricing-header">
              <h>
                <i>
                {{Input::get('auto')}}
              </i>
            </h>
            <h>Pronunciation: /jeer/&nbsp; <span class="glyphicon glyphicon-volume-up" aria-hidden="false"></span></h>
            <hr>
            <h1>Definition of {{Input::get('auto')}} in English:</h1>
            <hr>
            @foreach (array_chunk($contents->all(), 3) as $row)
             @foreach ($row as $item)
            <hr>
<li>{{$item->definition}}<li>
 </ol>

  @endforeach
  @endforeach


</header>
</li>
</ul>
</li>
</ul>
</div>       
         
   
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>                   
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>





<!-- 2: autocomplete script sends POST request to the source(getdata route) using word termin the query string -->

<script type="text/javascript"> 
 $(document).ready(function () {
  $('input:text').bind({

  });

  $("#auto").autocomplete({
 minLength:3,
 autoFocus: true,
 source: '{{URL('getdata')}}'
});
});


</script>
</body>
</html>