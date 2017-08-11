<?php

return [
    //On screen captions
    'ready' => 'READY',
    'go' => 'GO!',
    'notFocused' => '輸入焦點外', //max 13 characters
    'clickToFocus' => '點擊將輸入焦點返回遊戲', //max 30 characters
    'specMode' => '觀戰者模式',
    'specModeInfo' => '你現在已成為觀戰者.',
    'endSpec' => '輸入 /play 來加入遊戲', //keep '/play'
    'typeHelp' => '輸入 /help 以取得可用指令.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => '非遊玩中', //max 12
    'waitNext' => '等待回合結束',
    'waitNext2' => '請等待下一回合',
    'pressStart' => '請按 \'新回合\' 以開始', //'New game' should be same as in game.newGame

    //Chat
    'warning' => '警告',
    'inactive1' => '觀察者模式將開啟, 在對話處輸入以解除.',
    'inactive2' => '偵測到長時間未動作, 下一回合仍未動作將會進入觀戰者模式',
    'nickFill' => '輸入你的名字以跟其他玩家聊天!',
    'setButton' => '設定', //max 4
    'sendButton' => '送出', //max 4
    'rNameReq' => '請輸入房間名稱!',
    'newsUser' => '新人', //special username in chat
    'serverUser' => '伺服器', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => '觀戰者', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=> '加入了房間.', //in 'User1 joined the room.'
    'joined' => '加入了', //in title: 'User1 joined!'
    'userCame' => '來看好戲',  //in 'User1 came to watch.'
    'isSpectating' => '轉為觀戰者', //in 'User1 is now spectating.'
    'spectator' => '觀戰者',
    'hasLeft' => '離開了.', //in 'Spectator User1 has left.'
    'signedAs' => '你做為以下身分登入: ',
    'welcome' => '歡迎,', //in 'Welcome User1!'
    'welcomeIn' => '歡迎進入', //in 'Welcome in RoomName.'
    'noSpectators' => '現在沒有人在觀戰.',
    'replayAvailable' => '重播紀錄檔',
    'oldVer' => '你目前的版本過舊, 按F5重新整理網頁!',
    'privateRoom' => 'This is your private room where you won\'t be disturbed while playing. Check the Lobby to see public rooms.',
    'restartInfo' =>  '以F4或自訂鍵來重新開始.',
    'joinLinkInfo' => '此為私人房間. 發送給玩家以下網址以加入房間:',

    //Dynamic elements
    'received' => 'Received', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => '房間名',
    'games' => '回合', //number of games played in a room
    'players' => '玩家', //number of players

    //Results
    'name' => '名字',
    'wins' => '勝場',
    'time' => '時間', //as game duration
    'received' => '收到',
    'sent' => '送出',
    'blocks' => '方塊數', //as number of blocks placed
    'ren' => '連鎖',

    //Practice mode result
    'gameTime' => '時間', //in Sprint time: xx.xx
    'see' => '查看', //in 'See 40L leaderboard'
    'leaderboard' => '排行榜',

    //Less common strings, can stay untranslated
    'warning2' => '警告',
    'connected' => '已連接',
    'client' => 'client',
    'notConnected' => '未連接',
    'connLost' => '連線中斷!',
    'lastGame' => '上一場:',
    'roomSettings' => '房間設定:',
    'attack' => '攻擊',
    'combo' => '連鎖',
    'solid' => 'Solid',
    'clear' => '消除',
    'mode' => '模式',
    'garbage' => '垃圾行',
    'garbageDelay' => '垃圾行延遲',
    'messiness' => '分散度',
    'replay' => '重播',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => '輸入整數且用於 NullpoMino DAS之數值:',
    'suggestedIs' => '建議的 DAS 為',
    'applyConfirm' => '套用?',
    'invalidDAS' => 'DAS 數值無效, 設定未變更!',
    'settingsChanged' => '遊玩中更改了設定, 重播記錄無效化.',
    'segment' => '區塊',
    'duration' => '持續',
];
