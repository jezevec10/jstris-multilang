<?php

return [
    //On screen captions
    'ready' => '¿LISTO?',
    'go' => '¡AHORA!',
    'notFocused' => 'Desenfocado', //max 13 characters
    'clickToFocus' => 'Click aquí para enfocar', //max 30 characters
    'specMode' => 'Modo Espectador',
    'specModeInfo' => 'Estás en Modo Espectador.',
    'endSpec' => 'Escribe /play para unirte al juego', //keep '/play'
    'typeHelp' => 'Escribe /help para ver la lista de comandos.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Sin jugar', //max 12
    'waitNext' => 'Espera a que termine la ronda',
    'waitNext2' => 'Por favor espera la siguiente ronda',
    'pressStart' => 'Presiona \'Nuevo\' para comenzar', //'New game' should be same as in game.newGame
    'slowDown' => 'DESACELERE', //When a speed limit is exceeded
    'speedLimitIs' => 'El límite de velocidad es', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Conectando...', //when connecting to the game server
    'signingIn' => 'Autenticandose',
    'loginFail' => 'Autenticación fallida!',
    'mapLoading' => 'Cargando mapa...',

    //Chat
    'warning' => 'Advertencia',
    'inactive1' => 'El Modo Espectador será activado. Escribe en el chat para cancelarlo.',
    'inactive2' => 'Inactividad detectada, la siguiente ronda iniciará el Modo Espectador.',
    'nickFill' => 'Escribe tu apodo para chatear!',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Debes escribir el nombre de la Sala!',
    'newsUser' => 'Nuevo', //special username in chat
    'serverUser' => 'Servidor', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Espectando', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'ingresó a la Sala', //in 'User1 joined the room.'
    'joined' => 'ingresó', //in title: 'User1 joined!'
    'userCame' => 'vino a espectar',  //in 'User1 came to watch.'
    'isSpectating' => 'ahora está espectando', //in 'User1 is now spectating.'
    'spectator' => 'Espectador',
    'hasLeft' => 'se fue', //in 'Spectator User1 has left.'
    'signedAs' => 'Ingresaste como',
    'welcome' => 'Bienvenido,', //in 'Welcome User1!'
    'welcomeIn' => 'Bienvenido a', //in 'Welcome in RoomName.'
    'noSpectators' => 'No hay nadie mirando en este momento.',
    'replayAvailable' => 'Repetición disponible en',
    'oldVer' => 'Tienes una versión antigua, presiona CTRL+F5 para recargar la nueva versión!',
    'oldVer2' => 'Sigues teniendo una versión antigua! Presiona {key} para recargar el cliente',
    'privateRoom' => 'Esta es tu Sala Privada en donde no te molestarán mientras juegas. Mira el Lobby para ver las Salas Públicas.',
    'restartInfo' =>  'Reinicia con F4 o configura otra tecla.',
    'joinLinkInfo' => 'Esta sala es Privada. Sólo se puede ingresar con este link:',
    
    //Dynamic elements
    'received' => 'Recibidas', //max 15
    'finesse' => 'Finesse', //max 15

    //List of rooms
    'roomName' => 'Nombre',
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
    'gameTime' => 'tiempo', //in Sprint time: xx.xx
    'see' => 'Ver', //in 'See 40L leaderboard'
    'leaderboard' => 'tablas de posiciones',

    //Less common strings, can stay untranslated
    'warning2' => 'CUIDADO',
    'connected' => 'Conectado',
    'client' => 'cliente',
    'notConnected' => 'DESCONECTADO',
    'connLost' => 'Conexión perdida!',
    'lastGame' => 'Último juego:',
    'roomSettings' => 'Configuración de Sala:',
    'attack' => 'Ataque',
    'combo' => 'Combo',
    'solid' => 'Sólido',
    'clear' => 'Eliminadas',
    'mode' => 'Modo',
    'garbage' => 'Basura',
    'garbageDelay' => 'Frecuencia de basura',
    'messiness' => 'Desorden',
    'replay' => 'Repetición',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Ingresar valor DAS de Nullpomino:',
    'suggestedIs' => 'DAS sugerido',
    'applyConfirm' => '¿Aplicar?',
    'invalidDAS' => 'Valor DAS inválido, ¡no se ha cambiado!',
    'settingsChanged' => 'Configuraciones cambiadas durante la partida, la repetición será invalidada.',
    'segment' => 'Segmento',
    'duration' => 'Duración',
    'roomFull' => 'Parece que la sala esta llena',
    'lobbyInfo' => 'Este chat es compartido con {discord}.',
    'newHost' => 'Ahora sos el anfitrión de esta sala.',
    'badRoom' => 'Esta sala no existe más, ingresando a la sala Default!',
    'stngsChanged' => 'Configuraciones cambiadas por el anfitrión',
    'stngsCustom' => 'Configuraciones personalizadas',
    'aSpec' => 'Ya estás en Modo Espectador!',
    'aPlay' => 'Ya estás Jugando!',
    'repFail' => 'La repetición no se pudo cambiar.',
    'repInChat' => 'Se dumpeo la repetición en el chat. Para conservarlo copia el texto del cuadro y pegalo en tu editor de texto favorito.',
    'repTxtInfo' => 'La copia del archivo de repetición puede ser reproducida en el reproductor interno o posiblemente resubida al sitio.',
    
    'newPB' => 'NUEVA MARCA PERSONAL',
    'firstPB' => 'Este fue tu primer juego. Haz otra marca personal para hacer un seguimiento de las estadisticas de mejora.',
    'infoPB' => 'Tu anterior record era {prevPB} logrado {prevAgo}. La mejora es {PBdiff}.',
    'daysAgo' => 'días atras',    
    
    'raceFin' => 'LA CARRERA TERMINÓ',
    'raceFinInfo' => 'Puedes completar la carrera, pero la proxima ronda puede empezar en cualquier momento.',

    'notTSD' => 'NO TSD',
    'notTSDInfo' => 'Solamente es permitido<br>el T-Spin Double',

    'fwDetect' => '4-WIDE',
    'fwDetectInfo' => 'Te estás atacando!',

    'oops' => 'Uf!',
    'chatNA' => 'El chat publico no esta habilitado para invitados o usuarios con menos de {chReq} horas de juego.',
    'leMore' => 'Aprende más',

    'connLimit' => 'Las conexiones máximas para esta IP ha sido alcanzada. Si necesitas incrementar este limite contactanos por Discord',
    'idleDC' => 'Desconectado por inactividad! La zona de espectadores esta llena.',
    'RLreach' => 'Limite de velocidad alcanzado.',
    'ban1' => 'El acceso a los juegos ha sido restringido permanentemente. Todavía puedes jugar los modos de un solo jugador.',
    'ban2' => 'Esta cuenta fue BANEADA. Logueate en el sitio para más información.',
    'ncGS' => 'No estás conectado al servidor de juego, re-intentando {refr}.',
    'refr' => 'refrescando la página',

    //Room info detail
    'noPlayers' => 'Sin jugadores',
    'cntMore' => '{cnt} más', //e.g. +10 more
    'cntGuests' => '{cnt} invitados', //e.g. +10 guests
    'cntSpec' => '{cnt} espectadores', //e.g. +10 spectating
    'joinPossible' => 'Puedes ingresar',
    'notEligible' => ' No elegible',
    'gTimeShort' => 'T.juego',
    'on' => 'Sí',
    'off' => 'No',
];
