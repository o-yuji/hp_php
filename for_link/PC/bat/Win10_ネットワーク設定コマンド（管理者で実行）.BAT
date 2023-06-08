@echo off
rem ---------------------------------------------------
rem -- 管理者モードで実行しているか確認
rem ---------------------------------------------------
openfiles > nul 2>&1
If "%ERRORLEVEL%"=="0" (goto :init)
goto :errend


:init
rem ====================================================
CLS
rem ---------------------------------------------------
rem -- 1 SMB1.0の追加設定を行う
rem ---------------------------------------------------
echo 1 SMB1.0の追加設定を行う
@echo on
sc.exe config lanmanworkstation depend= bowser/mrxsmb10/mrxsmb20/nsi
@pause > nul
sc.exe config mrxsmb10 start= auto
@pause > nul
sc.exe config lanmanworkstation depend= bowser/mrxsmb10/nsi
@pause > nul
sc.exe config mrxsmb20 start= disabled
@rem sc.exe config mrxsmb20 start= auto
@pause > nul

@echo off
sc.exe qc lanmanworkstation
echo 値を確認のうえ、何かキーを押してください。
pause

rem レジストリ取り込み
【Win10】139TCPのみ通信を有効にする.reg

rem ---------------------------------------------------
rem -- 2 hostsの更新を行う
rem ---------------------------------------------------
echo 2 hostsの更新を行う
@echo on
COPY C:\TOOL\hosts C:\Windows\system32\drivers\etc\*.* /Y
pause

@echo off
CLS
TYPE C:\Windows\system32\drivers\etc\hosts
echo --------------------------------------------------------------------
echo 値を確認のうえ、何かキーを押してください。
pause
CLS

rem ---------------------------------------------------
rem -- 3 WindowsUpdateをproxy1:8080で行う様にする
rem ---------------------------------------------------
echo 3 WindowsUpdateをproxy1:8080で行う様にする
@echo WindowsUpdateを有効にする場合は継続して下さい。
@echo ダメな場合は処理を取り消してください。
@Pause

@echo on
rem netsh winhttp import proxy source=ie
netsh winhttp set proxy proxy-server="http=proxy1:8080;https=proxy1:8080"

@echo off
echo 値を確認のうえ、何かキーを押してください。
pause

rem ---------------------------------------------------
rem -- 終了
rem ---------------------------------------------------
goto :fin



:errend
rem ---------------------------------------------------
rem -- 管理者モードで実行していないので強制終了
rem ---------------------------------------------------
CLS
echo このコマンドは管理者モードで実行しないといけません。
pause > nul

:fin
@echo off
rem ====================================================
exit
