<?php
return [
    //On screen captions
    'ready' => 'KLAR',
    'go' => 'BEGYND!',
    'notFocused' => 'Ude af fokus', //max 13 characters
    'clickToFocus' => 'Klik her for at fokusere', //max 30 characters
    'specMode' => 'Tilskuer tilstand',
    'specModeInfo' => 'Du er nu i tilskuer tilstand.',
    'endSpec' => 'Skriv /play for at tilslutte til spillet', //keep '/play'
    'typeHelp' => 'Skriv /help for at se tilgængelige kommandoer.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Spiller ikke', //max 12
    'waitNext' => 'Vent til runden slutter',
    'waitNext2' => 'Vent til næste runde',
    'pressStart' => 'Tryk \'Nyt spil\' to start', //'New game' should be same as in game.newGame
    'slowDown' => 'Sænk farten', //When a speed limit is exceeded
    'speedLimitIs' => 'Hastighedsgrænsen er', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Forbinder...', //when connecting to the game server
    'signingIn' => 'Logger ind',
    'loginFail' => 'Login mislykkedes!',
    'loginFail2' => 'Ikke logget ind! Du spiller som gæst kaldet {name}.',
    'mapLoading' => 'Kort indlæses...',

    //Chat
    'warning' => 'Advarsel',
    'inactive1' => 'Tilskuer tilstand vil blive aktiveret. Skriv i chatten for at afbryde.',
    'inactive2' => 'Inaktivitet fundet, naeste inaktive spil vil tilskuer tilstand blive aktiveret.',
    'nickFill' => 'Skriv dit brugernavn for at få brug af chatten!',
    'setButton' => 'Sæt', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Rum navnet skal være udfyldt!',
    'newsUser' => 'Nyheder', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'Unkendt', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Tilskuer', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'tilsluttede til rummet', //in 'User1 joined the room.'
    'joined' => 'tilsluttede', //in title: 'User1 joined!'
    'userCame' => 'kom for at se på',  //in 'User1 came to watch.'
    'isSpectating' => 'ser nu som tilskuer', //in 'User1 is now spectating.'
    'spectator' => 'Tilskuer',
    'hasLeft' => 'har forladt', //in 'Spectator User1 has left.'
    'signedAs' => 'Du er logget ind som',
    'welcome' => 'Velkommen,', //in 'Welcome User1!'
    'welcomeIn' => 'Velkommen til rummet', //in 'Welcome in RoomName.'
    'noSpectators' => 'Ingen ser på lige nu.',
    'replayAvailable' => 'Genafspilning er tilgængelig.',
    'oldVer' => 'Du har en ældre version, brug CTRL+F5 for at opdatere til nyere!',
    'oldVer2' => 'Du har stadig den gamle version! Brug {key} for at genindlæse klienten',
    'privateRoom' => 'Det her er dit private rum hvor du ikke vil blive forstyrret, mens du spiller. Tjek lobbyen for at se offentlige rum.',
    'restartInfo' =>  'Genstart på F4 eller sæt brugerdefineret tast.',
    'joinLinkInfo' => 'Det her rum er privat. Den eneste måde folk kan tilslutte til rummet er med dette link:',
    //Dynamic elements
    'received' => 'Modtaget', //max 15
    'finesse' => 'Finesse',   //max 15
    //List of rooms
    'roomName' => 'Rum navn',
    'games' => 'Spil spillet', //number of games played in a room
    'players' => 'Spillere', //number of players
    //Results
    'name' => 'Navn',
    'wins' => 'Vundet',
    'time' => 'Tid', //as game duration
    'received' => 'Modtaget',
    'sent' => 'Sendt',
    'blocks' => 'Blokke', //as number of blocks placed
    'ren' => 'REN',
    //Practice mode result
    'gameTime' => 'tid', //in Sprint time: xx.xx
    'see' => 'Se', //in 'See 40L leaderboard'
    'leaderboard' => 'resultattavle',
    //Less common strings, can stay untranslated
    'warning2' => 'ADVARSEL',
    'connected' => 'Tilsluttet',
    'client' => 'klient',
    'notConnected' => 'IKKE TILSLUTTET',
    'connLost' => 'Tilslutnings fejl!',
    'lastGame' => 'Sidste spil:',
    'roomSettings' => 'Rum indstillinger:',
    'attack' => 'Angreb',
    'combo' => 'Combo',
    'solid' => 'Solid',
    'clear' => 'Clear',
    'mode' => 'Tilstand',
    'garbage' => 'Garbage',
    'garbageDelay' => 'GarbageForsinkelse',
    'messiness' => 'Messiness',
    'replay' => 'Genafspil',
    'rep' => 'Gen', //max 3, short for Replay
    'rec' => 'Modt', //max 4, short for Received
    'enterNullDAS' => 'Skriv numerisk NullpoMino DAS værdi:',
    'suggestedIs' => 'Foretrukne DAS er',
    'applyConfirm' => 'Anvend?',
    'invalidDAS' => 'DAS værdien er invalid og er ikke skiftet!',
    'settingsChanged' => 'Dine indstillinger er ændret mens du spillede. Replay ugyldiggjort.',
    'segment' => 'Segmenter',
    'duration' => 'Varighed',
    
    // Room and system
    'roomFull' => 'Rummet virker fuldt.',
    'lobbyInfo' => 'Denne chat deles med {discord}.',
    'newHost' => 'Du er nu vært for dette rum.',
    'badRoom' => 'Dette rum findes ikke længere, tilslutter Standard-rummet!',
    'stngsChanged' => 'Indstillinger ændret af værten',
    'stngsCustom' => 'Brugerdefinerede indstillinger',
    'aSpec' => 'Allerede tilskuer!',
    'aPlay' => 'Allerede spiller!',
    'repFail' => 'Kunne ikke gemme genafspilning.',
    'repInChat' => 'Genafspilningsfil dumpet i chatten. For at bevare den, kopier teksten i boksen og indsæt i din favorit teksteditor.',
    'repTxtInfo' => 'Den kopierede genafspilningsfil kan afspilles i afspilleren eller evt. genindsendes til siden.',

    'newPB' => 'DIN NYE PERSONLIGE REKORD',
    'firstPB' => 'Dette var dit første spil. Få en ny PR for at spore forbedringen.',
    'infoPB' => 'Din forrige rekord var {prevPB} opnået {prevAgo}. Forbedringen er {PBdiff}.',
    'daysAgo' => 'dage siden',

    'raceFin' => 'LØBET ER AFSLUTTET',
    'raceFinInfo' => 'Du kan fuldføre runden, men næste runde kan starte når som helst.',

    'notTSD' => 'IKKE TSD',
    'notTSDInfo' => 'Kun T-Spin Double er tilladt',

    'notPC' => 'IKKE en PC',
    'notPCInfo' => 'Lav en Perfect Clear hver 10. blok. Dit bræt kan ikke ryddes.',

    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => 'Du angriber dig selv!',

    'oops' => 'Ups!',
    'chatNA' => 'Offentlig chat er ikke tilgængelig for gæster eller brugere med mindre end {chReq} timers spilletid.',
    'leMore' => 'Lær mere',

    'connLimit' => 'Det maksimale antal åbne forbindelser for denne IP er nået. Hvis du har brug for højere grænser, kontakt os via Discord',
    'idleDC' => 'Afbrudt pga. inaktivitet! Tilskuersektionen var fuld.',
    'RLreach' => 'Rate limit nået.',
    'ban1' => 'Din adgang til Live-spil er blevet permanent begrænset. Du kan stadig spille singleplayer.',
    'ban2' => 'Denne brugerkonto er BANDET. Log ind igen på websitet for mere info.',
    'ncGS' => 'Ikke forbundet til spilleserveren, prøv {refr}.',
    'refr' => 'genindlæs siden',
    'lines' => 'Linjer',
    'statistics' => 'Statistik', //stat lines showing under the field
    'vs' => 'VS', //label for VS score stat
    'downstack' => 'Skræp-downstack',
    'wasted' => 'Spildt',
    'expand' => 'Udvid',  //tooltip for icon to expand chat

    'nsUnpub' => 'Rekord ikke gemt, banen er ikke udgivet.',
    'nsTspins' => 'Rekord ikke gemt, ikke nok T-Spins.',
    'nsLowPC' => 'Rekord ikke gemt, mindst 2 Perfect Clears kræves.',
    'noBlocks' => 'Ingen blokke tilbage',
    'noBlocks2' => 'Alle blokke blev brugt',

    //Room info detail
    'noPlayers' => 'Ingen spillere',
    'cntMore' => '{cnt} flere',          //e.g. +10 more
    'cntGuests' => '{cnt} gæster',      //e.g. +10 guests
    'cntSpec' => '{cnt} tilskuere',    //e.g. +10 spectating
    'joinPossible' => 'Muligt at joine',
    'notEligible' => 'Ikke berettiget',
    'gTimeShort' => 'S.tid',
    'on' => 'Til',
    'off' => 'Fra',

    //friends
    'fr' => 'Venner',
    'frLoad' => 'Indlæser venneliste',
    'frLogin' => 'Log ind først for at bruge vennelisten',
    'frEmpty' => 'Vennelisten er tom',
    'frHowAdd' => 'Besøg brugerens profil for at sende venneanmodning.',
    'frPriv' => 'Privat',
    'frIn' => 'Allerede inde!',
    'frChat' => 'Åbn chat',
    'frRel' => 'Genindlæs',
    'frMsgTo' => 'Besked til {name}',  //keep {name}
    'frInv' => 'Send ruminvitation',
    'frInvTo' => 'Inviter til at joine {room}',
    'frInvIn' => 'Du er allerede inde!',
    'frInvBy' => 'af {user}',
    'frOn' => 'ONLINE',
    'frOff' => 'OFFLINE',
    'frNewChatH' => 'Dette er starten på chat-historikken med {name}.',
    'frWelc' => 'Velkommen til fanen Venner',
    'frIntro' => 'Her kan du se listen over online venner, private chats og ruminvitationer',
    'frIntro2' => 'For at sende en venneanmodning, besøg en brugers profil',
    'frIntro3' => 'For at administrere venner, besøg {frPage}',
    'frPage' => 'Venneside',
    'frIntroCl' => 'Luk intro',
];