<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibe" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <!--Site Properties-->

    <title>Maid Finder PH</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/mycss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/assets/css/wodry.css') }}">
    <link rel="icon" href="{{ asset('semantic/assets/img/icon.png') }}">
    <script type="text/javascript" src="{{ asset('semantic/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('semantic/assets/js/wodry.min.js') }}"></script>
</head>
<body>
    <!------------------------------------Following Menu---------->
<div class="landfix ui  fixed hidden menu inverted borderless" style="margin-top:0px;background-color:#58C9B9;">
   <div class="left item">
            <img src="{{ asset('semantic/assets/img/icon.png') }}" alt="MaidFinder" class="image">
            <a  class="logo " href="#" style="font-family:DancingScript;weight:100;font-size:2.5em;"> <span  >MaidFinderPH </span></a>
   </div>
  <div class="ui container">
        <div class="right item">
            <a class="active item" href="/">Home</a>
            <a class="item" href="#"> Cities</a>
            <a class="item" href="#"> Find a Maid</a>
            <a class="item" href="#"> Get a Job</a>
                <div class="item">
                    <div class="ui buttons">
                      <a href="client/client-login.html">
                         <button class="ui button purple">
                            <i class="sign in icon"></i>Login
                         </button>
                       </a>
                    <div class="or"></div>
                        <button class="ui button green">
                            <i class="user icon"></i>Sign Up
                        </button>  
                    </div>
                </div>                         
        </div>
  </div>
</div>
 <!--------------------------sidebar------------------------>
    <div class="ui sidebar menu  container icon labeled vertical ">    
        <a class="item" href="#"><i class="global icon"></i> Cities</a>
        <a class="item" href="#"> Find a Maid</a>
        <a class="item" href="#"> Get a Job</a>
         <div class="item">
            <div class="ui buttons">
              <a href="user-login">
                    <button class="ui button purple">
                        <i class="sign in icon"></i>Login
                    </button>
              </a>
              <div class="or"></div>
              <a href="user-register">
                <button class="ui button green">
                      <i class="user icon"></i>Sign Up
                </button>  
              </a>
            </div>
        </div>            
    </div>
    <!---------------------------Main content------------------------>
    <div class="pusher">
        <div class="ui vertical aligned center masthead segment landing inverted">
            <div class="transbg">
                <div class="ui container">
                    <div class="ui secondary inverted top large pointing menu">
                        <div class="left item">
                            <a class="toc item">
                                <i class="sidebar icon"></i>
                            </a>
                        </div>
                        <div class="left item">
                            <a class="logo " href="#" ><span style="font-family:DancingScript, cursive;weight:100;font-size:2.5em" class="wodry">MaidFinderPH </span></a>
                        </div>
                        <div class="right item">
                            <a class="active item" href="/">Home</a> 
                            <a class="item" href="#"> Cities</a>
                            <a class="item" href="#"> Find a Maid</a>
                            <a class="item" href="#"> Get a Job</a>
                            <div class="item">
                                <div class="ui buttons">
                                  <a href="user-login">
                                        <button class="ui button purple">
                                            <i class="sign in icon"></i>Login
                                        </button>
                                   </a>
                                        <div class="or"></div>
                                    <a href="user-register">
                                        <button class="ui button green">
                                            <i class="user icon"></i>Sign Up
                                        </button> 
                                    </a> 
                                </div>
                             </div>                         
                        </div>
                    </div>
                </div>
            <div class="ui text container flip">
                <h1 class="ui header centered inverted" > Look up for a maid near you</h1>
                <div class="container fluid findbg">
                    <form class="ui form">
                        <div class="field">
                            <div class="fields">
                                <div class="eleven wide field">
                                    <div class="ui search location">
                                        <div class="ui left icon input">
                                            <i class="inverted circular blue map icon"></i>
                                            <input type="text" class="prompt" name="location" placeholder="Enter your location...">
                                        </div>
                                    </div>
                                </div>
                                <div class="three wide field ">
                                    <div class="ui selection dropdown">
                                        <div class="default text">Maid Type</div>
                                        <i class="dropdown icon"></i>
                                        <input type="hidden" name="ride">
                                        <div class="menu">
                                            <div class="item" data-value="private">Nanny</div>
                                            <div class="item" data-value="private">Babysitter</div>
                                            <div class="item" data-value="private">Petsitter</div>
                                            <div class="item" data-value="private">Adultsitter</div>
                                            <div class="item" data-value="2private">All around</div>
                                            <div class="item" data-value="3private">Aupair</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <button class="ui submit teal  container animated button" tabindex="0">
                                <div class="visible content">Let's Go</div>
                                <div class="hidden content"> Get intstant maid near to your place &nbsp; <i class="child icon"></i></div>
                            </button>
                          </div>
                       </form>
                   </div>
                </div>
            </div>
        </div>
    <!-----------First Page------------------->
    <!------------------Fixed sownload btn-------------------------->
        <div class="overlay dnl">
        <div class="ui inverted labeled icon vertical menu"  style="background-color:#D1B6E1">
          <a class="item "><i class=" download icon inverted" ></i> Download App</a>
        </div>
      </div>
  <div class="ui vertical stripe segment " id="hdiw"> 
      <div class="row">
         <h3 class="ui header center aligned  ">How does it work?</h3>
         <div class="ui container three column grid">
             <div class="column">
               <img class="ui small centered image" src="{{ asset('semantic/assets/img/city.png') }}">
               <p>Use our search to tell us what you need. See the profile of available maids or job in your city or area.</p>
            </div>
            <div class="column">
               <img class="ui small centered image" src="{{ asset('semantic/assets/img/shortlist.png') }}">
                <p>View the complete profile of the available maids or the jobs and shortlist as per your preferences.</p>
            </div>
            <div class="column">
              <img class="ui small centered image" src="{{ asset('semantic/assets/img/contact.png') }}">
                <p>Contact to the applied job or hired employee upon notifying them by clicking the Apply or Hire Button. You can get each contact number or send message through the app.</p>
            </div>
        </div>
    </div>
 </div>

 <div class="ui vertical stripe segment" style="background-color: rgb(225,238,246)" id="wwa">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">Join to find the right for you</h3>
          <p> MaidFinderPH is a platform for home care service finder for employer and job seeker.</p>
          <h3 class="ui header">Let us work while you unwind </h3>
          <p> Quamquam haec quidem praeposita recte et reiecta dicere licebit. Egone non intellego, quid sit don Graece, Latine voluptas? </p>
        </div>
        <div class="six wide right floated column">
          <img src="{{ asset('semantic/assets/img/babysitting_app.jpg') }}" class="ui large bordered rounded image">
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"You deserve a Break"</h3>
          <p> Quamquam haec quidem praeposita</p>
        </div>
        <div class="column">
          <h3>"Keep your free time free."</h3>
          <p>
            <img src="{{ asset('semantic/assets/img/bg1.jpg') }}" class="ui avatar image"> <b>Nan</b> Chief Fun Officer Acme Toys
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">No need to get far </h3>
      <p>Quamquam haec quidem praeposita recte et reiecta dicere licebit. Egone non intellego, quid sit don Graece, Latine voluptas?.</p>
      <a class="ui large button">Read More</a>
      <h4 class="ui horizontal header divider">
        <a href="#">Case Studies</a>
      </h4>
      <h3 class="ui header">It only take a click to find your matches</h3>
      <p>Yes I know you probably disregarded the earlier boasts as non-sequitor filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
      <a class="ui large button">I'm Still Quite Interested</a>
    </div>
  </div>
