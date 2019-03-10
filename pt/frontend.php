<?php

return [
    //On screen captions
    'ready' => 'PREPARE',
    'go' => 'VAI!',
    'notFocused' => 'Desfocado', //max 13 characters
    'clickToFocus' => 'Clique aqui para focar o jogo', //max 30 characters
    'specMode' => 'Modo de espectador',
    'specModeInfo' => 'Você está no modo de espectador agora.',
    'endSpec' => 'Digite /play para entrar no jogo', //keep '/play'
    'typeHelp' => 'Digite /help para ver comandos disponíveis.', //keep '/help'
    'st' => 'º', //max 2, in 1st, can stay untranslated
    'nd' => 'º', //max 2, in 2nd, can stay untranslated
    'rd' => 'º', //max 2, in 3rd, can stay untranslated
    'th' => 'º', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Não jogando', //max 12
    'waitNext' => 'Espere até a rodada terminar',
    'waitNext2' => 'Por favor espere pela próxima rodada',
    'pressStart' => 'Pressione \'Novo jogo\' para começar', //'New game' should be same as in game.newGame
    'slowDown' => 'DESACELERE', //When a speed limit is exceeded
    'speedLimitIs' => 'O limite de velocidade é', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Conectando...', //when connecting to the game server

    //Chat
    'warning' => 'Aviso',
    'inactive1' => 'Modo de espectador será ativado. Digite no bate-papo para abordar.',
    'inactive2' => 'Inatividade detectada, o próximo jogo inativo irá ativar o modo de espectador.',
    'nickFill' => 'Digite seu nome de usuário para poder conversar!',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'O nome da sala precisa ser preenchida!',
    'newsUser' => 'Notícias', //special username in chat
    'serverUser' => 'Servidor', //special username in chat
    'noNamed' => 'SemNome', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Assistindo', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'entrou na sala', //in 'User1 joined the room.'
    'joined' => 'entrou', //in title: 'User1 joined!'
    'userCame' => 'veio assistir',  //in 'User1 came to watch.'
    'isSpectating' => 'está assistindo agora', //in 'User1 is now spectating.'
    'spectator' => 'Espectador',
    'hasLeft' => 'saiu', //in 'Spectator User1 has left.'
    'signedAs' => 'Você está assinado como',
    'welcome' => 'Bem vindo(a),', //in 'Welcome User1!'
    'welcomeIn' => 'Bem vindo(a) ao', //in 'Welcome in RoomName.'
    'noSpectators' => 'Ninguém está assistindo agora.',
    'replayAvailable' => 'Replay disponível em',
    'oldVer' => 'Você tem uma versão antiga, use CTRL+F5 para recarregar para a nova versão!',
    'privateRoom' => 'Este é sua sala privada onde você não será perturbado enquanto joga. Verifique o Lobby para ver salas públicas.',
    'restartInfo' =>  'Recomeçe pelo F4 ou configure uma tecla personalizada.',
    'joinLinkInfo' => 'Esta sala é privada. O único jeito que alguém possa entrar é usando esse link:',

    //Dynamic elements
    'received' => 'Recebido', //max 15
    'finesse' => 'Fineza',   //max 15

    //List of rooms
    'roomName' => 'Nome da sala',
    'games' => 'Jogos', //number of games played in a room
    'players' => 'Jogadores', //number of players

    //Results
    'name' => 'Nome',
    'wins' => 'Vitórias',
    'time' => 'Tempo', //as game duration
    'received' => 'Recebidas',
    'sent' => 'Enviadas',
    'blocks' => 'Blocos', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'tempo', //in Sprint time: xx.xx
    'see' => 'Veja', //in 'See 40L leaderboard'
    'leaderboard' => 'Classificação',

    //Less common strings, can stay untranslated
    'warning2' => 'AVISO',
    'connected' => 'Conectado',
    'client' => 'cliente',
    'notConnected' => 'NÃO CONECTADO',
    'connLost' => 'Conexão perdida!',
    'lastGame' => 'Último jogo:',
    'roomSettings' => 'Configurações da sala:',
    'attack' => 'Ataque',
    'combo' => 'Combo',
    'solid' => 'Sólido',
    'clear' => 'Clareado',
    'mode' => 'Modo',
    'garbage' => 'Lixo',
    'garbageDelay' => 'Frequência de lixo',
    'messiness' => 'Desordem',
    'replay' => 'Replay',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Entre o valor numérico de DAS do NullpoMino:',
    'suggestedIs' => 'DAS sugerido é',
    'applyConfirm' => 'Aplicar?',
    'invalidDAS' => 'Valor DAS inválido, não foi alterado!',
    'settingsChanged' => 'Configurações alteradas durante o jogo. Replay invalidado.',
    'segment' => 'Segmento',
    'duration' => 'Duração',
];
