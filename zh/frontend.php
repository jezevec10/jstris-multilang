<?php
//翻译总说明			http://t.cn/RsjC2bm 
//game.php 				http://t.cn/RsjiB5H 
//frontend.php（本页） 	http://t.cn/Rsj6XrE 
//web.php				http://t.cn/Rsj6Fo8 
//game-example.php		http://t.cn/RsjaPri (翻译示例/当前jstris所使用)
return [
    //On screen captions
    'ready' => 'READY',
    'go' => 'GO!',
    'notFocused' => '失去焦点', //max 13 characters
    'clickToFocus' => '点击这里恢复游戏', //max 30 characters
    'specMode' => '旁观模式',
    'specModeInfo' => '当前处于旁观模式.',
    'endSpec' => '输入 /play 加入游戏', //keep '/play'
    'typeHelp' => '输入 /help 查看可用指令.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Not playing', //max 12
    'waitNext' => '等待当前局结束',
    'waitNext2' => '请等待下一局开始',
    'pressStart' => '按 \'New game\' 开始', //'New game' should be same as in game.newGame
    'slowDown' => '【降速！】', //When a speed limit is exceeded
    'speedLimitIs' => '限速设置为', //In a sentence: The speed limit is 2 PPS

    //Chat
    'warning' => '警告',
    'inactive1' => '旁观模式已开启. 在聊天框输入以取消.',
    'inactive2' => '检测到当前局无操作，下一局仍然无操作将会开启旁观模式.',
    'nickFill' => '输入你的用户名方可聊天！',
    'setButton' => '设置', //max 4
    'sendButton' => '发送', //max 4
    'rNameReq' => '房间名不能为空！',
    'newsUser' => 'News', //special username in chat
    'serverUser' => '服务器', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => '旁观者', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'加入了房间.', //in 'User1 joined the room.'
    'joined' => '加入了！', //in title: 'User1 joined!'
    'userCame' => '加入旁观',  //in 'User1 came to watch.'
    'isSpectating' => '正在旁观', //in 'User1 is now spectating.'
    'spectator' => '旁观者模式',
    'hasLeft' => '已离开.', //in 'Spectator User1 has left.'
    'signedAs' => '您登录的账号为',
    'welcome' => '欢迎,', //in 'Welcome User1!'
    'welcomeIn' => '欢迎来到', //in 'Welcome in RoomName.'
    'noSpectators' => '当前没有人旁观.',
    'replayAvailable' => '在此观看录像:',
    'oldVer' => '您正在使用旧版，请使用Ctrl＋F5(强刷新)读取新版！',
    'privateRoom' => '这里是可以不受打扰的私密房间. 公共房间请查看大厅.',
    'restartInfo' =>  '按 F4 或 自定义的键位重新开始.',
    'joinLinkInfo' => '这是私密房间. 其他人进入此房只能通过以下链接:',

    //Dynamic elements
    'received' => '接受行数', //max 15
    'finesse' => '未优化操作',   //max 15

    //List of rooms
    'roomName' => '房间名',
    'games' => '游戏局数', //number of games played in a room
    'players' => '玩家数', //number of players

    //Results
    'name' => '名称',
    'wins' => '获胜局数',
    'time' => '时间', //as game duration
    'received' => '接受行数',
    'sent' => '发送行数',
    'blocks' => '放置方块数', //as number of blocks placed
    'ren' => '连击数',

    //Practice mode result
    'gameTime' => '时间', //in Sprint time: xx.xx
    'see' => '查看', //in 'See 40L leaderboard'
    'leaderboard' => '排行榜',

    //Less common strings, can stay untranslated
    'warning2' => '警告',
    'connected' => '已连接',
    'client' => '客户端',
    'notConnected' => '未连接',
    'connLost' => '与服务器失去连接！',
    'lastGame' => '上一次游戏:',
    'roomSettings' => '房间设置:',
    'attack' => '攻击',
    'combo' => '连击',
    'solid' => '实心',
    'clear' => '消除',
    'mode' => '模式',
    'garbage' => '垃圾行',
    'garbageDelay' => '垃圾行延迟',
    'messiness' => '垃圾行混乱度',
    'replay' => '录像回放',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => '输入 NullpoMino DAS 值:',
    'suggestedIs' => '建议的 DAS 值为',
    'applyConfirm' => '是否应用？',
    'invalidDAS' => 'DAS 值无效，未做更改！',
    'settingsChanged' => '在一局游戏中更改了设置。录像回放无效。',
    'segment' => '分段 (Segment)',//Segment
    'duration' => '持续时间',
];

