<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Services</title>
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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <style>
   #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 80%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">


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
      <!-- Sidebar -->
      @include('admin.sidebar')
      
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content"style="overflow:auto;">
          <!-- Topbar -->
          @include('admin.navbar')

          <!-- End of Topbar -->
          <!-- <div style="text-align: center;padding-top: 40px; overflow: auto; margin:50px;
    min-width: 590px;" > -->
    <div style="text-align: center;padding-top: 40px; overflow: auto; margin:50px;" >
     
     <!-- Topbar Search -->

     @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
<h1>Service List</h1>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Title" title="Type in a name">
<a href="{{route('add-service')}}" class="btn btn-primary">Add Service</a>
               <table style="width:1250px;" class="table table-striped" id="myTable">
                   <!--Table head-->
                   <thead>
                       <tr>
                           <!-- <th>#</th> -->
                           <th>S.NO</th>
                           <th>Title</th>
                           <th>SubTitle</th>
                           <th>Description</th>
                           <th style="width:180px;">Actions</th>
                       </tr>
                   </thead>
                   <!--Table head-->
                   <!--Table body-->
                   <tbody>
                        @foreach($services as $service)
                       <tr>
                          <td>{{++$sno}}</td>
                           <td>{{$service->title}}</td>
                           <td>{{$service->subtitle}}</td>
                           <td>{{$service->description}}</td>
                           <td>
                            <a class="btn btn-primary" style="" href="{{route('editservice',$service->id)}}"><i class="fa fa-edit"></i></a>
                           <form method="POST" style="float:right;" action="{{ route('delete-service',$service->id) }}" class="" novalidate="novalidate" id="" >
															@csrf
																<!-- {{method_field('DELETE')}} -->
                             <button class="btn btn-danger del-user" ><i class="fa fa-trash"></i></button>
                           </form>
                       </td>
                       </tr>
                       @endforeach
                   </tbody>
                   <!--Table body-->
               </table>
             </div>
           </div>
           </div>

 
       </div>

        </div>
      </div>
    </div>
          <!-- Begin Page Content -->
          <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
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
