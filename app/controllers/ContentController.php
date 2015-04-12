

//<?php
//
//
//class ContentController extends BaseController {
//
//// a functio for protecting our post request-data
//public function __construct() {
//    $this->beforeFilter('csrf', array('on'=>'post'));
//}
//
//
//
//public function createrecords(){
//
//
//    $content = new Content;
//    $content->code = 'A1092';
//    $content->sms_text = '3333';
//    $content->status = 'Available';
//    $content->description = 'the game is about the idea generation challenge';
//    $content->price = '26';
//    $content->type = 'Adventure';
//    $content->save();
//
//
//    $content = new Content;
//    $content->code = 'A1090';
//    $content->sms_text = '3333';
//    $content->status = 'Available';
//    $content->description = 'the game is about the idea generation challenge';
//    $content->price = '21';
//    $content->type = 'Adventure';
//    $content->save();
//
//
//    $content = new Content;
//    $content->code = 'A1091';
//    $content->sms_text = '3333';
//    $content->status = 'Available';
//    $content->description = 'the game is about the idea generation challenge';
//    $content->price = '24';
//    $content->type = 'Adventure';
//    $content->save();
//
//    $content = new Content;
//    $content->code = 'A1093';
//    $content->sms_text = '3333';
//    $content->status = 'Available';
//    $content->description = 'the game is about the idea generation challenge';
//    $content->price = '27';
//    $content->type = 'Adventure';
//    $content->save();
//
//}}

//    
//
//
//    
//    // get all the inputs from the form
//    $inputs = Input::only('price', 'code');
//    
//   
//    // set custom error message
//    $messages = array(
//         'price.required' => 'Enter the valid price',
//         'code.required' => 'Enter the valid code for Game');
//    
//     $rules = array(
//		'price' => 'required|same:price',
//		'code' => 'required|same:code');
//    
//    
//    // Validation inputs
//    
//     $validation = Validator::make($inputs, $rules, $messages);
//        
//        if ($validation ->passes()) {
//// Normally we would do something with the data.
////            return Redirect::to('/pending')
////                    ->with('message', 'you are good so far');
////             
//            return 'succeeded';
//            
//        
//     }
//     else {
////         return 'data is wrong';
//         
//// else {
//return Redirect::to('/game_info')
//        ->with('message', 'something went wrong')
//        ->withErrors($validation)
//        ->withInput();
//
////}
//         
//     }
//     
//}
//     
//     
//     
//     
//     
//// else {
//////return Redirect::to('/game_info')
//////        ->with('message', 'something went wrong')
//////        ->withErrors($validation)
//////        ->withInput();
////
////return Redirect::to('/');
////
////}
//
//    
//    
//
//}

//display a view called blog

    


        

   
     
    
