@extends('layouts.base_with_header_login')
@section('title', 'ログイン')
@section('content')
  <main>
    <div class="login__content">
      <h2 class="login__title">Login</h2>
      <form class="login__form" action="/login" method="post">
        @csrf
        <p>メールアドレス</p>
        <input type="email" name="email" value="" placeholder="例: test@example.com">
        <p>パスワード</p>
        <input type="password" name="password" value="" placeholder="例: coachtech1106">
        <button class="c-btn c-btn--login" type="submit">ログイン</button>
      </form>
    </div>
  </main>
@endsection