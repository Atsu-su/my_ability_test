@extends('layouts.base_with_header')
@section('title', '入力確認')
@section('content')
  <main>
    <div class="confirm__content">
      <h2 class="confirm__title">Confirm</h2>
      <form action="" method="post">
        <table class="confirm__table">
          <tr class="confirm__name">
            <th>お名前</span></th>
            <td>山田</td>
          </tr>
          <tr class="confirm__gender">
            <th>性別</th>
            <td>男性</td>
          </tr>
          <tr class="confirm__email">
            <th>メールアドレス</th>
            <td>mail</td>
          </tr>
          <tr class="confirm__tel">
            <th>電話番号</th>
          <td>1234567890</td>
          </tr>
          <tr class="confirm__address">
            <th>住所</th>
            <td>あのまち</td>
          </tr>
          <tr class="confirm__building">
            <th>建物名</th>
            <td>この建物</td>
          </tr>
          <tr class="confirm__category">
            <th>お問い合わせの種類</th>
            <td>あれ？</td>
          </tr>
          <tr class="confirm__detail">
            <th>お問い合わせ内容</th>
            <td>忘れた</td>
          </tr>
        </table>
        <div class="confirm__links">
          <button class="c-btn c-btn--confirm" type="submit">送信</button>
          <a class="confirm__link" href="">修正</a>
        </div>
      </form>
    </div>
  </main>
@endsection