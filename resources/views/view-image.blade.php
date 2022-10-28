<!doctype html>
<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8">
    <title>View Image</title>
    <meta content="Chernkh Mikhail" name="author">
    <meta content="DAR AL KHULOOD UNITED LLC - Top-Of-The-Line Equipment Rentals" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="asset/img/favicon.png" type="image/x-icon">
</head>
   <body style="background-color: black;">
    
   <a style="height: 50px;" href="{{route('gallery')}}"><i class="fa fa-close" style="font-size: 50px;"></i></a>
   
   <div class="d-flex justify-content-center " style="margin-top:2%">
    
    
    <img  img style="width:600px;height:480px;" src="{{asset('/storage/'.$image->name)}}" alt="">

   </div>
</body>