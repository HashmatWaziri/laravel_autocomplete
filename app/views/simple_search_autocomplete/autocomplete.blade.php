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
z-index:10000;
}
</style>



</head>





<body>
 
 
 
<h2>Laravel Autocomplete form Database data</h2>
<?= Form::open() ?>

<?= Form::label('auto', 'Find a color: ') ?>
<?= Form::text('auto', '', array('id' => 'auto'))
?>
{{form::submit('Search', array('class' => 'button expand'))}}
<br>



<?= Form::close() ?>


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




       {{ Input::get('auto') }}
       
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

<script type="text/javascript">
$(function(){

$("#auto").autocomplete({
source:"{{URL('getdata')}}",
minLength: 3
//delay:0,
//   select: function( event, ui){
//$('#auto').val(ui.item.id);
//
//}
});
$("#auto").autocomplete("widget").height(200);
 });
</script>
</body>
</html>