function showClock() {
    let menu_nowTime = new Date();
    let menu_Year = menu_nowTime.getFullYear().toString().padStart(4, '0');
    let menu_Month_old = menu_nowTime.getMonth() + 1;
    let menu_Month = menu_Month_old.toString().padStart(2, '0');
    let menu_day = menu_nowTime.getDate().toString().padStart(2, '0');
    let menu_Hour = menu_nowTime.getHours().toString().padStart(2, '0');
    let menu_Min  = menu_nowTime.getMinutes().toString().padStart(2, '0');
    let menu_Sec  = menu_nowTime.getSeconds().toString().padStart(2, '0');
    let msg = menu_Year + "/" + menu_Month + "/" + menu_day + " "+ menu_Hour + ":" + menu_Min + ":" + menu_Sec;
    document.getElementById("realtime").innerHTML = msg;
  }
  setInterval('showClock()',1000);