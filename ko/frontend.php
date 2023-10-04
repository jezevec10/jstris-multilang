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
    'speedLimitIs' => '속도 제한:', //In a sentence: The speed limit is 2 PPS
    'connecting' => '연결 중...', //when connecting to the game server
    'signingIn' => '로그인 중',
    'loginFail' => '로그인 실패!',
    'loginFail2' => '로그인하지 않았습니다! 게스트 {name}로 플레이 중입니다.',
    'mapLoading' => '맵 불러오는 중...',

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
    'noNamed' => '이름없음', //user without name (guest), max 7, can stay untranslated
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
    'connLost' => '접속 끊어짐!',
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
    'settingsChanged' => '게임 중 설정이 바뀌어서, 다시보기를 저장하지 않습니다.',
    'segment' => '구간',
    'duration' => '길이',
    'roomFull' => '방 인원이 가득 찼습니다.',
    'lobbyInfo' => '현재 채팅이 {discord}에 공유되었습니다.',
    'newHost' => '방장이 되었습니다.',
    'badRoom' => '방이 더이상 존재하지 않습니다, 대기실에 입장합니다!',
    'stngsChanged' => '방장에 의해 설정이 변경되었습니다.',
    'stngsCustom' => '사용자 설정',
    'aSpec' => '이미 관전 중입니다!',
    'aPlay' => '이미 플레이 중입니다!',
    'repFail' => '다시보기를 저장하지 못했습니다.'
    'repInChat' => '다시보기 파일이 채팅에 출력되었습니다. 박스 안에 있는 문자를 복사하고 텍스트 에디터에 붙여넣어 저장하세요.',
    'repTxtInfo' => '복사된 다시보기 파일은 사이트의 다시보기에서 재생하거나 재등록할 수 있습니다.',

    'newPB' => '개인 신기록!',
    'firstPB' => '이 게임은 첫 번째 게임입니다. 향상 통계를 확인하려면 개인 기록을 더 만드세요.',
    'infoPB' => '이전 기록은 {prevPB}이며, {prevAgo}를 달성했습니다. 기록의 향상 차이는 {PBdiff}입니다.',
    'daysAgo' => '일 전',

    'raceFin' => '레이스 종료!',
    'raceFinInfo' => '레이스를 완료할 수 있지만, 다음 라운드는 언제든지 시작할 수 있습니다.',

    'notTSD' => 'NOT TSD',
    'notTSDInfo' => 'T-Spin Double만으로 라인을 지우세요.',

    'notPC' => 'NOT a PC',
    'notPCInfo' => '매 10블록마다 Perfect Clear를 해야 합니다. 현재 보드는 클리어 할 수 없습니다.',

    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => '내 필드에 라인이 전송됩니다!',

    'oops' => '앗!',
    'chatNA' => '게스트나 {chReq}시간보다 적게 플레이한 사용자는 전체 채팅을 사용할 수 없습니다.',
    'leMore' => '자세히 알아보기',

    'connLimit' => '현재 이 IP에 대한 최대 오픈 연결량에 도달했습니다. 제한 범위를 늘리고 싶으시면 디스코드를 통해 연락주시길 바랍니다.',
    'idleDC' => '자리비움으로 연결이 끊겼습니다! 관전 구역이 꽉 찼습니다.',
    'RLreach' => '속도 제한에 도달했습니다.',
    'ban1' => '라이브 게임에 대한 접근이 영구적으로 제한되었습니다. 여전히 싱글 플레이어 모드는 플레이할 수 있습니다.',
    'ban2' => '이 사용자 계정은 정지되었습니다. 자세한 내용을 보려면 웹사이트에 다시 로그인하세요.',
    'ncGS' => '게임 서버에 연결되지 않았습니다. {refr}을 해주세요.',
    'refr' => '페이지 새로고침',

    'nsUnpub' => '맵이 게시되지 않아, 기록이 저장되지 않습니다.',
    'nsTspins' => 'T-Spins이 충분하지 않아, 기록이 저장되지 않습니다.',
    'nsLowPC' => '최소 2개의 Perfect Clears가 필요합니다. 기록이 저장되지 않습니다.',
    'noBlocks' => 'Out of blocks',
    'noBlocks2' => '모든 블록을 사용했습니다.',

    //Room info detail
    'noPlayers' => '플레이어 없음',
    'cntMore' => '{cnt}개 더',          //e.g. +10 more
    'cntGuests' => '{cnt}명의 게스트',      //e.g. +10 guests
    'cntSpec' => '{cnt}명이 관전 중',    //e.g. +10 spectating
    'joinPossible' => '참여 가능',
    'notEligible' => '참여할 수 없음',
    'gTimeShort' => 'G.time',
    'on' => 'On',
    'off' => 'Off',

    //friends
    'fr' => '친구 목록',
    'frLoad' => '친구 목록 여는 중',
    'frLogin' => '친구 목록을 사용하려면 로그인하세요.',
    'frEmpty' => '친구 목록이 비어 있습니다.',
    'frHowAdd' => '사용자 프로필을 방문해서 친구 신청을 보내세요.',
    'frPriv' => '비공개',
    'frIn' => '이미 들어왔습니다!',
    'frChat' => '채팅 열기',
    'frRel' => '새로고침',
    'frMsgTo' => '{name}에게 보내는 메세지',  //keep {name}
    'frInv' => '방으로 초대하기',
    'frInvTo' => '{room}으로 초대되었습니다.',
    'frInvIn' => '이미 방에 있습니다!',
    'frInvBy' => '{user} 보냄',
    'frOn' => '온라인',
    'frOff' => '오프라인',
    'frNewChatH' => '{name}와의 채팅방이 시작되었습니다.',
    'frWelc' => '친구 탭에 오신 것을 환영합니다',
    'frIntro' => '이 곳에서는 온라인 친구 목록, 개인 채팅, 방 초대 등에 접속할 수 있습니다',
    'frIntro2' => '친구 요청을 보내시려면 사용자의 프로필을 방문하세요',
    'frIntro3' => '친구를 관리하려면 {frPage}를 방문하세요',
    'frPage' => '친구 목록 페이지',
    'frIntroCl' => '안내페이지 닫기',
];
