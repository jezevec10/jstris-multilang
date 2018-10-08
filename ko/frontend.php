<?php

return [
    //On screen captions
    'ready' => '준비',
    'go' => '시작!',
    'notFocused' => '포커스 벗어남', //max 13 characters
    'clickToFocus' => '클릭해서 포커스를 잡으세요', //max 30 characters
    'specMode' => '관전 중',
    'specModeInfo' => '관전 모드로 전환하였습니다.',
    'endSpec' => '/play를 입력해 게임에 참여하세요', //keep '/play'
    'typeHelp' => '사용 가능한 명령어를 확인하려면 /help를 입력하세요.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => '자리 비움', //최대 6자, 부재중 상태가 감지되었거나 진행 중인 게임에 참여한 상대의 화면 위에 뜹니다.
    'waitNext' => '라운드 종료까지 기다려주세요', // 표시 영역 너비를 감안해서 내용을 줄였습니다. '~하세요' 어투를 적용하려고 하는데 이 메세지는 졌을 때 나오는 거라서 '~해주세요' 어투를 썼습니다.
    'waitNext2' => '다음 라운드까지 기다려주세요.', // 채팅에 나타나는 메세지
    'pressStart' => '\'새 게임\'을 눌러 게임을 시작하세요', //'New game' should be same as in game.newGame
    'slowDown' => 'SLOW DOWN', //When a speed limit is exceeded
    'speedLimitIs' => '속도 제한: ', //In a sentence: The speed limit is 2 PPS

    //Chat
    'warning' => '경고',
    'inactive1' => '관전 모드를 활성화하려고 합니다. 중단하려면 메세지를 쓰세요.',
    'inactive2' => '부재 상태를 감지했습니다. 다음 게임에서도 부재가 확인될 경우 관전 모드를 활성화합니다.',
    'nickFill' => '이름을 입력하고 채팅에 참여하세요!',
    'setButton' => '설정', // 최대 2자
    'sendButton' => '전송', // 최대 2자
    'rNameReq' => '방 이름을 정해야 합니다!',
    'newsUser' => '소식', //special username in chat
    'serverUser' => '서버', //special username in chat
    'noNamed' => '무명', //user without name (guest), max 7, can stay untranslated
    'watching' => '관전 중', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'님이 들어왔습니다', //in 'User1 joined the room.' 게임에서 마침표를 붙이므로 여기선 붙일 필요가 없습니다.
    'joined' => '님 입장', //in title: 'User1 joined!'
    'userCame' => '님이 관전하러 왔습니다',  //in 'User1 came to watch.' 마침표 X
    'isSpectating' => '님이 관전을 시작합니다', //in 'User1 is now spectating.' 마침표 X
    'spectator' => '관전 중이던',
    'hasLeft' => '님이 나갔습니다', //in 'Spectator User1 has left.' 마침표 X
    // 다음 세 개의 토큰에 대해 Jez에게 `:name` 추가를 요청했습니다. 반영되면 내용을 바꿔야할 거예요.
    'signedAs' => '다음의 계정으로 로그인 되었습니다:', //in 'You are signed in as User1.'
    'welcome' => '환영합니다,', //in 'Welcome User1!'
    'welcomeIn' => '어서오세요. 현재 다음의 방에 들어오셨습니다:', //in 'Welcome in RoomName.'
    'noSpectators' => '관전 중인 사용자가 없습니다.',
    'replayAvailable' => '다시보기를 보려면', // 비로그인 사용자일 경우의 리플레이 메세지
    'oldVer' => '구 버전을 실행하고 있습니다. CTRL+F5로 새 버전을 받으세요!',
    'privateRoom' => '방해받지 않고 즐길 수 있는 비공개 방입니다. 공개 방을 보려면 로비를 확인해보세요.',
    'restartInfo' => 'F4 혹은 직접 지정한 키를 눌러 재시작할 수 있습니다.',
    'joinLinkInfo' => '이 방은 비공개 방이며, 여기에 들어오려면 다음의 링크가 필요합니다:',

    //Dynamic elements
    'received' => '받음', //max 15
    'finesse' => '피네스',   //max 15

    //List of rooms
    'roomName' => '방 이름',
    'games' => '게임', //number of games played in a room
    'players' => '인원', //number of players

    //Results
    'name' => '이름',
    'wins' => '승',
    'time' => '시간', //as game duration
    'received' => '받음',
    'sent' => '보냄',
    'blocks' => '블록', //as number of blocks placed
    'ren' => '콤보',

    //Practice mode result
    // 시간 표시 포맷: ': 50.000 s. ', ': 25:00.000 s. '
    'gameTime' => '시간', //in Sprint time: xx.xx
    'see' => '', //in 'See 40L leaderboard'
    'leaderboard' => '리더보드를 확인해보세요',

    //Less common strings, can stay untranslated
    'warning2' => '경고',
    'connected' => '연결됨',
    'client' => '클라이언트',
    'notConnected' => '연결되지 않음',
    'connLost' => '접속이 끊어졌습니다!',
    'lastGame' => '마지막으로 플레이한 게임:',
    'roomSettings' => '방 설정:',
    'attack' => '공격',
    'combo' => '콤보',
    'solid' => '솔리드 가비지',
    'clear' => '클리어',
    'mode' => '모드',
    'garbage' => '쓰레기 분배 방식',
    'garbageDelay' => '쓰레기 딜레이',
    'messiness' => '난잡도',
    'replay' => '다시보기', // 로그인 사용자일 경우의 리플레이 메세지
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => '받음', //max 4, short for Received
    'enterNullDAS' => 'NullpoMino에서 쓰는 DAS 값을 입력하세요:',
    'suggestedIs' => '추천 DAS 값:',
    'applyConfirm' => '적용할까요?',
    'invalidDAS' => 'DAS 값이 올바르지 않아 적용할 수 없습니다!',
    'settingsChanged' => '게임 중 설정이 변경되어, 다시보기를 저장하지 않습니다.',
    'segment' => '구간',
    'duration' => '길이',
];
