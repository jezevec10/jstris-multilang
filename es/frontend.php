<?php

return [
    //On screen captions
    'ready' => '¿LISTO?',
    'go' => '¡YA!',
    'notFocused' => 'Desenfocado', //max 13 characters
    'clickToFocus' => 'Click para enfocar', //max 30 characters
    'specMode' => 'Modo Espectador',
    'specModeInfo' => 'Ahora estás en Modo Espectador.',
    'endSpec' => 'Escribe /play para unirte', //keep '/play'
    'typeHelp' => 'Escribe /help para ver lista de comandos.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'No Jugando', //max 12
    'waitNext' => 'Espera a que termine la partida',
    'waitNext2' => 'Por favor espera la siguiente partida',
    'pressStart' => 'Presiona \'Nuevo Juego\' para comenzar', //'New game' should be same as in game.newGame
    'slowDown' => 'DECELERE', //When a speed limit is exceeded
    'speedLimitIs' => 'El límite de velocidad es', //In a sentence: The speed limit is 2 PPS

    //Chat
    'warning' => 'Advertencia',
    'inactive1' => 'Modo Espectador será activado. Escribe en el chat para cancelar.',
    'inactive2' => 'Inactividad detectada, la siguiente partida inactiva iniciará el Modo Espectador.',
    'nickFill' => 'Escribe tu apodo para chatear!',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Debe escribirse el nombre de la Sala!',
    'newsUser' => 'Nuevo', //special username in chat
    'serverUser' => 'Servidor', //special username in chat
    'noNamed' => 'Visita', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Mirando', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'ingresó a la Sala', //in 'User1 joined the room.'
    'joined' => 'ingresó', //in title: 'User1 joined!'
    'userCame' => 'vino a mirar',  //in 'User1 came to watch.'
    'isSpectating' => 'ahora está como Espectador', //in 'User1 is now spectating.'
    'spectator' => 'Espectador',
    'hasLeft' => 'se marchó', //in 'Spectator User1 has left.'
    'signedAs' => 'Ingresaste como',
    'welcome' => 'Bienvenido,', //in 'Welcome User1!'
    'welcomeIn' => 'Bienvenido a', //in 'Welcome in RoomName.'
    'noSpectators' => 'No hay nadie mirando ahora.',
    'replayAvailable' => 'Repetición disponible en',
    'oldVer' => 'Tienes una versión antigua, presiona CTRL+F5 para recargar la nueva versión!',
    'privateRoom' => 'Esta es tu Sala Privada en donde no te molestarán mientras juegas. Mira el Lobby para ver las Salas públicas.',
    'restartInfo' =>  'Reinicia con F4 o configura otra tecla.',
    'joinLinkInfo' => 'Esta Sala es privada. Sólo se puede ingresar a través de este link:',

    //Dynamic elements
    'received' => 'Recibidas', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => 'Nombre de Sala',
    'games' => 'Partidas', //number of games played in a room
    'players' => 'Jugadores', //number of players

    //Results
    'name' => 'Nombre',
    'wins' => 'Victorias',
    'time' => 'Tiempo', //as game duration
    'received' => 'Recibidas',
    'sent' => 'Enviadas',
    'blocks' => 'Piezas', //as number of blocks placed
    'ren' => 'COMBO',

    //Practice mode result
    'gameTime' => 'Tiempo', //in Sprint time: xx.xx
    'see' => 'Ver', //in 'See 40L leaderboard'
    'leaderboard' => 'Tablas de Posiciones',

    //Less common strings, can stay untranslated
    'warning2' => 'ADVERTENCIA',
    'connected' => 'Conectado',
    'client' => 'cliente',
    'notConnected' => 'NO CONECTADO',
    'connLost' => 'Conexión perdida!',
    'lastGame' => 'Último juego:',
    'roomSettings' => 'Configuración de Sala:',
    'attack' => 'Ataque',
    'combo' => 'Combo',
    'solid' => 'Sólido',
    'clear' => 'Borradas',
    'mode' => 'Modo',
    'garbage' => 'Agujeros',
    'garbageDelay' => 'Frecuencia de agujeros',
    'messiness' => 'Desorden',
    'replay' => 'Repetir',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Ingreasar valor DAS de Nullpomino:',
    'suggestedIs' => 'DAS sugerido',
    'applyConfirm' => '¿Aplicar?',
    'invalidDAS' => 'Valor DAS invalido, ¡no se ha cambiado!',
    'settingsChanged' => 'Configuraciones cambiadas durante la partida, repetición invalidada.',
    'segment' => 'Segmento',
    'duration' => 'Duración',
];
