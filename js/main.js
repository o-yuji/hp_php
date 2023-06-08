
function showClock() {
    let menu_nowTime = new Date();
    let menu_Year = menu_nowTime.getFullYear().toString().padStart(4, '0');
    let menu_Month_old = menu_nowTime.getMonth() + 1;
    let menu_Month = menu_Month_old.toString().padStart(2, '0');
    let menu_day = menu_nowTime.getDate().toString().padStart(2, '0');
    let menu_Hour = menu_nowTime.getHours().toString().padStart(2, '0');
    let menu_Min = menu_nowTime.getMinutes().toString().padStart(2, '0');
    let menu_Sec = menu_nowTime.getSeconds().toString().padStart(2, '0');
    let msg = menu_Year + "/" + menu_Month + "/" + menu_day + " " + menu_Hour + ":" + menu_Min + ":" + menu_Sec;
    document.getElementById("realtime").innerHTML = msg;
}
setInterval('showClock()', 1000);

$(function () {
    $('.accordion span').on('click', function () {
        $(this).next('ul').slideToggle();
        $(this).toggleClass('open');
    });
});

function logout() {
    const logout_btn = document.getElementById('logout_btn');
    logout_btn.addEventListener('click', () => {
        let result = window.confirm('ログアウトします。よろしいですか？');

        if (result) {
            alert('ログアウトします');
            logout_btn.parentElement.submit();
        } else {
            alert('キャンセルしました。');
        }
    });
}
logout()

function history_del() {
    const btn_off = document.querySelectorAll('.btn_off');
    btn_off.forEach(bt_off => {
        bt_off.addEventListener('click', () => {
            let result = window.confirm('削除しますか？');

            if (result) {
                alert('削除します。');

                const url = "./index/history_delete.php";
                const option = {
                    method: "POST",
                    body: new URLSearchParams({
                        id: bt_off.dataset.id
                    }),
                };
                fetch(url, option);

                const td_all = bt_off.parentElement.parentElement.querySelectorAll('td');
                td_all.forEach(td_one => {
                    td_one.classList.add('line-through');
                });

            } else {
                alert('キャンセルしました。');
            }
        });
    });
}
history_del()

function todo_rev() {
    const a = 0;

}

function todo_up() {
    const a = 0;

}

function todo_rem() {
    const a = 0;

}