@extends('layouts.base_with_header_register')
@section('title', '登録')
@section('content')
  <main>
    <div class="register__content">
      <h2 class="register__title">Register</h2>
      <form class="register__form" action="" method="post">
        @csrf
        <p class="register__name">お名前</p>
        <input type="text" name="name" value="" placeholder="例: 山田太郎">
        @error('name')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <p class="register__email">メールアドレス</p>
        <input type="text" name="email" value="" placeholder="例: test@example.com">
        @error('email')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <p class="register__password">パスワード</p>
        <input type="password" name="password" value="" placeholder="例: coachtech1106">
        @error('password')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <button class="register__button c-btn c-btn--register" type="submit">登録</button>
      </form>
    </div>
  </main>
@endsection