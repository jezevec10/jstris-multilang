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
    'privateRoom' => 'Du befindest dich in einem Privatem Raum, in diesem du nicht gestört wirst während des Spiel\'s. In der Lobby findest du öffentliche Räume, denen du beitreten kannst.',
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
];
