<?php

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
    'notPlaying' => '不在游戏中', //max 12
    'waitNext' => '等待当前局结束',
    'waitNext2' => '请等待下一局开始',
    'pressStart' => '按 \'New game\' 开始', //'New game' should be same as in game.newGame
    'slowDown' => '降速！', //When a speed limit is exceeded
    'speedLimitIs' => '限速设置为', //In a sentence: The speed limit is 2 PPS
    'connecting' => '连接中...', //when connecting to the game server
    'signingIn' => '登录中',
    'loginFail' => '登录失败!',
    'mapLoading' => '地图读取中...',

    //Chat
    'warning' => '警告',
    'inactive1' => '旁观模式已开启. 在聊天框输入/play取消旁观.',
    'inactive2' => '检测到当前局无操作，下一局仍然无操作将会开启旁观模式.',
    'nickFill' => '输入你的用户名方可聊天！',
    'setButton' => '设置', //max 4
    'sendButton' => '发送', //max 4
    'rNameReq' => '房间名不能为空！',
    'newsUser' => '公告', //special username in chat
    'serverUser' => '服务器', //special username in chat
    'noNamed' => '游客', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => '旁观者', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'加入了房间.', //in 'User1 joined the room.'
    'joined' => '加入了！', //in title: 'User1 joined!'
    'userCame' => '加入旁观',  //in 'User1 came to watch.'
    'isSpectating' => '正在旁观', //in 'User1 is now spectating.'
    'spectator' => '旁观者模式',
    'hasLeft' => '已离开.', //in 'Spectator User1 has left.'
    'signedAs' => '您登录的账号为',
    'welcome' => '欢迎，', //in 'Welcome User1!'
    'welcomeIn' => '欢迎来到', //in 'Welcome in RoomName.'
    'noSpectators' => '当前没有人旁观.',
    'replayAvailable' => '在此观看录像',
    'oldVer' => '您正在使用旧版，请使用Ctrl＋F5(强刷新)读取新版！',
    'oldVer2' => '你仍然在使用旧版！请按 {key} 键重新读取客户端.',
    'privateRoom' => '这里是可以不受打扰的私密房间. 公共房间请查看大厅.',
    'restartInfo' =>  '按 F4 或 自定义的键位重新开始.',
    'joinLinkInfo' => '这是私密房间. 其他人进入此房只能通过以下链接:',
    //Dynamic elements
    'received' => '接受行数', //max 15
    'finesse' => '多余操作',   //max 15

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
    'invalidDAS' => 'DAS 值无效,未做更改！',
    'settingsChanged' => '在一局游戏中更改了设置.录像回放无效.',
    'segment' => '分段',//Segment
    'duration' => '持续时间',
    'roomFull' => '房间已满',
    'lobbyInfo' => '此聊天以与 {discord} 连通.',
    'newHost' => '你现在成为了房主.',
    'badRoom' => '房间不存在,正在加入默认房间!',
    'stngsChanged' => '房主更改了设置',
    'stngsCustom' => '自定义设置',
    'aSpec' => '已经处于旁观模式!',
    'aPlay' => '已经加入游戏!',
    'repFail' => '录像在线保存失败.',
    'repInChat' => '回放文件已经输出到聊天框. 如需保存，将下方文本框内容复制，并粘贴到文本编辑器保存.',
    'repTxtInfo' => '然后可以在录像播放器播放复制好的回放文件，或者可能重新提交到站点.',

    'newPB' => '个人历史最佳',
    'firstPB' => '这是您首次进行游戏.再次突破最佳记录即可追踪进步历程.',
    'infoPB' => '您之前的记录为 {prevPB}，于 {prevAgo} 达成. 进步了 {PBdiff}.',
    'daysAgo' => '天前',

    'raceFin' => '比赛已结束',
    'raceFinInfo' => '你可以继续完成此次比赛，但下一轮可以随时开始.',

    'notTSD' => '非TSD消除',
    'notTSDInfo' => '仅允许T-spin Double/T2消除',

    'fwDetect' => '四宽堆积',
    'fwDetectInfo' => '检测到4w堆积，自攻自受！',
    
    'oops' => '呀!',
    'chatNA' => '公共聊天在低于{chReq}小时游戏时间时不可用.(游客/注册账户均受此限制)',
    'leMore' => '了解更多',

    'connLimit' => '当前已达到此IP可开放连接的最大数量. 如果您需要提升限制数量，请使用Discord与我们联系',
    'idleDC' => '由于非活动状态而断开连接！旁观位已满',
    'RLreach' => '已达到速度限制.',
    'ban1' => '【线上Ban】您对在线游戏的访问已被永久限制. 你仍然可以玩单人模式.',
    'ban2' => '【账户Ban】此用户帐户被禁止使用. 重新登录网站以获取详细信息.',
    'ncGS' => '未连接到游戏服务器，尝试{refr}.',
    'refr' => '刷新页面',

    //Room info detail
    'noPlayers' => '无玩家',
    'cntMore' => '{cnt} 玩家',          //e.g. +10 more
    'cntGuests' => '{cnt} 游客',      //e.g. +10 guests
    'cntSpec' => '{cnt} 旁观',    //e.g. +10 spectating
    'joinPossible' => '可加入此房间',
    'notEligible' => '不满足加入条件',
    'gTimeShort' => '游戏时间',
    'on' => '开启',
    'off' => '关闭',
];
