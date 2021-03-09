<?php include ('conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Logo.jpeg" type="image" sizes="16x16"><title>Rise Land</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/custom-style.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tiny.cloud/1/6l8pi0wz9amts9zxdlf1pg5gpka75ghjbov0fmv46n3uyga6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
        body {
            padding-top: 50px;
        }
        .dropdown:hover .dropdown-menu {
             display: flex;
             margin: 0 5px;
        }
        .space-nav {
          margin: 2vw 2vw 0vw;
        }
        .column {
          display: block;
          padding: 0px 20px 10px 20px;
          /* margin-left: 5px; */
          width: max-content;
          border-radius:10px;
        }
        b {
          font-size: 16px;
        }
        .dropdown-header {
          border-bottom:1px solid !important;
        }
        .dropdown-text {
          font-size:16px;
          margin-left:10px;
        }
        .form-label {
          margin-top:5px;
          margin-bottom:0px !important;
        }
        .text {
          display: flex;
          width: 100%;
          overflow: hidden;
          white-space: nowrap;
          text-overflow: ellipsis;
        }
        .news-image {
            width: 20rem !important;
            height: 20rem !important;
        }
        .slider-img {
            width: 20rem;
            height: 12rem;
            margin-left: 5rem;
        }
        .property-body{
          border: 1px solid #337ab7;
          margin: 5px;
          border-radius: 3px;
        }
        .left-box {
          float: left;
          border: 1px solid #337ab7; 
          padding:5px;
          /* margin: 1px;  */
          border-radius: 5px;
        }
        .right-box {
          float:right;
          border: 1px solid #337ab7; 
          padding:5px;
          /* margin: 1px;  */
          border-radius: 3px;
        }
        .img-box {
          width:100px;
          height:100px;
        }
        .table-box {
            border: 1px solid #3175af;
            background-color: #e5e5e5;
            /* border-radius: 1px; */
            margin-top:-1px;
            /* margin:1px; */
        }
        .pp {
          margin:0 !important;
          text-align:center;
        }
        .col {
          color:#3175b0;
        }

    </style>
</head>
<body>