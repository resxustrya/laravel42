



<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <div class="col s12">
                    <a href="/" class="brand-logo">
                            <span>
                                MaidFinderPH - Admin page
                            </span>
                    </a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">=</i></a>
                    <ul class="right hide-on-med-and-down">
                       
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/">Home</a></li>
                        @if(Session::get('adminheader'))
                            <li> <span>{{ $user->firstname}}</span></span> {{ $user->lastname}} </span></li>
                            <li><a href="{{ URL::action('HomeController@userlogout') }}">Logout</a></li>
                        @endif
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li>
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" placeholder="Search Jobs" required>
                                    <label for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </li>
                        <li><a href="badges.html">Component</a></li>
                        <li><a href="register">Register</a></li>
                        <li><a href="login">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">Employee</a></li>
    <li><a href="/register-employee">Applicant</a></li>
</ul>

<!-- Login modal Structure -->
<div id="modal1" class="modal container">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>