<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">  
  <div class="container">
  
         <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="pagemark/public/" class="navbar-brand">Pagemarks</a>
        </div>
        <div class="navbar-collapse collapse">
            
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                    @if(Auth::user())
                     {{ HTML::link('logout','Logout') }}
                   @else
                     {{ HTML::link('login','Login') }}
                   @endif
               </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!-- /.container -->
</div><!-- /.navigaton -->