'use strict';
{
    //tabmenu
    const tab_menu01 = document.querySelectorAll('.tab_01');
    const tab_text = document.querySelectorAll('.tab_flame');

    tab_menu01.forEach(menu => {
        menu.addEventListener('click', () => {
            //全てのタブを非選択状態に
            tab_menu01.forEach(val => {
                val.classList.remove('selected');
            });
            //対象のタブだけ選択
            menu.classList.add('selected');

            //対象のコンテンツを全て非表示
            tab_text.forEach(text => {
                text.classList.remove('selected');
            });
            //対象のコンテンツだけ表示
            document.getElementById(menu.dataset.tabname).classList.add('selected');

        });//clickEvent
    });//forEach

    function todo_rev() {
        const todo_bk_btn = document.querySelectorAll('.todo_bk_btn');
        todo_bk_btn.forEach(bk_btn => {
            bk_btn.addEventListener('click', () => {
                // alert('test');
                const url = '?action=back';
                const option = {
                    method: 'POST',
                    body: new URLSearchParams({
                        id: bk_btn.dataset.id,
                        status: bk_btn.dataset.status,
                    })
                };
                fetch(url, option);
                const ck_data = bk_btn.dataset.status;
                switch (ck_data) {
                    case '未':
                        alert('ステータスは「未」です！');
                        break;
                    case '中':
                        bk_btn.parentElement.parentElement.parentElement.querySelector('.card-header').querySelector('span:nth-child(2)').textContent = "ステータス：未";
                        bk_btn.dataset.status = "未";
                        bk_btn.nextElementSibling.dataset.status = "未";
                        ck_data = "未";
                        break;
                    case '済':
                        bk_btn.parentElement.parentElement.parentElement.querySelector('.card-header').querySelector('span:nth-child(2)').textContent = "ステータス：中";
                        bk_btn.parentElement.parentElement.parentElement.classList.remove('bg-primary');
                        bk_btn.dataset.status = "中";
                        bk_btn.nextElementSibling.dataset.status = "中";
                        option.body.status = "中";
                        ck_data = "中";
                        break;
                };//switch
            });//clickEvent
        });//forEach
    }//function
    todo_rev()

    function todo_up() {
        const todo_up_btn = document.querySelectorAll('.todo_up_btn');
        todo_up_btn.forEach(up_btn => {
            up_btn.addEventListener('click', () => {
                const url = '?action=update';
                const option = {
                    method: 'POST',
                    body: new URLSearchParams({
                        id: up_btn.dataset.id,
                        status: up_btn.dataset.status,
                    })
                };//option
                fetch(url, option);
                const up_data = up_btn.dataset.status;
                switch (up_data) {
                    case '未':
                        up_btn.parentElement.parentElement.parentElement.querySelector('.card-header').querySelector('span:nth-child(2)').textContent = "ステータス：中";
                        up_btn.dataset.status = "中";
                        up_btn.previousElementSibling.dataset.status = "中";
                        up_data = "中";
                    case '中':
                        up_btn.parentElement.parentElement.parentElement.querySelector('.card-header').querySelector('span:nth-child(2)').textContent = "ステータス：済";
                        up_btn.parentElement.parentElement.parentElement.classList.add('bg-primary');
                        up_btn.dataset.status = "済";
                        up_btn.previousElementSibling.dataset.status = "済";
                        up_data = "済";
                        break;
                    case '済':
                        alert('ステータスは「済」です！');
                        break;
                };//switch
            });//clickEvent
        });//endforEach
    }
    todo_up()

    function todo_delete_btn() {
        const todo_del_btn = document.querySelectorAll('.todo_delete_btn');
        todo_del_btn.forEach(del_btn => {
            del_btn.addEventListener('click', () => {
                let result = window.confirm('削除しますか？');

                if (result) {
                    alert('削除します');
                    del_btn.parentNode.submit();
                } else {
                    alert('キャンセルしました');
                }

            });
        });


    }//function todo_delete_btn
    todo_delete_btn()

}