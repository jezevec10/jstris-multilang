<?php

return [
    //On screen captions
    'ready' => 'HAZIR',
    'go' => 'BAŞLA!',
    'notFocused' => 'Sekme dışı', //max 13 characters
    'clickToFocus' => 'Oyuna odaklanmak için tıkla', //max 30 characters
    'specMode' => 'İzleyici modu',
    'specModeInfo' => 'İzleyici modundasın.',
    'endSpec' => 'Oyuna katılmak için /play yazın.', //keep '/play'
    'typeHelp' => 'Yardım için /help yazın.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Oynamıyor', //max 12
    'waitNext' => 'Tur bitene kadar bekle',
    'waitNext2' => 'Lütfen sonraki tur için bekleyin',
    'pressStart' => 'Yeni oyun için \'New game\'e tıkla.', //'New game' should be same as in game.newGame
    'slowDown' => 'YAVAŞLAYIN', //When a speed limit is exceeded
    'speedLimitIs' => 'Hız limiti', //In a sentence: The speed limit is 2 PPS

    //Chat
    'warning' => 'Uyarı',
    'inactive1' => 'İzleyici moduna geçilecek. Engellemek için chate yazın.',
    'inactive2' => 'Hareketsizlik belirlendi, sonraki oyunda izleyici moduna geçilecek.',
    'nickFill' => 'Mesaj yazabilmek için kullanıcı adını yaz',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Oda adı doldurulmalıdır.',
    'newsUser' => 'Haberler', //special username in chat
    'serverUser' => 'Sunucu', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'İzleyenler', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'odaya katıldı.', //in 'User1 joined the room.'
    'joined' => 'katıldı', //in title: 'User1 joined!'
    'userCame' => 'izlemeye geldi',  //in 'User1 came to watch.'
    'isSpectating' => 'artık izliyor', //in 'User1 is now spectating.'
    'spectator' => 'İzleyici',
    'hasLeft' => 'terketti', //in 'Spectator User1 has left.'
    'signedAs' => 'Bu kullanıcı olarak giriş yaptınız:',
    'welcome' => 'Merhaba,', //in 'Welcome User1!'
    'welcomeIn' => 'İçeri gel', //in 'Welcome in RoomName.'
    'noSpectators' => 'Kimse şu anda izlemiyor.',
    'replayAvailable' => 'Tekrar şurada mevcut',
    'oldVer' => 'Şu anda eski bir sürümü kullanıyorsunuz. CTRL + F5 ile yenileyin!',
    'privateRoom' => 'Burası özel odanız. Oynarken sizi kimse rahatsız edemez. Açık lobileri görmek için Lobiye bakın.',
    'restartInfo' =>  'F4e basarak ya da başka bir tuş atayarak yeniden başlat.',
    'joinLinkInfo' => 'Bu oda özel. Başkaları sadece şu linki kullanarak katılabilir:',

    //Dynamic elements
    'received' => 'Alındı', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => 'Oda adı',
    'games' => 'Oynanan oyunlar', //number of games played in a room
    'players' => 'Oyuncular', //number of players

    //Results
    'name' => 'Ad',
    'wins' => 'Kazandı',
    'time' => 'Süre', //as game duration
    'received' => 'Alınan',
    'sent' => 'Gönderilen',
    'blocks' => 'Bloklar', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'Süre', //in Sprint time: xx.xx
    'see' => 'Gör', //in 'See 40L leaderboard'
    'leaderboard' => 'Lider tablosu',

    //Less common strings, can stay untranslated
    'warning2' => 'Uyarı',
    'connected' => 'Bağlandı',
    'client' => 'client',
    'notConnected' => 'BAĞLI DEĞİL',
    'connLost' => 'Bağlantı kesildi!',
    'lastGame' => 'Son oyun:',
    'roomSettings' => 'Oda ayarları:',
    'attack' => 'Saldırı',
    'combo' => 'Kombo',
    'solid' => 'Solid',
    'clear' => 'Temizle',
    'mode' => 'Mod',
    'garbage' => 'Çöp',
    'garbageDelay' => 'Çöp Gecikmesi',
    'messiness' => 'Dağınıklık',
    'replay' => 'Tekrar',
    'rep' => 'Tek', //max 3, short for Replay
    'rec' => 'Kay.', //max 4, short for Received
    'enterNullDAS' => 'Sayısal bir NullpoMino DAS değeri girin:',
    'suggestedIs' => 'Önerilen DAS',
    'applyConfirm' => 'Onayla?',
    'invalidDAS' => 'Girilen DAS değeri hatalı, değiştirilmedi.',
    'settingsChanged' => 'Oyun sırasında ayarlar değiştirildi. Replay geçersiz.',
    'segment' => 'Segment',
    'duration' => 'Süre',
    'roomFull' => 'Görünüşe göre oda dolu.',
    'lobbyInfo' => 'Bu sohbet {discord} ile paylaşılıyor.',
    'newHost' => 'Artık bu odanın sahibi sizsiniz.',
    'badRoom' => 'Bu oda artık mevcut değil, Varsayılan odaya katılıyor!',
    'stngsChanged' => 'Ayar ana bilgisayar tarafından değiştirildi',
    'stngsCustom' => 'Özel ayarlar',
    'aSpec' => 'Zaten izleniyor!',
    'aPlay' => 'Zaten oynanıyor!',
    'repFail' => 'Tekrar kaydedilemedi.',
    'repInChat' => 'Tekrar dosyası sohbete girdilendi. Korumak için, kutudaki metni kopyalayın ve en sevdiğiniz metin editörüne yapıştırın.',
    'repTxtInfo' => 'Kopyalanan tekrar oynatım dosyası daha sonra oynatıcıda oynatılabilir veya muhtemelen siteye yeniden gönderilebilir.',

    'newPB' => 'YENİ KİŞİSEL EN İYİ SKORUNUZ',
    'firstPB' => 'Bu senin ilk oyundu. Gelişimi izlemek için başka bir PB alın.',
    'infoPB' => 'Önceki kaydınız {prevPB}, ve {prevAgo} elde edildi . Gelişiminiz ise {PBdiff}.',
    'daysAgo' => 'gün önce',

    'raceFin' => 'YARIŞ BİTTİ',
    'raceFinInfo' => 'Koşuyu tamamlayabilirsiniz, ancak bir sonraki tur herhangi bir zamanda başlayabilir.',

    'oops' => 'Haydaa!',
    'chatNA' => 'Genel sohbet, {chReq} saatten daha az oyun süresi olan misafirler veya kullanıcılar için mevcut değildir.',
    'leMore' => 'Daha fazlasını öğren',

    'connLimit' => 'Bu IP için maksimum açık bağlantı miktarına şu anda ulaşılıyor. Sınırların artırılması gerekiyorsa, Discord yoluyla bize ulaşın.',
    'idleDC' => 'Hareketsizlik nedeniyle bağlantı kesildi! Seyirci bölümü doluydu.',
    'RLreach' => 'Limite ulaşıldı.',
    'ban1' => 'Canlı oyunlara erişiminiz kalıcı olarak kısıtlandı. Tek oyunculu modları hala oynayabilirsiniz.',
    'ban2' => 'Bu kullanıcı hesabı YASAKLANDI. Daha fazla bilgi için web sitesine yeniden giriş yapın.',
    'ncGS' => 'Oyun sunucusuna bağlı değil, {refr} deneyin.',
    'refr' => 'sayfa yenileniyor',

    //Room info detail
    'noPlayers' => 'Oyuncular yok',
    'cntMore' => '{cnt} fazlası',          //e.g. +10 more
    'cntGuests' => '{cnt} misafirler',      //e.g. +10 guests
    'cntSpec' => '{cnt} izliyor',    //e.g. +10 spectating
    'joinPossible' => 'Katılmak mümkün',
    'notEligible' => 'Uygun değil',
    'gTimeShort' => 'G.süresi',
    'on' => 'Açık',
    'off' => 'Kapalı',
];
