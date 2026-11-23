<?php

return [
    //On screen captions
    'ready' => 'READY',
    'go' => 'GO!',
    'notFocused' => 'Wala sa focus', //max 13 characters
    'clickToFocus' => 'Mag-click dito para mag-focus ang laro', //max 30 characters
    'specMode' => 'Spectator mode',
    'specModeInfo' => 'Ikaw ngayon ay nasa Spectator Mode.',
    'endSpec' => 'I-type ang /play para sumali sa laro.', //keep '/play'
    'typeHelp' => 'I-type ang /help para makita ang mga available na commands.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Hindi naglalaro', //max 12
    'waitNext' => 'Maghintay hanggang matapos ang laro',
    'waitNext2' => 'Mangyaring maghintay sa susunod na round.',
    'pressStart' => 'Press \'New game\' to start', //'New game' should be same as in game.newGame
    'slowDown' => 'SLOW DOWN', //When a speed limit is exceeded
    'speedLimitIs' => 'The speed limit is', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Kumokonekta sa server...', //when connecting to the game server
    'signingIn' => 'Signing in',
    'loginFail' => 'Log in failed!',
    'loginFail2' => 'Not logged in! You\'re playing as a guest called {name}.',
    'mapLoading' => 'Map loading...',

    //Chat
    'warning' => 'Babala',
    'inactive1' => 'I-aactivate ang spectator mode. Mag-type sa chat para i-abort.',
    'inactive2' => 'Inactivity detected, next inactive game will activate spectator mode.',
    'nickFill' => 'I-type ang iyong username para makapag chat!',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Dapat mailagay ang room name!',
    'newsUser' => 'Balita', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Nanonood', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=> 'ay sumali sa room', //in 'User1 joined the room.'
    'joined' => 'joined', //in title: 'User1 joined!'
    'userCame' => 'ay sumali para manood',  //in 'User1 came to watch.'
    'isSpectating' => 'ay ngayon', //in 'User1 is now spectating.'
    'spectator' => 'Spectator',
    'hasLeft' => 'has left', //in 'Spectator User1 has left.'
    'signedAs' => 'Ikaw ay naka-sign-in bilang si',
    'welcome' => 'Welcome,', //in 'Welcome User1!'
    'welcomeIn' => 'Maligayang pagdating sa', //in 'Welcome in RoomName.'
    'noSpectators' => 'Walang kasalukuyang nanonood',
    'replayAvailable' => 'Mapapanood ang replay sa',
    'oldVer' => 'You have an old version, use CTRL+F5 to reload to the new version!',
    'oldVer2' => 'You still have the old version! Use {key} to reload your client',
    'privateRoom' => 'This is your private room where you won\'t be disturbed while playing. Check the Lobby to see public rooms.',
    'restartInfo' =>  'Restart by F4 or set a custom key.',
    'joinLinkInfo' => 'This room is private. Only way someone can join it is using this link:',

    //Dynamic elements
    'received' => 'Natanggap', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => 'Pangalan ng Room',
    'games' => 'Mga Games', //number of games played in a room
    'players' => 'Mga Mag-lalaro', //number of players

    //Results
    'name' => 'Pangalan',
    'wins' => 'Mga Panalo',
    'time' => 'Oras', //as game duration
    'received' => 'Natanggap',
    'sent' => 'Napadala',
    'blocks' => 'Blocks', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'time', //in Sprint time: xx.xx
    'see' => 'Tingnan ang', //in 'See 40L leaderboard'
    'leaderboard' => 'leaderboard',

    //Less common strings, can stay untranslated
    'warning2' => 'BABALA',
    'connected' => 'Naka-connect',
    'client' => 'cliyente',
    'notConnected' => 'HINDI KONEKTADO',
    'connLost' => 'Nawalan ng koneksyon!',
    'lastGame' => 'Huling laro:',
    'roomSettings' => 'Room settings:',
    'attack' => 'Attack',
    'combo' => 'Combo',
    'solid' => 'Solid',
    'clear' => 'Clear',
    'mode' => 'Mode',
    'garbage' => 'Garbage',
    'garbageDelay' => 'GarbageDelay',
    'messiness' => 'Messiness',
    'replay' => 'I-Replay',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Ilagay ang numeric NullpoMino DAS value:',
    'suggestedIs' => 'Suggested DAS is',
    'applyConfirm' => 'Ilapat?',
    'invalidDAS' => 'Hindi tamang DAS value, walang pagbabago',
    'settingsChanged' => 'Nabago ang settings habang nag-lalaro. Replay invalidated',
    'segment' => 'Segmento',
    'duration' => 'Durasyon',
    'roomFull' => 'Mukhang puno na ang room.',
    'lobbyInfo' => 'Nakabahagi ang chat na ito sa {discord}.',
    'newHost' => 'Ikaw na ang host ng kwarto.',
    'badRoom' => 'Wala na ang sinasalihang room, sumasali sa Default room!',
    'stngsChanged' => 'Binago ng Host ang mga settings',
    'stngsCustom' => 'Custom settings',
    'aSpec' => 'Already spectating!',
    'aPlay' => 'Already playing!',
    'repFail' => 'Nabigong i-save ang replay.',
    'repInChat' => 'Replay file dumped into the chat. To preserve it, copy the text in the box and paste into your favourite text editor.',
    'repTxtInfo' => 'The copied replayfile can be then played in the replayer or possibly resubmitted to the site.',

    'newPB' => 'ANG IYONG PERSONAL NA RECORD',
    'firstPB' => 'Ito ang iyong unang laro. Kumuha ng isang panibagong PB para masubaybayan ang iyong pag-unlad.',
    'infoPB' => 'Your previous record was {prevPB} achieved {prevAgo}. The improvement is {PBdiff}.',
    'daysAgo' => 'days ago',

    'raceFin' => 'NATAPOS NA ANG KARERA',
    'raceFinInfo' => 'Pwede mong tapusin ang iyong takbo, pero maaring mag-start ang susunod na round sa anumang oras.',

    'notTSD' => 'HINDI TSD',
    'notTSDInfo' => 'T-Spin Double lang ang pinapayagan',

    'notPC' => 'HINDI PC',
    'notPCInfo' => 'Magsagawa ng Perfect Clear sa bawat 10 bloke. Hindi clearable ang iyong board.',

    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => 'Inaatake ang iyong sarili!',

    'oops' => 'Oops!',
    'chatNA' => 'Hindi pwede ang public chat sa mga guests or users na may mas mababa na {chReq} oras ng gametime.',
    'leMore' => 'Learn more',

    'connLimit' => 'The maximum amount of open connections for this IP is curently reached. If you need increased limits, contact us via Discord',
    'idleDC' => 'Na-disconnect dahil sa kawalan ng aktibidad! Puno na ang lugar ng tagapanood.',
    'RLreach' => 'Umabot sa rate-limit.',
    'ban1' => 'Ang iyong pag-access sa mga Live na laro ay permanenteng pinaghigpitan. Maari ka pa rin makapaglaro ng singleplayer na mga laro.',
    'ban2' => 'Ang account na ito ay BANNED. Mag-login muli sa website para sa mga karadgagang impormasyon.',
    'ncGS' => 'Hindi naka-konekta sa server ng laro, subukang {refr}.',
    'refr' => 'ire-refresh ang pahina',

    'nsUnpub' => 'Hindi na-save ang record, hindi nai-publish ang mapa.',
    'nsTspins' => 'Hindi na-save ang record, hindi sapat na T-Spins.',
    'nsLowPC' => 'Hindi na-save ang record, hindi bababa sa 2 T-Spin ang kailangan.',
    'noBlocks' => 'Walang bloke',
    'noBlocks2' => 'Lahat ng bloke ay nagamit',

    //Room info detail
    'noPlayers' => 'Walang mga mag-lalaro',
    'cntMore' => '{cnt} more',          //e.g. +10 more
    'cntGuests' => '{cnt} mga guess',      //e.g. +10 guests
    'cntSpec' => '{cnt} na nag-iispectate',    //e.g. +10 spectating
    'joinPossible' => 'Posibleng mag-join',
    'notEligible' => 'Hindi eligible',
    'gTimeShort' => 'G.time',
    'on' => 'Bukas',
    'off' => 'Sarado',

    //friends
    'fr' => 'Mga-kaibigan',
    'frLoad' => 'Ni-loload ang iyong friend list',
    'frLogin' => 'Mag-log-in upang magamit ang friend list',
    'frEmpty' => 'Walang laman ang iyong friend list',
    'frHowAdd' => 'Pumunta sa profile ng user para magpadala ng friend request.',
    'frPriv' => 'Pribado',
    'frIn' => 'Already in!',
    'frChat' => 'Open chat',
    'frRel' => 'I-reload',
    'frMsgTo' => 'Mensahe para kay {name}',  //keep {name}
    'frInv' => 'I-padala ang room invite',
    'frInvTo' => 'Mag-invite para makasali sa {room}',
    'frInvIn' => 'You are already in!',
    'frInvBy' => 'ni {user}',
    'frOn' => 'ONLINE',
    'frOff' => 'OFFLINE',
    'frNewChatH' => 'Ito ang simula ng iyong chat history kay {name}.',
    'frWelc' => 'Welcome sa Friends tab',
    'frIntro' => 'Sa lugar na ito puwede mong i-access ang listahan ng iyong mga online na mga kaibigan, pribadong chats, at mga room invites',
    'frIntro2' => 'Para mag-send ng friend request, pumunta sa profile ng user',
    'frIntro3' => 'Para i-manage ang iyong friends, pumunta sa  {frPage}',
    'frPage' => 'Friends page',
    'frIntroCl' => 'I-sarado ang intro',
];
