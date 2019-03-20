<?php

return [
    //On screen captions
    'ready' => 'НА СТАРТ',
    'go' => 'МАРШ!',
    'notFocused' => 'Вне игры', //max 13 characters ("Out of focus" has no close analogy, wrote "Out of the game" instead. -mLurker)
    'clickToFocus' => 'Щёлкните, чтобы вернуться', //max 30 characters (Wrote "Click to return to the game", character limit. -mLurker)
    'specMode' => 'Режим наблюдателя',
    'specModeInfo' => 'Вы находитесь в режиме наблюдателя.',
    'endSpec' => 'Напишите /play, чтобы войти в игру.', //keep '/play'
    'typeHelp' => 'Напишите /help для доступных команд.', //keep '/help'
    'st' => '', //max 2, in 1st, can stay untranslated (Deleted, it stops making sense when numbers are more than 4. -mLurker)
    'nd' => '', //max 2, in 2nd, can stay untranslated
    'rd' => '', //max 2, in 3rd, can stay untranslated
    'th' => '', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Вне игры', //max 12
    'waitNext' => 'Подождите до окончания раунда.',
    'waitNext2' => 'Ожидайте следующего раунда.',
    'pressStart' => 'Нажмите \'Новая игра\', чтобы начать', //'New game' should be same as in game.newGame
    'slowDown' => 'ПРИТОРМОЗИТЕ', //When a speed limit is exceeded
    'speedLimitIs' => 'Скоростной лимит:', //In a sentence: The speed limit is 2 PPS
	'connecting' => 'Соединение...', //when connecting to the game server

    //Chat
    'warning' => 'Внимание',
    'inactive1' => 'Будет активирован режим наблюдателя. Напишите в чат, чтобы отменить.',
    'inactive2' => 'Обнаружено бездействие. При бездействии в следующей игре активируется режим наблюдателя.',
    'nickFill' => 'Напишите свой никнейм для доступа к чату.', //As a pure Russian variant, "Напишите свой псевдоним для доступа к чату." can be used instead. -mLurker
    'setButton' => 'Отп.', //max 4 (Shortened "Отправить", character limit. -mLurker)
    'sendButton' => 'Отп.', //max 4 (Shortened "Отправить", character limit. -mLurker)
    'rNameReq' => 'Назовите комнату.',
    'newsUser' => 'Новости', //special username in chat
    'serverUser' => 'Сервер', //special username in chat
    'noNamed' => 'Аноним', //user wihtout name (guest), max 7, can stay untranslated (Used "Anonymous", character limit. -mLurker)
    'watching' => 'Наблюдатели', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'вошёл в комнату', //in 'User1 joined the room.'
    'joined' => 'присоединился', //in title: 'User1 joined!'
    'userCame' => 'присоединился как наблюдатель',  //in 'User1 came to watch.'
    'isSpectating' => 'наблюдает', //in 'User1 is now spectating.'
    'spectator' => 'Наблюдатель',
    'hasLeft' => 'вышел.', //in 'Spectator User1 has left.'
    'signedAs' => 'Вы зарегистрированы под именем',
    'welcome' => 'Добро пожаловать,', //in 'Welcome User1!'
    'welcomeIn' => 'Добро пожаловать в', //in 'Welcome in RoomName.'
    'noSpectators' => 'Никто сейчас не наблюдает.',
    'replayAvailable' => 'Повтор сохранён в:',
    'oldVer' => 'У вас устаревшая версия, нажмите CTRL+F5, чтобы загрузить новую версию!',
    'privateRoom' => 'Это - ваша приватная комната, никто тут вам не помешает. Просмотрите Лобби для открытых комнат.',
    'restartInfo' =>  'Нажмите на F4 (или на выбранную вами клавишу), чтобы перезапустить.',
    'joinLinkInfo' => 'Эта комната - приватная. В неё можно войти только через эту ссылку:',

    //Dynamic elements
    'received' => 'Получено', //max 15
    'finesse' => 'Техника',   //max 15 (No official or agreed upon term for "Tetris Finesse" in Russian. Wrote "Technique" instead. -mLurker)

    //List of rooms
    'roomName' => 'Название комнаты',
    'games' => 'Игры', //number of games played in a room
    'players' => 'Игроки', //number of players

    //Results
    'name' => 'Никнейм', //"Псевдоним" can be used, too. -mLurker
    'wins' => 'Победы',
    'time' => 'Время', //as game duration
    'received' => 'Получено',
    'sent' => 'Отправлено',
    'blocks' => 'Фигуры', //as number of blocks placed
    'ren' => 'Комбо', //Perhaps should be left as "REN". -mLurker

    //Practice mode result
    'gameTime' => 'Время', //in Sprint time: xx.xx
    'see' => 'Просмотреть', //in 'See 40L leaderboard'
    'leaderboard' => 'список рекордов',

    //Less common strings, can stay untranslated
    'warning2' => 'ВНИМАНИЕ',
    'connected' => 'Подключено',
    'client' => 'клиент',
    'notConnected' => 'НЕ ПОДКЛЮЧЕНО',
    'connLost' => 'Соединение потеряно!',
    'lastGame' => 'Последняя игра:',
    'roomSettings' => 'Настройки комнаты:',
    'attack' => 'Атака',
    'combo' => 'Комбо',
    'solid' => 'Твёрдо', //Where is this used? -mLurker
    'clear' => 'Очистка', //Taken from Tetris Ultimate, also unsure where this is used. -mLurker
    'mode' => 'Режим',
    'garbage' => 'Мусор',
    'garbageDelay' => 'Задержка мусора',
    'messiness' => 'Расброс мусора',
    'replay' => 'Повтор',
    'rep' => 'Пов', //max 3, short for Replay
    'rec' => 'Зап.', //max 4, short for Received
    'enterNullDAS' => 'Введите значение DAS из NullPoMino:',
    'suggestedIs' => 'Рекомендуется значение ЗАП:', //See "DAS" in game.php. Introduced a custom abbreviation. "ГУ" or "DAS" can be used, instead. -mLurker
    'applyConfirm' => 'Применить?',
    'invalidDAS' => 'Неправильно введено значение ЗАП.', //See "DAS" in game.php. -mLurker
    'settingsChanged' => 'Настройки были изменены во время игры. Повтор не будет сохранён.',
    'segment' => 'Сегмент',
    'duration' => 'Продолжительность',
];
