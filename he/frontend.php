<?php

return [
    //On screen captions
    'ready' => '?מוכן',
    'go' => '!התחל',
    'notFocused' => 'לא במשחק', //max 13 characters
    'clickToFocus' => 'לחץ כדי להמשיך במשחק', //max 30 characters
    'specMode' => 'צופה',
    'specModeInfo' => '!אתה נמצא במצב צופה',
    'endSpec' => 'כדי להמשיך במשחק /play נא לרשום', //keep '/play'
    'typeHelp' => 'לרשימת פקודות /help רשום', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'לא במשחק', //max 12
    'waitNext' => 'נא להמתין לסוף הסיבוב',
    'waitNext2' => 'בבקשה המתין לסוף הסיבוב',
    'pressStart' => 'לחץ \'משחק חדש\' כדי להתחיל סיבוב חדש', //'New game' should be same as in game.newGame
    'slowDown' => '!האט', //When a speed limit is exceeded
    'speedLimitIs' => 'המהירות המותרת היא', //In a sentence: The speed limit is 2 PPS
    'connecting' => '...מתחבר', //when connecting to the game server
    'signingIn' => 'נכנס',
    'loginFail' => '!כניסה נכשלה',
    'loginFail2' => ' {name} אתה לא מחובר! הינך אורח בשם',
    'mapLoading' => '...טוען מפה',

    //Chat
    'warning' => 'הזהרה',
    'inactive1' => 'מצב צופה יופעל. נא לכתוב בצ\'אט לביטול',
    'inactive2' => 'אי פעילות זוהתה, משחק הבא יופעל במצב צופה',
    'nickFill' => '!נא כתוב את שימך בשביל לכתוב בצ\'אט',
    'setButton' => 'קבע', //max 4
    'sendButton' => 'שלח', //max 4
    'rNameReq' => '!על שם החדר להיות מלא',
    'newsUser' => 'חדש', //special username in chat
    'serverUser' => 'שרת', //special username in chat
    'noNamed' => 'ללא-שם', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'צופים', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'הצטרף לחדר', //in 'User1 joined the room.'
    'joined' => 'הצטרף', //in title: 'User1 joined!'
    'userCame' => 'הצטרף כדי לצפות',  //in 'User1 came to watch.'
    'isSpectating' => 'עכשיו במצב צופה', //in 'User1 is now spectating.'
    'spectator' => 'צופה',
    'hasLeft' => 'יצא', //in 'Spectator User1 has left.'
    'signedAs' => 'אתה עכשיו הצטרפת בתור',
    'welcome' => ',ברוכים הבאים', //in 'Welcome User1!'
    'welcomeIn' => 'ברוך הבא לחדר', //in 'Welcome in RoomName.'
    'noSpectators' => '.אין צופים כעת',
    'replayAvailable' => '-צפיה חוזרת אפשרית ב',
    'oldVer' => '.כדי להמשיך CTRL+F5 אתה משתמש בגירסה ישנה! לחץ',
    'oldVer2' => ' .כדי להמשיך {key} אתה עדיין משתמש בגירסה ישנה! לחץ',
    'privateRoom' => '.הינך בחדר פרטי, לא יוכלו להצטרף אליך. לחץ על מבואה כדי להמשיך',
    'restartInfo' =>  ' או בכפתור אחר לבחריתך F4התחל מחדש ב',
    'joinLinkInfo' => ':הינך בחדר פרטי, אנשים יכולים להצטרף לכאן רק בעזרת הקישור הבא',

    //Dynamic elements
    'received' => 'התקבל', //max 15
    'finesse' => 'תחכום',   //max 15

    //List of rooms
    'roomName' => 'שם החדר',
    'games' => 'מס\' משחקים', //number of games played in a room
    'players' => 'שחקנים', //number of players

    //Results
    'name' => 'שם',
    'wins' => 'ניצחונות',
    'time' => 'זמן', //as game duration
    'received' => 'התקבלו',
    'sent' => 'נשלחו',
    'blocks' => 'חתיכות', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'זמן המשחק', //in Sprint time: xx.xx
    'see' => 'צפה', //in 'See 40L leaderboard'
    'leaderboard' => 'לוח',

    //Less common strings, can stay untranslated
    'warning2' => 'הזהרה',
    'connected' => 'התחברות',
    'client' => 'משתמש',
    'notConnected' => 'לא מחובר',
    'connLost' => '!חיבור נכשל',
    'lastGame' => '!משחק אחרון',
    'roomSettings' => '!הגדרות חדר',
    'attack' => 'מתקפה',
    'combo' => 'קומבו',
    'solid' => 'קשיח',
    'clear' => 'ניקוי',
    'mode' => 'מצב',
    'garbage' => 'זבל',
    'garbageDelay' => 'זבל מאוחר',
    'messiness' => 'אי סדר',
    'replay' => 'צפה מחדר',
    'rep' => 'צפ"ח', //max 3, short for Replay
    'rec' => 'צלם', //max 4, short for Received
    'enterNullDAS' => 'הכנס ערך NullpoMino DAS מספרי:',
    'suggestedIs' => 'DAS מומלץ ',
    'applyConfirm' => '?אשר',
    'invalidDAS' => '!לא חוקי, לא השתנה DAS ערך',
    'settingsChanged' => 'הגדרות שונו בזמן משחק, הקלטה בוטלה',
    'segment' => 'חלק',
    'duration' => 'אורך זמן',
    'roomFull' => 'החדר שהינך מנסה להיכנס אליו מלא',
    'lobbyInfo' => '{discord} הצ\'אט הזה משוטף עם',
    'newHost' => 'אתה מנהל החדר',
    'badRoom' => 'החדר לא קיים, נכנס לחדר מרכזי',
    'stngsChanged' => 'הגדרות שונו על ידי מנהל החדר',
    'stngsCustom' => 'הגדרות מיוחדות',
    'aSpec' => '!כבר צופה',
    'aPlay' => '!כבר משחק',
    'repFail' => '!לא ניתן לשמור צפיה חוזרת',
    'repInChat' => 'קובץ צפיה חוזרת נשלח לצ\'אט כדי לצפות בוא השתמש הדבק אותו בתוך העורך המועדף על ידך',
    'repTxtInfo' => 'קובץ הצפיה יכול להיות מודבק בצופה או להישלח לאתר',

    'newPB' => '!שיא חדש',
    'firstPB' => '!זה המשחק הראשון שלך, שחק שוב כדי לשפר את הציון',
    'infoPB' => 'הציון האחרון שלך היה {prevPB} שהתקבל {prevAgo}. ההתקדמות {PBdiff}.', 
    'daysAgo' => 'ימים אחרונים',

    'raceFin' => '!המרוץ נגמר',
    'raceFinInfo' => 'אתה יכול לסיים את המשחק אבל הסיבוב עלול להתחיל בכול רגע',

    'notTSD' => 'לא TSD',
    'notTSDInfo' => 'מורשים TSD רק',

    'notPC' => 'לא מחשב',
    'notPCInfo' => 'עשה ניקוי מושלם כל 10 בלוקים. הלוח לא ניתן לניקוי.', 

    'fwDetect' => 'ארבעה לאורך',
    'fwDetectInfo' => 'תקיפה עצמית!',

    'oops' => '!אופס',
    'chatNA' => 'צ\'אט פומבי לא זמין עבור שחקנים ומשתמשים עם פחות מ{chReq} שעות משחק.', 
    'leMore' => '!קרא עוד',

    'connLimit' => 'כמות החיבורים עבור IP זה הגיע לשיא. אנא צור קשר איתנו בדיסקורד עבור חיבורים נוספים!',
    'idleDC' => 'היתנקת עקב אי פעילות! חדר הצופים מלא.',
    'RLreach' => 'מכסא המהירות הגיע לשיאו.',
    'ban1' => 'גישתך למשחקי רשת הוגבלה. אתה עדיין יכול לשחק לבד.',
    'ban2' => 'משתמש זה קיבל באן. התחבר מחדש לאתר עבור עוד אינפורמציה.',
    'ncGS' => 'לא מחובר לשרת משחקים, נסה {refr}.',
    'refr' => 'מרענן את הדף',

    'nsUnpub' => 'הקלטה לא נשמרה, מפה לא מפורסמת.',
    'nsTspins' => 'הקלטה לא נשמרה, לא מספיק T-spins.',
    'nsLowPC' => 'הקלטה לא נשמרה, לפחות שתי נקיונות מושלמים נדרשים.',

    //Room info detail
    'noPlayers' => 'ללא שחקנים',
    'cntMore' => '{cnt} עוד',          //e.g. +10 more
    'cntGuests' => 'אורחים {cnt} ',      //e.g. +10 guests
    'cntSpec' => ' צופים {cnt}',    //e.g. +10 spectating
    'joinPossible' => 'הצטרפות זמינה',
    'notEligible' => 'לא זמין',
    'gTimeShort' => 'G.time',
    'on' => 'דולק',
    'off' => 'כבוי',
];
