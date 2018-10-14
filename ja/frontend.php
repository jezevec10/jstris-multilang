<?php

return [
    //On screen captions
    'ready' => 'READY?',
    'go' => 'GO!',
    'notFocused' => '入力をスルー中', //max 13 characters
    'clickToFocus' => '操作するにはここをクリック', //max 30 characters
    'specMode' => '観戦モード',
    'specModeInfo' => '現在観戦モードです。',
    'endSpec' => '半角で /play と打って参戦', //keep '/play'
    'typeHelp' => 'コマンド一覧を見るには半角で /help　と打ってください', //keep '/help'
    'st' => '位', //max 2, in 1st, can stay untranslated
    'nd' => '位', //max 2, in 2nd, can stay untranslated
    'rd' => '位', //max 2, in 3rd, can stay untranslated
    'th' => '位', //max 2, in 4th, can stay untranslated
    'notPlaying' => '放置プレイ中', //max 12
    'waitNext' => '試合終了までお待ちください',//
    'waitNext2' => '次の試合が開始されるまでまでお待ちください',
    'pressStart' => '”ニューゲーム”を押して開始', //'New game' should be same as in game.newGame
    'slowDown' => '速度オーバー', //When a speed limit is exceeded
    'speedLimitIs' => '制限速度：', //In a sentence: The speed limit is 2 PPS

    //Chat
    'warning' => '注意',
    'inactive1' => '観戦モードに移行します。キャンセルするにはチャットに何か(niceとでも)打ってください', 
    'inactive2' => '放置状態を検出しました。次もそうなら観戦モードに移行します。',
    'nickFill' => 'チャットの前にニックネームを入れてください',
    'setButton' => '設定', //max 4
    'sendButton' => '送信', //max 4
    'rNameReq' => 'ルーム名は入力必須です!',
    'newsUser' => 'お知らせ', //special username in chat
    'serverUser' => 'サーバー', //special username in chat
    'noNamed' => 'ゲスト', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => '観戦者', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'さんが入室しました', //in 'User1 joined the room.'
    'joined' => 'さんが参加しました', //in title: 'User1 joined!'
    'userCame' => 'さんが観にきました',  //in 'User1 came to watch.'
    'isSpectating' => 'さんが観戦モードに移行しました', //in 'User1 is now spectating.'
    'spectator' => '観戦者の',
    'hasLeft' => 'さんが退室しました', //in 'Spectator User1 has left.'
    'signedAs' => 'あなたのログイン名：',
    'welcome' => 'Welcome,', //in 'Welcome User1!'
    'welcomeIn' => 'いらっしゃい!　この部屋の名前：', //in 'Welcome in RoomName.'
    'noSpectators' => '現在観戦者はいません',
    'replayAvailable' => 'リプレイ：',
    'oldVer' => '旧バージョンでプレイ中です。新バージョンでプレイするには　CTRL+F5 でリロードしてください。',
    'privateRoom' => '現在邪魔の入らないプライベートルームにいます。誰でも入れる部屋を見るにはロビーを見てください。',
    'restartInfo' =>  'F4キーでやり直しできます。このキーは　"設定"　ボタンから変更加能です。',
    'joinLinkInfo' => 'これはプライベートルームです。 以下のURLにアクセスする以外に他の人が入室する方法はありません:',

    //Dynamic elements
    'received' => '受けたライン', //max 15
    'finesse' => '最適化ミス',   //max 15

    //List of rooms
    'roomName' => '部屋名',
    'games' => '試合数', //number of games played in a room
    'players' => 'プレイヤー数', //number of players

    //Results
    'name' => '名前',
    'wins' => '勝利数',
    'time' => 'タイム', //as game duration
    'received' => '受けたライン',
    'sent' => '攻撃',
    'blocks' => 'ブロック数', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'タイム', //in Sprint time: xx.xx
    'see' => '', //in 'See 40L leaderboard'
    'leaderboard' => 'のランキングを見る',

    //Less common strings, can stay untranslated
    'warning2' => '警告！',
    'connected' => '接続完了',
    'client' => 'クライアント',
    'notConnected' => '接続されていません',
    'connLost' => '接続が切れました！',
    'lastGame' => '直前の試合:',
    'roomSettings' => 'この部屋のルール設定:',
    'attack' => 'Attack(火力)',
    'combo' => 'combo(RENの火力)',
    'solid' => 'solid(ハリーアップ)',
    'clear' => 'Clear(消去時間)',
    'mode' => 'Mode(モード)',
    'garbage' => 'garbage(攻撃の行き先)',
    'garbageDelay' => 'garbageDelay(猶予)',
    'messiness' => 'messiness(穴パラ率)',
    'replay' => 'リプレイ',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => '受ライン', //max 4, short for Received
    'enterNullDAS' => 'NullpominoにおけるDASの値を入れてください:',
    'suggestedIs' => '対応するDAS:',
    'applyConfirm' => '適用しますか?',
    'invalidDAS' => '無効なDASの値が指定されたので変更されませんでした。',
    'settingsChanged' => 'ゲーム中に設定が変更されたのでリプレイ機能は無効化されました。',
    'segment' => '区間',
    'duration' => '長さ',
];
