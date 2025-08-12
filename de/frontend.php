<?php

return [
    //On screen captions
    'ready' => 'FERTIG',
    'go' => 'LOS!',
    'notFocused' => 'Kein Fokus', //max 13 characters
    'clickToFocus' => 'Fokus wiederherstellen', //max 30 characters
    'specMode' => 'Zuschauermodus',
    'specModeInfo' => 'Sie sind nun im Zuschauermodus.',
    'endSpec' => 'Schreibe /play um dem Spiel beizutreten', //keep '/play'
    'typeHelp' => 'Schreibe /help für eine Liste der Kommandos.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Nicht am Spielen', //max 12
    'waitNext' => 'Warte bis zum Rundenende',
    'waitNext2' => 'Bitte warte auf die nächste Runde',
    'pressStart' => 'Drücke \'Neues Spiel\' um zu starten', //'New game' should be same as in game.newGame
    'slowDown' => 'LANGSAMER!',
    'speedLimitIs' => 'Das Limit beträgt',
    'connecting' => 'Verbinden...', //when connecting to the game server
    'signingIn' => 'Anmelden',
    'loginFail' => 'Anmeldung Fehlgeschlagen!',
    'loginFail2' => 'Nicht eingeloggt! Sie spielen als Gast namens {name}.',
    'mapLoading' => 'Map lädt...',

    //Chat
    'warning' => 'Warnung',
    'inactive1' => 'Zuschauermodus wird Aktiviert. Schreibe in den Chat zum Abbrechen.',
    'inactive2' => 'Inaktivität erkannt, Nächste Inaktivität aktiviert den Zuschauermodus.',
    'nickFill' => 'Benutzernamen setzen für den Chat!',
    'setButton' => 'Setzen', //max 4
    'sendButton' => 'Senden', //max 4
    'rNameReq' => 'Raumname muss ausgefüllt sein!',
    'newsUser' => 'Neuigkeiten', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Zuschauer', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'betritt den Raum', //in 'User1 joined the room.'
    'joined' => 'tritt bei', //in title: 'User1 joined!'
    'userCame' => 'ist zum zusehen gekommen',  //in 'User1 came to watch.'
    'isSpectating' => 'schaut nun zu', //in 'User1 is now spectating.'
    'spectator' => 'Zuschauer',
    'hasLeft' => 'ist gegangen', //in 'Spectator User1 has left.'
    'signedAs' => 'Sie sind angemeldet als',
    'welcome' => 'Wilkommen,', //in 'Welcome User1!'
    'welcomeIn' => 'Wilkommen in', //in 'Welcome in RoomName.'
    'noSpectators' => 'Niemand schaut gerade zu.',
    'replayAvailable' => 'Widerholung hier verfügber',
    'oldVer' => 'Sie benutzen eine veraltete Version drücke STRG+F5 um die Seite neu zu laden!',
    'oldVer2' => 'Sie benutzen eine veraltete Version! Drücke {key} um den Client neu zu laden',
    'privateRoom' => 'Sie befinden sich in einem Privatem Raum, in diesem werden Sie während des Spiel\'s nicht gestört. In der Lobby finden Sie öffentliche Räume, denen Sie beitreten können.',
    'restartInfo' =>  'Neustart mit F4 oder eingestellter Taste.',
    'joinLinkInfo' => 'Dieser Raum ist Privat. Der einzige Weg beizutreten ist über diesen Link:',

    //Dynamic elements
    'received' => 'Erhalten', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => 'Raumname',
    'games' => 'Spiele', //number of games played in a room
    'players' => 'Spieler', //number of players

    //Results
    'name' => 'Name',
    'wins' => 'Siege',
    'time' => 'Zeit', //as game duration
    'received' => 'Erhalten',
    'sent' => 'Gesendet',
    'blocks' => 'Blöcke', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'Zeit', //in Sprint time: xx.xx
    'see' => 'Siehe', //in 'See 40L leaderboard'
    'leaderboard' => 'Bestenliste',

    //Less common strings, can stay untranslated
    'warning2' => 'WARNUNG',
    'connected' => 'Verbunden',
    'client' => 'Klient',
    'notConnected' => 'NICHT VERBUNDEN',
    'connLost' => 'Verbindung verloren!',
    'lastGame' => 'Letztes Spiel:',
    'roomSettings' => 'Raumeinstellungen:',
    'attack' => 'Angriff',
    'combo' => 'Combo',
    'solid' => 'Solide',
    'clear' => 'Auflösen',
    'mode' => 'Modus',
    'garbage' => 'Müll',
    'garbageDelay' => 'Müll Verzögerung',
    'messiness' => 'Durcheinander',
    'replay' => 'Wiederholung',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Gebe einen NullpoMino DAS Wert ein:',
    'suggestedIs' => 'Vorgeschlagener DAS ist',
    'applyConfirm' => 'Bestätigen?',
    'invalidDAS' => 'Falscher DAS Wert, aktueller Wert wurde nicht geändert!',
    'settingsChanged' => 'Einstellung wärend des Spiels geändert. Wiederholung wird nicht gespeichert.',
    'segment' => 'Segment',
    'duration' => 'Dauer',
    'roomFull' => 'Dieser Raum scheint voll zu sein.',
    'lobbyInfo' => 'Dieser Chat ist mit {discord} verbunden.',
    'newHost' => 'Sie sind nun Leiter dieses Raums.',
    'badRoom' => 'Dieser Raum existiert nicht mehr. Trete dem Standard Raum bei!',
    'stngsChanged' => 'Einstellungen durch den Leiter geändert',
    'stngsCustom' => 'Benutzerdefinierte Einstellungen',
    'bots' => 'Bots',
    'rulesets' => 'Regelsätze',
    'aSpec' => 'Bereits am Zuschauen!',
    'aPlay' => 'Bereits am Spielen!',
    'repFail' => 'Speichern der Wiederholung fehlgeschlagen.',
    'repInChat' => 'Wiedergabedatei im Chat gespeichert. Um diese zu behalten den Text in der Box in einen beliebigen Texteditor kopieren.',
    'repTxtInfo' => 'Die kopierte Wiedergabedatei kann dann im Wiederholer abgespielt oder gegebenenfalls erneut abgeschickt werden.',
    'newPB' => 'IHRE NEUE BESTZEIT',
    'firstPB' => 'Dies war Ihre erste Runde. Erhalte eine neue Bestzeit, um Ihren Fortschritt zu verfolgen.',
    'infoPB' => '{prevPB} war Ihr letzter Rekord ist {prevAgo}. Ihre Verbesserung beträgt {PBdiff}.',
    'daysAgo' => 'Tage her',
    'raceFin' => 'DAS RENNEN WURDE BEENDET',
    'raceFinInfo' => 'Sie können diese Runde beendet, allerdings kann die nächste Runde jederzeit starten.',
    'oops' => 'Hoppla!',
    'chatNA' => 'Öffentliches chatten ist für Gäste oder Spieler mit weniger als {chReq} Stunden Spielzeit nicht verfügbar.',
    'leMore' => 'Erfahre mehr',
    'connLimit' => 'Die maximale Anzahl offener Verbindung für diese IP ist momentan erreicht. Falls Sie dieses Limit erhöhen möchten, kontaktieren Sie uns über Discord.',
    'idleDC' => 'Verbindung wegen Inaktivität getrennt! Zuschauerbereich war voll.',
    'RLreach' => 'Limit erreicht.',
    'ban1' => 'Ihr Zugang zu Live Spielen wurde permanent eingeschränkt. Sie können immer noch die Einzielspielermodi spielen.',
    'ban2' => 'Dieses Nutzerprofil wurde GEBANNT. Melden Sie sich neu auf der Seite an, um mehr zu erfahren.',
    'ncGS' => 'Keine Verbindung zum Spielserver, versuche {refr}.',
    'refr' => 'Neuladen der Seite',
    'lines' => 'Reihen',
    'statistics' => 'Statistiken', //stat lines showing under the field
    'vs' => 'VS', //label for VS score stat
    'downstack' => 'Müll-Abbau',
    'wasted' => 'Verschwendet',
    'expand' => 'Erweitern',  //tooltip for icon to expand chat
    'nsUnpub' => 'Datensatz nicht gespeichert. Weil die Karte nicht veröffentlicht wird.',
    'nsTspins' => 'Datensatz nicht gespeichert. Weil nicht genug T-Spins.',
    'nsLowPC' => 'Datensatz nicht gespeichert. Weil mindestens 2 perfekte Löschvorgänge erforderlich sind.',
    'noBlocks' => 'Keine Blöcke mehr',
    'noBlocks2' => 'Alle Blöcke wurden verwendet',
    //Room info detail
    'noPlayers' => 'Keine Spieler',
    'cntMore' => '{cnt} Weitere',          //e.g. +10 more
    'cntGuests' => '{cnt} Gäste',      //e.g. +10 guests
    'cntSpec' => '{cnt} am Zuschauen',    //e.g. +10 spectating
    'joinPossible' => 'Beitreten möglich',
    'notEligible' => 'Nicht geeignet',
    'gTimeShort' => 'S.zeit',
    'on' => 'An',
    'off' => 'Aus',

    //friends
    'fr' => 'Freunde',
    'frLoad' => 'Freundesliste wird geladen',
    'frLogin' => 'Melden Sie sich an, um die Freundesliste zu nutzen',
    'frEmpty' => 'Freundesliste ist leer',
    'frHowAdd' => 'Besuchen Sie das Profil eines Nutzers, um eine Freundschaftsanfrage zu senden.',
    'frPriv' => 'Privat',
    'frIn' => 'Schon drin!',
    'frChat' => 'Chat öffnen',
    'frRel' => 'Neu laden',
    'frMsgTo' => 'Nachricht an {name}',  //keep {name}
    'frInv' => 'Raumeinladung senden',
    'frInvTo' => 'Zum Beitreten in {room} einladen',
    'frInvIn' => 'Sie sind bereits drin!',
    'frInvBy' => 'von {user}',
    'frOn' => 'ONLINE',
    'frOff' => 'OFFLINE',
    'frNewChatH' => 'Dies ist der Beginn des Chatverlaufs mit {name}.',
    'frWelc' => 'Willkommen im Tab Freunde',
    'frIntro' => 'Hier können Sie die Liste Ihrer Online-Freunde, private Chats und Raumeinladungen aufrufen',
    'frIntro2' => 'Um eine Freundschaftsanfrage zu senden, besuchen Sie das Profil eines Nutzers',
    'frIntro3' => 'Um Freunde zu verwalten, besuchen Sie die {frPage}',
    'frPage' => 'Freundeseite',
    'frIntroCl' => 'Intro schließen',
];
