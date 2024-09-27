<header class="header-admin">
  <div class="header-admin__inner">
    <span>FashionablyLate</span>
  </div>
  <form class="header-admin__form" action="" method="post">
    @csrf
    <button class="c-btn c-btn--header-{{ $btn_name }}" type="submit">{{ $btn_name }}</button>
  </form>
</header>