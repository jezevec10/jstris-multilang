<?php

return [
    //On screen captions
    'ready' => 'READY',
    'go' => 'GO!',
    'notFocused' => '入力をスルー中', //max 13 characters
    'clickToFocus' => '操作するにはここをクリック', //max 30 characters
    'specMode' => '観戦モード',
    'specModeInfo' => '現在観戦モードです。',
    'endSpec' => '半角で /play と打って参加', //keep '/play'
    'typeHelp' => 'コマンド一覧を見るには半角で /help　と打ってください', //keep '/help'
    'st' => '位', //max 2, in 1st, can stay untranslated
    'nd' => '位', //max 2, in 2nd, can stay untranslated
    'rd' => '位', //max 2, in 3rd, can stay untranslated
    'th' => '位', //max 2, in 4th, can stay untranslated
    'notPlaying' => '放置プレイ中', //max 12
    'waitNext' => '試合終了までお待ちください',//
    'waitNext2' => '次の試合が開始されるまでまでお待ちください',
    'pressStart' => '「開始」を押して開始', //'New game' should be same as in game.newGame
    'slowDown' => '速度オーバー', //When a speed limit is exceeded
    'speedLimitIs' => '速度制限：', //In a sentence: The speed limit is 2 PPS
    'connecting' => '接続中…', //when connecting to the game server
    'signingIn' => 'ログイン中…',
    'loginFail' => 'ログインに失敗しました。',
    'loginFail2' => 'ログインしていないので、 {name}という名前で表示されています。.',
    'mapLoading' => 'マップを読み込み中…',

    //Chat
    'warning' => '注意',
    'inactive1' => '観戦モードに移行します。キャンセルするにはチャットに何か打ってください', 
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
    'welcome' => 'ようこそ、', //in 'Welcome User1!'
    'welcomeIn' => 'ようこそ！この部屋の名前：', //in 'Welcome in RoomName.'
    'noSpectators' => '現在観戦者はいません',
    'replayAvailable' => 'リプレイ：',
    'oldVer' => '旧バージョンでプレイ中です。新バージョンでプレイするには　CTRL+F5 でリロードしてください。',
    'oldVer2' => '古いバージョンが検出されました！{key}を押してリロードしてください。',
    'privateRoom' => '現在邪魔の入らないプライベートルームにいます。ルームリストをチェックして、パブリックルームを確認できます。',
    'restartInfo' =>  'F4キーでやり直しできます。このキーは　"設定"　ボタンから変更可能です。',
    'joinLinkInfo' => 'これはプライベートルームです。 他のプレイヤーが参加できる唯一の方法は、次のリンクを使用することです：',

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
    'time' => '時間', //as game duration
    'received' => '受けたライン',
    'sent' => '攻撃',
    'blocks' => 'ブロック数', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => '時間', //in Sprint time: xx.xx
    'see' => '', //in 'See 40L leaderboard'
    'leaderboard' => 'ランキングを見る',

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
    'enterNullDAS' => 'NullpoMinoにおけるDASの値を入れてください:',
    'suggestedIs' => '対応するDAS:',
    'applyConfirm' => '適用しますか?',
    'invalidDAS' => '無効なDASの値が指定されたので変更されませんでした。',
    'settingsChanged' => 'ゲーム中に設定が変更されたのでリプレイ機能は無効化されました。',
    'segment' => '区間',
    'duration' => '長さ',
    'roomFull' => '現在のルームは満員です。',
    'lobbyInfo' => 'このチャットは{discord}と共有されています。',
    'newHost' => 'あなたはこの部屋のホストになりました。',
    'badRoom' => 'この部屋はもう存在しません。 デフォルトルームにリダイレクトされました。',
    'stngsChanged' => 'ホストによって変更された設定',
    'stngsCustom' => 'カスタム設定',
    'aSpec' => 'すでに観戦中',
    'aPlay' => 'すでにプレイしています',
    'repFail' => 'リプレイを保存できません',
    'repInChat' => 'リプレイファイルがチャットにダンプされました。 保存するには、ボックス内のテキストをコピーして、テキストエディターに貼り付けます。',
    'repTxtInfo' => 'コピーされたリプレイファイルは、リプレーヤーで再生したり、場合によってはWebサイトに再送信したりできます。',

    'newPB' => '新しい自己ベスト！',
    'firstPB' => 'これはあなたの最初のゲームでした。 改善を追跡するには、別の自己ベストを入手してください。',
    'infoPB' => '以前の記録は{prevPB}で、{prevAgo}に達成されました。改善は{PBdiff}です。',
    'daysAgo' => '日前',

    'raceFin' => 'RACE FINISH!',
    'raceFinInfo' => '続行できますが、次のラウンドはいつでも開始できます',

    'notTSD' => 'NOT a TSD',
    'notTSDInfo' => 'T-Spin Doubleのみでラインを消去してください。',

    'notPC' => 'NOT a PC',
    'notPCInfo' => 'パーフェクトクリアは、10ブロックごとに実行する必要があります。 フィールドをクリアできません。',

    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => '自分のフィールドにラインが送られます！',

    'oops' => 'おっとっと！',
    'chatNA' => '公開チャットは、ゲストまたはゲーム時間{chReq}時間未満のユーザーは利用できません。',
    'leMore' => 'もっと詳しく知る',

    'connLimit' => 'このIPのオープン接続の最大数に現在達しています。 制限の増加については、Discord経由でお問い合わせください',
    'idleDC' => '非アクティブのために切断されました。',
    'RLreach' => 'レート制限に達しました',
    'ban1' => 'マルチプレイヤーゲームへのアクセスは永久に制限されています。 シングルプレーモードでのみプレイできます。',
    'ban2' => 'このユーザーアカウントは禁止されています。 詳細については、再ログインしてください。',
    'ncGS' => 'ゲームサーバーに接続されていません。{refr}してください',
    'refr' => 'ページをリロード',

    'nsUnpub' => 'レコードは保存されていません。 レコードを保存するには、マップを公開する必要があります',
    'nsTspins' => 'レコードが保存されていません。十分なT-Spinがありません',
    'nsLowPC' => 'レコードは保存されていません。少なくとも2回のパーフェクトクリアが必要です',

    //Room info detail
    'noPlayers' => 'プレーヤーはいません',
    'cntMore' => 'さらに{cnt}人',
    'cntGuests' => 'ゲスト数：{cnt}人',
    'cntSpec' => '観客数：{cnt}人',
    'joinPossible' => '参加可能',
    'notEligible' => '参加できません',
    'gTimeShort' => 'G.TIME',
    'on' => 'ON',
    'off' => 'OFF',
];
