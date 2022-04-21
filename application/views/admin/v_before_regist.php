<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>template/admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>template/admin/assets/img/favicon.png">
  <title>
    Sign Up
  </title>
  <!--     Fonts and icons     -->
  <link href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url();?>template/admin/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>template/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo base_url();?>template/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url();?>template/admin/assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
</head>
<body class="">
  <main class="main-content  mt-0">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Welcome!</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>Who's You?</h5>
              </div>
              <div class="row px-xl-5 px-sm-4 px-3">
              <div class="card-body">
              <form role="form">
                <div class="mb-3">
                  <div class="card-body">
                    <label class="font-weight-bold" for="tahun">Login Sebagai :</label>
                      <select class="form-control" name="level" id="exampleFormControlSelect1">
                        <option value="">-Sebagai</option>
                        <option>admin</option>
                        <option>guru</option>
                        <option>siswa</option>
                    </select>
                  </div>
                </div>
                <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>
                <div class="navbar-btn button-center d-none d-sm-inline-block">
                  <ul>
                      <li><a class="btn bg-gradient-dark w-100 my-4 mb-2" href="<?php echo base_url('RRegist');?>">Next</a></li>
                    </ul>
               </div> 
               <div class="text-center">
                  <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2" href="<?php echo base_url('Registrasi');?>">Sign up</button>
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="javascript:;" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
        </div>
            
            
</body>