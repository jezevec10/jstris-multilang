<?php

return [
    //On screen captions
    'ready' => '준비',
    'go' => '시작!',
    'notFocused' => '초점이 맞지 않은', //max 13 characters
    'clickToFocus' => '클릭하여 초점 맞추기', //max 30 characters
    'specMode' => '관전 모드',
    'specModeInfo' => '이제 관전 모드로 전환되었습니다.',
    'endSpec' => '/play를 입력하여 게임에 참가하십시오.', //keep '/play'
    'typeHelp' => '/help를 입력하여 가능한 커맨드를 보십시오.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => '플레이 중이 아님', //max 12
    'waitNext' => '라운드가 끝날 때까지 기다려주세요.',
    'waitNext2' => '다음 라운드를 기다려주세요.',
    'pressStart' => '\'새 게임\'을 눌러 게임을 시작하십시오.', //'New game' should be same as in game.newGame
    'slowDown' => 'SLOW DOWN', //When a speed limit is exceeded
    'speedLimitIs' => 'The speed limit is', //In a sentence: The speed limit is 2 PPS

    //Chat
    'warning' => '경고',
    'inactive1' => '관전모드입니다. 채팅으로 변경 가능합니다.',
    'inactive2' => '어떠한 조작도 없을 시 관전모드가 활성화 됩니다.',
    'nickFill' => '타이핑 입력대로 사용자이름이 바뀝니다.',
    'setButton' => '셋팅', //max 4
    'sendButton' => '누름', //max 4
    'rNameReq' => '방 이름이 필요합니다!',
    'newsUser' => '뉴스', //special username in chat
    'serverUser' => '서버', //special username in chat
    'noNamed' => '이름없음', //user without name (guest), max 7, can stay untranslated
    'watching' => '관전자', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'입장 하였습니다.', //in 'User1 joined the room.'
    'joined' => '입장', //in title: 'User1 joined!'
    'userCame' => '관전자로 입장하였습니다.',  //in 'User1 came to watch.'
    'isSpectating' => '관전자로 입장하였습니다.', //in 'User1 is now spectating.'
    'spectator' => '관전자',
    'hasLeft' => '님이 나갔습니다.', //in 'Spectator User1 has left.'
    'signedAs' => '로그인 되었습니다.',
    'welcome' => '환영합니다,', //in 'Welcome User1!'
    'welcomeIn' => '어서오세요.', //in 'Welcome in RoomName.'
    'noSpectators' => '현재 관전자가 없습니다.',
    'replayAvailable' => '다시보기 사용가능',
    'oldVer' => '현재 구 버전을 사용중입니다., CTRL+F5 키를 입력하여 신 버전으로 이용하세요.',
    'privateRoom' => '현재 혼자하기를 진행중입니다. 대기실로 이동 후 멀티로 이동해 보세요.',
    'restartInfo' =>  '재시작은 F4 또는 환경설정에서 설정가능',
    'joinLinkInfo' => '혼자하기입니다. 링크를 통하여 입장 가능한 방입니다.',

    //Dynamic elements
    'received' => '받은', //max 15
    'finesse' => '피네스',   //max 15

    //List of rooms
    'roomName' => '방 이름',
    'games' => '게임', //number of games played in a room
    'players' => '선수', //number of players

    //Results
    'name' => '이름',
    'wins' => '승',
    'time' => '시간', //as game duration
    'received' => '받은',
    'sent' => '보낸',
    'blocks' => '블록', //as number of blocks placed
    'ren' => '콤보',

    //Practice mode result
    'gameTime' => '시간', //in Sprint time: xx.xx
    'see' => '보기', //in 'See 40L leaderboard'
    'leaderboard' => '리더 보드',

    //Less common strings, can stay untranslated
    'warning2' => '경고',
    'connected' => '연결됨',
    'client' => '클라이언트',
    'notConnected' => '연결되지 않음',
    'connLost' => '접속 실패',
    'lastGame' => '마지막 게임:',
    'roomSettings' => '방 설정:',
    'attack' => '공격',
    'combo' => '콤보',
    'solid' => '고체',
    'clear' => '클리어',
    'mode' => '모드',
    'garbage' => '삭제해야 할 줄',
    'garbageDelay' => '삭제해야 할 줄 딜레이',
    'messiness' => '깎기 어렵게',
    'replay' => '다시보기',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => '널포미노에서 사용하는 DAS 값',
    'suggestedIs' => '원하는 DAS 값',
    'applyConfirm' => '적용',
    'invalidDAS' => 'DAS 값 변경 실패',
    'settingsChanged' => '게임중 설정이 변경되어 재생할 수 없습니다.',
    'segment' => '구간',
    'duration' => '지속시간',
];
