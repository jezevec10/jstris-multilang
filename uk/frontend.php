<?php

return [
    //On screen captions
    'ready' => 'НА СТАРТ',
    'go' => 'РУШ!',
    'notFocused' => 'Поза грою', //max 13 characters
    'clickToFocus' => 'Натисніть тут, щоб повернутися', //max 30 characters
    'specMode' => 'Режим глядача',
    'specModeInfo' => 'Ви зараз в режимі глядача.',
    'endSpec' => 'Напишіть /play, щоб приєднатися до гри', //keep '/play'
    'typeHelp' => 'Напишіть /help для перегляду доступних команд.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Поза грою', //max 12
    'waitNext' => 'Зачекайте до закінчення раунду',
    'waitNext2' => 'Будь ласка, дочекайтеся наступного раунду',
    'pressStart' => 'Натисніть "Нова гра", щоб почати', //'New game' should be same as in game.newGame
    'slowDown' => 'ПРИГАЛЬМУЙТЕ', //When a speed limit is exceeded
    'speedLimitIs' => 'Швидкісний ліміт:', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'З’єднання...', //when connecting to the game server
    'signingIn' => 'Виконується вхід',
    'loginFail' => 'Не вдалося увійти!',
    'loginFail2' => 'Не авторизовані! Ви граєте як гість з іменем {name}.',
    'mapLoading' => 'Карта завантажується...',

    //Chat
    'warning' => 'Увага',
    'inactive1' => 'Режим глядача буде активовано. Напишіть у чат, щоб скасувати.',
    'inactive2' => 'Виявлено бездіяльність, наступна неактивна гра активує режим глядача.',
    'nickFill' => 'Введіть своє ім\'я, щоб мати можливість спілкуватися!',
    'setButton' => 'Встановити', //max 4
    'sendButton' => 'Надіслати', //max 4
    'rNameReq' => 'Назва кімнати має бути заповнена!',
    'newsUser' => 'Новини', //special username in chat
    'serverUser' => 'Сервер', //special username in chat
    'noNamed' => 'Без імені', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Глядачі', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'приєднався до кімнати', //in 'User1 joined the room.'
    'joined' => 'приєднався', //in title: 'User1 joined!'
    'userCame' => 'прийшов подивитися',  //in 'User1 came to watch.'
    'isSpectating' => 'зараз спостерігає', //in 'User1 is now spectating.'
    'spectator' => 'Глядач',
    'hasLeft' => 'пішов', //in 'Spectator User1 has left.'
    'signedAs' => 'Ви увійшли як',
    'welcome' => 'Ласкаво просимо,', //in 'Welcome User1!'
    'welcomeIn' => 'Ласкаво просимо в', //in 'Welcome in RoomName.'
    'noSpectators' => 'Зараз ніхто не дивиться.',
    'replayAvailable' => 'Повтор збережено в',
    'oldVer' => 'У Вас застаріла версія натисніть CTRL+F5, щоб завантажити нову версію!',
    'oldVer2' => 'У вас все ще застаріла версія! Натисніть {key}, для перезавантаження клієнта',
    'privateRoom' => 'Це ваша приватна кімната, тут вам ніхто не завадить. Перегляньте Лобі для відкритих кімнат.',
    'restartInfo' =>  'Натисніть F4 (або на вибрану вами клавішу), щоб перезавантажити.',
    'joinLinkInfo' => 'Ця кімната – приватна. До неї можна увійти лише за допомогою цього посилання:',

    //Dynamic elements
    'received' => 'Отримано', //max 15
    'finesse' => 'Техніка',   //max 15

    //List of rooms
    'roomName' => 'Назва кімнати',
    'games' => 'Ігри', //number of games played in a room
    'players' => 'Гравці', //number of players

    //Results
    'name' => 'Ім’я',
    'wins' => 'Перемоги',
    'time' => 'Час', //as game duration
    'received' => 'Отримано',
    'sent' => 'Відправлено',
    'blocks' => 'Фігури', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'час', //in Sprint time: xx.xx
    'see' => 'Переглянути', //in 'See 40L leaderboard'
    'leaderboard' => 'таблиця лідерів',

    //Less common strings, can stay untranslated
    'warning2' => 'УВАГА',
    'connected' => 'Підключено',
    'client' => 'клієнт',
    'notConnected' => 'НЕ ПІДКЛЮЧЕНО',
    'connLost' => 'З\'єднання втрачено!',
    'lastGame' => 'Остання гра:',
    'roomSettings' => 'Налаштування кімнати:',
    'attack' => 'Атака',
    'combo' => 'Комбо',
    'solid' => 'Повні лінії',
    'clear' => 'Очистити',
    'mode' => 'Режим',
    'garbage' => 'Сміття',
    'garbageDelay' => 'Затримка сміття',
    'messiness' => 'Безлад',
    'replay' => 'Повтор',
    'rep' => 'Пов', //max 3, short for Replay
    'rec' => 'Зап.', //max 4, short for Received
    'enterNullDAS' => 'Введіть значення NullPoMino DAS:',
    'suggestedIs' => 'Рекомендоване значення DAS:',
    'applyConfirm' => 'Застосувати?',
    'invalidDAS' => 'Значення DAS неправильне, не змінено!',
    'settingsChanged' => 'Налаштування було змінено під час гри. Повтор не буде збережено.',
    'segment' => 'Сегмент',
    'duration' => 'Тривалість',
    'roomFull' => 'Здається, кімната повна.',
    'lobbyInfo' => 'Цей чат з\'єднаний з сервером {discord}.',
    'newHost' => 'Тепер ви хост цієї кімнати.',
    'badRoom' => 'Цієї кімнати більше не існує, перенаправлено до стандартної кімнати!',
    'stngsChanged' => 'Налаштування змінені хостом',
    'stngsCustom' => 'Користувацькі налаштування',
    'aSpec' => 'Ви вже спостерігаєте!',
    'aPlay' => 'Ви вже граєте!',
    'repFail' => 'Повтор не вдалося зберегти.',
    'repInChat' => 'Файл повтору викладено у чат. Скопіюйте текст у вікні та збережіть в текстовому файлі.',
    'repTxtInfo' => 'Цей файл можна потім відкрити у плеєрі на сайті або, можливо, повторно опублікувати на сайті.',

    'newPB' => 'ВАШ НОВИЙ РЕКОРД',
    'firstPB' => 'Це була ваша перша гра. Поставте ще один рекорд, щоб відстежити ваші покращення.',
    'infoPB' => 'Ваш попередній рекорд: {prevPB}, поставлений {prevAgo}. Ваше покращення: {PBdiff}.',
    'daysAgo' => 'днів тому',

    'raceFin' => 'ПЕРЕГОНИ ЗАКІНЧЕНІ',
    'raceFinInfo' => 'Ви можете закінчити, але наступний раунд може розпочатися будь-якої миті.',

    'notTSD' => 'НЕ TSD',
    'notTSDInfo' => 'Дозволено лише T-Spin Double',

    'notPC' => 'НЕ PC',
    'notPCInfo' => 'Робіть Perfect Clear кожні 10 блоків. Вашу поле не можна очистити.',

    'fwDetect' => '4-WIDE',
    'fwDetectInfo' => 'Атака спрямована на себе!',

    'oops' => 'Ой!',
    'chatNA' => 'Загальний чат не доступний гостям та користувачам з менш ніж {chReq} годин гри.',
    'leMore' => 'Дізнатися більше',

    'connLimit' => 'Максимальний ліміт відкритих з\'єднань для цього IP досягнуто. Якщо Вам потрібно збільшити ліміт, зв\'яжіться з нами на сервері Discord',
    'idleDC' => 'Вас від\'єднали через бездіяльність! Місця для спостерігачів заповнені.',
    'RLreach' => 'Досягнуто ліміту з\'єднань.',
    'ban1' => 'Ваш доступ до Live-ігор назавжди обмежено. Ви все ще можете грати в одиночних режимах.',
    'ban2' => 'Цей обліковий запис ЗАБАНЕНИЙ. Увійдіть ще раз для подробиць.',
    'ncGS' => 'Відсутнє підключення до ігрового сервера, спробуйте {refr}.',
    'refr' => 'оновлення сторінки',

    'nsUnpub' => 'Рекорд не збережено, ця картка не опублікована.',
    'nsTspins' => 'Рекорд не збережений, недостатньо Т-Spin\'ів.',
    'nsLowPC' => 'Рекорд не збережений, потрібно щонайменше 2 PC.',
    'noBlocks' => 'Фігури закінчилися',
    'noBlocks2' => 'Усі фігури використані',

    //Room info detail
    'noPlayers' => 'Немає гравців',
    'cntMore' => 'ще {cnt}',          //e.g. +10 more
    'cntGuests' => '{cnt} гостей',      //e.g. +10 guests
    'cntSpec' => '{cnt} глядачів',    //e.g. +10 spectating
    'joinPossible' => 'Приєднання можливе',
    'notEligible' => 'Не можна увійти',
    'gTimeShort' => 'Ігровий час',
    'on' => 'Увімк.',
    'off' => 'Вимк.',

    //friends
    'fr' => 'Друзі',
    'frLoad' => 'Завантаження списку друзів',
    'frLogin' => 'Увійдіть у систему для перегляду списку друзів',
    'frEmpty' => 'Список друзів порожній',
    'frHowAdd' => 'Зайдіть на профіль будь-якого користувача, щоб додати його у друзі.',
    'frPriv' => 'Приватна кімната',
    'frIn' => 'Вже у кімнаті!',
    'frChat' => 'Відкрити чат',
    'frRel' => 'Оновити',
    'frMsgTo' => 'Написати {name}',  //keep {name}
    'frInv' => 'Надіслати запрошення в кімнату',
    'frInvTo' => 'Запросити приєднатися до {room}',
    'frInvIn' => 'Вже у кімнаті!',
    'frInvBy' => 'від {user}',
    'frOn' => 'В МЕРЕЖІ',
    'frOff' => 'НЕ В МЕРЕЖІ',
    'frNewChatH' => 'Це початок історії чату з {name}.',
    'frWelc' => 'Ласкаво просимо до вкладки Друзі',
    'frIntro' => 'Тут ви можете переглянути список друзів, особисті повідомлення та запрошення до кімнат',
    'frIntro2' => 'Щоб надіслати запит на дружбу, перейдіть у профіль користувача',
    'frIntro3' => 'Щоб редагувати список друзів, відвідайте сторінку "{frPage}"',
    'frPage' => 'Друзі',
    'frIntroCl' => 'Закрити вступ',
];
