<nav class="navbar navbar-default shadow" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header col-lg-3 col-md-3">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/home') }}"><span>Строевая<br>записка</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse col-md-9 col-lg-9" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav text-center">
                <li><a href={{ url('/tasks/add') }}><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Создать задачу</a></li>
                <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i><br>Обновить</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i><i class="fa fa-arrow-circle-up" aria-hidden="true"></i><br>Развернуть/<br>Свернуть</a></li>
                <li><a href={{ url('/regions/create') }}><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Добавить</a></li>
                <li><a href={{ url('/regions/') }}><i class="fa fa-times-circle" aria-hidden="true"></i><br>Удалить</a></li>
                <li class="margin_50"></li>
                <li><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i><br>Отчеты</a></li>
                <li><a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i><br>Запрос</a></li>
                <li class="li_last"><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><br>Выбор <br>задачи</a></li>


            </ul>
            <div class="navbar-form navbar-right" role="search">
               <ul class="nav">
                   @if (Auth::guest())
                       <li><a href="{{ url('/login') }}">Войти</a></li>
                       <li><a href="{{ url('/register') }}">Регистрация</a> </li>
                       @else
                       <li class="dropdown">
                           <a href="{{ url('/logout') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               <div class="user_info_head">
                                   {{ Auth::user()->name }} <br>
                                   {{ $region->name  or '' }}
                               </div>
                               <span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu shadow" role="menu">
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
            </div>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>