<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="fa/css/all.css">
  <script src="https://kit.fontawesome.com/1f1ec0ab19.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <title>Shayne's Sweets</title>

  <style>
    a{
      text-decoration: none;
    }
    header{
      top: 0; right: 0; left: 0;
      background-color: black;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      padding:1rem 2%;
      z-index: 999;
    }
    .logo{
      display: flex;
      align-items: 2rem;
    }
    .nav-bar a{
      font-size: 15px;
      margin-right: 2rem;
      color: white;
      text-decoration: none;
    }
    .nav-bar a:hover{
      border-bottom: .1rem solid #e859a6;
      padding-bottom: .4rem;
    }
    .icons a{
      margin-right: 1.5rem;
      text-decoration: none;
      color: white;
    }
    .icons .to-edit{
      margin-right: 3rem;
    }

    sup{
      color: white;
      text-align: center;
      position: absolute;
      padding: 2px;
      border: 1px solid pink;
      border-radius: 10px;
      margin-right: 0.5rem;
    }

    @keyframes slidy {
      0% { left: 0%; }
      20% { left: 0%; }
      25% { left: -100%; }
      45% { left: -100%; }
      50% { left: -200%; }
      70% { left: -200%; }
      75% { left: -300%; }
      95% { left: -300%; }
      100% { left: -400%; }
    }
    body { margin: 0; } 
    div#slider { overflow: hidden; }
    div#slider figure img { width: 20%; float: left; }
    div#slider figure { 
      position: relative;
      width: 500%;
      margin: 0;
      left: 0;
      text-align: left;
      font-size: 0;
      animation: 15s slidy infinite; 
    }
    h2{
      text-align: center;
      margin: 2rem;
      font-size: 2rem;
      
    }
    h3{
      text-align: center;
      font-size: 1rem;
      margin:1rem;
      
    }
    p{
      margin-bottom: 0;
    }
    .all-products{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      width: 100%;
      /* height: 500px; */
    }

    .product{
      overflow: hidden;
      background: white;
      color: #21201e;
      text-align: center;
      width: 280px;
      height: 100%;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      box-shadow: 10px 20px 30px #eeeeee;
      border-radius: 0.5rem;
      margin: 3rem;
    }

    .product .product-title, .product .product-price{
      font-size: 100%;
      padding: 1rem;
      margin-bottom: 0;
      color: black;
    }

    .product:hover img{
      scale:  1.1;
    }

    .product:hover {
      box-shadow: 10px 20px 30px #eeeeee;
    }

    .product img {
      width: 100%;
      object-fit: cover;
      transition: all 0.3s ease;
    }
    .product-btn{
      background-color: #2c3e50;
      text-decoration: none;
      padding: 1rem 1.5rem;
      border-radius: 1rem;
      display: inline-block;
      color: #ececec;
      cursor: pointer;
    }

    .product a:link, .product a:visited{
      color: #ececec;
      display: inline-block;
      text-decoration: none;
      padding: 1rem 1.5rem;
      border-radius: 1rem;
      font-size: 14px;
      transition: all 0.2s;
    }

    .product a:hover{
      transform: scale(1.1);
    }

    h1{
      text-align: center;
    }
    .row-content{
      display: flex;
      align-items: center;
      justify-content: space-evenly;
      background-color: #f2f2f2;
      max-height: 100%;
      width: 100%;
    }
    .col-1{
      flex-basis: 40%;
      position: relative;
      margin: 5rem;
    }
    .col-1 h1{
      font-size: 50px;
      margin-bottom: 2rem;
    }
    span.newcol{
      color: palevioletred;
    }
    .col-2{
      position: relative;
      display: flex;
      align-items: center;
      margin: 5rem;
    }
    .col-2 img{
      height: 280px;
      object-fit: cover;
    }
    .menu{
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
      padding: 3rem 20%;
    }

    .promo{
      width: 100%;
      background-size: cover;
      background-position: 50%
    }

    .nav_left {
          background-color: #1e1e1f;
          border-top-left-radius: 48px;
          border-bottom-left-radius: 48px;
      }
      
      .nav-tabs .nav-link.active {
          background-color: transparent;
          border-color: transparent;
          border-top: 5px solid;
          color: #fff;
      }
      
      .nav-tabs .nav-link {
          border: none;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
          /* margin: 0 30px 0 40px; */
      }
      
      .nav-tabs {
          border-bottom: none;
      }
      
      
      .search_input {
          width:100%;
          border-radius: 10px;
          border: none;
          line-height: initial;
          padding-top: 4px;
          padding-bottom: 4px;
          color: #f19159;
      }
      
      .search_input:focus-visible {
          outline: none;
      }
      
      input.search_input::placeholder {
          color: #cfd2ec;
          vertical-align: middle;
      }
      
      .search_img {
          top: 7px;
          right: 8px;
      }
      
      .navbar-toggler:focus {
          box-shadow: none;
      }

      .card-img-tiles {
        display: block;
        border-bottom: 1px solid #e1e7ec;
    }

    a {
        color: #0da9ef;
        text-decoration: none !important;
    }

    .card-img-tiles>.inner {
        display: table;
        width: 100%;
        height: 16vw;
    }

    .card-img-tiles .main-img, .card-img-tiles .thumblist {
        display: table-cell;
        width: 65%;
        padding: 15px;
        vertical-align: middle;
        
    }

    .main-img{
      width: 100%;
      object-fit: cover;
    }

    .card-img-tiles .main-img>img:last-child, .card-img-tiles .thumblist>img:last-child {
        margin-bottom: 0;
    }

    .card-img-tiles .main-img>img, .card-img-tiles .thumblist>img {
        display: block;
        width: 100%;
        margin-bottom: 6px;
    }
    .thumblist {
        width: 35%;
        border-left: 1px solid #e1e7ec !important;
        display: table-cell;
        width: 65%;
        padding: 15px;
        vertical-align: middle;
    }

    .card-img-tiles .thumblist>img {
        display: block;
        width: 100%;
        margin-bottom: 6px;
    }
    .btn-group-sm>.btn, .btn-sm {
        padding: .45rem .5rem !important;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
    }

    .panel {
        border: none;
        box-shadow: none;
    }

    .panel-heading {
        border-color:#eff2f7 ;
        font-size: 16px;
        font-weight: 300;
    }

    .panel-title {
        color: #2A3542;
        font-size: 14px;
        font-weight: 400;
        margin-bottom: 0;
        margin-top: 0;
        font-family: 'Open Sans', sans-serif;
    }


    /*product list*/

    .prod-cat li a{
        border-bottom: 1px dashed #d9d9d9;
    }

    .prod-cat li a {
        color: #3b3b3b;
    }

    .prod-cat li ul {
        margin-left: 30px;
    }

    .prod-cat li ul li a{
        border-bottom:none;
    }
    .prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
        background: none;
        color: #ff7261;
    }

    .pro-lab{
        margin-right: 20px;
        font-weight: normal;
    }

    .pro-sort {
        padding-right: 20px;
        float: left;
    }

    .pro-page-list {
        margin: 5px 0 0 0;
    }

    .product-list img{
        width: 100%;
        border-radius: 4px 4px 0 0;
        -webkit-border-radius: 4px 4px 0 0;
    }

    .product-list .pro-img-box {
        position: relative;
    }
    .adtocart {
        background: #fc5959;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        color: #fff;
        display: inline-block;
        text-align: center;
        border: 3px solid #fff;
        left: 45%;
        bottom: -25px;
        position: absolute;
    }

    .adtocart i{
        color: #fff;
        font-size: 25px;
        line-height: 42px;
    }

    .pro-title {
        color: #5A5A5A;
        display: inline-block;
        margin-top: 20px;
        font-size: 16px;
    }

    .product-list .price {
        color:#fc5959 ;
        font-size: 15px;
    }

    .pro-img-details {
        margin-left: -15px;
    }

    .pro-img-details img {
        width: 100%;
    }

    .pro-d-title {
        font-size: 16px;
        margin-top: 0;
    }

    .product_meta {
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
        padding: 10px 0;
        margin: 15px 0;
    }

    .product_meta span {
        display: block;
        margin-bottom: 10px;
    }
    .product_meta a, .pro-price{
        color:#fc5959 ;
    }

    .pro-price, .amount-old {
        font-size: 18px;
        padding: 0 10px;
    }

    .amount-old {
        text-decoration: line-through;
    }

    .quantity {
        width: 120px;
    }

    .pro-img-list {
        margin: 10px 0 0 -15px;
        width: 100%;
        display: inline-block;
    }

    .pro-img-list a {
        float: left;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .pro-d-head {
        font-size: 18px;
        font-weight: 300;
    }


    a {
      font-size:14px;
      font-weight:700
    }
    .superNav {
      font-size:1.1rem;
    }
    .form-control {
      outline:none !important;
      box-shadow: none !important;
    }

    .active{
      color: #ff69d7;
    }

    .nav-link{
      padding: 2px;
    }

    .nav-link.active {
      text: deeppink;
      font-weight: bolder;
      border-bottom: solid deeppink 2px;
      color:deeppink ;
      
    }


    @media screen and (max-width:540px){
      .centerOnMobile {
        text-align:center
      }
    }


    /* h1 {
        text-align: center;
        padding: 20px 0;
    } */
    
    .Contact-info {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        width: 100%;
    }
    
    .Contact-info h3 {
        margin-bottom: 10px;
    }
    
    .icons-row {
        display: flex;
        justify-content: space-around;
        width: 100%;
    }
    
    .icons-row a {
        text-decoration: none;
        color: #333;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 10px;
    }
    
    .icons-row a i {
        font-size: 30px;
        margin-bottom: 15px;
        color: #ff8ba7;
    }
    
    .icons-row a span.title {
        color: #33272a;
        font-family: 'Satisfy', cursive;
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 5px;
    }
    
    .icons-row a span {
        color: #594a4e;
        font-family: cursive;
        font-size: 14px;
        text-align: center;
    }
    .additional-info {
        display: flex;
        justify-content: space-around;
        width: 100%;
        margin-top: 1rem;
        font-size: 14px;
        text-align: center;
    }
    
    .additional-info span {
        display: inline-block;
        margin-bottom: 5px;
        font-family: 'Satisfy', cursive;
        font-weight: bold;
        color: #ff8ba7;
        font-size: 20px;
    }
    
    .additional-info span:last-child {
        margin-bottom: 0;
    }
    
    
    .contact-form-container {
        background-color: #faeee7;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        
    }
    
    .contact-form {
        background-color:#ffc6c7;
        border-radius: 5px;
        padding: 20px;
    }
    
    .contact-form h3 {
        margin-bottom: 20px;
        color:#33272a;
        font-weight: bold;
        font-size: 20px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
        color:#594a4e;
    }
    
    input[type="text"],
    input[type="email"],
    textarea {
        padding: 8px;
        border-radius: 3px;
        border: 1px solid #ccc;
    }
    
    textarea.message {
        resize: none; 
        width: calc(100% - 22px); 
        height: 150px; 
    }
    
    input[type="submit"] {
        background-color: #594a4e;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
        width: fit-content;
    }
    
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    
    .image-container {
        border-radius: 5px;
    }
    
    .image-container img {
        width: 100%;
        display: block;
    }


    .nav-tabs-custom .nav-item .nav-link.active {
        color: black;
        border-bottom: 2px solid black;
    }
    .nav-tabs-custom .nav-item .nav-link {
        border: none;
    }
    .nav-tabs-custom .nav-item {
        color: black;
    }
    .nav-tabs-custom .nav-item .nav-link.active:after {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    .nav-tabs-custom .nav-item .nav-link::after {
        content: "";
        background: #6c6ff5;
        height: 2px;
        position: absolute;
        width: 100%;
        left: 0;
        bottom: -1px;
        -webkit-transition: all 250ms ease 0s;
        transition: all 250ms ease 0s;
        -webkit-transform: scale(0);
        transform: scale(0);
    }
    .lg-base{
      color: gray;
    }

    .list-group-item.active{
      background: #ff69d7;
      color: white;
    }


    .account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
 

  </style>

</head>

<body class="d-flex flex-column min-vh-100">
  <?php

  include('navbar.php');

  ?>