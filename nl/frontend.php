<?php

return [
    //On screen captions
    'ready' => 'KLAAR?',
    'go' => 'AF!',
    'notFocused' => 'Buiten focus', //max 13 characters
    'clickToFocus' => 'Klik hier om te hervatten.', //max 30 characters
    'specMode' => 'Toeschouwen',
    'specModeInfo' => 'Je bent nu een toeschouwer.',
    'endSpec' => 'Typ /play om mee te doen aan het spel', //keep '/play'
    'typeHelp' => 'Typ /help voor mogelijke commands.', //keep '/help'
    'st' => 'e', //max 2, in 1st, can stay untranslated
    'nd' => 'e', //max 2, in 2nd, can stay untranslated
    'rd' => 'e', //max 2, in 3rd, can stay untranslated
    'th' => 'e', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Speelt niet', //max 12
    'waitNext' => 'Wacht tot de ronde voorbij is',
    'waitNext2' => 'Wacht a.u.b. op de volgende ronde',
    'pressStart' => 'Klik op \'Nieuw spel\' om te beginnen', //'New game' should be same as in game.newGame
    'slowDown' => 'LANGZAMER', //When a speed limit is exceeded
    'speedLimitIs' => 'De snelheidslimiet is', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Verbinden...', //when connecting to the game server
    'signingIn' => 'Inloggen',
    'loginFail' => 'Inloggen mislukt!',
    'loginFail2' => 'Niet ingelogd! Je speelt als gast genaamd {name}.',
    'mapLoading' => 'Bord wordt geladen...',

    //Chat
    'warning' => 'Waarschuwing',
    'inactive1' => 'Je wordt zo toeschouwer. Typ in chat om dit te stoppen.',
    'inactive2' => 'Je bent afwezig, bij het volgende afwezige spel word je toeschouwer.',
    'nickFill' => 'Typ je gebruikersnaam om te kunnen chatten!',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Kamernaam moet ingevuld zijn!',
    'newsUser' => 'Nieuws', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Toeschouwers', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'is gejoind', //in 'User1 joined the room.'
    'joined' => 'is gejoind!', //in title: 'User1 joined!'
    'userCame' => 'is gekomen als toeschouwer',  //in 'User1 came to watch.'
    'isSpectating' => 'is aan het toeschouwen', //in 'User1 is now spectating.'
    'spectator' => 'Toeschouwer',
    'hasLeft' => 'is vertrokken', //in 'Spectator User1 has left.'
    'signedAs' => 'Je bent ingelogd als',
    'welcome' => 'Welkom,', //in 'Welcome User1!'
    'welcomeIn' => 'Welkom in', //in 'Welcome in RoomName.'
    'noSpectators' => 'Er zijn geen toeschouwers.',
    'replayAvailable' => 'Herhaling beschikbaar in',
    'oldVer' => 'Je hebt een oude versie, druk op CTRL+F5 om te herladen naar de nieuwe versie!',
    'oldVer2' => 'Je hebt nog de oude versie! Druk op {key} om te herladen',
    'privateRoom' => 'Dit is je privékamer waar je ongestoord kan spelen. Kijk in de Lobby om de openbare kamers te zien.',
    'restartInfo' =>  'Herstart met F4 of stel een andere toets in.',
    'joinLinkInfo' => 'Deze kamer is privé. Anderen kunnen alleen meedoen met deze link:',

    //Dynamic elements
    'received' => 'Ontvangen', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => 'Kamernaam',
    'games' => 'Spellen', //number of games played in a room
    'players' => 'Spelers', //number of players

    //Results
    'name' => 'Naam',
    'wins' => 'Overwinningen',
    'time' => 'Tijd', //as game duration
    'received' => 'Ontvangen',
    'sent' => 'Gestuurd',
    'blocks' => 'Blokken', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'tijd', //in Sprint time: xx.xx
    'see' => 'Bekijk', //in 'See 40L leaderboard'
    'leaderboard' => 'scorebord',

    //Less common strings, can stay untranslated
    'warning2' => 'WAARSCHUWING',
    'connected' => 'Verbonden',
    'client' => 'client',
    'notConnected' => 'NIET VERBONDEN',
    'connLost' => 'Verbinding verbroken!',
    'lastGame' => 'Meest recente spel:',
    'roomSettings' => 'Kamerinstellingen:',
    'attack' => 'Attack',
    'combo' => 'Combo',
    'solid' => 'Solid',
    'clear' => 'Clear',
    'mode' => 'Mode',
    'garbage' => 'Garbage',
    'garbageDelay' => 'GarbageDelay',
    'messiness' => 'Rommeligheid',
    'replay' => 'Herhaling',
    'rep' => 'Her', //max 3, short for Replay
    'rec' => 'Ontv', //max 4, short for Received
    'enterNullDAS' => 'Vul numerieke NullpoMino DAS waarde in:',
    'suggestedIs' => 'Voorgestelde DAS is',
    'applyConfirm' => 'Toepassen?',
    'invalidDAS' => 'DAS waarde is ongeldig, niet veranderd!',
    'settingsChanged' => 'De instellingen zijn veranderd tijdens het spel. Herhaling is ongeldig.',
    'segment' => 'Segment',
    'duration' => 'Duur',
    'roomFull' => 'Deze kamer is vol.',
    'lobbyInfo' => 'Deze chat is gedeeld met {discord}.',
    'newHost' => 'Je bent nu de host van deze kamer.',
    'badRoom' => 'Deze kamer bestaat niet meer, je joint nu de standaard kamer!',
    'stngsChanged' => 'Instelling veranderd door de host',
    'stngsCustom' => 'Aangepaste instellingen',
    'aSpec' => 'Je bent al toeschouwer!',
    'aPlay' => 'Je bent al aan het spelen!',
    'repFail' => 'Opslaan van de herhaling mislukt.',
    'repInChat' => 'De herhaling is gedumpt in de chat. Kopieer de tekst in het tekstvak en plak in je favoriete teksteditor om de herhaling te behouden.',
    'repTxtInfo' => 'De gekopieerde herhaling kan afgespeeld of opnieuw ingediend worden bij de site.',

    'newPB' => 'NIEUW PERSOONLIJK RECORD',
    'firstPB' => 'Dit was je eerste spel. Haal nog een persoonlijk record om je verbetering bij te houden.',
    'infoPB' => 'Je vorige record was {prevPB} gehaald op {prevAgo}. De verbetering is {PBdiff}.',
    'daysAgo' => 'dagen geleden',

    'raceFin' => 'DE RACE IS AFGELOPEN',
    'raceFinInfo' => 'Je kan dit spel afmaken, maar de volgende ronde kan elk moment beginnen.',

    'notTSD' => 'GEEN TSD',
    'notTSDInfo' => 'Alleen T-Spin Double is toegestaan',

    'notPC' => 'GEEN PC',
    'notPCInfo' => 'Doe een Perfect Clear elke 10 blokken. Je bord staat geen Perfect Clear toe.',

    'fwDetect' => 'VIER WIJD',
    'fwDetectInfo' => 'Je valt jezelf aan!',

    'oops' => 'Oeps!',
    'chatNA' => 'Openbaar chatten is niet beschikbaar voor gasten of gebruikers met minder dan {chReq} uur speeltijd.',
    'leMore' => 'Meer informatie',

    'connLimit' => 'Het maximum aantal open verbindingen voor deze IP is bereikt. Neem contact met ons op via Discord als je een hogere limiet nodig hebt.',
    'idleDC' => 'Verbinding verbroken vanwege afwezigheid! Er was geen ruimte over voor toeschouwers.',
    'RLreach' => 'Ratelimiet bereikt.',
    'ban1' => 'Je toegang tot Live spellen is permanent geweigerd. Je kan nog steeds singleplayer spellen spelen.',
    'ban2' => 'Dit account is VERBANNEN. Log opnieuw in voor meer informatie.',
    'ncGS' => 'Niet verbonden met de server, probeer {refr}.',
    'refr' => 'pagina opnieuw laden',

    'nsUnpub' => 'Record niet opgeslagen, dit bord is niet gepubliceerd.',
    'nsTspins' => 'Record niet opgeslagen, niet genoeg T-Spins.',
    'nsLowPC' => 'Record niet opgeslagen, ten minste 2 Perfect Clears vereist.',

    //Room info detail
    'noPlayers' => 'Geen spelers',
    'cntMore' => '{cnt} anderen',          //e.g. +10 more
    'cntGuests' => '{cnt} gasten',      //e.g. +10 guests
    'cntSpec' => '{cnt} toeschouwers',    //e.g. +10 spectating
    'joinPossible' => 'Join mogelijk',
    'notEligible' => 'Niet in aanmerking',
    'gTimeShort' => 'S.tijd',
    'on' => 'Aan',
    'off' => 'Uit',
];
