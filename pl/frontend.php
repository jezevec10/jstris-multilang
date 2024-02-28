<?php

return [
    //On screen captions
    'ready' => 'GOTÓW',
    'go' => 'START!',
    'notFocused' => 'Nieaktywny', //max 13 characters ("Out of focus" has no analogy in polish, used "inactive" instead. -Adul)
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
    'watching' => 'Oglądają', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'dołączył do pokoju', //in 'User1 joined the room.'
    'joined' => 'dołączył', //in title: 'User1 joined!'
    'userCame' => 'przyszedł oglądać',  //in 'User1 came to watch.'
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
    'blocks' => 'Bloki', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'czas', //in Sprint time: xx.xx
    'see' => 'Zobacz', //in 'See 40L leaderboard'
    'leaderboard' => 'ranking',

    //Less common strings, can stay untranslated
    'warning2' => 'OSTRZEŻENIE',
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

    'signingIn' => 'Logowanie',
    'loginFail' => 'Błąd logowania!',
    'loginFail2' => 'Nie zalogowano! Grasz jako gość pod nazwą {name}.',
    'mapLoading' => 'Ładowanie mapy...',
    'oldVer2' => 'Nadal posiadasz starą wersję! Użyj przycisku {key} aby przeładować klienta gry',
    'roomFull' => 'Wygląda na to że pokój jest pełny.',
    'lobbyInfo' => 'Ten pokój jest współdzielony z {discord}.',
    'newHost' => 'Jesteś hostem tego pokoju.',
    'badRoom' => 'Ten pokój nie istnieje, dołączanie do domyślnego pokoju!',
    'stngsChanged' => 'Ustawienia zmienione przez hosta',
    'stngsCustom' => 'Niestandardowe ustawienia',
    'aSpec' => 'Już obserwujesz!',
    'aPlay' => 'Już grasz!',
    'repFail' => 'Błąd zapisu powtórki.',
    'repInChat' => 'Plik powtórki został wysłany na czacie. Aby go zapisać, skopiuj tekst z okienka i wklej do swojego ulubionego edytora tekstu.',
    'repTxtInfo' => 'Skopiowany plik powtórki może zostać uruchomiony w odtwarzaczu powtórek, lub ponownie zakwalifikowany na stronie.',
    'newPB' => 'TWÓJ NOWY REKORD PERSONALNY',
    'firstPB' => 'To była Twoja pierwsza gra. Zdobądź kolejny rekord aby śledzić swoje postępy.',
    'infoPB' => 'Twój były rekord to {prevPB} z {prevAgo}. Różnica to {PBdiff}.',
    'daysAgo' => 'dni temu',
    'raceFin' => 'WYŚCIG ZAKOŃCZONY',
    'raceFinInfo' => 'Możesz zakończyć swoją grę, lecz kolejna runda może rozpocząć się w każdej chwili.',
    'notTSD' => 'NIE TSD',
    'notTSDInfo' => 'Tylko podwójny T-Spin jest dozwolony',
    'notPC' => 'NIE PC',
    'notPCInfo' => 'Wykonaj Perfekcyjne Wyczyszczenie co 10 bloków. Twoja tablica nie jest oczyszczalna.',
    'fwDetect' => 'SZEROKIE NA CZTERY',
    'fwDetectInfo' => 'Atakujesz siebie!',
    'oops' => 'Ups!',
    'chatNA' => 'Publiczny czat nie jest dostępny dla gości, lub graczy z mniej niż {chReq} godzinami gry.',
    'leMore' => 'Zobacz więcej',
    'connLimit' => 'Maksymalna liczba otwartych połączeń dla tego adresu IP została wykorzystana. Jeśli potrzebujesz podnieść limit, skontaktuj się z nami na Discordzie',
    'idleDC' => 'Rozłączono przez brak aktywności! Liczba obserwujących była pełna.',
    'RLreach' => 'Limit oceny wypełniony.', // This might refer to the packet rate, so this translation might be wrong.
    'ban1' => 'Twój dostęp do gier Live został permanentnie zablokowany. Nadal możesz grać w tryby dla jednego gracza.',
    'ban2' => 'To konto użytkownika jest ZBANOWANE. Przeloguj się do strony po więcej informacji.',
    'ncGS' => 'Not connected to the game server, try {refr}.',
    'ncGS' => 'Nie połączono do serwera gry, spróbuj {refr}.',
    'refr' => 'odświeżyć stronę',
    'nsUnpub' => 'Rekord nie został zapisany, mapa nie została opublikowana.',
    'nsTspins' => 'Rekord nie został zapisany, za mało T-Spinów.',
    'nsLowPC' => 'Rekord nie został zapisany, wymagane przynajmniej 2 Perfekcyjne Wyczyszczenia.',
    'noBlocks' => 'Wykorzystano wszystkie bloki',
    'noBlocks2' => 'Wykorzystano wszystkie bloki',
    'noPlayers' => 'Brak graczy',
    'cntMore' => '{cnt} więcej',
    'cntGuests' => '{cnt} gości',
    'cntSpec' => '{cnt} obserwujących',
    'joinPossible' => 'Możliwe do dołączenia',
    'notEligible' => 'Niedozwolony',
    'gTimeShort' => 'G.time',
    'on' => 'Włącz',
    'off' => 'Wyłącz',
    'fr' => 'Znajomi',
    'frLoad' => 'Ładowanie listy znajomych',
    'frLogin' => 'Zaloguj się aby korzystać z listy znajomych.',
    'frEmpty' => 'Lista znajomych jest pusta',
    'frHowAdd' => 'Odwiedź profil użytkownika aby dodać go do znajomych.',
    'frPriv' => 'Prywatne',
    'frIn' => 'Już jest!',
    'frChat' => 'Otwórz czat',
    'frRel' => 'Przeładuj',
    'frMsgTo' => 'Wiadomość do {name}',
    'frInv' => 'Wyślij zaproszenie do pokoju',
    'frInvTo' => 'Zaproś do pokoju {room}',
    'frInvIn' => 'Już jesteś!',
    'frInvBy' => 'przez {user}',
    'frOn' => 'ONLINE',
    'frOff' => 'OFFLINE',
    'frNewChatH' => 'To jest początek historii czatu z {name}.',
    'frWelc' => 'Witaj w zakładce Znajomi',
    'frIntro' => 'Na tej stronie możesz sprawdzić listę znajomych online, prywatne czaty oraz zaproszenia do pokoju',
    'frIntro2' => 'Aby dodać użytkownika do znajomych, odwiedź jego profil',
    'frIntro3' => 'Aby zarządzać znajomymi, odwiedź {frPage}',
    'frPage' => 'Strona Znajomych',
    'frIntroCl' => 'Zamknij intro',
];
