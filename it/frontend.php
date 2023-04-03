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
    'slowDown' => 'Rallenta',
    'speedLimitIs' => 'La velocità limite è', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Connessione...', //when connecting to the game server
    'signingIn' => 'Accesso',
    'loginFail' => 'Accesso fallito!',
     'loginFail2' => 'Non sei entrato! Stai giocando come un ospite di nome {name}.',
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
    'oldVer2' => 'Stai usando una versione vecchia! Premi {key} per caricare la nuova versione',
    'privateRoom' => 'Questa è una stanza privata, non verrai disturbato mentre stai giocando. Vai nella Lobby per vedere le stanze pubbliche.',
    'restartInfo' =>  'Ricomincia premendo F4 o un tasto personalizzato.',
    'joinLinkInfo' => 'Questa stanza è privata. Può entrare solo chi ha questo link:',

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
    'roomFull' => 'Pare che la stanza sia piena.',
    'lobbyInfo' => 'Questa chat è condivisa con {discord}.',
    'newHost' => 'Sei il nuovo host della stanza.',
    'badRoom' => 'Questa stanza non esiste più, accesso a quella di Default in corso!',
    'stngsChanged' => 'Impostazioni cambiate dall\'host',
    'stngsCustom' => 'Impostazioni personalizzate',
    'aSpec' => 'Stai già osservando!',
    'aPlay' => 'Stai già giocando!',
    'repFail' => 'Salvataggio del Replay fallito.',
    'repInChat' => 'File di Replay rilasciato in chat. Per preservarlo, copia il testo ed incollalo nel tuo editor di testo preferito.',
    'repTxtInfo' => 'Il file di replay copiato può essere riprodotto nel player o possibilmente inviato nuovamente sul sito.',
    
    'newPB' => 'NUOVO RECORD PERSONALE',
    'firstPB' => 'Questa è stata la tua prima partita. Fanne un\'altra per tenere traccia dei progressi.',
    'infoPB' => 'Il tuo record precedente era di {prevPB} archiviato {prevAgo}. Il miglioramento è {PBdiff}.',
    'daysAgo' => 'giorni fa',
    
    'raceFin' => 'LA GARA È FINITA',
    'raceFinInfo' => 'Puoi ancora finire, ma il prossimo turno potrebbe iniziare da un momento all\'altro.',
    
    'notTSD' => 'NIENTE TSD',
    'notTSDInfo' => 'Soltanto il T-Spin Doppio è consentito',
    
    'notPC' => 'NESSUN PC',
    'notPCInfo' => 'Effettua un Perfect Clear ogni 10 blocchi. Il tuo campo non è ripulibile.',
    
    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => 'Attaccando te stesso!',
    
    'oops' => 'Oops!',
    'chatNA' => 'La chat pubblica non è disponibile per gli ospiti o gli utenti con meno di {chReq} ore di tempo di gioco.',
    'leMore' => 'Scopri di più',
    
    'connLimit' => 'Il numero massimo di connessioni per questo indirizzo IP è stato raggiunto. Se hai bisogno di un numero maggiore, contattaci su Discord',
    'idleDC' => 'Disconnesso per inattività! La sezione Spettatori era piena.',
    'RLreach' => 'Limite raggiunto.',
    'ban1' => 'Il tuo accesso per le partite pubbliche è stato permanentemente limitato. Puoi ancora giocare le modalità single player.',
    'ban2' => 'Questo account è BANNATO. Effettua nuovamente l\'accesso per maggiori informazioni.',
    'ncGS' => 'Non connesso al server di gioco, prova {refr}.',
    'refr' => 'ricaricando la pagina',
    
    'nsUnpub' => 'Record non salvato, la mappa non è pubblicata.',
    'nsTspins' => 'Record non salvato, non abbastanza T-Spins.',
    'nsLowPC' => 'Record non salvato, servono almeno 2 Perfect Clears.',
    'noBlocks' => 'Blocchi finiti',
    'noBlocks2' => 'Tutti i blocchi sono stati usati',
    
    //Room info detail
    'noPlayers' => 'Niente giocatori',
    'cntMore' => '{cnt} più',          //e.g. +10 more
    'cntGuests' => '{cnt} ospiti',      //e.g. +10 guests
    'cntSpec' => '{cnt} osservando',    //e.g. +10 spectating
    'joinPossible' => 'Accesso disponibile',
    'notEligible' => 'Non idoneo',
    'gTimeShort' => 'G.time',
    'on' => 'On',
    'off' => 'Off',
    
     //friends
    'fr' => 'Amici',
    'frLoad' => 'Caricamento lista amici',
    'frLogin' => 'Effettua l\'accesso per la lista amici',
    'frEmpty' => 'La lista amici è vuota',
    'frHowAdd' => 'Visita il profilo utente per inviare la richiesta d\'amicizia.',
    'frPriv' => 'Privato',
    'frIn' => 'Già dentro!',
    'frChat' => 'Apri la chat',
    'frRel' => 'Ricarica',
    'frMsgTo' => 'Messaggio a {name}',  //keep {name}
    'frInv' => 'Manda invito stanza',
    'frInvTo' => 'Invita in {room}',
    'frInvIn' => 'Sei già dentro!',
    'frInvBy' => 'da {user}',
    'frOn' => 'ONLINE',
    'frOff' => 'OFFLINE',
    'frNewChatH' => 'Questo è l\'inizio della chat con {name}.',
    'frWelc' => 'Benvenuto nel pannello Amici',
    'frIntro' => 'Qui puoi accedere alla lista degli amici, chat private, e inviti alle stanze',
    'frIntro2' => 'Per inviare una richiesta d\'amicizia, visita il suo profilo utente',
    'frIntro3' => 'Per gestire gli amici, visita la {frPage}',
    'frPage' => 'Lista Amici',
    'frIntroCl' => 'Intro di chiusura',
];
