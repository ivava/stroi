<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/home') }}">Строевая<br>записка</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav text-center">
                <li class="active"><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i><br>Обновить</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i><br>Развернуть</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i><br>Свернуть</a></li>
                <li class="border"></li>
                <li><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Добавить</a></li>
                <li><a href="#"><i class="fa fa-times-circle" aria-hidden="true"></i><br>Удалить</a></li>
                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i><br>Запомнить</a></li>
                <li class="border"></li>
                <li><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i><br>Отчеты</a></li>
                <li><a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i><br>Запрос</a></li>
                <li class="border"></li>
                <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><br>Выбор задачи</a></li>


            </ul>
            <form class="navbar-form navbar-right" role="search">
               <ul class="nav">
                   @if (Auth::guest())
                       <li><a href="{{ url('/login') }}">Войти</a></li>
                       <li><a href="{{ url('/register') }}">Зарегистрироваться</a> </li>
                       @else
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               {{ Auth::user()->name }} <span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu" role="menu">
                               <li>
                                   <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                                   document.getElementById('logout-form').submit();">
                                       Выйти
                                   </a>
                                   <form id="logout-form" action="{{ url('/logout') }}" method="post" style="display: none;">
                                       {{ csrf_field() }}
                                   </form>
                               </li>
                           </ul>
                       </li>
                   @endif
               </ul>
            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>