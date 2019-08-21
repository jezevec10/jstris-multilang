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
    'signingIn' => 'Registrando-se',
    'loginFail' => 'Falha ao entrar!',
    'mapLoading' => 'Carregando mapa...',

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
    'welcome' => 'Bem vindo,', //in 'Welcome User1!'
    'welcomeIn' => 'Bem vindo ao', //in 'Welcome in RoomName.'
    'noSpectators' => 'Ninguém está assistindo agora.',
    'replayAvailable' => 'Replay disponível em',
    'oldVer' => 'Você tem uma versão antiga, use CTRL+F5 para recarregar para a nova versão!',
    'oldVer2' => 'Você ainda tem uma versão antiga! Use {key} para recarregar seu cliente',
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
    'roomFull' => 'Parece que a sala está cheia.',
    'lobbyInfo' => 'Este bate-papo é compartilhado com o {discord}.',
    'newHost' => 'Você é agora o dono desta sala.',
    'badRoom' => 'Esta sala não existe mais, entrando na Sala padrão!',
    'stngsChanged' => 'Configuração mudada pelo dono',
    'stngsCustom' => 'Configurações personalizadas',
    'aSpec' => 'Já está espectando!',
    'aPlay' => 'Já está jogando!',
    'repFail' => 'Replay não pôde ser salvo.',
    'repInChat' => 'Replayfile posto no bate-papo. Para preservá-lo, copie o texto na caixa e cole-o em seu editor de texto favorito.',
    'repTxtInfo' => 'O replayfile copiado pode ser então reproduzido no replay ou possivelmente reenviada ao site.',

    'newPB' => 'SEU NOVO MELHOR PESSOAL',
    'firstPB' => 'Este foi seu primeiro jogo. Obtenha outro MP para acompanhar a melhoria.',
    'infoPB' => 'Seu último recorde era de {prevPB} atingida {prevAgo}. A melhora é de {PBdiff}.',
    'daysAgo' => 'dias atrás',

    'raceFin' => 'A CORRIDA TERMINOU',
    'raceFinInfo' => 'Você pode completar a corrida, mas a próxima rodada pode começar a qualquer momento.',

    'oops' => 'Opa!',
    'chatNA' => 'Bate-papo público não está disponível para convidados ou usuários com menos de {chReq} horas de tempo jogando.',
    'leMore' => 'Saiba mais',

    'connLimit' => 'A quantidade máxima de conexões abertas para este IP está atualmente ancançada. Se você necessitar de limites aumentados, contate-nos pelo Discord',
    'idleDC' => 'Desconectado por inatividade! A seção de espectadores estava cheia.',
    'RLreach' => 'Limite de taxa alcançada.',
    'ban1' => 'Seu acesso aos jogos Ao Vivo foi permanentemente restrita. Você ainda pode jogar modos de único jogador.',
    'ban2' => 'Esta conta de usuário está BANIDA. Reentre no site para mais informações.',
    'ncGS' => 'Não conectado a um servidor do jogo, tente {refr}.',
    'refr' => 'recarregando a página',

    //Room info detail
    'noPlayers' => 'Nenhum jogador',
    'cntMore' => '{cnt} outros',          //e.g. +10 more
    'cntGuests' => '{cnt} convidados',      //e.g. +10 guests
    'cntSpec' => '{cnt} espectando',    //e.g. +10 spectating
    'joinPossible' => 'Entrar possível',
    'notEligible' => 'Não elegível',
    'gTimeShort' => 'Tempo j.',
    'on' => 'Ativado',
    'off' => 'Desativado',
];
