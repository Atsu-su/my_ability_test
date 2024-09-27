@extends('layouts.base_with_header')
@section('title', 'お問い合わせ')
@section('content')
  <main>
    <div class="contact-form__content">
      <h2 class="contact-form__title">Contact</h2>
      <form action="" method="post">
        <table class="contact-form__table">
          <tr class="contact-form__name">
            <th>お名前<span class="necessary">※</span></th>
            <td><input type="text" name="last_name" value="{{ old('last_name') ?? session('confirm') }}" placeholder="例: 山田"><input type="text" name="first_name" placeholder="例: 太郎"></td>
          </tr>
          <tr class="contact-form__gender">
            <th>性別<span class="necessary">※</span></th>
            <td>
                <input id="option1" type="radio" name="gender">
                <label for="option1">男性</label>
                <input id="option2" type="radio" name="gender">
                <label for="option2">女性</label>
                <input id="option3" type="radio" name="gender">
                <label for="option3">その他</label>
              </td>
          </tr>
          <tr class="contact-form__email">
            <th>メールアドレス<span class="necessary">※</span></th>
            <td><input type="text" name="email" placeholder="例: test@example.com"></td>
          </tr>
          <tr class="contact-form__tel">
            <th>電話番号<span class="necessary">※</span></th>
            <td>
              <input type="text" name="tel[]" placeholder="080"><span>-</span><input type="text" name="tel[]" placeholder="1234"><span> -</span><input type="text" name="tel[]" placeholder="5678">
            </td>
          </tr>
          <tr class="contact-form__address">
            <th>住所<span class="necessary">※</span></th>
            <td><input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3"></td>
          </tr>
          <tr class="contact-form__building">
            <th>建物名</th>
            <td><input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101"></td>
          </tr>
          <tr class="contact-form__category">
            <th>お問い合わせの種類<span class="necessary">※</span></th>
            <td>
              <select name="category_id">
                <option value="">選択してください</option>
                <option value="1">カテゴリ1</option>
                <option value="2">カテゴリ2</option>
                <option value="3">カテゴリ3</option>
              </select>
            </td>
          </tr>
          <tr class="contact-form__detail">
            <th>お問い合わせ内容<span class="necessary">※</span></th>
            <td><textarea name="detail"></textarea></td>
          </tr>
        </table>
        <button class="contact-form__btn c-btn c-btn--contact-form" type="submit">確認画面</button>
      </form>
    </div>
  </main>
@endsection