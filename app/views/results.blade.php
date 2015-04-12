<!doctype html>


<html>
    <head>
     
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
     <link href="{{ URL::asset('css/jquery-ui.min.css') }}" type="text/css" rel="stylesheet">
        <!--<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />-->
       <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" type="text/css" >
       
 <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-ui.min.js')}}"></script>
      
                   
    </head>
    <body>
     
     
     
     {{ $word = Input::get('keyword') }}
     {{ Form::open(array('url' => '/results', 'method' => 'get')) }}
    {{ Form::text('words', '', array('id' =>  'words', 'placeholder' =>  'Enter a word'))}}
    {{ Form::submit('Search', array('class' => 'button expand')) }}
{{ Form::close() }}


     <hr class="first_line">
     
     <div class="container-fluid">
     <!--No result found-->
     <div class="row">
      <div class="col-xs-6 col-xs-push-2">
      
                                                
                                                
                                                @if($counts == 0)
             <div class="alert alert-warning" role="alert">
             {{ 'No results' }}
             </div>
              
            
             </div>         
      </div>
      @else




       {{ Input::get('keyword') }}
       
       @foreach (array_chunk($contents->all(), 3) as $row)
       <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       
       
                   @foreach ($row as $item)
                   <!--<div class="thumbnail">-->
                   
                 
                     <div class="panel panel-default">

        <div class="panel-heading"><strong>{{$item->wordtype}} </strong></div>
       
                      
                      
                   
                    
        <p>{{$item->definition}}</p> 
    </div>
   
   

                   
               
                      @endforeach
      </div></div>
                      @endforeach
                   </div>       
    @endif
                     
                    
                  
    
 
     <div id="footer">
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-12 text-center'>
                        <h4><strong>CloudDueling.com</strong> - "Where Creativity, Technology, & Gamification Collide"</h4>
                    </div>
                </div>

                <hr>

                <div class='row'>
                    <div class='col-sm-2 col-sm-offset-1'>
                        <dl>
                            <dt>About</dt>
                            <dd>Team</dd>
                            <dd>Community</dd>
                            <dd>Partnerships</dd>
                            <dd>Developers</dd>
                        </dl>
                    </div>
                    <div class='col-sm-2'>
                        <dl>
                            <dt>Features</dt>
                            <dd>Digital Manuals</dd>
                            <dd>Social/Community</dd>
                            <dd>Templates</dd>
                            <dd>Supplies</dd>
                            <dd>Automated Messages</dd>
                            <dd>List Building</dd>
                            <dd>Enterprise</dd>
                        </dl>
                    </div>
                    <div class='col-sm-2'>
                        <dl>
                            <dt>Industries</dt>
                            <dd>Healthcare</dd>
                            <dd>Living Green</dd>
                            <dd>Real Estate</dd>
                            <dd>Financial</dd>
                            <dd>Law</dd>
                            <dd>Non-Profits</dd>
                        </dl>
                    </div>
                    <div class='col-sm-2'>
                        <dl>
                            <dt>Follow Us</dt>
                            <dd>Facebook</dd>
                            <dd>Google+</dd>
                            <dd>Twitter</dd>
                            <dd>LinkedIn</dd>
                        </dl>
                    </div>
                    <div class='col-sm-2'>
                        <dl>
                            <dt>Help</dt>
                            <dd>Questions</dd>
                            <dd>Contact</dd>
                            <dd>Marketplace</dd>
                            <dd>Report Bugs</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    
    
    
    

    
  
  
  
   <script type="text/javascript">
    
    
            //    1st try
            //    
            //    
            //    
            //    
//     $(document).ready(function(){
//       
//       var cache = {};
//     $("#words").autocomplete({
//          minLength: 3,
//          source: function( request, response ) {
//					 var term = request.term;
//                          if ( term in cache ) {
//          response( cache[ term ] );
//          return;
//        }
//					$.getJSON( "/results", request. function( data, status, xhr ) {
//						cache[term] = data;
//                              response(data);
//					});
//                        }
//                        });
//    });
//    
    
    
    
    
//                    2nd try
                   
                   
//$(function() {
//    var cache = {};
//    $( "#words" ).autocomplete({
//      minLength: 2,
//      source: function( request, response ) {
//        var term = request.term;
//        if ( term in cache ) {
//          response( cache[ term ] );
//          return;
//        }
// 
//        $.getJSON("app_path('views/results')", request, function( data, status, xhr ) {
//          cache[ term ] = data;
//          response( data );
//        });
//      }
//    });
//  });    
//     

   
                     //   3rd try














   $(document).ready(function() {
 
 
$('#words').autocomplete({
		      	source: function( request, response ) {
		      		$.ajax({
		      			url : '../controllers/SearchController.php',
		      			dataType: "json",
						data: {
						   name_startsWith: request.term
						  
						},
						 success: function( data ) {
							 response( $.map( data, function( item ) {
								return {
									label: item,
									value: item
								};
							}));
						}
		      		});
		      	},
		      	autoFocus: true,
		      	minLength: 2      	
		      });
   });
   
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
//    $( "#words" ).autocomplete({
//      source: function( request, response ) {
//        $.ajax({
//          url: "/results",
//          dataType: "json",
//          data: {
//            q: request.term
//          },
//          success: function( data ) {
//            response( data );
//          }
//        });
//      },
//      minLength: 3,
//      select: function( event, ui ) {
//        log( ui.item ?
//          "Selected: " + ui.item.label :
//          "Nothing selected, input was " + this.value);
//      },
//      open: function() {
//        $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
//      },
//      close: function() {
//        $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
//      }
//    });
  





   
   
   
   
   </script>
	
	
    </body>
    
</html>

