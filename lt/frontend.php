<?php

return [
    //On screen captions
    'ready' => 'PASIRUOŠT!',
    'go' => 'MARŠ!',
    'notFocused' => 'Už dėmesio ribų', //max 13 characters
    'clickToFocus' => 'Spustelėkite čia, kad grįžtumėte į žaidimą', //max 30 characters
    'specMode' => 'Stebėtojo režimas',
    'specModeInfo' => 'Dabar esate stebėtojo režime.',
    'endSpec' => 'Įrašykite /play, kad prisijungtumėte prie žaidimo', //keep '/play'
    'typeHelp' => 'Įrašykite /help, kad pamatytumėte komandas.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Nežaidžia', //max 12
    'waitNext' => 'Palaukite kol raundas pasibaigs',
    'waitNext2' => 'Palaukite kol raundas pasibaigs',
    'slowDown' => 'NE TAIP GREIT!', //When a speed limit is exceeded
    'speedLimitIs' => 'Greičio limitas yra', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Jungiamasi...', //when connecting to the game server
    'signingIn' => 'Jungiamasi',
    'loginFail' => 'Prisijungimas nepavyko!',
    'loginFail2' => 'Jūs esate neprisijungęs! Jūs žaidžiate kaip svečias, vardu {name}.',

    //Chat
    'warning' => 'Įspėjimas',
    'inactive1' => 'Stebėtojo režimas bus įjungtas. Rašykite į pokalbį, kad atšauktumėte.',
    'inactive2' => 'Aptiktas neaktyvumas, kitame neaktyviame žaidime bus įjungtas stebėtojo režimas.',
    'nickFill' => 'Įveskite vartotojo vardą, kad galėtumėte kalbėtis!',
    'setButton' => 'Nust', //max 4
    'sendButton' => 'Siųst', //max 4
    'rNameReq' => 'Kambario pavadinimas privalomas!',
    'newsUser' => 'Naujienos', //special username in chat
    'serverUser' => 'Serveris', //special username in chat
    'noNamed' => 'Bevardis', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Stebėtojai', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'prisijungė prie kambario', //in 'User1 joined the room.'
    'joined' => 'prisijungė', //in title: 'User1 joined!'
    'userCame' => 'atėjo stebėti',  //in 'User1 came to watch.'
    'isSpectating' => 'dabar stebi', //in 'User1 is now spectating.'
    'spectator' => 'Stebėtojas',
    'hasLeft' => 'išėjo', //in 'Spectator User1 has left.'
    'signedAs' => 'Prisijungėte kaip',
    'welcome' => 'Sveiki,', //in 'Welcome User1!'
    'welcomeIn' => 'Sveiki atvykę į', //in 'Welcome in RoomName.'
    'noSpectators' => 'Dabar niekas nestebi.',
    'replayAvailable' => 'Peržiūrėti įrašą',
    'oldVer' => 'Naudojate seną versiją, naudokite CTRL+F5 naujinimui!',
    'oldVer2' => 'Vis dar turite seną versiją! Naudokite {key} kliento perkrovimui',
    'privateRoom' => 'Tai jūsų privatus kambarys, kuriame nebūsite trukdomi. Viešus kambarius rasite Vestibiulyje.',
    'restartInfo' =>  'Paleiskite iš naujo su F4 arba pasirinkite savo klavišą.',
    'joinLinkInfo' => 'Tai privatus kambarys. Prisijungti galima tik su šia nuoroda:',

    //Dynamic elements
    'received' => 'Gauta', //max 15
    'finesse' => 'Tikslumas',   //max 15

    //List of rooms
    'roomName' => 'Kambario pavadinimas',
    'games' => 'Žaidimų', //number of games played in a room
    'players' => 'Žaidėjų', //number of players

    //Results
    'name' => 'Vardas',
    'wins' => 'Pergalių',
    'time' => 'Laikas', //as game duration
    'received' => 'Gauta',
    'sent' => 'Išsiųsta',
    'blocks' => 'Blokų padėta', //as number of blocks placed

    //Practice mode result
    'gameTime' => 'laikas', //in Sprint time: xx.xx
    'see' => 'Žiūrėti', //in 'See 40L leaderboard'
    'leaderboard' => 'lyderių lentelė',

    //Room info detail
    'noPlayers' => 'No players',
    'cntMore' => '{cnt} more',          //e.g. +10 more
    'cntGuests' => '{cnt} guests',      //e.g. +10 guests
    'cntSpec' => '{cnt} spectating',    //e.g. +10 spectating
    'joinPossible' => 'Join possible',
    'notEligible' => 'Not eligible',
    'gTimeShort' => 'G.time',
    'on' => 'On',
    'off' => 'Off',

    //friends
    'fr' => 'Draugai',
    'frLoad' => 'Kraunamas draugų sąrašas.',
    'frLogin' => 'Prisijungite, kad galėtumete naudotis draugų sąrašu.',
    'frEmpty' => 'Draugų sąrašas yra tuščias.',
    'frHowAdd' => 'Apsilankykite žaidėjo profilyje, kad galėtumete jį pakviesti į draugus.',
    'frPriv' => 'Privatus',
    'frIn' => 'Already in!',
    'frChat' => 'Atidaryti chat\'ą',
    'frRel' => 'Perkrauti',
    'frMsgTo' => 'Parašyti {name}',  //keep {name}
    'frInvBy' => 'nuo {user}',
    'frPage' => 'Draugų siena',
    'frIntroCl' => 'Uždaryti intro',
    'frInv' => 'Siųsti kambario kvietimą',
    'frInvTo' => 'Pakviesti prisijungti prie {room}',
    'frOn' => 'PRISIJUNGĘS',
    'frOff' => 'ATSIJUNGĘS',
    'frNewChatH' => 'Tai yra pokalbio su {name} pradžia.',
    'frWelc' => 'Sveiki atvykę į skiltį „Draugai“',
    'frIntro' => 'Šioje srityje galite pasiekti draugų sąrašą, privačius pokalbius ir kvietimus į kambarius',
    'frIntro2' => 'Norėdami išsiųsti draugystės užklausą, apsilankykite vartotojo profilyje',
    'frIntro3' => 'Norėdami tvarkyti draugus, apsilankykite {frPage}',
];
