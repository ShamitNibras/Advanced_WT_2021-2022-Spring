<title>Contact</title>
@extends('layout.App2')
@section('content')
<div class="container" style="boder: radius 2px;">   
<div class="d-flex justify-content-center mt-5">
<div style="width:100%">
 

    <h1 style="color:#117A65;text-align:center"> Contact Us</h1>
            <!-- Name input-->
            
              <label class="col-md-2 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
           
            <!-- Email input-->
        
              <label class="col-md-2 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            
    
            <!-- Message body -->
           
              <label class="col-md-2 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="4"></textarea>
              </div>
            
    
            <br>
        <div>
                <button type="submit" class="w-50 btn btn-success btn-sm btn-block">Submit</button>
            </div>
            
          
        </div>
      </div>
</div>
<br><br>
  @endsection