<!doctype html>


<html>
    <head>
      
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
       <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" type="text/css" />
                   
    </head>
    <body>
        
     
     
     
     
     
      <div class="page-header">
     <div class="container-fluid">
     <div class="row">
                                        <div class="col-xs-2">
                                            <br>
                                            <br>
                                   
                                            <a class="btn btn-large btn-danger" href="index">
                                                <i class="icon-home icon-4x pull-left"></i></a>
                                        </div>
                                            <div class="col-xs-10 ">
                                                <br>
                                                <br>
<!--                                         <form method="Post" action="UserInput.php" id="search_button" >
                                             <input type="search" placeholder="search..." name="search_box" required>
                                                 <input type="button" value="Search">
                                         </form>-->
                                                
                                                {{ Form::open(array('url'=>'/Games/game_info/search')) }}
                                                {{Form::text('keyword', null, array('placeholder'=>'search by game name','required' => 'required','autofocus' => 'autofocus'))}}
                                                
                                                
                                                {{ Form::submit('search', array('class' => 'btn btn-xs btn-simple'))}}
                                                {{Form::close()}}
                                                @if ($errors->has('keyword'))
                                                <p >{{ $errors->first('keyword')}}</p>
                                                @endif
                                                </div>
       
     
     
     
     
     </div>
     </div>
    </div>
     
     <!--No result found-->
     
     
     
     
     
     
     <div class="container-fluid">
						<div class="row">
								 <div class="col-xs-12">
                    <ul class="nav nav-tabs nav-justified">
                        <li role="presentation"><a href="{{ URL::to('index') }} ">Home</a></li>
                        <li role="presentation" ><a href="{{URL::to('top_games')}}">Top Games</a></li>
                        <li role="presentation" ><a href="{{ URL::to('Newest') }}">Newest</a></li>
                        <li role="presentation"><a href="{{ URL::to('all_games') }}">All Games</a></li>
                    </ul>
                    
                </div>
						</div>
				
			 </div>
     
     
     
     
     <br>
     <br>
     <br>
     
     <section>
      <div class="container-fluid">
       <div class="row">
        <div class="col-xs-12">
         <div class="well well-sm">
          <div class="blockquote" ><span style="color: white">Search Results</span></div>
         </div>
        </div>
       </div>
      </div>
     </section>
     
     <div class="row" id="no_result">
      <div class="col-xs-12">
      
                                                
                                                
                                                @if($counts == 0)
             <div class="alert alert-warning" role="alert">
             {{ 'No results' }}
             </div>
              
             @endif
             </div>         
      </div>
     
     
     
     
             <div class="container-fluid">
              <!--{{$keyword = Input::get('keyword')}}-->
               <div class="caption">
              
                  @foreach(array_chunk($game_descriptions->all(), 2) as $row)
                  
                  
                   <div class="thumbnail">
                  <div class="row">
                   
                   @foreach ($row as $item)
                   <!--<div class="thumbnail">-->
                   <div class="col-xs-6">
                    <hr id="content_seperator">
                    <strong id="game_name col-xs-12">{{$item->Name}}</strong> 
                    <div>{{$item->image_1}}</div>
                           
                           
                           <br>
                           <strong>Game Code: </strong>{{$item->code}}
                           <br>
                           <strong>RM: </strong>{{$item->price}}
                           
                           <p><a href="/game_info/{{ $item->Name }}" class="btn btn-primary" role="button">More Details</a></p>
                        
                      </div> 
                   @endforeach
                   </div>
                    </div>
                   @endforeach
                   <div class="col-xs-12 ">
                   {{ $game_descriptions->links()}}
                   </div>
        
        
        
        
        </div>
             </div>
        
        
        
     <br>
     <br>
        
        
 








        


                                                
                                                
                                               
                    
                    
                                 
                               
                                                    
       
                                             

<!--{{ Form::text('price', $value = null, array('placeholder' => 'GAME PRICE', 'class'=> 'form-control',  'autofocus' => 'autofocus' )) }}

@if ($errors->has('price'))
<p style="color:red;">{{ $errors->first('price')}}</p>
@endif



{{ Form::submit('Download', array('class' => 'btn btn-lg btn-primary btn-block')) }}
{{ Form::close() }} 
<br>

        @include ('_partials.errors')-->
        
<!--@if(Session::has('customMessage'))
<br>
<div class="panel panel-body panel-warning"><h3 class="error"> {{ Session::get('customMessage')}} </h3></div>
	@endif 
        
































    </body>
    
</html>

