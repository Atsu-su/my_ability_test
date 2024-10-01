@extends('layouts.base_with_header')
@section('title', '入力確認')
@section('content')
  <main>
    <div class="confirm__content">
      <h2 class="confirm__title">Confirm</h2>
      <form action="{{ route('contact.store') }}" method="post">
        @csrf
        <table class="confirm__table">
          <tr class="confirm__name">
            <th>お名前</span></th>
            <td>{{ $last_name }}&emsp;{{ $first_name }}</td>
          </tr>
          <tr class="confirm__gender">
            <th>性別</th>
            <td>
              @if ($gender === '1')
                男性
              @elseif ($gender === '2')
                女性
              @else
                その他
              @endif
            </td>
          </tr>
          <tr class="confirm__email">
            <th>メールアドレス</th>
            <td>{{ $email }}</td>
          </tr>
          <tr class="confirm__tel">
            <th>電話番号</th>
          <td>{{ $tel[0] }}-{{ $tel[1] }}-{{ $tel[2] }}</td>
          </tr>
          <tr class="confirm__address">
            <th>住所</th>
            <td>{{ $address }}</td>
          </tr>
          <tr class="confirm__building">
            <th>建物名</th>
            <td>{{ $building }}</td>
          </tr>
          <tr class="confirm__category">
            <th>お問い合わせの種類</th>
            <td>{{ $category }}</td>
          </tr>
          <tr class="confirm__detail">
            <th>お問い合わせ内容</th>
            <td>{{ $detail }}</td>
          </tr>
        </table>
        <div class="confirm__links">
          <button class="c-btn c-btn--confirm" type="submit">送信</button>
          <a class="confirm__link" href="{{ route('contact.index') }}">修正</a>
        </div>
      </form>
    </div>
  </main>
@endsection