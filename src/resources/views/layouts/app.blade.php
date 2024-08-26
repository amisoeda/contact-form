<!-- ログアウト機能 -->
 <form class="form" action="/logout" method="post">
     @csrf
<button class="header-nav__button">ログアウト</button>
</form>
<ul class="header-nav">
 @if (Auth::check())
  <li class="header-nav__item">
    <a class="header-nav__link" href="/admin">管理画面</a>
  </li>
  <li class="header-nav__item">
    <form action="/admin" method="post">
      @csrf
      <button class="header-nav__button">ログアウト</button>
    </form>
  </li>
 @endif
</ul>