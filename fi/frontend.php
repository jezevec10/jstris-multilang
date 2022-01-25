<?php

return [
    //On screen captions
    'ready' => 'VALMIINA',
    'go' => 'NYT!',
    'notFocused' => 'Ei keskitetty', //max 13 characters
    'clickToFocus' => 'Klikkaa tästä keskittääksesi', //max 30 characters
    'specMode' => 'Katsojatila',
    'specModeInfo' => 'Olet nyt katsojatilassa.',
    'endSpec' => 'Kirjoita /play liittyäksesi peliin', //keep '/play'
    'typeHelp' => 'Kirjoita /help saadaksesi listan komennoista.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Ei pelaa', //max 12
    'waitNext' => 'Odota, kunnes kierros päättyy',
    'waitNext2' => 'Odota seuraavaa kierrosta',
    'pressStart' => 'Paina \'Uusi peli\' aloittaaksesi', //'New game' should be same as in game.newGame
    'slowDown' => 'HIDASTA', //When a speed limit is exceeded
    'speedLimitIs' => 'Nopeusraja on', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Yhdistetään...', //when connecting to the game server
    'signingIn' => 'Kirjaudutaan sisään',
    'loginFail' => 'Sisäänkirjautuminen epäonnistui!',
    'loginFail2' => 'Et ole kirjautunut sisään! Pelaat vieraana nimeltä {name}.',
    'mapLoading' => 'Kartta lataa...',

    //Chat
    'warning' => 'Varoitus',
    'inactive1' => 'Katsojatila aktivoidaan. Kirjoita chattiin keskeyttääksesi.',
    'inactive2' => 'Toimettomuutta havaittu, seuraava peli toimettomana aktivoi katsojatilan.',
    'nickFill' => 'Kirjoita käyttäjänimesi voidaksesi chatata!',
    'setButton' => 'Aset', //max 4
    'sendButton' => 'Läh.', //max 4
    'rNameReq' => 'Huoneen nimi pitää täyttää!',
    'newsUser' => 'Uutiset', //special username in chat
    'serverUser' => 'Palvelin', //special username in chat
    'noNamed' => 'Nimetön', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Katsojat', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'liittyi huoneeseen', //in 'User1 joined the room.'
    'joined' => 'liittyi', //in title: 'User1 joined!'
    'userCame' => 'tuli katsomaan',  //in 'User1 came to watch.'
    'isSpectating' => 'katsoo nyt', //in 'User1 is now spectating.'
    'spectator' => 'Katsoja',
    'hasLeft' => 'poistui', //in 'Spectator User1 has left.'
    'signedAs' => 'Olet kirjautunut sisään nimellä',
    'welcome' => 'Tervetuloa,', //in 'Welcome User1!'
    'welcomeIn' => 'Tervetuloa huoneeseen', //in 'Welcome in RoomName.'
    'noSpectators' => 'Kukaan ei katsele nyt.',
    'replayAvailable' => 'Toisto saatavilla osoitteessa',
    'oldVer' => 'Sinulla on vanha versio, käytä CTRL+F5 ladataksesi uudelleen uuteen versioon!',
    'oldVer2' => 'Sinulla on vieläkin vanha versio! Käytä {key} ladataksesi asiakkaan uudelleen',
    'privateRoom' => 'Tämä on yksityishuoneesi, missä sinua ei häiritä pelin aikana. Mene Aulaan nähdäksesi julkiset huoneet.',
    'restartInfo' =>  'Aloita uudelleen painamalla F4 tai aseta mukautettu näppäin.',
    'joinLinkInfo' => 'Tämä huone on yksityinen. Tänne voi liittyä vain tämän linkin kautta:',

    //Dynamic elements
    'received' => 'Vastaaanotettu', //max 15
    'finesse' => 'Taidokkuus',   //max 15

    //List of rooms
    'roomName' => 'Huoneen nimi',
    'games' => 'Peliä', //number of games played in a room
    'players' => 'Pelaajaa', //number of players

    //Results
    'name' => 'Nimi',
    'wins' => 'Voitot',
    'time' => 'Aika', //as game duration
    'received' => 'Vastaanotettu',
    'sent' => 'Lähetetty',
    'blocks' => 'Palikkaa', //as number of blocks placed
    'ren' => 'KOMBO',

    //Practice mode result
    'gameTime' => 'aika', //in Sprint time: xx.xx
    'see' => 'Katso', //in 'See 40L leaderboard'
    'leaderboard' => 'pistetaulukko',

    //Less common strings, can stay untranslated
    'warning2' => 'VAROITUS',
    'connected' => 'Yhdistetty',
    'client' => 'asiakas',
    'notConnected' => 'EI YHDISTETTY',
    'connLost' => 'Yhteys katkesi!',
    'lastGame' => 'Viimeinen peli:',
    'roomSettings' => 'Huoneen asetukset:',
    'attack' => 'Hyökkäys',
    'combo' => 'Kombo',
    'solid' => 'Kiinteä',
    'clear' => 'Tyhjennys',
    'mode' => 'Muoto',
    'garbage' => 'Roska',
    'garbageDelay' => 'Roskaviive',
    'messiness' => 'Sotkuisuus',
    'replay' => 'Toisto',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Syötä numerinen NullpoMino DAS-arvo:',
    'suggestedIs' => 'Ehdotettu DAS on',
    'applyConfirm' => 'Käytä?',
    'invalidDAS' => 'DAS-arvo on kelvoton, ei muutettu!',
    'settingsChanged' => 'Asetuksia muutettiin pelin aikana. Toisto mitätöitiin.',
    'segment' => 'Osa',
    'duration' => 'Kesto',
    'roomFull' => 'Näyttää siltä, että huone on täynnä.',
    'lobbyInfo' => 'Tämä chatti jaetaan {discord}:n kanssa.',
    'newHost' => 'Olet nyt tämän huoneen juontaja.',
    'badRoom' => 'Tämä huone ei ole enää olemassa, liitytään oletushuoneeseen!',
    'stngsChanged' => 'Juontaja muutti asetuksia',
    'stngsCustom' => 'Mukautetut asetukset',
    'aSpec' => 'Olet jo katsomassa!',
    'aPlay' => 'Olet jo pelaamassa!',
    'repFail' => 'Toiston tallennus epäonnistui.',
    'repInChat' => 'Toistotiedosto dumpattiin chattiin. Säästääksesi sen, kopioi tekstikentässä oleva teksti ja liitä se suosimaasi tekstieditoriin.',
    'repTxtInfo' => 'Kopioidun toistotiedoston voi katsoa uudelleentoistimella tai mahdollisesti lähettää uudelleen sivulle.',

    'newPB' => 'UUSI OMA ENNÄTYS',
    'firstPB' => 'Tämä oli ensimmäinen pelisi. Saavuta toinen ennätys seurataksesi edistymistäsi.',
    'infoPB' => 'Edellinen ennätyksesi oli {prevPB} saavutettu {prevAgo}. Edistyminen on {PBdiff}.',
    'daysAgo' => 'päivää sitten',

    'raceFin' => 'KISA ON PÄÄTTYNYT',
    'raceFinInfo' => 'Voit suorittaa kisan loppuun, mutta seuraava kierros voi alkaa milloin tahansa.',

    'notTSD' => 'EI TSD',
    'notTSDInfo' => 'Vain T-Spin Doublet sallitaan',

    'notPC' => 'EI PC',
    'notPCInfo' => 'Tee Perfect Clear joka 10. palikka. Lautaasi ei ole mahdollista tyhjentää.',

    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => 'Hyökkäät itseäsi!',

    'oops' => 'Hups!',
    'chatNA' => 'Julkinen chattaily ei ole saatavilla vieraille tai käyttäjille, joilla on vähemmän kuin {chReq} tuntia peliaikaa.',
    'leMore' => 'Lue lisää',

    'connLimit' => 'Avoimien yhteyksien maksimimäärä tälle IP-osoitteelle on saavutettu. Jos tarvitset isommat rajat, ota meihin yhteyttä Discordin kautta',
    'idleDC' => 'Yhteys katkaistu toimettomuuden vuoksi! Katsojalohko oli täynnä.',
    'RLreach' => 'Arvosteluraja saavutettu.',
    'ban1' => 'Pääsysi Livepeleihin on pysyvästi rajoitettu. Voit silti pelata yksinpelimuotoja.',
    'ban2' => 'Tällä käyttäjätilillä on PORTTIKIELTO. Kirjaudu sisään uudelleen saadaksesi lisätietoa.',
    'ncGS' => 'Ei yhteyttä pelipalvelimeen, kokeile {refr}.',
    'refr' => 'ladataan sivua uudelleen',

    'nsUnpub' => 'Toistoa ei tallennettu, karttaa ei ole julkaistu.',
    'nsTspins' => 'Toistoa ei tallennettu, ei tarpeeksi T-Spinnejä.',
    'nsLowPC' => 'Toistoa ei tallennettu, ainakin 2 Perfect Clearia tarvitaan.',

    //Room info detail
    'noPlayers' => 'Ei pelaajia',
    'cntMore' => '{cnt} lisää',          //e.g. +10 more
    'cntGuests' => '{cnt} vierasta',      //e.g. +10 guests
    'cntSpec' => '{cnt} katsoo',    //e.g. +10 spectating
    'joinPossible' => 'Liittyminen mahdollista',
    'notEligible' => 'Ei oikeutta',
    'gTimeShort' => 'P.aika',
    'on' => 'Päällä',
    'off' => 'Pois päältä',
];
