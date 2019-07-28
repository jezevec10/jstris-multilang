<?php

return [
    //On screen captions
    'ready' => 'BERSIAP',
    'go' => 'MULAI!',
    'notFocused' => 'Tidak focus', //max 13 characters
    'clickToFocus' => 'Klik disini untuk kembali bermain', //max 30 characters
    'specMode' => 'Mode Menonton',
    'specModeInfo' => 'Kamu sedang dalam mode menonton.',
    'endSpec' => 'Ketik /play untuk bergabung di game', //keep '/play'
    'typeHelp' => 'Ketik /help untuk melihat command yang tersedia.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Tdk bermain', //max 12
    'waitNext' => 'Menunggu sampai ronde berikutnya',
    'waitNext2' => 'Tolong tunggu sampai ronde berikutnya',
    'pressStart' => 'Klik \'New game\' untuk memulai', //'New game' should be same as in game.newGame
    'slowDown' => 'PELAN PELAN', //When a speed limit is exceeded
    'speedLimitIs' => 'Batas kecepatan adalah', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Menghubungkan...', //when connecting to the game server

    //Chat
    'warning' => 'Peringatan',
    'inactive1' => 'Mode menonton akan diaktifkkan. Ketik di chat untuk membatalkan.',
    'inactive2' => 'Terdeteksi tidak aktif, ketidakaktifan permainan selanjutnya akan mengaktifkan mode menonton.',
    'nickFill' => 'Tulis usernamemu untuk bisa berbicara!',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Nama ruangan harus terisi!',
    'newsUser' => 'News', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Melihat', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'bergabung di ruangan', //in 'User1 joined the room.'
    'joined' => 'bergabung', //in title: 'User1 joined!'
    'userCame' => 'datang untuk melihat',  //in 'User1 came to watch.'
    'isSpectating' => 'sekarang menonton', //in 'User1 is now spectating.'
    'spectator' => 'Penonton',
    'hasLeft' => 'telah pergi', //in 'Spectator User1 has left.'
    'signedAs' => 'Kamu masuk sebagai',
    'welcome' => 'Selamat datang,', //in 'Welcome User1!'
    'welcomeIn' => 'Selamat datang di', //in 'Welcome in RoomName.'
    'noSpectators' => 'Tidak ada penonton saat ini.',
    'replayAvailable' => 'Tayangan ulang tersedia di',
    'oldVer' => 'Kamu mempunyai versi lama, gunakan CTRL+F5 untuk memperbarui versi yang baru!',
    'privateRoom' => 'Ini adalaha ruangan pribadimu dimana kamu tidak akan terganggu saat bermain. Cek Lobby untuk melihat ruangan publik.',
    'restartInfo' =>  'Restart dengan F4 atau setting tombol sendiri.',
    'joinLinkInfo' => 'Ruangan ini adalah pribadi. Hanya dengan cara menggunakan link ini untuk bergabung:',

    //Dynamic elements
    'received' => 'Menerima', //max 15
    'finesse' => 'Kemampuan',   //max 15

    //List of rooms
    'roomName' => 'Nama ruangan',
    'games' => 'Permainan', //number of games played in a room
    'players' => 'Pemain', //number of players

    //Results
    'name' => 'Nama',
    'wins' => 'Menang',
    'time' => 'Waktu', //as game duration
    'received' => 'Menerima',
    'sent' => 'Mengirim',
    'blocks' => 'Blocks', //as number of blocks placed
    'ren' => 'Kombo',

    //Practice mode result
    'gameTime' => 'waktu', //in Sprint time: xx.xx
    'see' => 'Lihat', //in 'See 40L leaderboard'
    'leaderboard' => 'papan peringkat',

    //Less common strings, can stay untranslated
    'warning2' => 'PERINGATAN',
    'connected' => 'Tersambung',
    'client' => 'client',
    'notConnected' => 'TIDAK TERSAMBUNG',
    'connLost' => 'Koneksi teputus!',
    'lastGame' => 'Permainan terakhir:',
    'roomSettings' => 'Pengaturan ruangan:',
    'attack' => 'Menyerang',
    'combo' => 'Kombo',
    'solid' => 'Solid',
    'clear' => 'Clear',
    'mode' => 'Mode',
    'garbage' => 'Sampah',
    'garbageDelay' => 'DelaySampah',
    'messiness' => 'Kekacauan',
    'replay' => 'Tayangan Ulang',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Tulis nilai numerik NullpoMino DAS:',
    'suggestedIs' => 'Sugesti DAS adalah',
    'applyConfirm' => 'Terapkan?',
    'invalidDAS' => 'Nilai DAS tidak bena, tidak terganti!',
    'settingsChanged' => 'Pengaturan terganti saat bermain. Tayangan ulang tak berlaku.',
    'segment' => 'Segmen',
    'duration' => 'Durasi',
];
