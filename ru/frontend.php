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
    'oldVer' => 'У Вас устаревшая версия, нажмите CTRL+F5, чтобы загрузить новую версию!',
    'privateRoom' => 'Это - Ваша приватная комната, никто тут Вам не помешает. Просмотрите Лобби для открытых комнат.',
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
    'solid' => 'Полные линии', //Updated. -mLurker
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
	
	//New strings:
	//from July 29th, 2019. -mLurker
	'signingIn' => 'Регистрация',
	'loginFail' => 'Не удалось войти!',
	'mapLoading' => 'Загрузка карты...',
	'oldVer2' => 'У Вас всё ещё устарешвая версия! Нажмите {key}, чтобы перезагрузить клиент.',
	'roomFull' => 'Эта комната заполнена.',
	'lobbyInfo' => 'Этот чат соединён с {discord} сервером.',
	'newHost' => 'Вы теперь хозяин этой комнаты.',
	'badRoom' => 'Эта комната исчезла! Перенаправление в Default room...',
	'stngsChanged' => 'Настройки изменены хозяином',
	'stngsCustom' => 'Польз. настройки',
	'aSpec' => 'Вы уже наблюдаете!',
	'aPlay' => 'Вы уже играете!',
	'repFail' => 'Повтор не удалось сохранить.',
	'repInChat' => 'Файл повтора выложен в чат. Скопируйте текст в окне и сохраните в текстовом файле.',
	'repTxtInfo' => 'Этот файл можно потом открыть в проигрывателе на сайте или, возможно, переопубликовать на сайте.',
	'newPB' => 'ВАШ НОВЫЙ РЕКОРД',
	'firstPB' => 'Эта была Ваша первая игра. Поставьте ещё один рекорд, чтобы отметить ваши улучшения.',
	'infoPB' => 'Ваш предыдущий рекорд: {prevPB}, поставленный {prevAgo}. Ваше улучшение: {PBdiff}.',
	'daysAgo' => 'дней назад',
	'raceFin' => 'ГОНКА ОКОНЧЕНА',
	'raceFinInfo' => 'Вы можете закончить, но следующий раунд может начаться в любой момент.',
	'oops' => 'Ой!',
	'chatNA' => 'Общий чат не доступен гостям и пользователям с менее, чем {chReq} часов игры.',
	'leMore' => 'Узнать подробности',
	'connLimit' => 'Максимальный лимит открытых соединении достигнут для этого IP. Если Вам требуется увеличить лимит, свяжитесь с нами в Discord сервере',
	'idleDC' => 'Вас отсоединили из-за бездействия! Места для наблюдателей заполнены.',
	'RLreach' => 'Лимит соединении достигнут.',
	'ban1' => 'Доступ к играм против игроков запрещён. Вы всё ещё можете играть в другие режимы.',
	'ban2' => 'Эта учётная запись ЗАБАНЕНА. Войдите ещё раз для подробностей.', //Reverted to original meaning. -mLurker
	'ncGS' => 'Вы не подключены к серверу, попробуйте {refr}.',
	'refr' => 'перезагрузить страницу',
	'noPlayers' => 'Нет игроков',
	'cntMore' => '{cnt} ещё',
	'cntGuests' => '{cnt} гостей',
	'cntSpec' => '{cnt} наблюдателей',
	'joinPossible' => 'Можно войти',
	'notEligible' => 'Нельзя войти',
	'gTimeShort' => 'Игр. время',
	'on' => 'Вкл.',
	'off' => 'Выкл.',
	//from August 21st, 2019. -mLurker
	'notTSD' => 'НЕ ТП2', //Replace with "НЕ TSD" to avoid localizing.
	//Custom abbreviation meaning "T-Spin-2". No official translated term for "TSD" found.
	//Under the same logic, "ТП0", "ТП1" and "ТП3" mean TSZ, TSS and TST respectively. All mentions of T-Spins have been localized. -mLurker
	'notTSDInfo' => 'Разрешены только Т-Повороты-2.', //Use "Разрешены только T-Spin Double." to avoid localizing.
	'fwDetect' => '4-РЯД', //Replace with "4-WIDE" to avoid localizing.
	//Custom term meaning "4-row". All mentions of 4-wide have been localized, check game.php. -mLurker
	'fwDetectInfo' => 'Атака направлена на себя!',
];
