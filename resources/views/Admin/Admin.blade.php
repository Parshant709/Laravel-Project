<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <title>Hello, world!</title>
  </head>
  <body class="bg-right">
    <div class="container-fluid mt-5"> 
      <div class="row">
        <div class=" col-md-10 col-11 mx-auto">
          <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bg-common">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile settings</li>
            </ol>
          </nav>
          <div class="row">
            <!-- left side data -->
            <div class="col-lg-3 col-md-4 d-md-block">
              <div class="card bg-common card-left bg-common">
                <div class="card-body">
                  <nav class="nav d-md-block d-none">
                    <a data-toggle='tab' class="nav-link active" href="#profile">
                      <i class="fas fa-user mr-1"></i>Profile</a>
                    <a data-toggle='tab' class="nav-link" href="#account">
                      <i class="fas fa-user-cog mr-1"></i>Account settings</a>
                    <a data-toggle='tab'class="nav-link" href="#security">
                      <i class="fas fa-user-shield mr-1"></i>Security</a>
                    <a data-toggle='tab'class="nav-link" href="#notification">
                      <i class="fas fa-bell mr-1"></i>Notification</a>
                    <a data-toggle='tab'class="nav-link" href="#billing">
                      <i class="fas fa-money-check-alt mr-1"></i>Billing</a>
                    
                    
                  </nav>
                </div>
              </div>
            </div>
            <!-- Right side panel -->
            <div class="col-lg-8 col-md-9">
              <div class="card">
                <div class="card-header border-bottom mb-3 d-md-none">
                  <ul class="nav nav-tabs card-header nav-fill">
                    <li class="nav-item">
                      <a data-toggle="tab" class="nav-link active" href="#profile">
                        <i class="fas fa-user mr-1"></i></a>
                    </li>
                    <li class="nav-item">
                      <a data-toggle="tab" class="nav-link" href="#security">
                        <i class="fas fa-user-cog mr-1"></i></a>
                    </li>
                    <li class="nav-item">
                      <a data-toggle="tab" class="nav-link" href="#account">
                        <i class="fas fa-user-shield mr-1"></i></a>
                    </li>
                    <li class="nav-item">
                      <a data-toggle="tab" class="nav-link" href="#notification">
                        <i class="fas fa-bell mr-1"></i></a>
                    </li>
                    <li class="nav-item">
                      <a data-toggle="tab" class="nav-link" href="#billing">
                        <i class="fas fa-money-check-alt mr-1"></i></a>
                    </li>
                    
                  </ul>
                </div>
                <!-- User profile Starts -->
                <div class="card-body tab-content border-0">
                  <!-- Actual profile data -->
                  <div class="tab-pane active" id="profile">
                    <h6>YOUR PROFILE INFORMATION</h6>
                    <hr>
                    
                  </div>
                  <div class="tab-pane" id="account">
                    <h6>ACCOUNT SETTINGS</h6>
                    <form>
                       <div class="mb-3">
                         <label for="exampleFormControlInput1" class="form-label">Username</label>
                         <input type="email" class="form-control" placeholder="User name here">
                         <small class="form-text text-muted">After changing your username, your old username becomes availabel for anyone else to claim.</small>
                         </div>
                    </form>
                    <form>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-danger">Delete Account</label>
                        <p class="text-muted">Once you delete your Account there is no going back. Please be certain.</p>
                        </div>
                        <br>
                        <button class="btn btn-danger" type="button">Delete Your Account</button>
                   </form>
                  </div>
                  <div class="tab-pane" id="security">
                    <h6>SECURITY SETTINGS</h6>
                    <form>
                       <div class="mb-3">
                         <label for="exampleFormControlInput1" class="form-label">Change Password</label>
                         <input type="password" class="form-control" placeholder="Your Current Password"><br>
                         <input type="password" class="form-control" placeholder="Your new Password">
                         <input type="password" class="form-control" placeholder="confirm new  Password">

                         </div>
                    </form>
                    <hr>
                    <form action="">
                      <div class="form-group">
                        <label class="d-block">Two Factor Authentication</label>
                        <button class="btn btn-outline-info" type="submit">Enable two-factor Authentication </button>
                        <p class="text-muted small"> Two-factor authentication adds on additional layer of security to your account by requiring more then just a  password to login.</p>

                      </div>
                    </form>
                    <hr>
                    <form action="">
                      <div class="form-group">
                        <label class="d-block">Sessions</label>
                        
                        <p class="text-muted small">This is a list of devices that have logged in to your account. Revoke any sessions that you do not recognize.</p>
                      </div>
                      <ul class="list-group">
                        <li class="list-group-item">
                          <div>
                            <h6>Allitiute 9782845.54558455</h6>
                            <small class="text-muted">your current session seen in _______</small>
                          </div>
                          <button class="btn btn-light btn-sm ml-auto" type="button">More info</button>
                        </li>

                      </ul>
                    </form>
                  </div>
                  <!-- Notification part goes here -->
                  <div class="tab-pane" id="notification">
                    <h6>NOTIFICATION SETTINGS</h6>
                    <form>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Security Alerts</label>
                        <small class="form-text text-muted">Recive Sercurity Alerts</small>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Default checkbox
                          </label>
                        </div>
                        </div>
                   </form>
                  </div>
                  <!-- Billing part goes here -->
                  <div class="tab-pane" id="notification">

                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    

    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>