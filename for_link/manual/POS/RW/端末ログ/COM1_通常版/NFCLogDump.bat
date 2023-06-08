rem ;==========================================================
rem ;
rem ;	ログ収集ツール起動バッチファイル
rem ;
rem ;	呼出形式
rem ;		NFCLogDump.exe [動作モード] [/I:通信種別] [/PO:ポート] [/BA:ボーレート]
rem ;
rem ;	動作モード
rem ;		1 通常版
rem ;		2 フル版
rem ;
rem ;	通信種別
rem ;		/I:0 USB
rem ;		/I:1 シリアル
rem ;
rem ;	ポート
rem ;		/PO:COM1
rem ;		/PO:COM2
rem ;		/PO:COM3
rem ;		/PO:COM4
rem ;
rem ;	ボーレート
rem ;		/BA:2400
rem ;		/BA:4800
rem ;		/BA:9600
rem ;		/BA:19200
rem ;		/BA:38400
rem ;		/BA:57600
rem ;		/BA:115200
rem ;
rem ;==========================================================
NFCLogDump.exe 1
