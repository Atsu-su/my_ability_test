@extends('layouts.base_with_header_admin')
@section('title', '管理画面')
@section('content')
  <main>
    <div class="admin__content">
      <h2 class="admin__title">Admin</h2>
      <form class="admin__search" action="" method="post">
        <input type="text" name="name_email" placeholder="名前やメールアドレスを入力してください">
        <select name="gender">
          <option value="">性別</option>
          <option value="1">男性</option>
          <option value="2">女性</option>
          <option value="3">その他</option>
        </select>
        <select name="category">
          <option value="">お問い合わせの種類</option>
          <option value="1">カテゴリ1</option>
          <option value="2">カテゴリ2</option>
          <option value="3">カテゴリ3</option>
        </select>
        <input type="date" name="date">
        <button class="c-btn c-btn--admin-search" type="submit">検索</button>
        <a class="c-btn c-btn--admin-reset" href="">リセット</a>
      </form>
      <div class="admin__other">
        <form action="" method="POST">
          <button class="c-btn c-btn--admin-export" type="submit">エクスポート</button>
        </form>
        <div class="c-pagination">
          <span>ページネイション</span>
        </div>
      </div>
      <table class="admin__table">
        <thead>
          <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>山田<span>&emsp;</span>太郎</td>
            <td>男性</td>
            <td>test@example.com</td>
            <td>商品の交換について</td>
            <!-- hrefの情報を元にjsonのデータを取得する -->
            <td><a class="c-btn c-btn--admin-detail" href="">詳細</a></td>
          </tr>
          <tr>
            <td>山田<span>&emsp;</span>太郎</td>
            <td>男性</td>
            <td>test@example.com</td>
            <td>商品の交換について</td>
            <td><a class="c-btn c-btn--admin-detail" href="">詳細</a></td>
          </tr>
          <tr>
            <td>山田<span>&emsp;</span>太郎</td>
            <td>男性</td>
            <td>test@example.com</td>
            <td>商品の交換について</td>
            <td><a class="c-btn c-btn--admin-detail" href="">詳細</a></td>
          </tr>
          <tr>
            <td>山田<span>&emsp;</span>太郎</td>
            <td>男性</td>
            <td>test@example.com</td>
            <td>商品の交換について</td>
            <td><a class="c-btn c-btn--admin-detail" href="">詳細</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <!-- モーダル -->
  <!-- 一つだけ作り、jsで中身を変える -->
  <div class="admin-modal">
    <div class="admin-modal__content">
      <div class="admin-modal__cancel">
        <svg width="40" height="42" viewBox="0 0 40 42" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="20" cy="22" r="19.5" fill="white" stroke="#8B7969"/>
          <path d="M13.8 17.67C14.12 17.19 14.55 16.76 15.09 16.38C16.31 17.22 17.38 18.12 18.3 19.08C18.84 19.66 19.38 20.22 19.92 20.76L24.57 16.29C25.05 16.63 25.49 17.06 25.89 17.58C25.15 18.64 24.38 19.57 23.58 20.37L21.51 22.38L25.98 27.06C25.66 27.52 25.23 27.95 24.69 28.35C23.61 27.61 22.68 26.85 21.9 26.07C21.62 25.83 20.94 25.13 19.86 23.97L15.18 28.44C14.74 28.14 14.32 27.71 13.92 27.15C14.66 26.09 15.4 25.18 16.14 24.42C16.9 23.66 17.61 22.97 18.27 22.35L13.8 17.67Z" fill="#8B7969"/>
        </svg>
      </div>
      <form action="" method="post">
        <table class="admin-modal__table">
          <tr>
            <th>お名前</th>
            <td><span id="last-name">山田</span><span>&emsp;</span><span id="first-name">太郎</span></td>
          </tr>
          <tr>
            <th>性別</th>
            <td>男性</td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td>test@example.com</td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>1234567890</td>
          </tr>
          <tr>
            <th>住所</th>
            <td>とある場所</td>
          </tr>
          <tr>
            <th>建物名</th>
            <td>とある建物</td>
          </tr>
          <tr>
            <th>お問い合わせの種類</th>
            <td>カテゴリ1</td>
          </tr>
          <tr>
            <th>お問い合わせ内容</th>
            <td>こういうことを聞きたいと思っているが、可能か？こういうことを聞きたいと思っているが、可能か？こういうことを聞きたいと思っているが、可能か？こういうことを聞きたいと思っているが、可能か？こういうことを聞きたいと思っているが、可能か？こういうことを聞きたいと思っているが、可能か？こういうことを聞きたいと思っているが、可能か？</td>
          </tr>
        </table>
        <button class="c-btn c-btn--admin-modal-delete">削除</button>
      </form>
    </div>
  </div>
@endsection