// ⏬非同期通信機能にする場合"async function"が必要
function status() {
// ⏬"todo.blade.php"のチェックボックスの情報を全取得
    radio = document.getElementsByName('select');
// ⏬”完了”のリスト情報を取得
    const completes = document.querySelectorAll('.completed');
// ⏬"作業中”のリスト情報を取得
    const unCompletes = document.querySelectorAll('.unCompleted');
// ⏬全リスト情報を取得
    const tasks = document.querySelectorAll('.tasks');
    
    
// ⏬チェックボックスで［1］（作業中）が選択されると、"完了"状態のタスクを非表示
// ⏬チェックボックスで［2］（完了）が選択されると、"作業中"状態のタスクを非表示
// ⏬上記以外の場合（全て）が選択されると、全てのタスクを表示できるようにする
      if(radio[1].checked) {
        unCompletes.forEach(list => {
          list.closest('.tasks').style.display = "";
        }); 
        completes.forEach(list => {
          list.closest('.tasks').style.display = "none"; 
        });
      } else if(radio[2].checked) {
        unCompletes.forEach(list => {
          list.closest('.tasks').style.display = "none";
        }); 
        completes.forEach(list => {
          list.closest('.tasks').style.display = "";
        });
      } else {
        tasks.forEach(list => {
          list.closest('.tasks').style.display = "";
        });
      }
    }