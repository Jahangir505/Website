@extends('layouts.website')
@section('content')
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1>Drop Us A Note</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact-form">
    <div class="container">
        <div class="row">
            @if(Session('success'))
              <script>
                swal({
                  title: "Good job!",
                  text: "Thanks for your message!",
                  icon: "success",
                  timer:5000,
                });
              </script>
            @endif
            @if(Session('error'))
            <script>
              swal({
                title: "Opps!",
                text: "Please try again!",
                icon: "error",
                timer:5000,
              });
            </script>
            @endif
            <form method="post" action="{{url('contact/submit')}}">
                @csrf
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <div class="form-group{{$errors->has('name') ? ' has-error':''}}">
                            <input name="name" type="text" class="form-control" placeholder="Your Name" value="{{old('name')}}">
                            @if($errors->has('name'))
                              <span class="help-block">
                                {{$errors->first('name')}}
                              </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('email') ? ' has-error':''}}">
                            <input name="email" type="text" class="form-control" placeholder="Email Address" value="{{old('email')}}">
                            @if($errors->has('email'))
                              <span class="help-block">
                                {{$errors->first('email')}}
                              </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input name="sub" type="text" class="form-control" placeholder="Subject" value="{{old('sub')}}">

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <div class="form-group-2">
                            <textarea name="mess" class="form-control" rows="3" placeholder="Your Message">{{old('mess')}}</textarea>
                        </div>
                            <button class="btn btn-default" type="submit">Send Message</button>
                    </div>
                </div>
                <div class="error" id="error">Sorry Msg dose not sent</div>
                <div class="success" id="success">Message Sent</div>
            </form>
        </div>
        <div class=" contact-box row">
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <h2>Stop By For A visit</h2>
                    <ul class="address-block">
                        <li>
                            <i class="ion-ios-location-outline"></i>North Main Street,Brooklyn Australia
                        </li>
                        <li>
                            <i class="ion-ios-email-outline"></i>Email: contact@mail.com
                        </li>
                        <li>
                            <i class="ion-ios-telephone-outline"></i>Phone:+88 01672 506 744
                        </li>
                    </ul>
                    <ul class="social-icons">
                        <li>
                            <a href="" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-linkedin-outline"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-pinterest-outline"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-dribbble-outline"></i></a>
                        </li>
                        <li>
                            <a href="{{$media->sm_twitter}}"><i class="ion-social-twitter-outline"></i></a>
                        </li>
                        <li>
                            <a href="{{$media->sm_facebook}}" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <h2>We Also Count In Google Map</h2>
                    <div class="google-map">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
