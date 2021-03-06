<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ChatBox</title>
  <link rel="shortcut icon" type="image/x-icon" href="#" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/cbdab21907.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <div class="wrap">
    <section class="left">
      <div class="profile">
        <h4 class="recent">Recent</h4>
        <div class="icons">
        </div>
      </div>
      <div class="wrap-search">
        <div class="left-head">
          <h5>Machine Id=jscahud12293</h5>
        </div>
      </div>
      <div class="contact-list"></div>
    </section>
    <!-- the mid section start from here -->
    <section class="right">
      <div class="chat-head">
        <div class="chat-name">
          <h1 class="font-name"></h1>
          <p class="font-online"></p>
        </div>
      </div>
      <div class="wrap-chat">
        <div class="chat"></div>
      </div>
      <div class="wrap-message">
        <!-- <i class="fa fa-smile-o fa-lg" aria-hidden="true"></i> -->
        <div class="message" style="margin-left: 10px;" contenteditable="true" id="message">
          <textarea class="input-message" id="chat_msg_id" rows="10" columns="50"
            placeholder="write something here"> </textarea>
        </div>

        <i class="fa fa-paper-plane-o fa-lg" aria-hidden="true"></i>
        <i class="fa fa-paperclip fa-lg" aria-hidden="true"></i>


        <div class="dropdown " id="show">
          <button class="btn  dropdown-toggle button4" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button"></button>
            <hr>
            <button class="dropdown-item" type="button">Another action</button>
            <hr>
            <button class="dropdown-item" type="button">Something else here</button>
            <hr>
            <button class="dropdown-item" type="button">Another action</button>
            <hr>
            <button class="dropdown-item" type="button">Something else here</button>
          </div>
        </div>
      </div>
    </section>
    <!-- the mid section start from here -->

    <!-- the extreme right start from here -->
    <section class="righ-extrem">
      <div class="profile2">

        <!-- <h4 class="recent">Recent</h4> -->
        <div class="icons">
        </div>
      </div>
      <div class="wrap-search">
        <h5 class="right-head">Serial No.=XYZ123</h5>
      </div>
      <div class="contact-list-right">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <p class="info">Department</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Physical Location</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Total No. Of Calls=13</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Total Breakdown Time=3HR</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Total Breakdown Cost=1230/-</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Make ModelL</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Contract Info</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Maintenence Schedule Info</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Po Number</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Maintenence Schedule Info</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Maintenence Schedule Info</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Maintenence Schedule Info</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Maintenence Schedule Info</p>
              <hr>
            </div>
            <div class="col-md-12">
              <p class="info">Maintenence Schedule Info</p>
              <hr>
            </div>
          </div>
        </div>
    </section>
  </div>
  <script
    src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

  <script src="js/cmsLog.js"></script>

  <script id="rendered-js"></script>
</body>
</html>
    
    
    
    
    
    
    
    