<!-------------------------Team-------------------->

 <div id="contact" class="ui vertical stripe segment "> 
    <div class="ui text container">
   <h3 class="ui header center aligned  ">Meet Our Team</h3>
 <div class="ui three column grid">
        <!-------------First Member-------------->
   <div class="column">
 
       <div class="ui special  ">
            <div class="blurring dimmable ui small circular image">
                <div class="ui dimmer">
                  <div class="content">
                    <div class="center">
                      <a href="https://www.facebook.com/ChaelLiann" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="facebook icon"></i>
                        </button>
                        </a>
                      <a href="#" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="github icon"></i>
                        </button>
                        </a>
                      <a href="#" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="linkedin icon"></i>
                        </button>
                        </a>                    
                  </div>
              </div>
        </div>
            <img src="{{ asset('semantic/assets/img/stevie.jpg') }}" class="ui small circular image" >
        </div>
      
        <div class="center">
            <div class="content">
                <a class="header ">Ian Aaron Manugas</a>
                  <div class="meta">
                  <span class="">&nbsp; System Analyst</span>
            </div>
          </div>
        </div>
      </div>

        </div>
          <!-------------Second Member-------------->
        <div class="column">
 
       <div class="card ">
            <div class="blurring dimmable ui small circular image">
                <div class="ui dimmer">
                  <div class="content">
                    <div class="center">
                      <a href="https://www.facebook.com/ChaelLiann" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="facebook icon"></i>
                        </button>
                        </a>
                      <a href="#" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="github icon"></i>
                        </button>
                        </a>
                      <a href="#" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="linkedin icon"></i>
                        </button>
                        </a>                    
                  </div>
              </div>
        </div>
            <img src="{{ asset('semantic/assets/img/stevie.jpg') }}" class="ui small circular image" >
        </div>
        <div class="center">
            <div class="content">
                <a class="header">Darwin Estardo</a>
                  <div class="meta">
                  <span class="date"> &nbsp; Project Manager</span>
            </div>
          </div>
        </div>
      </div>

        </div>
           <!------------Third Member-------------->
        <div class="column">
        
       <div class="card ">
            <div class="blurring dimmable ui small circular image">
                <div class="ui dimmer">
                  <div class="content">
                    <div class="center">
                      <a href="https://www.facebook.com/ChaelLiann" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="facebook icon"></i>
                        </button>
                        </a>
                      <a href="#" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="github icon"></i>
                        </button>
                        </a>
                      <a href="#" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="linkedin icon"></i>
                        </button>
                        </a>                    
                  </div>
              </div>
        </div>
            <img src="{{ asset('semantic/assets/img/stevie.jpg') }}" class="ui small circular image" >
        </div>
        <div class="center">
            <div class="content">
                <a class="header">Mark Anthony Mamogay </a>
                  <div class="meta">
                  <span class="aligned center ">&nbsp; UI/UX</span>
            </div>
          </div>
        </div>
      </div>

        </div>
           <!-------------------Fourth Member-------------->
        <div class="column">
        
       <div class="card ">
            <div class="blurring dimmable ui small circular image">
                <div class="ui dimmer">
                  <div class="content">
                    <div class="center">
                      <a href="https://www.facebook.com/ChaelLiann" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="facebook icon"></i>
                        </button>
                        </a>
                      <a href="#" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="github icon"></i>
                        </button>
                        </a>
                      <a href="#" target="_blank"> 
                        <button class="ui circular small inverted standard icon button">
                        <i class="linkedin icon"></i>
                        </button>
                        </a>                    
                  </div>
              </div>
        </div>
            <img src="{{ asset('semantic/assets/img/stevie.jpg') }}" class="ui small circular image" >
        </div>
        <div class="center">
            <div class="content">
                <a class="header">Rusel Tayong</a>
                  <div class="meta">
                  <span class="date">Software Engineer</span>
            </div>
          </div>
        </div>
      </div>

        </div>
        
           <!--------------Fifth Member-------------->
        <div class="column">
          <div class="card ">
                <div class="blurring dimmable ui small circular image">
                    <div class="ui dimmer">
                      <div class="content">
                        <div class="center">
                          <a href="https://www.facebook.com/ChaelLiann" target="_blank"> 
                            <button class="ui circular small inverted standard icon button">
                            <i class="facebook icon"></i>
                            </button>
                            </a>
                          <a href="#" target="_blank"> 
                            <button class="ui circular small inverted standard icon button">
                            <i class="github icon"></i>
                            </button>
                            </a>
                          <a href="#" target="_blank"> 
                            <button class="ui circular small inverted standard icon button">
                            <i class="linkedin icon"></i>
                            </button>
                            </a>                    
                      </div>
                  </div>
            </div>
                <img src="{{ asset('semantic/assets/img/stevie.jpg') }}" class="ui small circular image" >
            </div>
            <div class="center">
                <div class="content">
                    <a class="header">Jolly Ann Dolloso</a>
                      <div class="meta">
                      <span class="date">UI/UX/QA Tester</span>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-------------Sixth Member-------------->
        <div class="column">
           <div class="card ">
                <div class="blurring dimmable ui small circular image">
                    <div class="ui dimmer">
                      <div class="content">
                        <div class="center">
                          <a href="https://www.facebook.com/ChaelLiann" target="_blank"> 
                            <button class="ui circular small inverted standard icon button">
                            <i class="facebook icon"></i>
                            </button>
                            </a>
                          <a href="#" target="_blank"> 
                            <button class="ui circular small inverted standard icon button">
                            <i class="github icon"></i>
                            </button>
                            </a>
                          <a href="#" target="_blank"> 
                            <button class="ui circular small inverted standard icon button">
                            <i class="linkedin icon"></i>
                            </button>
                            </a>                    
                      </div>
                  </div>
            </div>
                <img src="{{ asset('semantic/assets/img/stevie.jpg') }}" class="ui small circular image" >
            </div>
            <div class="center">
                <div class="content">
                    <a class="header">Lourence Rex Traya</a>
                      <div class="meta">
                      <span class="date">Software Engineer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
 </div>
<!---------------------THIS IS FOOTER-------------------------------->
 <div class="ui inverted vertical footer segment" style="background-color:#009688">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#wwa" class="item" >Who we are?</a>
            <a href="#contact" class="item" >Contact Us</a>
          </div>
           <p class="ui inverted"> <i class="copyright icon">MaidProviderPH  2016</i></p>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Features</h4>
          <div class="ui inverted link list">
            <a href="#hdiw" class="item">How does it work?</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Get the App</h4>
          <button class="ui inverted purple  button "><i class="download icon"></i>Download</button>
          <h4>Connect with Us</h4>
          <button class="ui circular facebook icon button">
             <i class="facebook icon"></i>
          </button>
          <button class="ui circular twitter icon button">
            <i class="twitter icon"></i>
          </button>
          <button class="ui circular linkedin icon button">
            <i class="linkedin icon"></i>
          </button>
          <button class="ui circular instagram icon button">
            <i class="instagram icon"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="{{ asset('semantic/assets/js/semantic.min.js') }}"></script>
    <script src="{{ asset('semantic/assets/js/myjs.js') }}"></script> 
</body>
</html>