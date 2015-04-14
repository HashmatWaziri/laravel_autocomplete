<!DOCTYPE html>
<html>
<head>
<title>Laravel Autocomplete</title>
<meta charset="utf-8">
<link href="{{URL::asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" >
<link rel="stylesheet" href="//codeorigin.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>


<style>
.ui-autocomplete{

    z-index: 1000;
 
 
 
 
 background: #ff8a00;
    border: none;
    color:#000;
    border-radius:0;
    font-weight: normal;
}

#auto:hover {
 
 background: white;
}
#auto:active {
 box-shadow: 0 0 30px #96f226;
 
 
}
#auto:focus {
  box-shadow: 0 0 30px #96f226;
}

.ui-autocomplete {
    background: #4a4a4a;
    border-radius: 0px;
}
.ui-autocomplete.source:hover {
    background: #454545;
}

.ui-menu .ui-menu-item a{
    background: white;
    height: 200px;
font-size:12px;
}
.ui-menu .ui-menu-item a:hover {
 
 
 background: #D2E0E6
  
}
.ui-menu .ui-menu-item a:active {
 
 
 background: #D2E0E6
  
}
.ui-menu .ui-menu-item a:focus{
 
 
 background: #D2E0E6
  
}



</style>



</head>

<body>
 
 
 
<h2>Laravel Autocomplete form Database data</h2>
{{ Form::open() }}
   {{ Form::text('auto', '', array('id' => 'auto'))
   }}
{{form::submit('Search', array('class' => 'button expand'))}}
   {{ Form::close() }}


  




       
       
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
   

<script type="text/javascript">
$(document).ready(function () {

$("#auto").autocomplete({
                      
                        source:'{{URL('getdata')}}',
                        minLength:2,
                        delay: 50,
                        autoFocus: true
                     
                    });
                    
         


// var cache = {};
//    $( "#auto" ).autocomplete({
//     autoFocus: true,
//     delay: 50,
//      minLength: 1,
//      
//      source: function( request, response ) {
//        var term = request.term;
//        if ( term in cache ) {
//          response( cache[ term ] );
//          return;
//        }
// 
//        $.getJSON( "{{URL('getdata')}}", request, function( data, status, xhr ) {
//          cache[ term ] = data;
//          response( data );
//         
//        });
//      }
//    });







//$("#auto").autocomplete({
//source:"{{URL('getdata')}}",
//minLength: 3,
// select: function( event, ui ) {
//        log( ui.item ?
//          "Selected: " + ui.item.value + " aka " + ui.item.id :
//          "Nothing selected, input was " + this.value );
//      }
//});
//$("#auto").autocomplete("widget").height(200);
 });
</script>
</body>
</html>