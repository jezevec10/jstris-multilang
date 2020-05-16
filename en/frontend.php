<?php

return [
    //On screen captions
    'ready' => 'READY',
    'go' => 'GO!',
    'notFocused' => 'Out of focus', //max 13 characters
    'clickToFocus' => 'Click here to focus the game', //max 30 characters
    'specMode' => 'Spectator mode',
    'specModeInfo' => 'You are in spectator mode now.',
    'endSpec' => 'Type /play to join the game', //keep '/play'
    'typeHelp' => 'Type /help for available commands.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Not playing', //max 12
    'waitNext' => 'Wait until the round ends',
    'waitNext2' => 'Please wait for the next round',
    'pressStart' => 'Press \'New game\' to start', //'New game' should be same as in game.newGame
    'slowDown' => 'SLOW DOWN', //When a speed limit is exceeded
    'speedLimitIs' => 'The speed limit is', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Connecting...', //when connecting to the game server
    'signingIn' => 'Signing in',
    'loginFail' => 'Log in failed!',
    'loginFail2' => 'Not logged in! You\'re playing as a guest called {name}.',
    'mapLoading' => 'Map loading...',

    //Chat
    'warning' => 'Warning',
    'inactive1' => 'Spectator mode will be activated. Type in chat to abort.',
    'inactive2' => 'Inactivity detected, next inactive game will activate spectator mode.',
    'nickFill' => 'Type your username to be able to chat!',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Room name must be filled!',
    'newsUser' => 'News', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Watching', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'joined the room', //in 'User1 joined the room.'
    'joined' => 'joined', //in title: 'User1 joined!'
    'userCame' => 'came to watch',  //in 'User1 came to watch.'
    'isSpectating' => 'is now spectating', //in 'User1 is now spectating.'
    'spectator' => 'Spectator',
    'hasLeft' => 'has left', //in 'Spectator User1 has left.'
    'signedAs' => 'You are signed in as',
    'welcome' => 'Welcome,', //in 'Welcome User1!'
    'welcomeIn' => 'Welcome in', //in 'Welcome in RoomName.'
    'noSpectators' => 'No one is watching right now.',
    'replayAvailable' => 'Replay available at',
    'oldVer' => 'You have an old version, use CTRL+F5 to reload to the new version!',
    'oldVer2' => 'You still have the old version! Use {key} to reload your client',
    'privateRoom' => 'This is your private room where you won\'t be disturbed while playing. Check the Lobby to see public rooms.',
    'restartInfo' =>  'Restart by F4 or set a custom key.',
    'joinLinkInfo' => 'This room is private. Only way someone can join it is using this link:',

    //Dynamic elements
    'received' => 'Received', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => 'Room name',
    'games' => 'Games', //number of games played in a room
    'players' => 'Players', //number of players

    //Results
    'name' => 'Name',
    'wins' => 'Wins',
    'time' => 'Time', //as game duration
    'received' => 'Received',
    'sent' => 'Sent',
    'blocks' => 'Blocks', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'time', //in Sprint time: xx.xx
    'see' => 'See', //in 'See 40L leaderboard'
    'leaderboard' => 'leaderboard',

    //Less common strings, can stay untranslated
    'warning2' => 'WARNING',
    'connected' => 'Connected',
    'client' => 'client',
    'notConnected' => 'NOT CONNECTED',
    'connLost' => 'Connection lost!',
    'lastGame' => 'Last game:',
    'roomSettings' => 'Room settings:',
    'attack' => 'Attack',
    'combo' => 'Combo',
    'solid' => 'Solid',
    'clear' => 'Clear',
    'mode' => 'Mode',
    'garbage' => 'Garbage',
    'garbageDelay' => 'GarbageDelay',
    'messiness' => 'Messiness',
    'replay' => 'Replay',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Enter numeric NullpoMino DAS value:',
    'suggestedIs' => 'Suggested DAS is',
    'applyConfirm' => 'Apply?',
    'invalidDAS' => 'DAS value is invalid, was not changed!',
    'settingsChanged' => 'Settings changed during the game. Replay invalidated.',
    'segment' => 'Segment',
    'duration' => 'Duration',
    'roomFull' => 'It seems the room is full.',
    'lobbyInfo' => 'This chat is shared with {discord}.',
    'newHost' => 'You are now the host of this room.',
    'badRoom' => 'This room no longer exists, joining the Default room!',
    'stngsChanged' => 'Setting changed by the host',
    'stngsCustom' => 'Custom settings',
    'aSpec' => 'Already spectating!',
    'aPlay' => 'Already playing!',
    'repFail' => 'Replay failed to save.',
    'repInChat' => 'Replay file dumped into the chat. To preserve it, copy the text in the box and paste into your favourite text editor.',
    'repTxtInfo' => 'The copied replayfile can be then played in the replayer or possibly resubmitted to the site.',

    'newPB' => 'YOUR NEW PERSONAL BEST',
    'firstPB' => 'This was your first game. Get another PB to track the improvment.',
    'infoPB' => 'Your previous record was {prevPB} achieved {prevAgo}. The improvement is {PBdiff}.',
    'daysAgo' => 'days ago',

    'raceFin' => 'THE RACE HAS FINISHED',
    'raceFinInfo' => 'You can complete the run, but the next round can start at any time.',

    'notTSD' => 'NOT TSD',
    'notTSDInfo' => 'Only T-Spin Double is allowed',

    'notPC' => 'NOT a PC',
    'notPCInfo' => 'Do a Perfect Clear every 10 blocks. Your board is not clearable.',

    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => 'Attacking yourself!',

    'oops' => 'Oops!',
    'chatNA' => 'Public chatting is not available for guests or users with less than {chReq} hours of gametime.',
    'leMore' => 'Learn more',

    'connLimit' => 'The maximum amount of open connections for this IP is curently reached. If you need increased limits, contact us via Discord',
    'idleDC' => 'Disconnected for inactivity! Spectator section was full.',
    'RLreach' => 'Rate limit reached.',
    'ban1' => 'Your access to the Live games has been permanently restricted. You can still play singleplayer modes.',
    'ban2' => 'This user account is BANNED. Relogin to the website for more information.',
    'ncGS' => 'Not connected to the game server, try {refr}.',
    'refr' => 'refreshing the page',

    'nsUnpub' => 'Record not saved, the map is not published.',
    'nsTspins' => 'Record not saved, not enough T-Spins.',
    'nsLowPC' => 'Record not saved, at least 2 Perfect Clears needed.',

    //Room info detail
    'noPlayers' => 'No players',
    'cntMore' => '{cnt} more',          //e.g. +10 more
    'cntGuests' => '{cnt} guests',      //e.g. +10 guests
    'cntSpec' => '{cnt} spectating',    //e.g. +10 spectating
    'joinPossible' => 'Join possible',
    'notEligible' => 'Not eligible',
    'gTimeShort' => 'G.time',
    'on' => 'On',
    'off' => 'Off',
];
