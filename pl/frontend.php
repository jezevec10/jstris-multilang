<?php

return [
    //On screen captions
    'ready' => 'GOTÓW',
    'go' => 'START!',
    'notFocused' => 'Nieaktywne', //max 13 characters ("Out of focus" has no analogy in polish, used "inactive" instead. -Adul)
    'clickToFocus' => 'Kliknij tu aby aktywować grę', //max 30 characters
    'specMode' => 'Tryb widza',
    'specModeInfo' => 'Jesteś teraz w trybie widza.',
    'endSpec' => 'Wpisz /play by dołączyć do gry', //keep '/play'
    'typeHelp' => 'Wpisz /help by uzyskać listę komend.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated , "szy" could work
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated , "gi" could work
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated , "ci" could work
    'th' => 'th', //max 2, in 4th, can stay untranslated , "ty" could work, except for numbers ending in 7 or 8. Hence, these suffixes are untranslated for consistency.
    'notPlaying' => 'Nie gra', //max 12
    'waitNext' => 'Poczekaj na koniec rundy',
    'waitNext2' => 'Proszę poczekać na kolejną rundę',
    'pressStart' => 'Wciśnij \'Nowa gra\' by zacząć', //'New game' should be same as in game.newGame
    'slowDown' => 'ZWOLNIJ', //When a speed limit is exceeded
    'speedLimitIs' => 'Maksymalna prędkość to', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Łączenie...', //when connecting to the game server

    //Chat
    'warning' => 'Ostrzeżenie',
    'inactive1' => 'Tryb widza zostanie aktywowany. Napisz w czacie by anulować.',
    'inactive2' => 'Wykryto nieaktywność, Kolejna nieaktywna gra włączy tryb widza.',
    'nickFill' => 'Wpisz nazwę użytkownika aby móc czatować!',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Nazwa pokoju musi być ustawiona!',
    'newsUser' => 'Wiadomości', //special username in chat
    'serverUser' => 'Serwer', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Ogląda', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'dołączył do pokoju', //in 'User1 joined the room.'
    'joined' => 'dołączył', //in title: 'User1 joined!'
    'userCame' => 'pezyszedł oglądać',  //in 'User1 came to watch.'
    'isSpectating' => 'teraz ogląda', //in 'User1 is now spectating.'
    'spectator' => 'Widz',
    'hasLeft' => 'wyszedł', //in 'Spectator User1 has left.'
    'signedAs' => 'Jesteś zalogowany jako',
    'welcome' => 'Witaj,', //in 'Welcome User1!'
    'welcomeIn' => 'Witaj w', //in 'Welcome in RoomName.'
    'noSpectators' => 'Nikt obecnie nie ogląda.',
    'replayAvailable' => 'Powtórka dostępna pod',
    'oldVer' => 'Używasz starej wersji, wciśnij CTRL+F5 by przeładować na nową wersję!',
    'privateRoom' => 'To jest twój prywatny pokój gdzie nikt nie będzie ci przeszkadzał podczas gry. Sprawdź Lobby by zobaczyć pokoje publiczne.',
    'restartInfo' =>  'Zrestartuj używając F4 lub ustaw własny klawisz.',
    'joinLinkInfo' => 'Ten pokój jest prywatny. Ktoś może dołączyć jedynie przez użycie tego linku:',

    //Dynamic elements
    'received' => 'Otrzymano', //max 15
    'finesse' => 'Finezja',   //max 15

    //List of rooms
    'roomName' => 'Nazwa pokoju',
    'games' => 'Gier', //number of games played in a room
    'players' => 'Graczy', //number of players

    //Results
    'name' => 'Nazwa',
    'wins' => 'Wygrane',
    'time' => 'Czas', //as game duration
    'received' => 'Otrzymano',
    'sent' => 'Wysłano',
    'blocks' => 'Bloków', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'czas', //in Sprint time: xx.xx
    'see' => 'Zobacz', //in 'See 40L leaderboard'
    'leaderboard' => 'ranking',

    //Less common strings, can stay untranslated
    'warning2' => 'OSTRZERZENIE',
    'connected' => 'Połączono',
    'client' => 'klient',
    'notConnected' => 'NIE POŁĄCZONO',
    'connLost' => 'Utracono połączenie!',
    'lastGame' => 'Ostatnia gra:',
    'roomSettings' => 'Ustawienia pokoju:',
    'attack' => 'Atak',
    'combo' => 'Combo',
    'solid' => 'Solid',
    'clear' => 'Clear',
    'mode' => 'Tryb',
    'garbage' => 'Śmieci',
    'garbageDelay' => 'Opóźnienie śmieci',
    'messiness' => 'Nieuporządkowanie',
    'replay' => 'Powtórka',
    'rep' => 'Pow', //max 3, short for Replay
    'rec' => 'Otr.', //max 4, short for Received
    'enterNullDAS' => 'Wpisz numeryczną wartość DAS z NullpoMino:',
    'suggestedIs' => 'Sugerowany DAS to',
    'applyConfirm' => 'Zastosować?',
    'invalidDAS' => 'Wartość DAS jest niewłaściwa, nie została zmieniona!',
    'settingsChanged' => 'Zmieniono ustawienia podczas gry. Powtórka unieważniona.',
    'segment' => 'Segment',
    'duration' => 'Czas trwania',
];
