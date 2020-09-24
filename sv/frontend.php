<?php

return [
    //On screen captions
    'ready' => 'FÄRDIGA',
    'go' => 'GÅ!',
    'notFocused' => 'Ur fokus', //max 13 characters
    'clickToFocus' => 'Klicka här för att fokusera spelet', //max 30 characters
    'specMode' => 'Åskådarläge',
    'specModeInfo' => 'Du är i åskådarläge just nu.',
    'endSpec' => 'Skriv /play för att spela', //keep '/play'
    'typeHelp' => 'Skriv /help för möjliga kommandon.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Spelar inte', //max 12
    'waitNext' => 'Vänta tills nästa runda är över.',
    'waitNext2' => 'Vänligen vänta till nästa runda',
    'pressStart' => 'Tryck på \'New game\' för att börja.', //'New game' should be same as in game.newGame
    'slowDown' => 'SAKTA NER', //When a speed limit is exceeded
    'speedLimitIs' => 'Hastighetsgränsen är', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Ansluter...', //when connecting to the game server
    'signingIn' => 'Loggar in',
    'loginFail' => 'Inloggning misslyckad!',
    'loginFail2' => 'Du är inte inloggad! Du spelar som en gäst med namnet {name}.',
    'mapLoading' => 'Bana Laddar...',

    //Chat
    'warning' => 'Varning',
    'inactive1' => 'Åskådarläge kommer aktiveras. Skriv i chatten för att avbryta',
    'inactive2' => 'Inaktivitet upptäckt, nästa inaktiva spel kommer aktivera åskådarläge',
    'nickFill' => 'Skriv ditt användarnamn för att kunna chatta!',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Rummets namn måste fyllas i!',
    'newsUser' => 'News', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Watching', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'anslöt till rummet', //in 'User1 joined the room.'
    'joined' => 'anslöt', //in title: 'User1 joined!'
    'userCame' => 'kom för att titta på',  //in 'User1 came to watch.'
    'isSpectating' => 'tittar nu på', //in 'User1 is now spectating.'
    'spectator' => 'Åskådare',
    'hasLeft' => 'har lämnat', //in 'Spectator User1 has left.'
    'signedAs' => 'Du är inloggad som',
    'welcome' => 'Välkommen,', //in 'Welcome User1!'
    'welcomeIn' => 'Välkommen i', //in 'Welcome in RoomName.'
    'noSpectators' => 'Ingen tittar på just nu.',
    'replayAvailable' => 'Replay available at',
    'oldVer' => 'Du har en gammal version, använd CTRL+F5 för att ladda om till den nya versionen!',
    'oldVer2' => 'Du har fortfarande den gamla versionen! Använd {key} för att ladda om klienten',
    'privateRoom' => 'Det här är ditt privata rum där du inte kommer bli störd medan du spelar. Kolla lobbyn för att se officiella rum.',
    'restartInfo' =>  'Starta om med F4 eller välj en egen knapp.',
    'joinLinkInfo' => 'Det här rummet är privat. Det går bara att ansluta med denna länk:',

    //Dynamic elements
    'received' => 'Mottaget', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => 'Rum Namn',
    'games' => 'Omgångar', //number of games played in a room
    'players' => 'Spelare', //number of players

    //Results
    'name' => 'Namn',
    'wins' => 'Vinster',
    'time' => 'Tid', //as game duration
    'received' => 'Mottaget',
    'sent' => 'Skickat',
    'blocks' => 'Block', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'tid', //in Sprint time: xx.xx
    'see' => 'Se', //in 'See 40L leaderboard'
    'leaderboard' => 'topplista',

    //Less common strings, can stay untranslated
    'warning2' => 'VARNING',
    'connected' => 'Ansluten',
    'client' => 'klient',
    'notConnected' => 'INTE ANSLUTEN',
    'connLost' => 'Anslutning tappad!',
    'lastGame' => 'Senaste spel:',
    'roomSettings' => 'Rum inställningar:',
    'attack' => 'Attack',
    'combo' => 'Kombo',
    'solid' => 'Solid',
    'clear' => 'Rensad',
    'mode' => 'Läge',
    'garbage' => 'Skräp',
    'garbageDelay' => 'SkräpDröjning',
    'messiness' => 'Rörighet',
    'replay' => 'Replay',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Enter numeric NullpoMino DAS value:',
    'suggestedIs' => 'Suggested DAS is',
    'applyConfirm' => 'Tillämpa?',
    'invalidDAS' => 'DAS value is invalid, was not changed!',
    'settingsChanged' => 'Inställningar har ändrats under detta spel. Replay ogiltighetsförklarad.',
    'segment' => 'Segment',
    'duration' => 'Varaktighet',
    'roomFull' => 'Rummet verkar vara fullt.',
    'lobbyInfo' => 'Den här chatten delas med {discord}.',
    'newHost' => 'Du är nu ägaren av detta rum.',
    'badRoom' => 'Det här rummet finns inte längre, ansluter till Standard rummet!',
    'stngsChanged' => 'Inställning ändrad av ägaren',
    'stngsCustom' => 'Egna inställningar',
    'aSpec' => 'Redan i åskådarläge!',
    'aPlay' => 'Spelar redan!',
    'repFail' => 'Replay misslyckades att spara.',
    'repInChat' => 'Replay filen dumpades i chatten. För att bevara den, kopiera texten i rutan och klistra in den i din favorit-textredigerare.',
    'repTxtInfo' => 'Den kopierade replayfilen kan spelas upp i uppspelaren eller eventuellt skickas in igen till sidan.',

    'newPB' => 'DITT NYA REKORD',
    'firstPB' => 'Det här var ditt första spel. Få ett nytt rekord för att spåra dina förbättringar.',
    'infoPB' => 'Ditt tidigare rekord var {prevPB} uppnått {prevAgo}. Förbättringen är {PBdiff}.',
    'daysAgo' => 'dagar sedan',

    'raceFin' => 'TÄVLNINGEN HAR AVSLUTATS',
    'raceFinInfo' => 'Du kan spela vidare, men nästa runda kan starta när som helst.',

    'notTSD' => 'NOT TSD',
    'notTSDInfo' => 'Bara T-Spin Dubbel är tillåtet',

    'notPC' => 'NOT a PC',
    'notPCInfo' => 'Do a Perfect Clear every 10 blocks. Your board is not clearable.',

    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => 'Attackerar dig själv!',

    'oops' => 'Oops!',
    'chatNA' => 'Allmän chattning är inte tillgängigt för gäster eller användare med mindre än {chReq} timmar av speltid.',
    'leMore' => 'Läs mer',

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
    'noPlayers' => 'Inga spelare',
    'cntMore' => '{cnt} mer',          //e.g. +10 more
    'cntGuests' => '{cnt} gäster',      //e.g. +10 guests
    'cntSpec' => '{cnt} åskådare',    //e.g. +10 spectating
    'joinPossible' => 'Join possible',
    'notEligible' => 'Not eligible',
    'gTimeShort' => 'G.time',
    'on' => 'På',
    'off' => 'Av',
];
