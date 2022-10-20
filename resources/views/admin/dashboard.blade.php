<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Dashboard</title>
    <meta content="Chernkh Mikhail" name="author">
    <meta content="DAR AL KHULOOD UNITED LLC - Top-Of-The-Line Equipment Rentals" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="{{asset('/storage/'.$user->titleicon)}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/_media.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/mixins/_border-radius.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/mixins/_screen-reader.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/mixins/_visibility.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/utilities/_stretched-link.css')}}">
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <style>
   
      input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;
margin: 0;
}

/* Firefox */
input[type=number] {
-moz-appearance: textfield;
}
 .loginbtn{
  outline: none;
  border: none;
  padding: 5px;
  padding-left: 25px;
  padding-right: 25px;
  border-radius: 10px;
transition: 0.5s all;
background-color: rgb(53 136 246);
  color: white;
  
}
.loginbtn:hover {
  background-color: white;
  color:rgb(53 136 246);
border: 1px solid;
}

  </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">

    <title>Vision Pakistan - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link
      href="{{asset('assets/dashboard/vendor/fontawesome-free/css/all.min.css')}}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/dashboard/css/sb-admin-2.css')}}" rel="stylesheet" />
    <style>
   
    </style>
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
     @include('admin.sidebar')

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          @include('admin.navbar')

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
            
              <h1 class="h3 mb-0 text-gray-800">Hi Admin</h1>
            </div>

            <div class="registration-form row">
            
            <form enctype="multipart/form-data" method="POST" action="{{ route('update') }}" class="w-100">
                        @csrf

                        @if(Session::has('errors'))
                <p class="text-center alert alert-danger">    {{ implode('', $errors->all(':message')) }}
                </p>
                @endif
                @if (Session::has('message'))
                <div class="text-center alert alert-success">{{ Session::get('message') }}</div>
                @endif
                @if (Session::has('issue'))
                <div class="alert alert-danger">{{ Session::get('issue') }}</div>
                @endif
                       
                       
                        <!-- <div id="pincode-input" name="pin" class="form-group container"></div> -->
                        <div class="row container">
                        
                        <div class="form-group col-12 col-lg-6">
                            <label for="email1">Email</label>
                            <input type="email" class="form-control item" value="{{ $user->email}}" id="eamil1" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Contact Number</label>
                            <input type="text" class="form-control item" value="{{ $user->number}}" id="accnum" name="number" placeholder="Contact Number">
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label>HomePage Video Link</label>
                            <input type="text" class="form-control item" value="{{ $user->videolink}}" id="videolink" name="videolink" placeholder="Video Link">
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Work Time</label>
                            <input type="text" class="form-control item" value="{{ $user->worktime}}" id="accnum" name="worktime" placeholder="Work Time">
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Facebook Link</label>
                            <input type="text" class="form-control item" value="{{ $user->facebook}}" id="accnum" name="facebook" placeholder="facebook Link">
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Instagram Link</label>
                            <input type="text" class="form-control item" value="{{ $user->instagram}}" id="accnum" name="instagram" placeholder="Instagram Link">
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Twitter Link</label>
                            <input type="text" class="form-control item" value="{{ $user->twitter}}" id="accnum" name="twitter" placeholder="Twitter Link">
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Linkedin Link</label>
                            <input type="text" class="form-control item" value="{{ $user->linkedin}}" id="accnum" name="linkedin" placeholder="Linkedin Link">
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Youtube Link</label>
                            <input type="text" class="form-control item" value="{{ $user->youtube}}" id="accnum" name="youtube" placeholder="Youtube Link">
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Map Link</label>
                            <input type="text" class="form-control item" value="{{ $user->map}}" id="accnum" name="map" placeholder="Map Link">
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Address</label>
                            <textarea type="text" class="form-control item" id="accnum" name="address" rows="3" placeholder="Address">{{ $user->address}}</textarea>
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Home Slider Text</label>
                            <textarea type="text" class="form-control item" id="accnum" name="slider" rows="3" placeholder="Home Slider Text">{{ $user->slider}}</textarea>
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Logo</label>
            <img class="d-flex justify-content-center" style="width:auto;height:auto;" src="{{asset('/storage/'.$user->logo)}}" alt="">
            <input type="file"  style="height:45px;" class="form-control item" value="{{ $user->logo}}" id="accnum" name="logo">
                            
                        </div>
                        <div class="form-group col-12 col-lg-6">
                        <label for="accnum">White Logo</label>
            <img class="d-flex justify-content-center" style="width:auto;height:auto;" src="{{asset('/storage/'.$user->logodark)}}" alt="">
            <input type="file"  style="height:45px;" class="form-control item" value="{{ $user->darklogo}}" id="accnum" name="logodark">
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="accnum">Title Icon</label>
            <img class="d-flex justify-content-center" style="width:auto;height:auto;" src="{{asset('/storage/'.$user->titleicon)}}" alt="">
            <input type="file"  style="height:45px;" class="form-control item" value="{{ $user->titleicon}}" id="accnum" name="titleicon">
                            
                        </div>
                        
                        
                        </div>
                      <div class="container row">
                        <div class="form-group">
                            <button type="Submit" class="btn btn-primary float-center create-account">Update Details</button>
                        </div>
                      </div>
            </form>
                </div>            
            </div>
       
            <hr>
            <style>
              .accountNumber{
                display: flex;
                flex-direction: column;
                text-align: center;
                padding: 20px;
                margin-top: 25px;
              }
              .account-details{
                display: flex;
                flex-direction: column;
              }
              .bank-acc{
                display: flex;
                align-items: center;
                justify-content: space-evenly;
              }
            </style>
            
       
           
  </div>
    
  

      </div>
      
    </div>
    <script>
      const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ];
      const days = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
      ];
      const dateClass = document.querySelector(".date")
      let date = new Date();
      let todayDate=`${days[date.getDay()]}, ${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`;
dateClass.innerHTML=todayDate;


      </script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/dashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/dashboard/js/sb-admin-2.min.js')}}"></script>

  </body>
</html>
