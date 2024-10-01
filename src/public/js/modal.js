'use strict'

/* ------------------------------------------------------- */
/* モーダルの内容編集と表示
/* ------------------------------------------------------- */

// クリックする対象を取得（複数）
const detailButtons = document.querySelectorAll('.admin__detail-button');

// 一つ一つにイベントを設定
detailButtons.forEach(button => {
  button.addEventListener('click', () => {
    console.log('クリックされました');

    // クリックされたボタンのidを取得
    const id = button.getAttribute('data-id');
    const dataArray = Object.values(data);
    const modalData = dataArray[1].find(item => item.id == id);

    // モーダルの表示を変更
    document.getElementById('last-name').textContent = modalData.last_name;
    document.getElementById('first-name').textContent = modalData.first_name;
    if (modalData.gender == 1) {
      document.getElementById('gender').textContent = '男性';
    } else if (modalData.gender == 2) {
      document.getElementById('gender').textContent = '女性';
    } else {
      document.getElementById('gender').textContent = 'その他';
    }
    document.getElementById('email').textContent = modalData.email;
    document.getElementById('tel').textContent = modalData.tel;
    document.getElementById('address').textContent = modalData.address;
    document.getElementById('building').textContent = modalData.building;
    document.getElementById('category').textContent = modalData.category.content;
    document.getElementById('detail').textContent = modalData.detail;

    // モーダルを表示
    const modal = document.getElementById('admin-modal');
    modal.classList.remove('js-is-hidden');
  });
});

/* ------------------------------------------------------- */
/* モーダルを非表示へ変更
/* ------------------------------------------------------- */