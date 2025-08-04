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
    'invalidDAS' => 'Nilai DAS tidak benar, tidak terganti!', //typo here
    'settingsChanged' => 'Pengaturan terganti saat bermain. Tayangan ulang tak berlaku.',
    'segment' => 'Segmen',
    'duration' => 'Durasi',
];


// Missing Translations (Now Fully Translated)

'signingIn' => 'Mendaftar', 
'loginFail' => 'Login Gagal!',
'loginFail2' => 'Tidak masuk! Kamu bermain sebagai tamu bernama {name}.', 
'mapLoading' => 'Memuat Map...',
'oldVer2' => 'Kamu masih memiliki versi lama! Gunakan {key} untuk memuat ulang klien',
'roomFull' => 'Sepertinya ruangan tersebut',
'lobbyInfo' => 'Chat ini dibagi dengan {discord}.',
'newHost' => 'Kamu sekarang adalah host di ruangan ini.', 
'badRoom' => 'Ruangan ini tidak tersedia, bergabung dengan Ruang Default!', 
'stngsChanged' => 'Pengaturan diganti oleh host', 
'stngsCustom' => 'Aturan Kustom',
'aSpec' => ' Sudah menonton!', 
'aPlay' => 'Sudah bermain!', 
'repFail' => 'Tayangan Ulang gagal disimpan.',
'repInChat' => 'File tayangan ualng dibuang ke obrolan. Untuk menyimpannya, salin teks di dalam kotak dan tempel ke editor teks favorit Anda.',
'repTxtInfo' => 'Berkas tayangan ulang yang disalin kemudian dapat diputar di replayer atau mungkin dikirimkan kembali ke situs.',
'newPB' => 'REKOR PRIBADI TERBAIK',
'firstPB' => 'Ini adalah permainan pertamamu. Dapat PB lain untuk melacak kemajuan.',
'infoPB' => '// Rekor Anda sebelumnya adalah {prevPB} dicapai {prevAgo}. Kemajuannya adalah {PBDiff}.',
'daysAgo' => 'hari sebelumnya',
'raceFin' => 'PERLOMBAAN TELAH SELESAI',
'raceFinInfo' => 'Anda dapat menyelesaikan larinya, tetapi ronde berikutnya dapat dimulai kapan saja.', 
'notTSD' => 'Bukan TSD',
'notTSDInfo' => 'Hanya T-Spin Double yang diperbolehkan', 
'notPC' => 'Bukan PC', 
'notPCInfo' => 'Do a Perfect Clear every 10 blocks. Your board is not clearable.',
'fwDetect' => 'FOUR WIDE', //Don't need to be translated
'fwDetectInfo' => 'Menyerang dirimu sendiri!', 
'oops' => 'Ups!', 
'chatNA' => 'Obrolan publik tidak tersedia untuk tamu atau pengguna dengan waktu bermain kurang dari {chReq} jam.',
'leMore' => 'Pelajari Lebih Lanjut',
'connLimit' => 'Jumlah maksimum koneksi terbuka untuk IP ini saat ini telah tercapai. Jika Anda memerlukan peningkatan batas, hubungi kami melalui Discord.',
'idleDC' => 'Terputus karena tidak aktif! Bagian penonton penuh.',
'RLreach' => 'Batas rate tercapai.',
'ban1' => 'Akses Anda ke permainan Live telah dibatasi secara permanen. Anda masih dapat memainkan mode pemain tunggal.',
'ban2' => 'Akun pengguna ini DIBLOKIR. Silakan masuk kembali ke situs web untuk informasi selengkapnya.',
'ncGS' => 'Tidak terhubung ke server game, coba {refr}.',
'refr' => 'menyegarkan halaman',
'nsUnpub' => 'Catatan tidak disimpan, peta tidak diterbitkan.',
'nsTspins' => 'Rekaman tidak tersimpan, T-Spin tidak cukup.',
'nsLowPC' => 'Rekaman tidak tersimpan, setidaknya diperlukan 2 Perfect Clears.',
'noBlocks' => 'Blok habis'
'noBlocks2' => 'Semua balok dipakai'
'noPlayers' => 'Tidak ada pemain',
'cntMore' => '{cnt} lagi',
'cntGuests' => '{cnt} tamu',
'cntSpec' => '{cnt} menonton',
'joinPossible' => 'Layak bergabung',
'notEligible' => 'Tidak memenuhi syarat',
'gTimeShort' => 'G.time',
'on' => 'Hidup',
'off' => 'Mati',
'fr' => 'Teman',
'frLoad' => 'Memuat daftar teman',
'frLogin' => 'Masuk terlebih dahulu untuk menggunakan daftar teman.',
'frEmpty' => 'Daftar teman kosong',
'frHowAdd' => 'Visit user\'s profile to send friend request.',
'frPriv' => 'Pribadi',
'frIn' => 'Sudah masuk!',
'frChat' => 'Buka Chat',
'frRel' => 'Muat Ulang',
'frMsgTo' => 'Message to {name}',
'frInv' => 'Kirim undangan kamar',
'frInvTo' => 'Undang untuk gabung {room}',
'frInvIn' => 'Kamu sudah masuk!',
'frInvBy' => 'oleh {user}',
'frOn' => 'ONLINE',
'frOff' => 'OFFLINE',
'frNewChatH' => 'Ini adalah awal dari riwayat obrolan dengan {name}.',
'frWelc' => 'Selamat datang di tab Teman',
'frIntro' => 'Di area ini Anda dapat mengakses daftar teman online, obrolan pribadi, dan undangan ruang',
'frIntro2' => 'Untuk mengirim permintaan pertemanan, kunjungi profil pengguna',
'frIntro3' => 'Untuk mengelola teman, kunjungi {frPage}',
'frPage' => 'Laman teman',
'frIntroCl' => 'Tutup intro',