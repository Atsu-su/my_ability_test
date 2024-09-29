@php
  if ($btn_name === 'login') {
    $route =  '/login';
  } elseif ($btn_name === 'register') {
    $route = '/register';
  } else {
    $route = '/logout';
  }
@endphp
<header class="header-admin">
  <div class="header-admin__inner">
    <span>FashionablyLate</span>
  </div>
  @if ($btn_name === 'logout')
    <form class="header-admin__form" action="{{ $route }}" method="post">
      @csrf
      <button class="c-btn c-btn--header-{{ $btn_name }}" type="submit">{{ $btn_name }}</button>
    </form>
  @else
    <div class="header-admin__link">
      <a class="c-btn c-btn--header-{{ $btn_name }}" href="{{ $route }}">{{ $btn_name }}</a>
    </div>
  @endif
</header>