@extends('layouts.base_with_header_login')
@section('title', 'ログイン')
@section('content')
  <main>
    <div class="login__content">
      <h2 class="login__title">Login</h2>
      <form class="login__form" action="/login" method="post">
        @csrf
        <p class="login__form-mail">メールアドレス</p>
        <input type="text" name="email" value="" placeholder="例: test@example.com">
        @error('email')
          <p class="error-message">{{ $message }}</p>
        @enderror
        <p class="login__form-password">パスワード</p>
        <input type="password" name="password" value="" placeholder="例: coachtech1106">
        @error('password')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <button class="login__button c-btn c-btn--login" type="submit">ログイン</button>
      </form>
    </div>
  </main>
@endsection