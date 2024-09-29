@extends('layouts.base_with_header')
@section('title', 'お問い合わせ')
@section('content')
  <main>
    <div class="contact-form__content">
      <h2 class="contact-form__title">Contact</h2>
      <form action="{{ route('contact.confirm') }}" method="post">
        @csrf
        <table class="contact-form__table">
          <tr class="contact-form__name">
            <th>お名前<span class="necessary">※</span></th>
            <td>
              <div class="contact-form__last-name">
                <input type="text" name="last_name" value="{{ old('last_name', $data['last_name'] ?? '') }}" placeholder="例: 山田">
                @error('last_name')
                  <p class="error-message">{{ $message }}</p>
                @enderror
              </div>
              <div class="contact-form__first-name">
                <input type="text" name="first_name" value="{{ old('first_name', $data['first_name'] ?? '') }}" placeholder="例: 太郎">
                @error('first_name')
                  <p class="error-message">{{ $message }}</p>
                @enderror
              </div>
            </td>
          </tr>
          <tr class="contact-form__gender">
            <th>性別<span class="necessary">※</span></th>
            <td>
              <div class="contact-form__gender-radio-btn">
                <input id="option1" type="radio" value="1" name="gender" {{ old('gender', $data['gender'] ?? '1') === '1' ? 'checked' : '' }}>
                <label for="option1">男性</label>
                <input id="option2" type="radio" value="2" name="gender" {{ old('gender', $data['gender'] ?? '') === '2' ? 'checked' : '' }}>
                <label for="option2">女性</label>
                <input id="option3" type="radio" value="3" name="gender" {{ old('gender', $data['gender'] ?? '') === '3' ? 'checked' : '' }}>
                <label for="option3">その他</label>
              </div>
              @error('gender')
                <p class="error-message">{{ $message }}</p>
              @enderror
            </td>
          </tr>
          <tr class="contact-form__email">
            <th>メールアドレス<span class="necessary">※</span></th>
            <td>
              <input type="text" name="email" value="{{ old('email', $data['email'] ?? '') }}" placeholder="例: test@example.com">
              @error('email')
                <p class="error-message">{{ $message }}</p>
              @enderror
            </td>
          </tr>
          <tr class="contact-form__tel">
            <th>電話番号<span class="necessary">※</span></th>
            <td>
              <div class="contact-form__tel-form">
                <input type="text" name="tel[]" value="{{ old('tel.0', $data['tel'][0] ?? '') }}" placeholder="080">
                <span>-</span>
                <input type="text" name="tel[]" value="{{ old('tel.1', $data['tel'][1] ?? '') }}" placeholder="1234">
                <span> -</span>
                <input type="text" name="tel[]" value="{{ old('tel.2', $data['tel'][2] ?? '') }}" placeholder="5678">
              </div>
              @error('tel.*')
                <p class="error-message">{{ $message }}</p>
              @enderror
            </td>
          </tr>
          <tr class="contact-form__address">
            <th>住所<span class="necessary">※</span></th>
            <td>
              <input type="text" name="address" value="{{ old('address', $data['address'] ?? '') }}" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
              @error('address')
                <p class="error-message">{{ $message }}</p>
              @enderror
            </td>
          </tr>
          <tr class="contact-form__building">
            <th>建物名</th>
            <td>
              <input type="text" name="building" value="{{ old('building', $data['building'] ?? '')}}" placeholder="例: 千駄ヶ谷マンション101">
              @error('building')
                <p class="error-message">{{ $message }}</p>
              @enderror
            </td>
          </tr>
          <tr class="contact-form__category">
            <th>お問い合わせの種類<span class="necessary">※</span></th>
            <td>
              <select name="category_id">
                <option value="" {{ old('category_id', $data['category_id'] ?? '') === null ? 'selected' : '' }}>選択してください</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}" {{ old('category_id', $data['category_id'] ?? '') == $category->id ? 'selected' : '' }}>{{ $category->content }}</option>
                @endforeach
              </select>
              @error('category_id')
                <p class="error-message">{{ $message }}</p>
              @enderror
            </td>
          </tr>
          <tr class="contact-form__detail">
            <th>お問い合わせ内容<span class="necessary">※</span></th>
            <td>
              <textarea name="detail">{{ old('detail', $data['detail'] ?? '') }}</textarea>
              @error('detail')
                <p class="error-message">{{ $message }}</p>
              @enderror
            </td>
          </tr>
        </table>
        <button class="contact-form__btn c-btn c-btn--contact-form" type="submit">確認画面</button>
      </form>
    </div>
  </main>
@endsection