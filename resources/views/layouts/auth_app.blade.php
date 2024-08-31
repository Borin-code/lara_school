<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Login System') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend')}}/dist/css/adminlte.min.css">
</head>
<style>
    body{
        color: white;

    }
    .video-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensures the video covers the entire container */
        z-index: -1; /* Puts the video behind the content */
    }

    /* code css for turn on soud Unmuted*/
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        .video-background {

            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 100px 0 0 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 2;
            transition: opacity 0.5s ease;
        }

        .overlay.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .overlay button {
            border: 1px solid red;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            background-color: transparent;
            border: none;
            color: white;
            border-radius: 5px;

        }

</style>
<body class="hold-transition login-page">
<div class="login-box">
    <video autoplay muted  loop class="video-background">
        <source src="{{asset('backend')}}/dist/img/bg-music.mp4" type="video/mp4">
    </video>
    <div class="sound">

        <!-- Video Background -->
        {{-- <video class="video-background" autoplay muted loop>
            <source src="background-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video> --}}

        <!-- Content Over the Video -->
        {{-- <div class="content">
            <h1>Welcome to Our Website</h1>
            <p>Click the button below to enable sound</p>
        </div> --}}

        <!-- User Interaction Overlay -->
        <div class="overlay" id="overlay">
            <h2 style="margin-top: 500px;" class="text-white">Enable sound while login</h2>
            <button id="enable-sound"><i class="fas fa-play" style=" color: rgba(255, 255, 255, 0.871); font-size: 20px"></i></button>
        </div>

</div>
  <!-- /.login-logo -->
  <div class="card card-outline"
  style=" background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(25px);
    -webkit-backdrop-filter: blur(25px);
    border-radius: 10px;
    border: 3px solid rgb(255, 255, 255);
    box-shadow: 0 8px 50px 0 rgba(10, 10, 10, 0.6);">
    <div class="card-header text-center">
      <a href="{{route('admin.login')}}" class="h1"><b>System</b> LOGIN</a>
    </div>
    @yield('content')

    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->




    <script>
        // JavaScript to handle unmuting
        const video = document.querySelector('.video-background');
        const overlay = document.getElementById('overlay');
        const enableSoundButton = document.getElementById('enable-sound');

        enableSoundButton.addEventListener('click', function() {
            video.muted = false;  // Unmute the video
            video.play();  // Ensure the video continues to play
            overlay.classList.add('hidden');  // Hide the overlay
        });
    </script>






<!-- jQuery -->
<script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend')}}/dist/js/adminlte.min.js"></script>
</body>
</html>
