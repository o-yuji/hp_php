const del_btn = document.querySelectorAll('.del_btn');

const url = new URL(window.location.href);
// URLSearchParamsオブジェクトを取得
const params = url.searchParams;
let page_no = params.get('page_id');


function del(key) {

    f_name = "name_" + key;
    const result = window.confirm('履歴を削除しますか？');

    if (result) {
        document[f_name].submit();
    }
    else {
        alert('キャンセルしました');
    }
}

function del_val(el) {
    for (let i = 0; i < el.length; i++) {

        if (page_no > 1) {
            var id = ((page_no - 1) * 6) + i;
            console.log(id);
            el[i].addEventListener("click", function () {
                del(id);
            });
        } else {
            el[i].addEventListener("click", function () {
                del(i);
            });
        }
    };
};

del_val(del_btn);