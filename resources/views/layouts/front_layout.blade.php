<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Greenway School</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
      .navbar {
        /* border-bottom: 1px solid green; */
        /* margin-top: 50px; */
        background-color: #fafafa5e;
            box-shadow: 0 4px 3px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            backdrop-filter: blur(10px); /* Blur effect */
            -webkit-backdrop-filter: blur(10px); /* For Safari support */
        /* background: linear-gradient(to right, white, rgb(143, 252, 143), white); */
        /* /* animation: fadeIn ease 2s; */
        animation-fill-mode: forwards; */
        /* border-bottom: 1px solid rgba(255, 255, 255, 0.3); */
        /* box-shadow: 0px 2px 0px rgba(0, 0, 0, 0.2); */
        box-shadow: rgba(50, 50, 93, 0.25) 0px 0px 0px 0px, rgba(250, 249, 249, 0.3) 0px 2px 5px -1px;
        z-index: 99999;
        position: relative;
        top: 0;
        position: sticky;
        width: 100%;
      }
      /* From Uiverse.io by kennyotsu */
        .dot-bg {
        position: absolute;
        width: 100%;
        height: 100%;
        /* Add your background pattern here */
        /* background-color: #62e11d58; */
        background-image: radial-gradient(rgba(129, 127, 127, 0.302) 2px, transparent 0);
        background-size: 30px 30px;
        background-position: -5px -5px
        }

      /* .navbar-brand img{
        color: #fff;
        height: 60px;
        width: 50px;
        animation: fadeIn ease 1s;
        animation-fill-mode: forwards;
      } */

      .navbar-toggler {
        border: none;
      }

      .navbar-toggler-icon {
        background-image: url("https://img.icons8.com/ios/50/000000/menu--v1.png");
      }

      .dropdown-menu{
        background-color: #fafafab4;
            box-shadow: 0 4px 3px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            backdrop-filter: blur(10px); /* Blur effect */
            -webkit-backdrop-filter: blur(10px); /* For Safari support */
        /* background-color: transparent;
        background-image: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), radial-gradient(circle at 50% 50%, rgba(255,255,255,.1), rgba(255,255,255,0));
        background-blend-mode: overlay, soft-light;
        backdrop-filter: blur(10px); */
      }

      .dropdown-item {
        color: green;
      }

      .dropdown-item:hover {
        background-color: #555;
      }

      .btn-login {
        background-color: #0074d996;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        transition: 400ms;
      }

      .btn-login:hover {
        color: green;
        /* background-color: white; */
        background-color: #fafafa5e;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            backdrop-filter: blur(10px); /* Blur effect */
            -webkit-backdrop-filter: blur(10px); /* For Safari support */
      }
        .btn-register {
        background-color: #00BFA6;
        padding: 9px 20px;
        margin-left: 20px;
        margin-right: 50px;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        cursor: pointer;
        border-radius: 5px;
        border: 2px dashed #00BFA6;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        transition: .4s;
        }

        .btn-register span:last-child {
        display: none;
        }

        .btn-register:hover {
        transition: .4s;
        border: 2px dashed #00BFA6;
        background-color: #fff;
        color: #00BFA6;
        }

        .btn-register:active {
        background-color: #87dbd0;
        }



      @media screen and (max-width: 768px) {
        .navbar-nav {
          flex-direction: column;
          align-items: center;
        }

        .navbar-nav .nav-item {
          margin-bottom: 10px;
        }
      }

      .background-interface {
        position: relative;
        /* background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9QxF33zU951K3W_l-XxC2Q9_Z8ZX10hZGKQ&usqp=CAU"); */
        background-size: cover;
        /* height: 100vh; */
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background: linear-gradient(100deg, rgba(26, 248, 30, 0.303), rgb(243, 244, 245), rgba(247, 247, 248, 0.685));
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        /* justify-content: center; */
        align-items: center;
        text-align: center;
        /* color: white; */
        animation: fadeIn ease 2s;
        animation-fill-mode: forwards;
      }

      @keyframes fadeIn {
        0% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }

      .background-interface h1 {
        position:  relative;
        z-index: 99;
        align-items: center; */
        text-align: center;
        margin-left: -600px;
        color: red;
        margin-top: -400px;
        font-size: 3.3rem;
        animation: fadeIn ease 1s;
        animation-fill-mode: forwards;
      }

      .background-interface h5 {
        position: relative;
        z-index: 99;
        align-items: center; */
        text-align: center;
        color: darkblue;
        text-align: center;
        animation: fadeIn ease 3s;
        animation-fill-mode: inherit;
        font-size: 2rem;
        margin-bottom: 2rem;
        margin-left: -600px;

      }
      .background-interface h6 {
        position: relative;
        z-index: 99;
        align-items: center; */
        text-align: center;
        color: darkblue;
        width: 500px;
        animation: fadeIn ease 3s;
        animation-fill-mode: inherit;
        font-size: 1.5rem;
        margin-bottom: 2rem;
        margin-top: -20px;
        margin-left: -585px;
        text-align: justify;
      }
      /* From Uiverse.io by xueyuantan */
        .botton-more {
        color: green;
        margin-left: -1030px;
        width: 9em;
        height: 3em;
        border-radius: 30em;
        font-size: 15px;
        font-family: inherit;
        border: none;
        position: relative;
        overflow: hidden;
        z-index: 1;
        box-shadow: 1px 0px 15px #12121240,
                    -0px -0px 0px #f6f4f4;
        }

        .botton-more::before {
        content: '';
        width: 0;
        height: 3em;
        border-radius: 30em;
        position: absolute;
        top: 0;
        left: 0;
        background-image: linear-gradient(to right, #0fd850 0%, #f9f047 100%);
        transition: .5s ease;
        display: block;
        z-index: -1;
        }

        .botton-more:hover::before {
        width: 9em;
        }
        .botton-more:hover{
        color: white;
        }
      /* .background-interface p {
        color: brown;
        animation: fadeIn ease 3s;
        animation-fill-mode: inherit;
        font-size: 1.5rem;
      } */
      .text-greenway{
        color: Green;
      }

      .background-interface .btn {
        background-color: #007bff;
        border-color: #007bff;
      }
      .card:hover {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                transition: 0.3s;
                cursor: pointer;
              }


        .slide-container {
        position: relative;
        width: 100%;
        height: 600px;
        overflow: hidden;
        }

        .slide {
        position: absolute;
        top: 0;
        left: 100%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: left 0.5s ease-in-out;
        }

        .slide:first-child {
        left: 0;
        }
        .slide-photo{
        height: 500px;
        width: 500px;
        object-fit: cover;
        margin-top: 100px;
        margin-left: 900px;
        }
        .arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        }

        .prev {
        left: 0;
        }

        .next {
        right: 0;
        }
        .explorpage h2{
            padding: 5px 5px;
            color: white;
            background-image: linear-gradient(to top, #0fd84f9c 0%, #4779f98e 100%);
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 5px 5px 0px 0px;
        }
        .explorpage{
            display: flex;
            margin-left: 0 auto;
        }
        .underline{
            width: 86%;
            height: 5px;
            background-color: #0fd84f9c;
            margin-top: -8px;
        }
        /* From Uiverse.io by kamehame-ha card-1*/
        .cards {
        display: flex;
        flex-direction: column;
        gap: 15px;
        }

        .cards .red {
            border: 1px solid white;
        background-color: hsla(350, 89%, 60%, 0.589);
        }

        .cards .blue {
            border: 1px solid white;
        background-color: #3b83f681;
        }

        .cards .green {
            border: 1px solid white;
        background-color: #22c55e7e;
        }

        .cards .card {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        height: 100px;
        width: 250px;
        border-radius: 10px;
        color: white;
        cursor: pointer;
        transition: 400ms;
        }

        .cards .card p.tip {
        font-size: 2em;
        font-weight: 700;
        }

        .cards .card p.second-text {
        font-size: 1.5em;
        }

        .cards .card:hover {
        transform: scale(1.1, 1.1);
        }

        .cards:hover > .card:not(:hover) {
        filter: blur(10px);
        transform: scale(0.9, 0.9);
        }



        /* From Uiverse.io by Thomasfadi card-2*/
        .cards1 {
        display: flex;
        flex-direction: row;
        gap: 15px;
        }

        .cards1 .red {
            background-color: #007e9e54;
            border: 1px solid white;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            backdrop-filter: blur(10px); /* Blur effect */
            -webkit-backdrop-filter: blur(10px); /* For Safari support */
        }

        .cards1 .blue {
            background-color: #0062ff54;
            border: 1px solid white;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            backdrop-filter: blur(10px); /* Blur effect */
            -webkit-backdrop-filter: blur(10px); /* For Safari support */
        }

        .cards1 .green {
            background-color: #18cd5d4a;
            border: 1px solid white;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            backdrop-filter: blur(10px); /* Blur effect */
            -webkit-backdrop-filter: blur(10px); /* For Safari support */
        }

        .cards1 .card1 {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        height: 100px;
        width: 150px;
        border-radius: 10px;
        color: white;
        cursor: pointer;
        transition: 400ms;
        }

        .cards1 .card p.tip {
        font-size: 1em;
        font-weight: 700;
        }

        .cards1 .card1 p.second-text {
        font-size: .7em;
        }

        .cards1 .card1:hover {
        transform: scale(1.2, 1.2);
        }

        .cards1:hover > .card1:not(:hover) {
        filter: blur(10px);
        transform: scale(0.9, 0.9);
        }

        /* responsive for first cards layer */

                    .cards{
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: center;
                    }
                    .card{
                        width: 300px;
                        /* margin: 10px; */
                    }
                    .card{
                        margin-bottom: 10px;
                    }
                    .card1{
                        margin-button: 10px;
                    }

                    .card img{
                        width: 100%;
                        height: 200px;
                        object-fit: cover;
                    }
                    .card .second-text{
                        font-size: 1.3rem;
                        text-align: left;
                    }
                    .card .second-text1{
                        font-size: 1.3rem;
                        text-align: left;
                        margin-top: 0px;
                    }
                    @media only screen and (max-width: 600px) {
                        .cards{
                            flex-direction: column;
                            padding-bottom: 15px;
                        }
                        .card1{
                            width: 100%;
                            padding-top: 10px 10px;
                        }
                        .top5-student{
                        padding-top: 25px;
                    }
                    }
                    /* Extra small devices (phones, 320px and up) */
        @media (max-width: 480px) {
            /* Your styles */
        }

        /* Small devices (landscape phones, 481px and up) */
        @media (min-width: 481px) and (max-width: 767px) {
            /* Your styles */
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) and (max-width: 1024px) {
            /* Your styles */
        }

        /* Large devices (desktops, 1025px and up) */
        @media (min-width: 1025px) and (max-width: 1200px) {
            /* Your styles */
        }

        /* Extra large devices (large desktops, 1201px and up) */
        @media (min-width: 1201px) {
            /* Your styles */
        }


        /* From Uiverse.io by Yaya12085 card-3*/
        .plan {
        border-radius: 16px;
        /* box-shadow: 0 30px 30px -25px rgba(0, 38, 255, 0.205); */
        padding: 10px;
        /* background-color: #fff; */
        color: #697e91;
        max-width: 300px;
        }

        .plan strong {
        font-weight: 600;
        color: #425275;
        }

        .plan .inner {
        align-items: center;
        padding: 20px;
        padding-top: 40px;
        /* background-color: #ecf0ff;  */
        border-radius: 12px;
        position: relative;
        }

        .plan .pricing {
        position: absolute;
        top: -10px;
        right: 0;
        background-color: none;
        border-radius: 99em 0 0 99em;
        display: flex;
        align-items: center;
        padding: 0.625em 0.75em;
        /* font-size: 1.25rem; */
        font-weight: 600;
        color: #425475;
        }

        .plan .pricing small {
        color: #707a91;
        font-size: 0.75em;
        margin-left: 0.25em;
        }

        .plan .title {
        font-weight: 600;
        font-size: 1.25rem;
        color: #425675;
        }

        .plan .title + * {
        margin-top: 0.75rem;
        }

        .plan .info + * {
        margin-top: 1rem;
        }

        .plan .features {
        display: flex;
        flex-direction: column;
        }

        .plan .features li {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        }

        .plan .features li + * {
        margin-top: 0.75rem;
        }

        .plan .features .icon {
        background-color: #1FCAC5;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        }

        .plan .features .icon svg {
        width: 14px;
        height: 14px;
        }

        .plan .features + * {
        margin-top: 1.25rem;
        }

        .plan .action {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: end;
        }

        .plan .button {
        /* background-color: #6558d3; */
        color: #fff;
        font-weight: 500;
        font-size: 1.125rem;
        text-align: center;
        border: 0;
        outline: 0;
        width: 100%;
        padding: 0.625em 0.75em;
        text-decoration: none;
        }

        .basic-price{
        background-color: darkgreen;
        border-radius: 6px;
        }
        .standard-price{
        background-color: blue;
        border-radius: 6px;
        }
        .premium-price{
        background-color: gold;
        border-radius: 6px;
        }
        .action a:hover{
            transition: 0.4s;
            border: 2px dashed green;
            background-color: white;
            color: aqua;
        }
        .action a:hover{
            transition: 0.4s;
            border: 2px dashed darkblue;
            background-color: white;
            color: aqua;
        }
        .action a:hover{
            transition: 0.4s;
            border: 2px dashed goldenrod;
            background-color: white;
            color: aqua;

        }




        .group-box {
            display: block;
            width: 100%;
            background-color: #fafafa5e;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            backdrop-filter: blur(10px); /* Blur effect */
            -webkit-backdrop-filter: blur(10px); /* For Safari support */
            border: 1px solid #dcdcdc;
            border-radius: 5px;
            border: 1px solid blue;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            padding: 10px;
            transition: 400ms;
            cursor: pointer;
        }
        .group-box:hover{
            transform: scale(1.1, 1.1);`

        }
        /* .container-hover .group-box:hover{
            transform: scale(1.1, 1.1);
        } */
        /* .cards .card:hover {
        transform: scale(1.1, 1.1);
        }

        .cards:hover > .card:not(:hover) {
        filter: blur(10px);
        transform: scale(0.9, 0.9);
        } */

        .group-title {
            /* border: 1px solid blue; */
            border-radius: 5px;
            font-size: 20px;
            color: white;
            /* background-color: blue; */
            position: absolute;
            top: -15px;
            left: 15px;
            padding: 0 10px;
        }

        .group-content {
            /* background-color: #f9f9f9; */
        }


        /* responsive card for chatgpt  */
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Container holding the cards */
        .pricing-plans {
            display: flex;
            /* justify-content: space-around; */
            flex-wrap: wrap;
            /* padding: 10px; */

            justify-content: center;
            align-items: center;

        }

        /* Individual plan card */
        .plan-card {
            /* background-color: white; */
            /* border: 2px solid #ccc; */
            border-radius: 8px;
            /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); */
            padding: 20px;
            width: 385px;
            /* margin: 10px; */
            text-align: center;
        }

        /* Plan headers, price, and other elements */
        .plan-card .plan-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .plan-card .price-tag {
            background-color: #4CAF50; /* Example color */
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        .plan-card .price {
            font-size: 24px;
            font-weight: bold;
            color: #555;
        }

        /* Choose plan button */
        .plan-card .choose-plan {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
        }

        .plan-card .choose-plan:hover {
            background-color: #45a049;
        }

        /* Media queries for responsiveness */
        @media (max-width: 900px) {
            .pricing-plans {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 600px) {
            .plan-card {
                width: 100%;
                margin: 10px 0;
            }

            .plan-card .price-tag {
                font-size: 14px;
            }

            .plan-card .price {
                font-size: 20px;
            }

            .plan-card .choose-plan {
                font-size: 14px;
            }
        }
        /* hide button for price card */
                .btn-hide{
                    display: none;
                    transition: all 0.3s ease-in-out;

                }
                .btn-priceshow {
                    display: flex;
                    margin-left: auto;
                    padding: 15px 30px;
                    background-color: #007BFF;
                    color: #fff;
                    border: none;
                    border-radius: 5px;
                    font-size: 18px;
                    cursor: pointer;
                    transition: transform 0.2s ease-in-out;
                }

                .btn-priceshow:hover {
                    transform: translateY(-5px);
                    box-shadow: 0px 5px 15px rgba(0, 123, 255, 0.4);
                }

                .btn-priceshow:active {
                    transform: translateY(-2px);
                    box-shadow: 0px 3px 10px rgba(0, 123, 255, 0.2);
                }



                /* data of student */
                .numbers-section {
                    /* background-color: #f8f9fa; */
                    border: 1px solid green;
                    border-radius: 5px;
                    padding: 50px 0;
                }
                .numbers-section .title {
                    font-size: 24px;
                    font-weight: bold;
                    color: #000;
                }
                .numbers-section .number {
                    font-size: 48px;
                    font-weight: bold;
                    color: #007bff;
                }
                .numbers-section .description {
                    font-size: 16px;
                    color: #6c757d;
                }
                .numbers-section .col-md-4 {
                    text-align: center;
                }

            /* course study get code from chatgpt */
            .course-section {
            border: 1px solid green;
            border-radius: 10px;
            margin: 0 50px 0
            text-align: center;
            padding: 40px;
            width: 86.7%;
        }
        .course-section h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #202057;
        }
        .course-section .view-all {
            background-color: #ff6600;
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
        }
        .course-section .course-card img {
            border-radius: 10px;
            width: 100%;
        }
        /* schedule layer */
        .text-schedule h1{
            color: white;
        }

        .table {
            margin-top: 20px;
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .bg-warning {
            background-color: #007bff !important;
        }

        .table-responsive {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        /* feedback serching and footer */
        .testimonial-section {
            text-align: center;
            padding: 60px 20px;
            /* background-color: #f1f6fe; */
            position: relative;
        }
        .testimonial-section h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #202057;
        }
        .testimonial-section p {
            font-size: 16px;
            margin: 10px 0;
        }
        .testimonial-section .testimonial-author {
            font-weight: bold;
            margin-top: 10px;
        }
        .testimonial-author-role {
            font-size: 14px;
            color: gray;
        }
        .testimonial-profile {
            margin: 20px 0;
        }
        .testimonial-profile img {
            border-radius: 50%;
            border: 5px solid white;
            width: 150px;
            height: 150px;
        }
        .profile-thumbnail img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin: 0 10px;
            cursor: pointer;
            border: 2px solid #ddd;
        }
        .profile-thumbnail img.active {
            border-color: #202057;
        }
        /* Subscription Section */
        .subscription-section {
            /* background-color: #003b28; */
            border-radius: 10px;
            border: 1px solid blue;
            color: #747d6c;
            text-align: center;
            padding: 60px 20px;
        }
        .subscription-section h3 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .subscription-section input[type="email"] {
            padding: 10px;
            width: 60%;
            max-width: 400px;
            border-radius: 10px;
            border: 1px solid green;
            margin-right: 10px;
            background-color: whitesmoke;
        }
        .subscription-section button {
            padding: 10px 20px;
            background-color: #7df985;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
       /
        /* Footer Section */
        footer {
            background-color: #f8f9fa;
            padding: 70px 0px;
            text-align: center;
            margin-left: 100px;
        }
        footer h5 {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 20px;


        }
        footer ul {
            list-style: none;
            padding: 0;
        }
        footer ul li {
            margin-bottom: 10px;
        }
        footer .social-icons {
            margin-top: 20px;
        }
        footer .social-icons a {
            color: #333;
            font-size: 24px;
            margin: 0 10px;
            text-decoration: none;
        }
        footer .download-apps img {
            margin: 20px 10px;
            width: 150px;
        }
    </style>

  </head>
  <body>
    <marquee behavior="scroll" direction=""><h1>Greenway School New:...</h1></marquee>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand text-primary" href="#" >
        <img style="margin-left: 150px;" src="{{ asset('backend') }}/dist/img/greenway_logo.png" width="30" height="30" class="img-fluid w-5 h-5" alt="Greenway_logo">
        Greenway School
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style=" margin-left: auto;">
            <li class="nav-item dropdown">
                <a class="nav-link active " href="#" style="color: rgba(0, 128, 0, 0.514); font-size: 25px; margin-top: -13px;" data-toggle="tooltip" data-placement="bottom" title="Home" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(0, 128, 0, 0.514)'">
                    <i class="fa-solid fa-house"></i>
                </a>
                {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="#">WORKSHEET</a>
                  <a class="dropdown-item" href="#">ANOTHER ACTION</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">SOMETHING ELSE HERE</a>
                </div> --}}
              </li>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              WORKSHEET
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
              <a class="dropdown-item" href="#">WORKSHEET</a>
              <a class="dropdown-item" href="#">ANOTHER ACTION</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">SOMETHING ELSE HERE</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              TEACHER
            </a>
            <div class="dropdown-menu p-1" aria-labelledby="navbarDropdown" style="width: 50vw; max-width: 500px; border: 1px solid green   ; margin-left: -10px;">
              <div class="dropdown-item" style="animation: fadeIn ease 1s; animation-fill-mode: forwards; cursor: pointer;" onclick="toggleDropdownteacher('dashboardteacher')">ShowDashboard</div>
              <div class="dropdown-divider"></div>
              <div id="dashboardteacher" class="dashboard p-5" style="display: none;  animation: fadeIn ease 1s; animation-fill-mode: forwards;">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card shadow-lg " style="transition: 0.3s; width: 100%;  object-fit: cover;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <div class="card-body ">
                            <div>
                                <h5 class="card-title">Phoun Borin</h5>
                                <p class="card-text">Teacher</p>
                            </div>
                        </div>
                    </div>

                  </div>
                  <div class="col-md-4">
                    <div class="card shadow-lg" style="transition: 0.3s; width: 100%;  object-fit: cover;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <div class="card-body">
                            <h5 class="card-title">Phoun Borin</h5>
                            <p class="card-text">Teacher</p>
                        </div>
                    </div>

                  </div>
                  <div class="col-md-4">
                    <div class="card shadow-lg" style="transition: 0.3s; width: 100%;  object-fit: cover;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <div class="card-body">
                            <h5 class="card-title">Phoun Borin</h5>
                            <p class="card-text">Teacher</p>
                        </div>
                    </div>
                    <br>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="card shadow-lg" style="transition: 0.3s; width: 100%;  object-fit: cover;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Phoun Borin</h5>
                                <p class="card-text">Teacher</p>
                            </div>
                        </div>
                    </div>

                  </div>
                  <div class="col-md-4">
                    <div class="card shadow-lg" style="transition: 0.3s; width: 100%;  object-fit: cover;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <div class="card-body">
                            <h5 class="card-title">Phoun Borin</h5>
                            <p class="card-text">Teacher</p>
                        </div>
                    </div>

                  </div>
                  <div class="col-md-4">
                    <div class="card shadow-lg" style="transition: 0.3s; width: 100%;  object-fit: cover;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                        <div class="card-body">
                            <h5 class="card-title">Phoun Borin</h5>
                            <p class="card-text">Teacher</p>
                        </div>
                    </div>
                    <br>
                  </div>
                </div>
              </div>
            </div>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              SCHEDULE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
              <a class="dropdown-item" href="#">SCHEDULE</a>
              <a class="dropdown-item" href="#">ANOTHER ACTION</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">SOMETHING ELSE HERE</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              CLASS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown5">
              <a class="dropdown-item" href="#">CLASS</a>
              <a class="dropdown-item" href="#">ANOTHER ACTION</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">SOMETHING ELSE HERE</a>
            </div>
          </li>
        </ul>
      </div>
        <a href="http://127.0.0.1:8000/userlogin" target="_blank"><button type="button" class="btn btn-login">LOGIN</button></a>
        <button class="btn-register">Register</button>
    </nav>
    <div class="dot-bg"></div>
    {{-- background interfest --}}
    <div class="background-interface">
        <div class="slide-container">

            <img src="{{ asset('backend') }}\dist\img\gws_logo.png" alt="Image 3" class="slide slide-photo" id="image3">
            <img src="{{ asset('backend') }}\dist\img\boin-dev.gif" alt="Image 1" class="slide slide-photo" id="image1" style="mix-blend-mode: multiply;">
            <img src="{{ asset('backend') }}\dist\img\borin_logo.png" alt="Image 2" class="slide slide-photo" id="image2">
            <div class="arrows">
            <div class="arrow prev">
                <i class="fa-solid fa-angle-left"></i>
                {{-- <img src="https://img.icons8.com/ios-glyphs/50/000000/chevron-left.png" alt="Previous"> --}}
            </div>
            <div class="arrow next">
                {{-- <img src="https://img.icons8.com/ios-glyphs/50/000000/chevron-right.png" alt="Next"> --}}
                <i class="fa-solid fa-angle-right"></i>
            </div>
            </div>
        </div>
        <div  style="font-family: 'arial'; font-weight: bold;">
            <h1 class="display-4">
                Your future begins today.
            </h1>
            <h5 class=" display-4">
                Bring your future with <span class="text-greenway">Greenway School.</span>
            </h5>
            <h6 class="display-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum veritatis optio laborum laboriosam id perferendis ipsam omnis quia delectus atque.</h6>
            <a href="#">
                <button class="botton-more">Apply Now</button>
            </a>
        </div><br><br><br><br>
        <div class="row">
            <div class="col-12">
                <div class="explorpage">
                    <h2 class="explorpage">Our Achivements</h2>
                </div>
            </div>
        </div>
        {{-- Line layer --}}
        <div class="underline"></div><br><br>
        {{-- data of student --}}
        <div class="container numbers-section">
            <div class="row">
                <div class="col-md-4">
                    <p class="title">Our numbers tell<br>more about us</p>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="number">6+</p>
                            <p class="description">Total branches opened in last year</p>
                        </div>
                        <div class="col-md-4">
                            <p class="number">5k+</p>
                            <p class="description">New students in last 30 days</p>
                        </div>
                        <div class="col-md-4">
                            <p class="number">1.5k+</p>
                            <p class="description">Comments made by our students</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>
        {{-- course study get code from chatgpt --}}
        <div class="course-section">
            <div class="row">
                <div class="col-6">
                    <h2>You Can Learn Anything<br>Explore Courses</h2>
                </div>
                <div class="col-6 mt-5">
                    <a href="#" class="view-all">View All</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 mt-5">
                    <a href="#">
                        <img src="{{ asset('backend') }}\dist\img\user.png" alt="" style="width: 200px; height: 200px;" alt="Course 1" class="course-card">
                    </a>
                </div>
                <div class="col-md-4 mt-5">
                    <a href="#">
                        <img src="{{ asset('backend') }}\dist\img\user.png" alt="" style="width: 200px; height: 200px;" alt="Course 1" class="course-card">
                    </a>
                </div>
                <div class="col-md-4 mt-5">
                    <a href="#">
                        <img src="{{ asset('backend') }}\dist\img\user.png" alt="" style="width: 200px; height: 200px;" alt="Course 1" class="course-card">
                    </a>
                </div>
            </div>
        </div><br>
        {{-- schedule layer --}}
        <div class="container schedule-layer my-5 mt-10">

            <div class="row">
                <h2 class="text-schedule mb-4">Class Schedule</h2>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="bg-warning text-white">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody id="schedule-table">
                                <tr>
                                    <td>08:00 - 09:00</td>
                                    <td>Math</td>
                                    <td>English</td>
                                    <td>Physics</td>
                                    <td>History</td>
                                    <td>Chemistry</td>
                                    <td>Day off</td>
                                    <td>Day off</td>
                                </tr>
                                <tr>
                                    <td>09:00 - 10:00</td>
                                    <td>English</td>
                                    <td>Math</td>
                                    <td>History</td>
                                    <td>Physics</td>
                                    <td>Biology</td>
                                    <td>Day off</td>
                                    <td>Day off</td>
                                </tr>
                                <tr>
                                    <td>10:00 - 11:00</td>
                                    <td>Physics</td>
                                    <td>Chemistry</td>
                                    <td>Math</td>
                                    <td>English</td>
                                    <td>History</td>
                                    <td>Day off</td>
                                    <td>Day off</td>
                                </tr>
                                <tr>
                                    <td>11:00 - 12:00</td>
                                    <td>Chemistry</td>
                                    <td>Biology</td>
                                    <td>English</td>
                                    <td>Math</td>
                                    <td>Physics</td>
                                    <td>Day off</td>
                                    <td>Day off</td>
                                </tr>
                                <tr>
                                    <td>12:00 - 01:00</td>
                                    <td>Lunch Break</td>
                                    <td>Lunch Break</td>
                                    <td>Lunch Break</td>
                                    <td>Lunch Break</td>
                                    <td>Lunch Break</td>
                                    <td>Day off</td>
                                    <td>Day off</td>
                                </tr>
                                <tr>
                                    <td>01:00 - 02:00</td>
                                    <td>Biology</td>
                                    <td>Physics</td>
                                    <td>Chemistry</td>
                                    <td>Biology</td>
                                    <td>Math</td>
                                    <td>Day off</td>
                                    <td>Day off</td>
                                </tr>
                                <tr>
                                    <td>02:00 - 03:00</td>
                                    <td>History</td>
                                    <td>Math</td>
                                    <td>English</td>
                                    <td>Chemistry</td>
                                    <td>Physics</td>
                                    <td>Day off</td>
                                    <td>Day off</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Expolr layer --}}
        <div class="row">
            <div class="col-12">
                <div class="explorpage">
                    <h2 class="explorpage">School management structure</h2>
                </div>
            </div>
        </div>
        {{-- Line layer --}}
        <div class="underline"></div><br>

        {{-- card layer --}}
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                {{-- School manager card --}}
                <div class="col-md-4">
                    <div class="cards">
                        <div class="card red" style="width: 100%;">
                            <div class="row mt-3">
                                <div class="col-4 mt-1"><img  src="{{ asset('backend') }}\dist\img\user.png" alt="" style="width: 75px; height: 75px; margin-right: 60px;"></div>
                                <div class="col-8">
                                    <p class="second-text" style="text-align: left; font-size: 1.3rem;">Mr. Nuth Ya</p>
                                    <p class="second-text" style="font-size: 1.3rem; text-align: left;">School Director</p>
                                </div>
                            </div>
                        </div>
                        <div class="card blue" style="width: 100%;">
                            <div class="row mt-3">
                                <div class="col-4 mt-1"><img src="{{ asset('backend') }}\dist\img\sreynoy1.png" alt="" style="width: 100px; height: 100px; margin-right: 35px;"></div>
                                <div class="col-8">
                                    <p class="second-text" style="text-align: left; font-size: 1.3rem;">Mrs. Meas Sreynoy</p>
                                    <p class="second-text" style="font-size: 1.3rem; text-align: left;">Vice-director</p>
                                </div>
                            </div>
                        </div>
                        <div class="card green" style="width: 100%;">
                            <div class="row mt-3">
                                <div class="col-4 mt-1"><img src="{{ asset('backend') }}\dist\img\borin_profile.png" alt="" style="width: 100px; height: 100px; margin-right: 60px;"></div>
                                <div class="col-8">
                                    <p class="second-text" style="text-align: left; font-size: 1.3rem;">Mr. Phoun Borin</p>
                                    <p class="second-text" style="font-size: 1.3rem; text-align: left;">Coordinator</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- School teacher --}}
                <div class="col-md-4">
                    <div class="row ">
                        <div class="col-12">
                            <div class="cards1">
                                <div class="card1 red">
                                    <img src="{{ asset('backend') }}\dist\img\user.png" alt="" style="width: 50px; height: 50px;">
                                    <p class="second-text1">Level 1</p>
                                </div>
                                <div class="card1 blue">
                                    <img src="{{ asset('backend') }}\dist\img\user.png" alt="" style="width: 50px; height: 50px;">
                                    <p class="second-text1">Level 2</p>
                                </div>
                                <div class="card1 green">
                                    <img src="{{ asset('backend') }}\dist\img\user.png" alt="" style="width: 50px; height: 50px;">
                                    <p class="second-text1">Level 3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-card" style="padding: 7.5px;"></div>
                    <div class="row ">
                        <div class="col-12">
                            <div class="cards1" style="margin-top: 10px;">
                                <div class="card1 red">
                                    <img src="{{ asset('backend') }}\dist\img\Sivngein.png" alt="" style="width: 90px; height: 90px; margin-top: 5px; ">
                                    <p class="second-text1" style="margin-top: -20px;">Level 4</p>
                                </div>
                                <div class="card1 blue">
                                    <img src="{{ asset('backend') }}\dist\img\silong.png" alt="" style="width: 85px; height: 85px; margin-top: 5px; ">
                                    <p class="second-text1" style="margin-top: -20px;">Level 5</p>
                                </div>
                                <div class="card1 green">
                                    <img src="{{ asset('backend') }}\dist\img\gu.png" alt="" style="width: 90px; height: 90px; margin-top: 5px; ">
                                    <p class="second-text1" style="margin-top: -20px;">level 6</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-card" style="padding: 7.5px;"></div>
                    <div class="row">
                        <div class="col-12">
                            <div class="cards1" style="margin-top: 10px;">
                                <div class="card1 red">
                                    <p class="tip1">Hover Me</p>
                                    <p class="second-text1">Lorem Ipsum</p>
                                </div>
                                <div class="card1 blue">
                                    <p class="tip1">Hover Me</p>
                                    <p class="second-text1">Lorem Ipsum</p>
                                </div>
                                <div class="card1 green">
                                    <p class="tip">Hover Me</p>
                                    <p class="second-text1">Lorem Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Student --}}
                <div class="col-md-4">
                    <div class="cards top5-student" >
                        <div class="card red" style="width: 100%;">
                            <div class="row mt-3">
                                <div class="col-4 mt-1"><img  src="{{ asset('backend') }}\dist\img\user.png" alt="" style="width: 75px; height: 75px; margin-right: 60px;"></div>
                                <div class="col-8">
                                    <p class="second-text" style="text-align: left; font-size: 1.3rem;">Mr. Nuth Ya</p>
                                    <p class="second-text" style="font-size: 1.3rem; text-align: left;">School Director</p>
                                </div>
                            </div>
                        </div>
                        <div class="card blue" style="width: 100%;">
                            <div class="row mt-3">
                                <div class="col-4 mt-1"><img src="{{ asset('backend') }}\dist\img\sreynoy1.png" alt="" style="width: 100px; height: 100px; margin-right: 35px;"></div>
                                <div class="col-8">
                                    <p class="second-text" style="text-align: left; font-size: 1.3rem;">Mrs. Meas Sreynoy</p>
                                    <p class="second-text" style="font-size: 1.3rem; text-align: left;">Vice-director</p>
                                </div>
                            </div>
                        </div>
                        <div class="card green" style="width: 100%;">
                            <div class="row mt-3">
                                <div class="col-4 mt-1"><img src="{{ asset('backend') }}\dist\img\borin_profile.png" alt="" style="width: 100px; height: 100px; margin-right: 60px;"></div>
                                <div class="col-8">
                                    <p class="second-text" style="text-align: left; font-size: 1.3rem;">Mr. Phoun Borin</p>
                                    <p class="second-text" style="font-size: 1.3rem; text-align: left;">Coordinator</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>

        {{-- Price-card not use --}}
        {{-- <div class="container-hover">
            <div class="row" style="margin: 0px 190px 0px 190px;">
                <div class="col-4">
                    <div class="group-box">
                        <span class="group-title" style="background-color: rgb(115, 237, 40); color: white;">Price</span>
                        <div class="group-content">
                            <di class="plan">
                                <div class="inner">
                                    <span class="pricing">
                                        <span style="color: rgb(89, 247, 94);
                                                            font-size: 1.5rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #52f762; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(244, 2, 2, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(247, 112, 112, 0.7); /* Light shadow for a glowing effect */">
                                            $27.2 <small style="color: blue;">/m</small>
                                        </span>
                                    </span>
                                    <p class="title" style="color: rgb(89, 247, 94);
                                                            font-size: 2rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #52f762; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(250, 3, 3, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(255, 255, 255, 0.7); /* Light shadow for a glowing effect */
                                    ">BASIC</p>
                                    <p class="info">This plan is for those who have children want to get the good price including:</p>
                                    <ul class="features">
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span><strong>1</strong> T-shirt</span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>2<strong> Text-book</strong></span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>Monthly payment</span>
                                        </li>
                                    </ul>
                                    <div class="action">
                                        <a class="button basic-price" href="#">Choose plan</a>
                                    </div>
                                </div>
                            </di>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="group-box">
                        <span class="group-title" style="background-color: dodgerblue; color: white;">Price</span>
                        <div class="group-content">
                            <di class="plan">
                                <div class="inner">
                                    <span class="pricing">
                                        <span style="color: rgb(11, 31, 248);
                                                            font-size: 1.5rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #4875fc; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(244, 2, 2, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(247, 112, 112, 0.7); /* Light shadow for a glowing effect */">
                                            $67.2 <small style="color: blue;">/m</small>
                                        </span>
                                    </span>
                                    <p class="title" style="color: rgb(40, 131, 243);
                                                            font-size: 2rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #1f76f9; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(250, 3, 3, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(255, 255, 255, 0.7); /* Light shadow for a glowing effect */
                                    ">STANDARD</p>
                                    <p class="info">This plan is for those who have children want to get the better price including:</p>
                                    <ul class="features">
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span><strong>1</strong> T-shirt</span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>2<strong> Text-book</strong></span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>Monthly payment</span>
                                        </li>
                                    </ul>
                                    <div class="action standard-price">
                                        <a class="button" href="#">Choose plan</a>
                                    </div>
                                </div>
                            </di>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="group-box">
                        <span class="group-title" style="background-color: gold; color: white;">Price</span>
                        <div class="group-content">
                            <di class="plan">
                                <div class="inner">
                                    <span class="pricing">
                                        <span style="color: rgb(247, 192, 89);
                                                            font-size: 1.5rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #f6e60b; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(244, 2, 2, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(247, 112, 112, 0.7); /* Light shadow for a glowing effect */">
                                            $57.2 <small style="color: blue;">/y</small>
                                        </span>
                                    </span>
                                    <p class="title" style="color: rgb(247, 192, 89);
                                                            font-size: 2rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #f6e60b; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(250, 3, 3, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(255, 255, 255, 0.7); /* Light shadow for a glowing effect */
                                    ">PREMIUM</p>
                                    <p class="info">This plan is for those who have children want to get the best price including:</p>
                                    <ul class="features">
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span><strong>1</strong> T-shirt</span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>2<strong> Text-book</strong></span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>Monthly payment</span>
                                        </li>
                                    </ul>
                                    <div class="action premium-price">
                                        <a class="button" href="#">Choose plan</a>
                                    </div>
                                </div>
                            </di>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- responsive card for chatgpt --}}
        <div class="text-center">
            <button  class="btn btn-primary p-2 mb-5 btn-priceshow " onclick="toggleBtn()">Choose your best plan</button>
            <div class="pricing-plans" id="btn-hide">
                <div class="plan-card basic">
                    <div class="group-box">
                        <span class="group-title" style="background-color: rgb(115, 237, 40); color: white;">Price</span>
                        <div class="group-content">
                            <div class="plan">
                                <div class="inner">
                                    <span class="pricing">
                                        <span style="color: rgb(89, 247, 94);
                                                            font-size: 1.5rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #52f762; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(244, 2, 2, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(247, 112, 112, 0.7); /* Light shadow for a glowing effect */">
                                            $27.2 <small style="color: blue;">/m</small>
                                        </span>
                                    </span>
                                    <p class="title" style="color: rgb(89, 247, 94);
                                                            font-size: 2rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #52f762; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(250, 3, 3, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(255, 255, 255, 0.7); /* Light shadow for a glowing effect */
                                    ">BASIC</p>
                                    <p class="info">This plan is for those who have children want to get the good price including:</p>
                                    <ul class="features">
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span><strong>1</strong> T-shirt</span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>2<strong> Text-book</strong></span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>Monthly payment</span>
                                        </li>
                                    </ul>
                                    <div class="action">
                                        <a class="button basic-price" href="#">Choose plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="plan-card standard">
                    <!-- Content similar to the basic plan -->
                    <div class="group-box">
                        <span class="group-title" style="background-color: dodgerblue; color: white;">Price</span>
                        <div class="group-content">
                            <di class="plan">
                                <div class="inner">
                                    <span class="pricing">
                                        <span style="color: rgb(11, 31, 248);
                                                            font-size: 1.5rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #4875fc; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(244, 2, 2, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(247, 112, 112, 0.7); /* Light shadow for a glowing effect */">
                                            $67.2 <small style="color: blue;">/m</small>
                                        </span>
                                    </span>
                                    <p class="title" style="color: rgb(40, 131, 243);
                                                            font-size: 2rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #1f76f9; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(250, 3, 3, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(255, 255, 255, 0.7); /* Light shadow for a glowing effect */
                                    ">STANDARD</p>
                                    <p class="info">This plan is for those who have children want to get the better price including:</p>
                                    <ul class="features">
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span><strong>1</strong> T-shirt</span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>2<strong> Text-book</strong></span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>Monthly payment</span>
                                        </li>
                                    </ul>
                                    <div class="action standard-price">
                                        <a class="button" href="#">Choose plan</a>
                                    </div>
                                </div>
                            </di>
                        </div>
                    </div>
                </div>

                <div class="plan-card premium">
                    <!-- Content similar to the basic plan -->
                    <div class="group-box">
                        <span class="group-title" style="background-color: gold; color: white;">Price</span>
                        <div class="group-content">
                            <di class="plan">
                                <div class="inner">
                                    <span class="pricing">
                                        <span style="color: rgb(247, 192, 89);
                                                            font-size: 1.5rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #f6e60b; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(244, 2, 2, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(247, 112, 112, 0.7); /* Light shadow for a glowing effect */">
                                            $57.2 <small style="color: blue;">/y</small>
                                        </span>
                                    </span>
                                    <p class="title" style="color: rgb(247, 192, 89);
                                                            font-size: 2rem; /* Adjust as needed */
                                                            font-weight: bold;
                                                            color: #f6e60b; /* Dark text color for contrast */
                                                            text-shadow:
                                                                        2px 2px 5px rgba(250, 3, 3, 0.567), /* Subtle shadow for depth */
                                                                        -1px -1px 2px rgba(255, 255, 255, 0.7); /* Light shadow for a glowing effect */
                                    ">PREMIUM</p>
                                    <p class="info">This plan is for those who have children want to get the best price including:</p>
                                    <ul class="features">
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span><strong>1</strong> T-shirt</span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>2<strong> Text-book</strong></span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                </svg>
                                            </span>
                                            <span>Monthly payment</span>
                                        </li>
                                    </ul>
                                    <div class="action premium-price">
                                        <a class="button" href="#">Choose plan</a>
                                    </div>
                                </div>
                            </di>
                        </div>
                    </div>
            </div>
            </div>
        </div>

        {{-- blog of dictor teacher and student --}}

        <div class="row">
            <div class="col-12">
                <div class="explorpage">
                    <h2 class="explorpage">Blog</h2>
                </div>
            </div>
        </div>
        {{-- Line layer --}}
        <div class="underline"></div><br><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 offset-md-2  text-white">
                        <img  src="{{ asset('backend') }}\dist\img\user.png" alt="" style="width: 450px; height: 450px; margin-right: 60px;">
                    </div>

                    <div class="col-md-4 text-justify text-primary mt-5 ml-5 mr-5">
                        <p style="font-size: 20px; ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolore est natus officia, quasi iste repellendus dolores minima veritatis corrupti autem?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolore est natus officia, quasi iste repellendus dolores minima veritatis corrupti autem?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolore est natus officia, quasi iste repellendus dolores minima veritatis corrupti autem?
                        </p>
                    </div>
                </div><hr><br><br><br><br><br>
                <div class="row">
                    <div class="col-md-4 offset-md-2 text-justify text-primary mt-5 ">
                        <p style="font-size: 20px; margin-left: 60px margin-right: 60px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolore est natus officia, quasi iste repellendus dolores minima veritatis corrupti autem?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolore est natus officia, quasi iste repellendus dolores minima veritatis corrupti autem?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolore est natus officia, quasi iste repellendus dolores minima veritatis corrupti autem?
                        </p>
                    </div>
                    <div class="col-md-4 ">
                        <img  src="{{ asset('backend') }}\dist\img\user.png" alt="" style="width: 450px; height: 450px; margin-right: 60px;">
                    </div>
                </div><hr><br><br><br><br><br>
                <div class="row">
                    <div class="col-md-4 offset-md-2  text-white">
                        <img  src="{{ asset('backend') }}\dist\img\user.png" alt="" style="width: 450px; height: 450px; margin-right: 60px;">
                    </div>

                    <div class="col-md-4 text-justify text-primary mt-5 ml-5 mr-5">
                        <p style="font-size: 20px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolore est natus officia, quasi iste repellendus dolores minima veritatis corrupti autem?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolore est natus officia, quasi iste repellendus dolores minima veritatis corrupti autem?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolore est natus officia, quasi iste repellendus dolores minima veritatis corrupti autem?
                        </p>
                    </div>
                </div><hr><br><br><br><br><br>
            </div>


            {{-- feedback serching and footer --}}
            <!-- Testimonial Section -->
    <div class="testimonial-section">
        <h2>Take a Look at Students<br>Awesome Feedback.</h2>
        <div class="testimonial-content">
            <div class="testimonial-profile">
                <img src="{{ asset('backend') }}\dist\img\user.png" alt="Student Photo" id="mainProfile">
            </div>
            <p id="testimonialText">
                All these comments were made by our students. They are very helpful for those who are interested and want to search for courses.
            </p>
            <div class="testimonial-author" id="testimonialAuthor">Crystal C. Hester</div>
            <div class="testimonial-author-role" id="testimonialRole">CEO, Founder</div>
        </div>
        <div class="profile-thumbnail">
            <img src="{{ asset('backend') }}\dist\img\user.png" alt="">
            <img src="{{ asset('backend') }}\dist\img\user.png" alt="Thumbnail 1" class="active" data-profile="{{ asset('backend') }}\dist\img\user.png" data-text="First testimonial text." data-author="Crystal C. Hester" data-role="CEO, Founder">
            <img src="{{ asset('backend') }}\dist\img\gws_logo.png" alt="Thumbnail 2" data-profile="{{ asset('backend') }}\dist\img\gws_logo.png" data-text="Second testimonial text." data-author="John Doe" data-role="Senior Developer">
            <img src="{{ asset('backend') }}\dist\img\boin-dev.gif" alt="Thumbnail 3" data-profile="{{ asset('backend') }}\dist\img\boin-dev.gif" data-text="Third testimonial text." data-author="Jane Smith" data-role="Product Manager">
        </div>
    </div>




    <!-- Subscription Section -->
    <div class="row">
        <div class="col-12">
            <div class="subscription-section">
                <h3>Ready To Get Started?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus dapibus sapien, sed gravida sapien sagittis quis.</p>
                <form>

                        <input  type="email" placeholder="Enter your email">
                        <span><button type="submit">Subscribe</button></span>

                </form>
            </div>
        </div>
    </div>


    </div><hr>
    <!-- Footer -->
    <footer class="footer-section text-center" style="margin-top: 10px; padding: 20px; background: linear-gradient(to right, white, rgb(143, 252, 143), white);" >
     <div class="container">

         <div class="row mt-5">
             <div class="col-md-4">
                 <h5>E-Saif</h5>
                 <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                 </p>
             </div>
             <div class="col-md-2">
                 <h5>Quick Links</h5>
                 <ul>
                     <li><a href="#">About Us</a></li>
                     <li><a href="#">Services</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="#">Contact</a></li>
                 </ul>
             </div>
             <div class="col-md-2">
                 <h5>Services</h5>
                 <ul>
                     <li><a href="#">Web Design</a></li>
                     <li><a href="#">Web Development</a></li>
                     <li><a href="#">Marketing</a></li>
                     <li><a href="#">SEO Services</a></li>
                 </ul>
             </div>
             <div class="col-md-2">
                 <h5>Community</h5>
                 <ul>
                     <li><a href="#">Forums</a></li>
                     <li><a href="#">Events</a></li>
                     <li><a href="#">Meetups</a></li>
                     <li><a href="#">Support</a></li>
                 </ul>
             </div>
             <div class="col-md-2">
                 <h5>Download App</h5>
                 <div class="download-apps">
                     <a href="#"><img src="path/to/app-store.jpg" alt="App Store"></a>
                     <a href="#"><img src="path/to/play-store.jpg" alt="Play Store"></a>
                 </div>
             </div>
         </div>
         <div class="social-icons">
             <a href="#"><i class="fab fa-facebook"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
         </div>
         <p>&copy; 2024 All Rights Reserved</p>
         <p><a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a></p>
     </div>
 </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap JS and dependencies data of student -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

    {{-- <script>
        function toggleDropdown(id) {
          var element = document.getElementById(id);
          element.style.display = element.style.display === 'none' ? 'block' : 'none';
        }
      </script> --}}
    <script>
        function toggleDropdownteacher(id) {
          var element = document.getElementById(id);
          element.style.display = element.style.display === 'none' ? 'block' : 'block';
        }


        const slideContainer = document.querySelector('.slide-container');
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        let currentIndex = 0;

        function showSlide(index) {
          slides.forEach((slide, ind) => {
            slide.style.left = `${ind === index ? 0 : 100}%`;
          });
          currentIndex = index;
        }

        function prevSlide() {
          showSlide((currentIndex - 1 + slides.length) % slides.length);
        }

        function nextSlide() {
          showSlide((currentIndex + 1) % slides.length);
        }

        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);

      {{-- hide price card --}}

        document.addEventListener("DOMContentLoaded", function() {
            var btn = document.getElementById("btn-hide");
            btn.classList.add('btn-hide');
        });

        function toggleBtn(){
            var btn = document.getElementById("btn-hide");
            if (btn.classList.contains('btn-hide')) {
                btn.classList.remove('btn-hide');
            } else {
                btn.classList.add('btn-hide');
            }
        }

        // feedback serching and footer
        // JavaScript for interactive testimonial section
        const thumbnails = document.querySelectorAll('.profile-thumbnail img');
        // const testimonial-profile = document.querySelectorAll('.testimonial-profile');
        const mainProfile = document.getElementById('mainProfile');
        const testimonialText = document.getElementById('testimonialText');
        const testimonialAuthor = document.getElementById('testimonialAuthor');
        const testimonialRole = document.getElementById('testimonialRole');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
                // Update main profile image
                mainProfile.src = this.dataset.profile;

                // Update testimonial text and author details
                testimonialText.textContent = this.dataset.text;
                testimonialAuthor.textContent = this.dataset.author;
                testimonialRole.textContent = this.dataset.role;

                // Highlight the active thumbnail
                thumbnails.forEach(img => img.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // schedule layer
        document.addEventListener("DOMContentLoaded", function() {
            const scheduleTable = document.getElementById("schedule-table");

            // Example of interactivity: Highlight the current day
            const today = new Date().getDay(); // 0 = Sunday, 1 = Monday, etc.
            const dayIndex = today === 0 ? 6 : today - 0; // Adjust for Monday = 0 index in the table

            const rows = scheduleTable.getElementsByTagName("tr");
            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName("td");
                if (cells.length > dayIndex) {
                    cells[dayIndex].classList.add("bg-warning");
                }
            }
        });

    // Further interactivity can be added here, such as hover effects or click events

    </script>

    </script>


</body>
</html>

