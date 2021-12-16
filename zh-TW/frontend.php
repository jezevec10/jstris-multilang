<?php

return [
    //On screen captions
    'ready' => 'READY',
    'go' => 'GO!',
    'notFocused' => '輸入焦點外', //max 13 characters
    'clickToFocus' => '點擊將輸入焦點返回遊戲', //max 30 characters
    'specMode' => '觀戰者模式',
    'specModeInfo' => '你現在已成為觀戰者。',
    'endSpec' => '輸入 /play 來加入遊戲', //keep '/play'
    'typeHelp' => '輸入 /help 以取得可用指令。', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => '非遊玩中', //max 12
    'waitNext' => '等待回合結束',
    'waitNext2' => '請等待下一回合',
    'pressStart' => '請按 \'新回合\' 以開始', //'New game' should be same as in game.newGame
    'slowDown' => '慢一點', //When a speed limit is exceeded
    'speedLimitIs' => '速度限制為', //In a sentence: The speed limit is 2 PPS
    'connecting' => '正在連接...', //when connecting to the game server
    'signingIn' => '正在登入',
    'loginFail' => '登入失敗！',
    'loginFail2' => '尚未登入！您正在以名稱為 {name} 的訪客身分遊玩。',
    'mapLoading' => '正在載入地圖...',

    //Chat
    'warning' => '警告',
    'inactive1' => '即將啟用觀察者模式。在對話處輸入以解除。',
    'inactive2' => '偵測到長時間未動作，下一回合仍未動作將會進入觀戰者模式。',
    'nickFill' => '輸入你的名字以跟其他玩家聊天！',
    'setButton' => '設定', //max 4
    'sendButton' => '送出', //max 4
    'rNameReq' => '請輸入房間名稱！',
    'newsUser' => '新人', //special username in chat
    'serverUser' => '伺服器', //special username in chat
    'noNamed' => '無名氏', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => '觀戰者', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=> '加入了房間。', //in 'User1 joined the room.'
    'joined' => '加入了', //in title: 'User1 joined'
    'userCame' => '來看好戲',  //in 'User1 came to watch.'
    'isSpectating' => '轉為觀戰者', //in 'User1 is now spectating.'
    'spectator' => '觀戰者',
    'hasLeft' => '離開了', //in 'Spectator User1 has left.'
    'signedAs' => '你已以此身分登入: ',
    'welcome' => '歡迎，', //in 'Welcome User1'
    'welcomeIn' => '歡迎進入', //in 'Welcome in RoomName.'
    'noSpectators' => '現在沒有人在觀戰。',
    'replayAvailable' => '重播紀錄檔',
    'oldVer' => '你目前的版本過舊，按下 F5 來重新整理網頁',
    'oldVer2' => '您仍在使用舊版本！按下 {key} 來重新載入客戶端',
    'privateRoom' => '這是您的私人房間，遊玩時不會被打擾。若要查看公開房間，請前往大廳。',
    'restartInfo' =>  '按下 F4 或自訂鍵來重新開始。',
    'joinLinkInfo' => '此為私人房間。發送給玩家以下網址以加入房間：',

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
    'connLost' => '連線中斷！',
    'lastGame' => '上一場：',
    'roomSettings' => '房間設定：',
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
    'enterNullDAS' => '輸入整數且用於 NullpoMino DAS 之數值：',
    'suggestedIs' => '建議的 DAS 為',
    'applyConfirm' => '套用？',
    'invalidDAS' => 'DAS 數值無效，設定未變更！',
    'settingsChanged' => '遊玩中更改了設定，重播記錄無效化。',
    'segment' => '區塊',
    'duration' => '持續',
    'roomFull' => '房間似乎已滿。',
    'lobbyInfo' => '此聊天室與 {discord} 共用。',
    'newHost' => '您成為了此房間的房主。',
    'badRoom' => '此房間已不存在，正在加入預設房間',
    'stngsChanged' => '設定已由房主更改',
    'stngsCustom' => '自定義設定',
    'aSpec' => '已在觀戰！',
    'aPlay' => '已在遊玩！',
    'repFail' => '重播儲存失敗。',
    'repInChat' => '已將重播檔傾印至聊天室。若要保存，請將方框內的文字複製並貼上至您偏好的文字編輯器。',
    'repTxtInfo' => 'The copied replayfile can be then played in the replayer or possibly resubmitted to the site.',

    'newPB' => '您的新個人紀錄',
    'firstPB' => 'This was your first game. Get another PB to track the improvement.',
    'infoPB' => 'Your previous record was {prevPB} achieved {prevAgo}. The improvement is {PBdiff}.',
    'daysAgo' => '天前',

    'raceFin' => 'THE RACE HAS FINISHED',
    'raceFinInfo' => 'You can complete the run, but the next round can start at any time.',

    'notTSD' => 'NOT TSD',
    'notTSDInfo' => 'Only T-Spin Double is allowed',

    'notPC' => 'NOT a PC',
    'notPCInfo' => 'Do a Perfect Clear every 10 blocks. Your board is not clearable.',

    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => 'Attacking yourself',

    'oops' => '糟糕',
    'chatNA' => '訪客及遊玩時數低於 {chReq} 小時的使用者無法使用公開聊天。',
    'leMore' => '了解詳情',

    'connLimit' => '已達到此 IP 的開放連接數上限，如果您需要提高上限，請在 Discord 聯繫我們。',
    'idleDC' => 'Disconnected for inactivity Spectator section was full.',
    'RLreach' => '達到速率上限。',
    'ban1' => '您對線上遊戲的存取權已被永久限制。您仍可以遊玩單人模式。',
    'ban2' => '此使用者帳號已被封禁。重新登入至網頁以了解更多資訊。',
    'ncGS' => '未連接至遊戲伺服器，嘗試{refr}。',
    'refr' => '重新整理頁面',

    'nsUnpub' => '紀錄未儲存，此地圖尚未發佈。',
    'nsTspins' => '紀錄未儲存，not enough T-Spins.',
    'nsLowPC' => '紀錄未儲存，至少需要 2 次 Perfect Clears。',
    'noBlocks' => '方塊用盡',
    'noBlocks2' => '已使用所有方塊',

    //Room info detail
    'noPlayers' => '沒有玩家',
    'cntMore' => '{cnt} more',          //e.g. +10 more
    'cntGuests' => '{cnt} 位訪客',      //e.g. +10 guests
    'cntSpec' => '{cnt} 位觀戰者',    //e.g. +10 spectating
    'joinPossible' => '可加入',
    'notEligible' => '無資格',
    'gTimeShort' => 'G.time',
    'on' => '開',
    'off' => '關',

    //friends
    'fr' => '朋友',
    'frLoad' => '正在載入朋友列表',
    'frLogin' => '請登入以使用朋友列表',
    'frEmpty' => '朋友列表為空',
    'frHowAdd' => '前往使用者的個人檔案以傳送交友邀請。',
    'frPriv' => '私人',
    'frIn' => '已在裡面了！',
    'frChat' => '開啟聊天室',
    'frRel' => '重新載入',
    'frMsgTo' => '傳送訊息給 {name}',  //keep {name}
    'frInv' => '傳送房間邀請',
    'frInvTo' => '邀請加入 {room}',
    'frInvIn' => '您已經在裡面了！',
    'frInvBy' => '由 {user}',
    'frOn' => '線上',
    'frOff' => '離線',
    'frNewChatH' => '這是您與 {name} 的聊天紀錄的開頭。',
    'frWelc' => '歡迎來到朋友分頁',
    'frIntro' => '在這裡，您可以存取線上朋友列表、私人訊息，以及房間邀請。',
    'frIntro2' => '若要傳送交友邀請，請前往使用者的個人檔案。',
    'frIntro3' => '若要管理朋友，請前往 {frPage}',
    'frPage' => '朋友頁面',
    'frIntroCl' => '關閉介紹',
];
