@extends('layouts.base_with_header_register')
@section('title', '登録')
@section('content')
  <main>
    <div class="register__content">
      <h2 class="register__title">Register</h2>
      @if ($errors->any())
        <div class="error-message">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form class="register__form" action="" method="post">
        @csrf
        <p>お名前</p>
        <input type="text" name="name" value="" placeholder="例: 山田太郎">
        <p>メールアドレス</p>
        <input type="email" name="email" value="" placeholder="例: test@example.com">
        <p>パスワード</p>
        <input type="password" name="password" value="" placeholder="例: coachtech1106">
        <button class="c-btn c-btn--register" type="submit">登録</button>
      </form>
    </div>
  </main>
@endsection