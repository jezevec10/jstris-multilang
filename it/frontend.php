<?php

return [
    //On screen captions
    'ready' => 'PRONTI',
    'go' => 'VIA!',
    'notFocused' => 'Fuori focus', //max 13 characters
    'clickToFocus' => 'Clicca per riprendere il focus', //max 30 characters
    'specMode' => 'Modalità spettatore',
    'specModeInfo' => 'Sei in modalità spettatore.',
    'endSpec' => 'Scrivi /play per iniziare a giocare', //keep '/play'
    'typeHelp' => 'Scrivi /help per la lista dei comandi.', //keep '/help'
    'st' => '°', //max 2, in 1st, can stay untranslated
    'nd' => '°', //max 2, in 2nd, can stay untranslated
    'rd' => '°', //max 2, in 3rd, can stay untranslated
    'th' => '°', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Non gioca', //max 12
    'waitNext' => 'Aspetta la fine del round',
    'waitNext2' => 'Aspetta l\'inizio del prossimo round',
    'pressStart' => 'Premi \'Nuova partita\' per iniziare', //'New game' should be same as in game.newGame
    'slowDown' => 'RALLENTA', //When a speed limit is exceeded
    'speedLimitIs' => 'Il limite di velocità è', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Connessione in corso...', //when connecting to the game server
    'signingIn' => 'Accesso in corso',
    'loginFail' => 'Accesso non riuscito!',
    'loginFail2' => 'Non hai effettuato l\'accesso! Stai giocando come ospite chiamato {name}.',
    'mapLoading' => 'Caricamento mappa...',

    //Chat
    'warning' => 'Attenzione',
    'inactive1' => 'La modalità spettatore verrà attivata. Scrivi in chat per annullare.',
    'inactive2' => 'Rilevata inattività. Al prossimo round inattivo verrà attivata la modalità spettatore.',
    'nickFill' => 'Scrivi il tuo nome utente per parlare.',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Il nome della stanza deve essere specificato.',
    'newsUser' => 'Novità', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'NoName', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Stai osservando', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'è entrato nella stanza', //in 'User1 joined the room.'
    'joined' => 'è entrato', //in title: 'User1 joined!'
    'userCame' => 'è entrato per osservare',  //in 'User1 came to watch.'
    'isSpectating' => 'sta osservando', //in 'User1 is now spectating.'
    'spectator' => 'Spettatore',
    'hasLeft' => 'è uscito', //in 'Spectator User1 has left.'
    'signedAs' => 'Sei autenticato come',
    'welcome' => 'Benvenuto,', //in 'Welcome User1!'
    'welcomeIn' => 'Benvenuto in', //in 'Welcome in RoomName.'
    'noSpectators' => 'Non ci sono spettatori.',
    'replayAvailable' => 'Replay disponibile qui:',
    'oldVer' => 'Stai usando una versione vecchia, premi CTRL+F5 per caricare la nuova versione.',
    'privateRoom' => 'Questa è una stanza privata, non verrai disturbato mentre stai giocando. Vai nella Lobby per vedere le stanze pubbliche.',
    'restartInfo' =>  'Ricomincia premendo F4 o un tasto personalizzato.',
    'joinLinkInfo' => 'Questa stanza è privata. Può entrare solo chi ha questo link:',
    'oldVer2' => 'Hai ancora la versione vecchia! Usa {key} per ricaricare il client',

    //Dynamic elements
    'received' => 'Ricevute', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => 'Nome stanza',
    'games' => 'Round', //number of games played in a room
    'players' => 'Giocatori', //number of players

    //Results
    'name' => 'Nome',
    'wins' => 'Vinte',
    'time' => 'Tempo', //as game duration
    'received' => 'Ricevute',
    'sent' => 'Mandate',
    'blocks' => 'Pezzi', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'Tempo', //in Sprint time: xx.xx
    'see' => 'See', //in 'See 40L leaderboard'
    'leaderboard' => 'leaderboard',

    //Less common strings, can stay untranslated
    'warning2' => 'ATTENZIONE',
    'connected' => 'Connesso',
    'client' => 'client',
    'notConnected' => 'NON CONNESSO',
    'connLost' => 'Connessione persa!',
    'lastGame' => 'Ultimo round:',
    'roomSettings' => 'Impostazioni stanza:',
    'attack' => 'Attacco',
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
    'enterNullDAS' => 'Imposta il valore numerico del DAS, usando la scala di Nullpomino:',
    'suggestedIs' => 'Il DAS suggerito è',
    'applyConfirm' => 'Conferma?',
    'invalidDAS' => 'Il valore del DAS non era valido. Non è stato modificato',
    'settingsChanged' => 'Le impostazioni sono state modificate durante il gioco. Il replay non è più valido.',
    'segment' => 'Segmento',
    'duration' => 'Durata',
    
    //friends
    'fr' => 'Amici',
    'frLoad' => 'Caricamento lista amici',
    'frLogin' => 'Accedi per usare la lista amici',
    'frEmpty' => 'La lista amici è vuota',
    'frHowAdd' => 'Visita il profilo dell\'utente per inviare una richiesta di amicizia',
    'frPriv' => 'Privato',
    'frIn' => 'Sei già dentro!',
    'frChat' => 'Apri chat',
    'frRel' => 'Ricarica',
    'frMsgTo' => 'Messaggio a {name}',
    'frInv' => 'Invia invito stanza',
    'frInvTo' => 'Invita a entrare in {room}',
    'frInvIn' => 'Sei già dentro!',
    'frInvBy' => 'da {user}',
    'frOn' => 'ONLINE',
    'frOff' => 'OFFLINE',
    'frNewChatH' => 'Questo è l\'inizio della cronologia chat con {name}.',
    'frWelc' => 'Benvenuto nella scheda Amici',
    'frIntro' => 'Qui puoi accedere alla lista amici online, chat private e inviti alle stanze',
    'frIntro2' => 'Per inviare una richiesta di amicizia, visita il profilo di un utente',
    'frIntro3' => 'Per gestire gli amici, visita la {frPage}',
    'frPage' => 'Pagina Amici',
    'frIntroCl' => 'Chiudi introduzione',
];
