<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Admin - Dashboard</title>
   <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/mycss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/wodry.css') }}">
    <link rel="icon" href="{{ asset('semantic/assets/img/icon.png') }}">
    <script type="text/javascript" src="{{ asset('semantic/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('semantic/assets/js/semantic.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('semantic/assets/js/wodry.min.js') }}"></script>
</head>
<body>
<!-------top bar-------->
<div class="ui top attached demo menu inverted fixed dashfix borderless" style="background-color:#004e66;" >
  <a class="item topNav">
    <i class="bar sidebar icon"></i> 
     <img src="/assets/img/icon.png" alt="MaidFinderPH">
  </a>
  <a href="" class="item logo ">
      <span style="font-family:Dancing Script, cursive;weight:100;font-size:2em">MaidFinderPH </span>
  </a>
  <div class="ui container">
 <div class="right item ">
 <div class="ui item icon top left pointing dropdown button">
  <i class="icon mail"></i>
      <div class="floating ui red label">22</div>
  <div class="menu">
    <div class="ui item feed">
    <div class="event">
      <div class="label">
        <img src="/assets/img/stevie.jpg">
      </div>
      <div class="content">
        <div class="summary">
          <a class="user">
            Elliot Fu
          </a> added you as a friend
          <div class="date">
            1 Hour Ago
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="ui divider"></div>
       <div class="ui item feed">
    <div class="event">
      <div class="label">
        <img src="/assets/img/stevie.jpg">
      </div>
      <div class="content">
        <div class="summary">
          <a class="user">
            Elliot Fu
          </a> added you as a friend
          <div class="date">
            1 Hour Ago
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="ui divider"></div>
    <div class="ui center aligned">
      <a href="#" class="item blue" style="color: #0E6EB8;"><u ><center>See More</center></u></a>
    </div>
    
  </div>
</div>
       <div class="ui item icon top left pointing dropdown button">
  <i class="bell icon"></i>
      <div class="floating ui red label">1</div>
  <div class="menu">
    <div class="ui item feed">
    <div class="event">
      <div class="label">
        <img src="/assets/img/stevie.jpg">
      </div>
      <div class="content">
        <div class="summary">
          <a class="user">
            Elliot Fu
          </a> added you as a friend
          <div class="date">
            1 Hour Ago
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="ui divider"></div>
       <div class="ui item feed">
    <div class="event">
      <div class="label">
        <img src="/assets/img/stevie.jpg">
      </div>
      <div class="content">
        <div class="summary">
          <a class="user">
            Elliot Fu
          </a> added you as a friend
          <div class="date">
            1 Hour Ago
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="ui divider"></div>
    <div class="ui center aligned">
       <a href="#" class="item blue" style="color: #0E6EB8;"><u ><center>See More</center></u></a>
    </div>
    
  </div>
</div>
     <div class="item">
        <img class="ui avatar image" src="/assets/img/stevie.jpg">
        <div class="content">
        <a href="#" class="header ">Admin</a>
    </div>
    </div>
      <a class="item"><i class="sign out icon large" style="color:#ff5f2e"></i>Logout</a>
    </div>

  </div>
   
</div>
<div class="ui main container">
  
</div>
<div class="dashSide ui seg bottom attached segment" style="margin-top:5em;">
  <div class="ui large labeled icon left inline vertical demo bar sidebar menu" style="background-color:rgba(0,78,102,.2);">
    <a class="active item">
    <div class="ui small teal label">1</div>
    Inbox
  </a>
  <a class="item">
    <div class="ui small label">51</div>
    Notification
  </a>
  <a class="item">
    Report
  </a>
  </div>
  <!------------------------------Content ------------------------->
  <div class="pusher pCon"> 
    <div class="ui basic segment">
        <div class="ui large breadcrumb">
          <a class="section"><i class="home icon"></i>Home</a>
          <span class="divider">/</span>
          <a class="section"><i class="user icon"></i>Admin</a>
          <span class="divider">/</span>
          <div class="active section"><i class="dashboard icon"></i>Dashboard</div>
        </div>
        <div class="ui link cards  ">
        <div class="card">
           <div class="dashCard">
             <center>
              <div class="content  ">
                <h2 class="ui icon header">
                  <i class="spy icon"></i>
                  <div class="content">
                    Admin Staff Account
                  </div>
                </h2>
              </div>
             </center>
          <div class="ui bottom attached teal button">
              <i class="pointing right icon"></i>
          </div>
        </div>
        </div>
       
        <div class="card">
           <div class="dashCard">
             <center>
              <div class="content  ">
                  <h2 class="ui icon header">
                    <i class="Users icon"></i>
                    <div class="content">
                      Employer Account 
                    </div>
                  </h2>
                </div>
             </center>
          <div class="ui bottom attached teal button">
              <i class="pointing right icon"></i>
          </div>
        </div>
        </div>
        <div class="card">
           <div class="dashCard">
             <center>
                <div class="content  ">
                <h2 class="ui icon header">
                  <i class="Female icon"></i>
                  <div class="content">
                    Job Seeker Account 
                  </div>
                </h2>
              </div>
             </center>
          
          <div class="ui bottom attached teal button">
              <i class="pointing right icon"></i>
          </div>
        </div>
        </div>
          <div class="card">
           <div class="dashCard">
             <center>
              <div class="content  ">
                <h2 class="ui icon header">
                  <i class="calendar icon"></i>
                  <div class="content">
                    Job Posting
                  </div>
                </h2>
              </div>
              </center>
          <div class="ui bottom attached teal button">
              <i class="pointing right icon"></i>
          </div>
        </div>
        </div>
        <div class="card">
              <div class="dashCard">
                <center>
                  <div class="ui content">
                    <h2 class="ui icon  header">
                      <i class="Feed icon"></i>
                      <div class="content">
                        Subscription Plan
                      </div>
                    </h2>
                  </div>
              </center>
              <div class="ui bottom attached teal button">
                  <i class="pointing right icon"></i>
              </div>
            </div>
            </div>
      </div>
  </div>
 
</div>
</div>

 <!---------------------THIS IS FOOTER-------------------------------->
 <div class="ui bottom fixed footer" style="bottom:0;position:fixed;width:100%">
  <div class="ui  padded footer  grid" >
  <div class="grey row">
      <div class="column"><i class="icon copyright"></i>2016 MaidFinderPH</div>
  </div>
  </div>
</div>
 
<script>
 $('.ui.sidebar').sidebar({
    context: $('.seg.bottom.segment')
  })
  .sidebar('attach events', '.menu .item.topNav');
 $('.ui.dropdown')
  .dropdown()
;
</script>
</body>
</html>