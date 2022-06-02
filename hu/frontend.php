<?php

return [
    //On screen captions
    'ready' => 'KÉSZ',
    'go' => 'RAJT!',
    'notFocused' => 'Fókuszálatlan', //max 13 characters
    'clickToFocus' => 'Kattints ide a fókuszálásához', //max 30 characters
    'specMode' => 'Nézői mód',
    'specModeInfo' => 'Nézői üzemmódban vagy.',
    'endSpec' => 'Írd be a /play parancsot a játékhoz való csatlakozáshoz', //keep '/play'
    'typeHelp' => 'Írd be a /help parancsot az elérhető parancsokhoz.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Not playing', //max 12
    'waitNext' => 'Várj, amíg vége a körnek',
    'waitNext2' => 'Kérjük, várj a következő körre',
    'pressStart' => 'Nyomd meg az \'Új játék\' gombot a kezdéshez', //'New game' should be same as in game.newGame
    'slowDown' => 'LASSÍTS', //When a speed limit is exceeded
    'speedLimitIs' => 'A játék megengedett sebessége:', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Csatlakozás...', //when connecting to the game server
    'signingIn' => 'Bejelentkezés',
    'loginFail' => 'A bejelentkezés sikertelen!',
    'loginFail2' => 'Nem vagy bejelentkezve! Vendégként a neved: {name}.',
    'mapLoading' => 'Pálya betöltése...',

    //Chat
    'warning' => 'Figyelmeztetés',
    'inactive1' => 'A nézői üzemmód aktiválódik. A megszakításhoz írj a chatbe.',
    'inactive2' => 'Inaktivitás észlelve, a következő inaktív játék áthelyez nézői üzemmódba.',
    'nickFill' => 'Írd be a felhasználóneved a chateléshez',
    'setButton' => 'OK', //max 4
    'sendButton' => 'Küld', //max 4
    'rNameReq' => 'A szoba nevét ki kell tölteni!',
    'newsUser' => 'News', //special username in chat
    'serverUser' => 'Szerver', //special username in chat
    'noNamed' => 'Névtelen', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Megfigyelés', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'csatlakozott a szobához', //in 'User1 joined the room.'
    'joined' => 'csatlakozott', //in title: 'User1 joined!'
    'userCame' => 'nézőként csatlakozott',  //in 'User1 came to watch.'
    'isSpectating' => 'mostantól néző', //in 'User1 is now spectating.'
    'spectator' => 'Néző',
    'hasLeft' => 'kilépett', //in 'Spectator User1 has left.'
    'signedAs' => 'Bejelentkezve mint',
    'welcome' => 'Üdv,', //in 'Welcome User1!'
    'welcomeIn' => 'Üdv itt:', //in 'Welcome in RoomName.'
    'noSpectators' => 'Most éppen nincs néző.',
    'replayAvailable' => 'A visszajátszás elérhető',
    'oldVer' => 'Régi verzión vagy, használd a CTRL+F5 billentyűkombinációt az új verzióra való áttöltéshez!',
    'oldVer2' => 'Még mindig a régi verzión vagy! Használd a {key} hogy újratölsd a klienst',
    'privateRoom' => 'Ez egy privát szoba, ahol nem zavarnak mások játék közben. A nyilvános szobák megtekintéséhez nézd meg a Várószobát.',
    'restartInfo' =>  'Újraindítás az F4 billentyűvel, vagy állíts be egy egyéni billentyűt',
    'joinLinkInfo' => 'Ez a szoba privát. Csak ezen a linken keresztül lehet csatlakozni:',

    //Dynamic elements
    'received' => 'Kapott', //max 15
    'finesse' => 'Lépéshiba',   //max 15

    //List of rooms
    'roomName' => 'Szoba név',
    'games' => 'Játékok', //number of games played in a room
    'players' => 'Játékosok', //number of players

    //Results
    'name' => 'Név',
    'wins' => 'Győzelem',
    'time' => 'Játékidő', //as game duration
    'received' => 'Kapott',
    'sent' => 'Küldött',
    'blocks' => 'Elemek', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'ideje', //in Sprint time: xx.xx
    'see' => 'Megtekintés:', //in 'See 40L leaderboard'
    'leaderboard' => 'Ranglista',

    //Less common strings, can stay untranslated
    'warning2' => 'Figyelmeztetés',
    'connected' => 'Csatlakozva',
    'client' => 'kliens',
    'notConnected' => 'NINCS CSATLAKOZVA',
    'connLost' => 'Kapcsolat megszakadt!',
    'lastGame' => 'Utolsó játék:',
    'roomSettings' => 'Szoba beállításai:',
    'attack' => 'Attack',
    'combo' => 'Kombó',
    'solid' => 'Solid',
    'clear' => 'Clear',
    'mode' => 'Mód',
    'garbage' => 'Szemét',
    'garbageDelay' => 'Szemét késleltetés',
    'messiness' => 'Rendezetlenség',
    'replay' => 'Visszajátszás',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Numerikus NullpoMino DAS érték megadása:',
    'suggestedIs' => 'A javasolt DAS értéke',
    'applyConfirm' => 'Alkalmazás?',
    'invalidDAS' => 'DAS érték érvénytelen, nem változott!',
    'settingsChanged' => 'A beállítások a játék során megváltoztak. A visszajátszás érvénytelenítve.',
    'segment' => 'Szegmens',
    'duration' => 'Időtartam',
    'roomFull' => 'Úgy tűnik, a szoba megtelt.',
    'lobbyInfo' => 'Ez a csevegést megosztják a {discord} szerveren.',
    'newHost' => 'Mostantól te vagy ennek a szobának a hostja.',
    'badRoom' => 'Ez a szoba már nem létezik, az Alapértelmezett szobához csatlakozol!',
    'stngsChanged' => 'A host által megváltoztatott beállítás',
    'stngsCustom' => 'Egyéni beállítások',
    'aSpec' => 'Már csatlakoztál nézőként!',
    'aPlay' => 'Már játszol!',
    'repFail' => 'A visszajátszás nem mentett',
    'repInChat' => 'A visszajátszási fájl a csevegésbe került. A megőrzéshez másold ki a mezőben lévő szöveget, és illeszd be a kedvenc szövegszerkesztődbe.',
    'repTxtInfo' => 'A másolt lejátszási fájl ezután lejátszható az visszajátszóban, vagy esetleg újra elküldhető a webhelyre.',

    'newPB' => 'ÚJ SZEMÉLYES CSÚCS',
    'firstPB' => 'Ez volt az első játékod. Állíts be egy új személyes csúcsot, hogy nyomon kövesd a fejlődésedet!',
    'infoPB' => 'Az előző rekordod {prevPB} volt, amit {prevAgo} értél el. A javulás {PBdiff}.',
    'daysAgo' => 'napja',

    'raceFin' => 'A VERSENY VÉGET ÉRT',
    'raceFinInfo' => 'Befejezheted a játékot, de a következő kör bármikor elkezdődhet.',

    'notTSD' => 'NEM TSD',
    'notTSDInfo' => 'Csak a T-Spin Double engedélyezett',

    'notPC' => 'NEM PC',
    'notPCInfo' => 'Csinálj egy Perfect Clear-t minden 10. elemkre. A mátrix nem törölhető.',

    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => 'Magadat támadod!',

    'oops' => 'Hupsz!',
    'chatNA' => 'A nyilvános csevegés nem érhető el a vendégek vagy a {chReq} óránál kevesebb játékidővel rendelkező felhasználók számára.',
    'leMore' => 'Részletekért kattints ide!',

    'connLimit' => 'Az IP-címhez tartozó nyitott kapcsolatok maximális száma jelenleg elérte a határt. Ha megnövelt limitre van szükséged, lépj velünk kapcsolatba a Discordon keresztül.',
    'idleDC' => 'Inaktivitás miatt megszakadt a kapcsolat! A nézőtér megtelt.',
    'RLreach' => 'Rate limit reached.',
    'ban1' => 'Az élő játékokhoz való hozzáférésed végérvényesen korlátozott. Az egyjátékos módokkal továbbra is játszhatsz.',
    'ban2' => 'Ez a felhasználói fiók TILTOTT. További információkért jelentkezz be újra a weboldalra.',
    'ncGS' => 'Nincs kapcsolat a játékszerverrel, próbáld meg az {refr}t.',
    'refr' => 'oldal újratöltés',

    'nsUnpub' => 'A rekord nincs mentve, a pálya nincs közzétéve.',
    'nsTspins' => 'Rekord nem mentve, nincs elég T-Spin végrehajtva.',
    'nsLowPC' => 'A rekord nincs mentve, legalább két Perfect Clear szükséges.',
    'noBlocks' => 'Nincs több elem',
    'noBlocks2' => 'Minden elem felhasználva',

    //Room info detail
    'noPlayers' => 'Nincsenek játékosok',
    'cntMore' => '{cnt} játékos',          //e.g. +10 more
    'cntGuests' => '{cnt} vendég',      //e.g. +10 guests
    'cntSpec' => '{cnt} néző',    //e.g. +10 spectating
    'joinPossible' => 'Csatlakozás lehetséges',
    'notEligible' => 'Nem jogosult',
    'gTimeShort' => 'G.time',
    'on' => 'Be',
    'off' => 'Ki',

    //friends
    'fr' => 'Barátlista',
    'frLoad' => 'Barátlista betöltése',
    'frLogin' => 'Kérlek jelentkezz be, hogy használd a barátlistát',
    'frEmpty' => 'Barátlista üres',
    'frHowAdd' => 'Látogasd meg a felhasználó adatlapját, hogy bejelöld ismerősnek.',
    'frPriv' => 'Privát',
    'frIn' => 'Már ismerősöd!',
    'frChat' => 'Chat megnyitása',
    'frRel' => 'Újratöltés',
    'frMsgTo' => 'Üzenet {name}-nek',  //keep {name}
    'frInv' => 'Szoba meghívó küldése',
    'frInvTo' => 'Meghívás a következő szobába: {room}',
    'frInvIn' => 'Már bent vagy!',
    'frInvBy' => 'by {user}',
    'frOn' => 'ONLINE',
    'frOff' => 'OFFLINE',
    'frNewChatH' => 'Csevegési előzmény kezdete a következő felhasználóval: {name}.',
    'frWelc' => 'Üdv a barátlistádon!',
    'frIntro' => 'Ezen a felületen elérheted az elérhető barátok listáját, a privát csvegéseket és a szobai meghívókat',
    'frIntro2' => 'Barátkérés küldéséhez látogass el a kívánt felhasználó adatlapjára',
    'frIntro3' => 'A barátok kezeléséhez látogass el a {frPage} oldalra',
    'frPage' => 'Barátlista',
    'frIntroCl' => 'Ismertető bezárása',
];
