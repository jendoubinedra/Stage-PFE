<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-light.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                       

                       
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </header>
@include('admin.menu')
<!Doctype html>
<head>
 <!-- App favicon -->
 <link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- Bootstrap Css -->
<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

</head>
<style>
     {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}
body {
  background-color: blanchedalmond;
  width: 90vw;
  /*     height: 150vh; */
}
form {
  position: absolute;
  width: 100%;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
}
input::placeholder {
  font-family: sans-serif;
}
textarea::placeholder {
  font-family: sans-serif;
}
.contact_form {
  display: flex;
  flex-direction: column;
  max-width: 600px;
  margin: auto;
  justify-content: center;
  align-items: center;
}
.contact_form .inp {
  width: 70%;
  margin: 10px auto;
  padding: 4px 13px;
  outline: none;
  border-radius: 5px;
  border: none;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  height: 40px;
}
.text_area {
  width: 70%;
  margin: 10px auto;
  padding: 13px 13px;
  outline: none;
  border-radius: 5px;
  border: none;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  resize: none;
}
.submit_btn {
  width: 70%;
  margin: 10px auto;
  padding: 13px 13px;
  outline: none;
  border-radius: 5px;
  border: none;
  background-color: black;
  color: white;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
</style>
<body>
    <form action="http://127.0.0.1:5000/form-send?to=" method="post">
        <div class="contact_form">
          <input required placeholder="Name" class="name inp" type="name" name="name">
          <input required placeholder="Email" class="email inp" type="email" name="email">
          <input required placeholder="Phone Number" class="p_number inp" type="phone" name="phone">
          <input required placeholder="Subject" class="subj_ect inp" name="subject" type="text" />
          <textarea required name="message" placeholder="Message .." rows="10" class="text_area"></textarea>
          <button class="submit_btn">Send</button>
      </form>
</body>
<script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
</html>

