<?php

return [
    //On screen captions
    'ready' => 'آماده',
    'go' => 'حرکت!',
    'notFocused' => 'خارج از تمرکز', //max 13 characters
    'clickToFocus' => 'برای تمرکز بر بازی اینجا کلیک کنید', //max 30 characters
    'specMode' => 'حالت تماشاچی',
    'specModeInfo' => 'شما اکنون در حالت تماشاچی هستید.',
    'endSpec' => 'برای ملحق شدن به بازی /play را تایپ کنید.', //keep '/play'
    'typeHelp' => 'برای نمایش دستورات /help را تایپ کنید', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'در حال بازی نیستید', //max 12
    'waitNext' => 'تا اتمام این دور صبر کنید',
    'waitNext2' => 'لطفا تا دور بعد صبر کنید',
    'pressStart' => 'برای شروع \'New game\' را بزنید', //'New game' should be same as in game.newGame
    'slowDown' => 'آرام', //When a speed limit is exceeded
    'speedLimitIs' => 'سرعت محدود است به', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'در حال اتصال...', //when connecting to the game server
    'signingIn' => 'در حال وارد شدن',
    'loginFail' => 'ورود به سیستم شکست خورد!',
    'loginFail2' => 'وارد نشدید! شما در حال بازی به عنوان مهمان با نام {name} هستید.',
    'mapLoading' => 'بارگذاری نقشه...',

    //Chat
    'warning' => 'هشدار',
    'inactive1' => 'حالت تماشاچی فعال خواهد شد. برای لغو آن در گفتگو تایپ کنید',
    'inactive2' => 'عدم فعالیت شناسایی شد. در صورت عدم فعالیت مجدد حالت تماشاچی فعال میشود',
    'nickFill' => 'نام کاربریتان را تایپ کنید تا بتوانید گفتگو کنید',
    'setButton' => 'ثبت', //max 4
    'sendButton' => 'فرست', //max 4
    'rNameReq' => 'نام اتاق باید پر شود',
    'newsUser' => 'جدید', //special username in chat
    'serverUser' => 'سرور', //special username in chat
    'noNamed' => 'بی نام', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'تماشاچی ها', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'وارد اتاق شد', //in 'User1 joined the room.'
    'joined' => 'وارد شد', //in title: 'User1 joined!'
    'userCame' => 'برای تماشا آمد',  //in 'User1 came to watch.'
    'isSpectating' => 'اکنون تماشاچی است', //in 'User1 is now spectating.'
    'spectator' => 'تماشاچی ها',
    'hasLeft' => 'خارج شد', //in 'Spectator User1 has left.'
    'signedAs' => 'شما به این عنوان وارد شدید',
    'welcome' => 'خوش آمدید', //in 'Welcome User1!'
    'welcomeIn' => 'خوش آمدید به', //in 'Welcome in RoomName.'
    'noSpectators' => 'هیچکس در حال تماشا نیست.',
    'replayAvailable' => 'بازپخش در درسترس است در',
    'oldVer' => 'شما در نسخه قدیمی هستید، از CTRL+F5 برای بارگذاری نسخه جدید استفاده کنید!',
    'oldVer2' => 'شما هنوز در نسخه قدیمی هستید! از {key} برای بارگذاری استفاده کنید',
    'privateRoom' => 'این اتاق خصوصی شماست که در آن هنگام بازی مورد مزاحمت قرار نمیگیرید. برای دیدن اتاق های عمومی وارد راهرو شوید.',
    'restartInfo' =>  'شروع مجدد با F4. میتوانید دکمه را شخصی سازی کنید',
    'joinLinkInfo' => 'این اتاق خصوصی است. تنها راه ملحق کردن دیگران به اینجا این لینک است:',

    //Dynamic elements
    'received' => 'دریافت شد', //max 15
    'finesse' => 'دقت',   //max 15

    //List of rooms
    'roomName' => 'نام اتاق',
    'games' => 'بازی', //number of games played in a room
    'players' => 'بازیکن', //number of players

    //Results
    'name' => 'نام',
    'wins' => 'برد ها',
    'time' => 'زمان', //as game duration
    'received' => 'دریافت شد',
    'sent' => 'ارسال شد',
    'blocks' => 'مهره', //as number of blocks placed
    'ren' => 'ترکیب',

    //Practice mode result
    'gameTime' => 'زمان', //in Sprint time: xx.xx
    'see' => 'نمایش', //in 'See 40L leaderboard'
    'leaderboard' => 'جدول امتیازات',

    //Less common strings, can stay untranslated
    'warning2' => 'هشدار',
    'connected' => 'متصل شدید',
    'client' => 'مشترک',
    'notConnected' => 'متصل نشدید',
    'connLost' => 'اتصال قطع شد!',
    'lastGame' => 'آخرین بازی:',
    'roomSettings' => 'تنظیمات اتاق:',
    'attack' => 'حمله',
    'combo' => 'ترکیب',
    'solid' => 'جامد',
    'clear' => 'پاکسازی',
    'mode' => 'حالت',
    'garbage' => 'زباله',
    'garbageDelay' => 'تاخیر زباله',
    'messiness' => 'آشفتگی',
    'replay' => 'بازپخش',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'مقدار عددی DAS از Nullpomino را وارد کنید:',
    'suggestedIs' => 'مقدار پیشنهادی DAS',
    'applyConfirm' => 'اعمال؟',
    'invalidDAS' => 'مقدار DAS نامعتبر است و تغییری نکرد!',
    'settingsChanged' => 'تنظیمات حین بازی تغییر کرد. بازپخش نامعتبر شد.',
    'segment' => 'بخش',
    'duration' => 'مدت',
    'roomFull' => 'به نظر این اتاق پر است.',
    'lobbyInfo' => 'این گفتگو با {discord} اشتراک گذاری شده است',
    'newHost' => 'اکنون شما میزبان این اتاق هستید.',
    'badRoom' => 'این اتاق دیگر وجود ندارد، در حال محلق شدن به اتاق پیشفرض',
    'stngsChanged' => 'تنظیمات توسط میزبان تغییر کرد',
    'stngsCustom' => 'تنظیمات سفارشی',
    'aSpec' => 'همیشه در حال تماشا!',
    'aPlay' => 'همیشه در حال بازی!',
    'repFail' => 'ذخیره بازپخش شکست خورد!',
    'repInChat' => 'فایل بازپخش در گفتگو قرار گرفت. برای استفاده متن در کارد را رونوشت و در ویرایشگر متن خود جاگذاری کنید.',
    'repTxtInfo' => 'فایل بازپخش رونوشت شده میتواند در پخش کننده پخش شود و یا مجددا در پایگاه ثبت شود',

    'newPB' => 'بهترین امتیاز شما!',
    'firstPB' => 'این اولین بازیتان بود. یک بهترین امتیاز دیگر بگیرید برای تماشای بهبود بازی.',
    'infoPB' => 'رکورد قبلیتان {prevPB} در {prevAgo} بود. بهبودشما {PBdiff} است',
    'daysAgo' => 'روز پیش',

    'raceFin' => 'مسابقه تمام شد',
    'raceFinInfo' => 'شما میتوانید بازی را تکمیل کنید، اما دور بعدی در هر زمانی میتواند شروع شود',

    'notTSD' => 'NOT TSD',
    'notTSDInfo' => 'فقط تی اسپین دوتایی مجاز است',

    'notPC' => 'NOT a PC',
    'notPCInfo' => 'با هر ۱۰ مهره پاکسازی کامل انجام دهید. صفحه شما قابل پاکسازی نیست',

    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => 'در حال حمله به خود!',

    'oops' => 'اوه!',
    'chatNA' => 'گفتگوی عمومی برای مهمان ها یا کاربران با زیر {chReq} ساعت بازی کردن مجاز نیست.',
    'leMore' => 'بیشتر بیاموزید',

    'connLimit' => 'به حداکثر میزان اتصال آزاد با این آیپی رسیدید. اگر به میزان اتصال بیشتر نیاز دارید با ما در دیسکورد تماس بگیرید.',
    'idleDC' => 'به دلیل عدم فعالیت اتصال قطع شد! قسمت تماشاچی ها پر بود',
    'RLreach' => 'به محدودیت نرخ رسیدید',
    'ban1' => 'دسترسیتان به بازی های زنده موقتا محدود شده. شما همچنان میتوانید تک نفره بازی کنید.',
    'ban2' => 'این حساب کاربری مسدود شده. برای اطلاعات بیشتر مجددا وارد شوید',
    'ncGS' => 'به سرور بازی متصل نیستید، {refr} را امتحان کنید.',
    'refr' => 'بارگذاری مجدد این صفحه',

    'nsUnpub' => 'رکورد ذخیره نشد، این نقشه منتشر نشده است',
    'nsTspins' => 'رکورد ذخیره نشد، نبود تی اسپین کافی',
    'nsLowPC' => 'رکورد ذخیره نشد، حداقل ۲ پاکسازی کامل لازم است',
    'noBlocks' => 'مهره ها تمام شد',
    'noBlocks2' => 'همه مهره ها استفاده شد',

    //Room info detail
    'noPlayers' => 'بدون بازیکن',
    'cntMore' => '{cnt} بیشتر',          //e.g. +10 more
    'cntGuests' => '{cnt} مهمان',      //e.g. +10 guests
    'cntSpec' => '{cnt} تماشاچی',    //e.g. +10 spectating
    'joinPossible' => 'امکان ملحق شدن',
    'notEligible' => 'واجد شرایط نیستید',
    'gTimeShort' => 'G.time',
    'on' => 'روشن',
    'off' => 'خاموش',

    //friends
    'fr' => 'دوستان',
    'frLoad' => 'بارگذاری فهرست دوستان',
    'frLogin' => 'برای استفاده از فهرست دوستان ابتدا وارد شوید',
    'frEmpty' => 'فهرست دوستان خالی اسن',
    'frHowAdd' => 'برای ارسال درخواست دوستی پروفایل کاربر را بازدید کنید',
    'frPriv' => 'شخصی',
    'frIn' => 'از قبل بود!',
    'frChat' => 'بازکردن گفتگو',
    'frRel' => 'بارگذاری مجدد',
    'frMsgTo' => 'ارسال پیام به {name}',  //keep {name}
    'frInv' => 'ارسال دعوتنامه به اتاق',
    'frInvTo' => 'دعوت به {room} شد',
    'frInvIn' => 'شما در اینجا هستید!',
    'frInvBy' => 'توسط {user}',
    'frOn' => 'برخط',
    'frOff' => 'برون خط',
    'frNewChatH' => 'این آغاز تاریخچه گفتگو با {name} است.',
    'frWelc' => 'به برگه دوستان خوش آمدید',
    'frIntro' => 'در این ناحیه میتوانید به فهرست دوستان برخط، گفتگو های خصوصی و دعوت های به اتاق دسترسی پیدا کنید',
    'frIntro2' => 'برای ارسال درخواست دوستی، پروفایل کاربر را بازدید کنید',
    'frIntro3' => 'برای مدیریت دوستان، {frPage} را بازدید کنید',
    'frPage' => 'صفحه دوستان',
    'frIntroCl' => 'بستن مقدمه',
];
