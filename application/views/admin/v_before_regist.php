<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>template/admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>template/admin/assets/img/favicon.png">
  <title>
    Sign Up
  </title>
  <!--     Fonts and icons     -->
  <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url(); ?>template/admin/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>template/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo base_url(); ?>template/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url(); ?>template/admin/assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
</head>

<body class="">
  <!--<div class="form-signup">
    <div class="wrapper">
      <h3>Daftar Baru</h3>
      <h6>Buat Akun DigitalLab</h6>
      <nav class="tabs">
        <div class="selector" style="width: 146px; left: 70.4688px;"></div>
        <a class="tablinks active" onclick="openCity(event,'guru')">
          <i class="fas fa-burn"></i>
          "Untuk Guru"
        </a>
        <a class="tablinks active" onclick="openCity(event,'siswa')">
          <i class="fas fa-burn"></i>
          "Untuk Murid"
        </a>
      </nav>
    </div>
    <div id="guru" class="tabcontent" style="display: block;">
      <form class="signup" action="/signup/External" method="post">
        <input type="hidden" name="UserTypeId" value="1">
        <input type="hidden" name="Photo">
        <input type="hidden" name="ReturnUrl" value="https://sumber.belajar.kemdikbud.go.id/">
        <input type="hidden" name="Idp">
        <input type="hidden" name="Id" value="d8982d6e-0760-4901-8c05-714da546a360">
        <input type="hidden" name="Name" value="Nova Mazaya">
        <div class="form-group row">
          <div class="col-md-6">
            <label>Nama depan</label>
            <input type="text" placeholder="Nama depan" name="FirstName" value="Nova" autocomplete="off" class="form-control" required="">
            <span class="text-danger field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
          </div>
          <div class="col-md-6">
            <label>Nama belakang</label>
            <input type="text" placeholder="Nama belakang" name="LastName" value="Mazaya" autocomplete="off" class="form-control" required="">
            <span class="text-danger field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
          </div>
        </div>
        <div class="form-group">
          <label>NIP*</label>
          <input type="text" placeholder="NIP" name="Number" autocomplete="off" class="form-control" required="">
          <span class="text-danger field-validation-error" data-valmsg-for="Number" data-valmsg-replace="true">The Nomor field is required.</span>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" placeholder="Surel" name="Email" value="mazayanova91@gmail.com" readonly="" autocomplete="off" class="form-control" required="">
          <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
        </div>
        <div class="form-group">
          <label>Captcha</label>
          <div class="g-recaptcha" data-theme="light" data-sitekey="6Ld3K6gUAAAAAHIACfy7DrfGSy-D6gW4k9HpADdI">
            <div style="width: 304px; height: 78px;">
              <div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ld3K6gUAAAAAHIACfy7DrfGSy-D6gW4k9HpADdI&amp;co=aHR0cHM6Ly9pczQuYmVsYWphci5rZW1kaWtidWQuZ28uaWQ6NDQz&amp;hl=en&amp;v=QENb_qRrX0-mQMyENQjD6Fuj&amp;theme=light&amp;size=normal&amp;cb=adko43vl0or9" width="304" height="78" role="presentation" name="a-kpuwljbfp9yd" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
            </div>
          </div>
        </div>
        <p><small>Dengan klik tombol Daftar, anda sudah menyetujui syarat dan ketentuan di Portal Rumah Belajar</small></p>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-primary register">Daftar</button>
          <a href="/account/login/?redirectUrl=https://sumber.belajar.kemdikbud.go.id/">Sudah memiliki akun?</a>
        </div>
        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8KvRg8GcC9FCtXSekFHWLYKLa-XV-6mkzGzMXGYSJmC2KHUUlcfe5PbujUdUAT6Emyr6oqoZu3uXkPEwMIuCtgWP84dFz0P2oELqI6tkE2ru9rw7H3VJ_L1rCvn0kI3WUjsI3qCPT0wvgPwUvPsa9dNjDEe_LIBw5mNfM9wflwph_KX3Du_e6grD_wNYvCLlvw">
      </form>
    </div>
    <div id="siswa" class="tabcontent" style="display: none;">
      <form class="signup" action="/signup/External" method="post">

        <input type="hidden" name="UserTypeId" value="1">
        <input type="hidden" name="Photo">
        <input type="hidden" name="ReturnUrl" value="https://sumber.belajar.kemdikbud.go.id/">
        <input type="hidden" name="Idp">
        <input type="hidden" name="Id" value="d8982d6e-0760-4901-8c05-714da546a360">
        <input type="hidden" name="Name" value="Nova Mazaya">
        <div class="form-group row">
          <div class="col-md-6">
            <label>Nama depan</label>
            <input type="text" placeholder="Nama depan" name="FirstName" value="Nova" readonly="" autocomplete="off" class="form-control" required="">
            <span class="text-danger field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
          </div>
          <div class="col-md-6">
            <label>Nama belakang</label>
            <input type="text" placeholder="Nama belakang" name="LastName" value="Mazaya" readonly="" autocomplete="off" class="form-control" required="">
            <span class="text-danger field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
          </div>
        </div>
        <div class="form-group input-relative">
          <label>NIS*</label>
          <input type="text" placeholder="NIS" name="Number" id="nisNumber" autocomplete="off" class="form-control" required="">
          <span class="text-danger field-validation-error" data-valmsg-for="Number" data-valmsg-replace="true">The Nomor field is required.</span>
          <a href="javascript:void(0)" onclick="psGetTeacher(this)" id="niskSearchNumber" class="btn btn-sm btn-primary"><i class="ms-icon-search2"></i></a>
          <a href="javascript:void(0)" onclick="clearInputTeacher(this)" id="niskExitNumber" style="display:none" class="btn btn-sm btn-default"><i class="ms-icon-x2"></i></a>
        </div>
        <div class="form-group">
          <label>Surel</label>
          <input type="email" placeholder="Surel" name="Email" value="mazayanova91@gmail.com" readonly="" autocomplete="off" class="form-control" required="">
          <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
        </div>
        <div class="form-group">
          <label>Captcha</label>
          <div class="g-recaptcha" data-theme="light" data-sitekey="6Ld3K6gUAAAAAHIACfy7DrfGSy-D6gW4k9HpADdI">
            <div style="width: 304px; height: 78px;">
              <div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ld3K6gUAAAAAHIACfy7DrfGSy-D6gW4k9HpADdI&amp;co=aHR0cHM6Ly9pczQuYmVsYWphci5rZW1kaWtidWQuZ28uaWQ6NDQz&amp;hl=en&amp;v=QENb_qRrX0-mQMyENQjD6Fuj&amp;theme=light&amp;size=normal&amp;cb=hazmj3jtmgmv" width="304" height="78" role="presentation" name="a-tab5xxzbpjxd" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
            </div>
          </div>
        </div>
        <p><small>Dengan klik tombol Daftar, anda sudah menyetujui syarat dan ketentuan di Portal Rumah Belajar</small></p>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-primary register">Daftar</button>
          <a href="/account/login/?redirectUrl=https://sumber.belajar.kemdikbud.go.id/">Sudah memiliki akun?</a>
        </div>
        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8KvRg8GcC9FCtXSekFHWLYKLa-XV-6mkzGzMXGYSJmC2KHUUlcfe5PbujUdUAT6Emyr6oqoZu3uXkPEwMIuCtgWP84dFz0P2oELqI6tkE2ru9rw7H3VJ_L1rCvn0kI3WUjsI3qCPT0wvgPwUvPsa9dNjDEe_LIBw5mNfM9wflwph_KX3Du_e6grD_wNYvCLlvw">
      </form>
    </div>
  </div>-->



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
                      <a class="btn bg-gradient-dark w-100 my-4 mb-2" href="<?php echo base_url('RRegist'); ?>">Next</a>
                    </ul>
                  </div>
                  <p class="text-sm mt-3 mb-0">Already have an account? <a href="<?php echo base_url('Login'); ?>" class="text-dark font-weight-bolder">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>



<!--div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
          <div class="nav-wrapper position-static end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                  <i class="ni ni-app"></i>
                  <span class="ms-2">Guru</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                  <i class="ni ni-email-83"></i>
                  <span class="ms-2">Siswa</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                  <i class="ni ni-settings-gear-65"></i>
                  <span class="ms-2">Admin</span>
                </a>
              </li>
            </ul>
          </div>
        </div>-->