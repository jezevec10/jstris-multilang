<?php

return [
    //On screen captions
    'ready' => 'PŘIPRAVIT',
    'go' => 'START',
    'notFocused' => 'Vykliknuto', //max 13 characters
    'clickToFocus' => 'Klikněte zde pro návrat do hry', //max 30 characters
    'specMode' => 'Režim diváka',
    'specModeInfo' => 'Nyní jste v režimu diváka.',
    'endSpec' => 'Připojte se do hry pomocí /play', //keep '/play'
    'typeHelp' => 'Zobrazte si všechny příkazy pomocí /help', //keep '/help'
    'st' => '.', //max 2, in 1st, can stay untranslated
    'nd' => '.', //max 2, in 2nd, can stay untranslated
    'rd' => '.', //max 2, in 3rd, can stay untranslated
    'th' => '.', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Mimo hru', //max 12
    'waitNext' => 'Počkejte na konec kola',
    'waitNext2' => 'Počkejte na další kolo',
    'pressStart' => 'Začněte kliknutím na \'Nová hra\'', //'New game' should be same as in game.newGame
    'slowDown' => 'ZPOMAL', //When a speed limit is exceeded
    'speedLimitIs' => 'Rychlost je omezená na', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Připojování...', //when connecting to the game server
    'signingIn' => 'Přihlašování',
    'loginFail' => 'Přihlašování selhalo!',
    'mapLoading' => 'Načítání mapy...',

    //Chat
    'warning' => 'Varování',
    'inactive1' => 'Budete přepnuti do režimu diváka. Chcete-li tomu zabránit, napište něco do chatu.',
    'inactive2' => 'Jste neaktivní! Příští hru automaticky začnete jako divák.',
    'nickFill' => 'Jestli chcete psát do chatu, zadejte své uživatelské jméno!',
    'setButton' => 'OK', //max 4
    'sendButton' => 'OK', //max 4
    'rNameReq' => 'Zadejte jméno místnosti!',
    'newsUser' => 'Novinky', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'Host', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Diváci:', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'se připojil/a k místnosti', //in 'User1 joined the room.'
    'joined' => 'se připojil/a', //in title: 'User1 joined!'
    'userCame' => 'se přišel dívat',  //in 'User1 came to watch.'
    'isSpectating' => 'se dívá', //in 'User1 is now spectating.'
    'spectator' => 'Divák',
    'hasLeft' => 'se odpojil', //in 'Spectator User1 has left.'
    'signedAs' => 'Jste přihlášeni jako',
    'welcome' => 'Vítejte,', //in 'Welcome User1!'
    'welcomeIn' => 'Vítejte v', //in 'Welcome in RoomName.'
    'noSpectators' => 'Nikdo se zrovna nedívá.',
    'replayAvailable' => 'Pusťte si záznam na',
    'oldVer' => 'Máte starou verzi, pomocí CTRL+F5 si načtěte novou!',
    'oldVer2' => 'Máte starou verzi! Načtěte aplikaci znovu pomocí {key}',
    'privateRoom' => 'Tohle je vaše soukromá místnost, kde můžete nerušeně hrát. Veřejné místnosti najdete v Lobby.',
    'restartInfo' =>  'Začněte znovu pomocí F4, nebo si nastavte vlastní klávesu.',
    'joinLinkInfo' => 'Tahle místnost je soukromá. Ostatní se můžou připojit jen pomocí tohoto odkazu:',

    //Dynamic elements
    'received' => 'Dostali jste', //max 15
    'finesse' => 'Obratnost',   //max 15

    //List of rooms
    'roomName' => 'Název místnosti',
    'games' => 'Her', //number of games played in a room
    'players' => 'Hráčů', //number of players

    //Results
    'name' => 'Jméno',
    'wins' => 'Výher',
    'time' => 'Čas', //as game duration
    'received' => 'Dostal/a',
    'sent' => 'Odeslal/a',
    'blocks' => 'bloků', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'čas', //in Sprint time: xx.xx
    'see' => 'Zobrazit', //in 'See 40L leaderboard'
    'leaderboard' => 'žebříček',

    //Less common strings, can stay untranslated
    'warning2' => 'VAROVÁNÍ',
    'connected' => 'Připojeno',
    'client' => 'klient',
    'notConnected' => 'NEPŘIPOJENO',
    'connLost' => 'Spojení ztraceno!',
    'lastGame' => 'Poslední hra:',
    'roomSettings' => 'Nastavení místnosti:',
    'attack' => 'Útok',
    'combo' => 'Kombo',
    'solid' => 'Plné',
    'clear' => 'Průhledné',
    'mode' => 'Režim',
    'garbage' => 'Garbage',
    'garbageDelay' => 'ProdlevaGarbage',
    'messiness' => 'Nepořádnost',
    'replay' => 'Přehrát',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Zadejte hodnotu DAS z NullpoMina:',
    'suggestedIs' => 'Doporučuje se DAS',
    'applyConfirm' => 'Použít?',
    'invalidDAS' => 'Neplatná hodnota DAS, návrat k původní hodnotě!',
    'settingsChanged' => 'Změnili jste nastavení během hry, záznam je neplatný.',
    'segment' => 'Segment',
    'duration' => 'Trvání',
    'roomFull' => 'Zdá se, že místnost je plná',
    'lobbyInfo' => 'Tahle místnost je sdílená s {discord}.',
    'newHost' => 'Teď jste správce této místnosti.',
    'badRoom' => 'Tahle místnost už neexistuje, připojování k výchozí místnosti!',
    'stngsChanged' => 'Nastavení změněno správcem',
    'stngsCustom' => 'Vlastní nastavení',
    'aSpec' => 'Už se díváte!',
    'aPlay' => 'Už hrajete!',
    'repFail' => 'Nahrávku se nepodařilo uložit.',
    'repInChat' => 'Nahrávku jste poslali do chatu. Chcete-li si uchovat, zkopírujte text v rámečku a vložte ho do nějakého textového editoru.',
    'repTxtInfo' => 'Zkopírovaný soubor si poté můžete pustit zde v přehrávači.'

    'newPB' => 'NOVÝ OSOBNÍ REKORD',
    'firstPB' => 'To byla vaše první hra. Zahrajte si znovu a sledujte svoje zlepšení.',
    'infoPB' => 'Váš předchozí rekord byl {prevPB} před {prevAgo}. Zlepšili jste se o {PBdiff}.',
    'daysAgo' => 'dny',

    'raceFin' => 'ZÁVOD SKONČIL',
    'raceFinInfo' => 'Tohle kolo můžete dokončit, ale každou chvíli může začít jiné.',

    'notTSD' => 'TO NENÍ TSD',
    'notTSDInfo' => 'Je povolen pouze dvojitý T-Spin (TSD)',

    'fwDetect' => 'ŠÍŘKA 4',
    'fwDetectInfo' => 'Útočíte sami na sebe!',

    'oops' => 'Jejda!',
    'chatNA' => 'Veřejně můžete psát, až odehrajete {chReq} hodin.',
    'leMore' => 'Zjistit více',

    'connLimit' => 'Limit přípojení dosažen! Jestli potřebujete zvýšit limit, napište nám na Discordu',
    'idleDC' => 'Odpojeno kvůli neaktivitě! Bylo moc diváků.',
    'RLreach' => 'Limit dosažen.',
    'ban1' => 'Jste napořád vyloučeni z hry pro více hráčů. Sami hrát můžete.',
    'ban2' => 'Účet má BAN, pro více informací se přihlaste',
    'ncGS' => 'Nejste připojeni k serveru, zkuste {refr}.',
    'refr' => 'obnovit stránku',

    //Room info detail
    'noPlayers' => 'Žádní hráči',
    'cntMore' => '{cnt} dalších',          //e.g. +10 more
    'cntGuests' => '{cnt} hostů',      //e.g. +10 guests
    'cntSpec' => '{cnt} diváků',    //e.g. +10 spectating
    'joinPossible' => 'Možnost připojení',
    'notEligible' => 'Chybí oprávnění',
    'gTimeShort' => 'G.time',
    'on' => 'Ano',
    'off' => 'Ne',
];
