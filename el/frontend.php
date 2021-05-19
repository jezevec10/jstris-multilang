<?php

return [
    //On screen captions
    'ready' => 'Έτοιμαστείτε',
    'go' => 'Πάμε!',
    'notFocused' => 'Έκτός εστίασης', //max 13 characters //ΤΣΕΚΑΡΕ ΤΟ
    'clickToFocus' => 'Πατήστε εδώ για εστίαση', //max 30 characters
    'specMode' => 'Λειτουργία θεατή',
    'specModeInfo' => 'Είστε σε λειτουργία θεατή αυτή τη στιγμή.',
    'endSpec' => 'Πληκτρολογήστε /play για να παίξετε στο παιχνίδι', //keep '/play'
    'typeHelp' => 'Πληκτρολογήστε /help για να δείτε τις διαθέσιμες εντολές.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Δεν παίζετε', //max 12
    'waitNext' => 'Περιμένετε μέχρι να τελειώσει ο γύρος',
    'waitNext2' => 'Παρακαλώ περιμένετε για τον επόμενο γύρο',
    'pressStart' => 'Πατήστε \'Νεο παιχνίδι\' για να ξεκινήσετε', //'New game' should be same as in game.newGame
    'slowDown' => 'Χαμηλώστε ταχύτητα', //When a speed limit is exceeded
    'speedLimitIs' => 'Το όριο της ταχύτητας είναι', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Σύνδεση...', //when connecting to the game server
    'signingIn' => 'Είσοδος',
    'loginFail' => 'Η σύνδεση απέτυχε',
    'loginFail2' => 'Μη συνδεδεμένος! Παίζετε ως επισκέπτης ονόματι {name}.',
    'mapLoading' => 'Φόρτωση χάρτη...',

    //Chat
    'warning' => 'Προσοχή',
    'inactive1' => 'Ενεργοποίηση λειτουργείας θεατή. Πληκτρολογείστε στη συνομιλία για ακύρωση.',
    'inactive2' => 'Εντοπισμός αδράνεια, στο επόμενο αδρανές παιχνίδι θα ενεργοποιηθεί η λειτουργεία θεατή.',
    'nickFill' => 'Πληκτρολογήστε το ψευδώνυμο σας για να μπορέσετε να συνομιλήσετε!',
    'setButton' => 'Θέσε', //max 4
    'sendButton' => 'Αποστολή', //max 4
    'rNameReq' => 'Πρέπει να συμπληρωθεί το όνομα του δωματίου!',
    'newsUser' => 'News', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'NoNamed', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Παρακολουθούν', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'ήρθε στο δωμάτιο', //in 'User1 joined the room.'
    'joined' => 'ήρθε', //in title: 'User1 joined!'
    'userCame' => 'ήρθε να παρακολουθήσει',  //in 'User1 came to watch.'
    'isSpectating' => 'παρακολουθεί τώρα', //in 'User1 is now spectating.'
    'spectator' => 'θεατής',
    'hasLeft' => 'έφυγε', //in 'Spectator User1 has left.'
    'signedAs' => 'Είστε συνδεδεμένος ως ',
    'welcome' => 'Καλώς ήρθατε,', //in 'Welcome User1!'
    'welcomeIn' => 'Καλώς ήρθατε στο ', //in 'Welcome in RoomName.'
    'noSpectators' => 'Κανείς δεν παρακολουθεί αυτή τη στιγμή.',
    'replayAvailable' => 'Το ριπλέι είναι διαθέσιμοσ στο',
    'oldVer' => 'Έχετε παλαιότερη έκδοση, πατήστε Ctrl+F5 για να φορτώσετε τη νέα έκδοση!',
    'oldVer2' => 'Έχετε ακόμα την παλιά έκδοση! Πατήστε {key} για να φορτώσετε το client',
    'privateRoom' => 'Αυτό είναι το ιδιωτικό δωμάτιο σας δεν θα σας ενοχλήσει κανείς όσο παίζετε. Επισκεφτείτε το λόμπι για να δείτε τα δημόσια δωμάτια.',
    'restartInfo' =>  'Επανεκκίνηση με F4 ή θέστε εσείς ένα πλήκτρο.',
    'joinLinkInfo' => 'Ιδιωτικό δωμάτιο. Μπορεί να συμμετάσχει κανείς μόνο με αυτό τον σύνδεσμο:',

    //Dynamic elements
    'received' => 'Δεχθήκατε', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => 'Όνομα δωματίου',
    'games' => 'Παιχνίδια', //number of games played in a room
    'players' => 'Παίκτες', //number of players

    //Results
    'name' => 'Όνομα',
    'wins' => 'Νίκες',
    'time' => 'Χρόνος', //as game duration
    'received' => 'Δέχθηκε',
    'sent' => 'Έστειλε',
    'blocks' => 'Μπλοκς', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'Χρόνος', //in Sprint time: xx.xx
    'see' => 'Δες', //in 'See 40L leaderboard'
    'leaderboard' => 'Κατάταξη',

    //Less common strings, can stay untranslated
    'warning2' => 'ΠΡΟΣΟΧΉ',
    'connected' => 'Συνδεδεμένος',
    'client' => 'client',
    'notConnected' => 'Μη συνδεδεμένος',
    'connLost' => 'Χάθηκε η σύνδεση!',
    'lastGame' => 'Τελευταίο παιχνίδι:',
    'roomSettings' => 'Ρυθμίσεις δωματίου:',
    'attack' => 'Επίθεση',
    'combo' => 'Combo',
    'solid' => 'Solid',
    'clear' => 'Clear',
    'mode' => 'Λειτουργία',
    'garbage' => 'Σκουπίδια',
    'garbageDelay' => 'Καθυστέρηση σκουπιδιών',
    'messiness' => 'Messiness',
    'replay' => 'Επανάληψη',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Εισάγετε αριθμητική NullpoMino DAS τιμή:',
    'suggestedIs' => 'Προτεινόμενο DAS',
    'applyConfirm' => 'Εφαρμογή?',
    'invalidDAS' => 'DAS τιμή μη έγκυρη, δεν αλλάχτηκε!',
    'settingsChanged' => 'Οι ρυθμίσεις άλλαξαν κατά την διάρκεια του παιχνιδιού. Μη έγκυρο ριπλέι.',
    'segment' => 'Τμήμα',
    'duration' => 'Διάρκεια',
    'roomFull' => 'Φαίνεται πως το δωμάτιο είναι πλήρες.',
    'lobbyInfo' => 'Αυτή η συνομιλία μοιράζεται στο {discord}.',
    'newHost' => 'Είστε ο οικοδεσπότης του δωματίου τώρα.',
    'badRoom' => 'Αυτό το δωμάτιο δεν υπάρχει πια, συμμετέχετε στο προκαθορισμένο δωμάτιο!',
    'stngsChanged' => 'Οι ρυθμίσεις άλλαξαν από τον οικοδεσπότη.',
    'stngsCustom' => 'Προσαρμοσμένες ρυθμίσεις',
    'aSpec' => 'Παρακολουθείτε ΄δη!',
    'aPlay' => 'Παίζετε ήδη!',
    'repFail' => 'Αποτυχία αποθήκευσης ριπλέι.',
    'repInChat' => 'Το αρχείο αναπαραγωγής απορρίφθηκε στη συζήτηση. Για να το διατηρήσετε, αντιγράψτε το κείμενο στο πλαίσιο και επικολλήστε το στο αγαπημένο σας πρόγραμμα επεξεργασίας κειμένου.',
    'repTxtInfo' => 'Το αντιγραφόμενο replayfile μπορεί στη συνέχεια να αναπαραχθεί στον replayer ή ενδεχομένως να υποβληθεί ξανά στον ιστότοπο..',

    'newPB' => 'ΤΟ ΝΕΟ ΠΡΟΣΩΠΙΚΟ ΣΟΥ ΡΕΚΟΡ',
    'firstPB' => 'Αυτό ήταν το πρώτο σας παιχνίδι. Αποκτήστε νέο ρεκορ για να παρακολουθείτε τη βελτίωση.',
    'infoPB' => 'Το προηγούμενο ρεκόρ σας ήταν {prevPB} επιτεύχθηκε {prevAgo}. Η βελτίωση είναι {PBdiff}.',
    'daysAgo' => 'μέρες πριν',

    'raceFin' => 'Ο ΑΓΩΝΑΣ ΤΕΛΕΙΩΣΕ',
    'raceFinInfo' => 'Μπορείτε να ολοκληρώσετε τον γύρο, αλλά ο επόμενος μπορεί να ξεκινήσει ανά πάσα στιγμή.',

    'notTSD' => 'ΟΧΙ TSD',
    'notTSDInfo' => 'Μόνο T-Spin Double επιτρέπεται',

    'notPC' => 'OXI PC',
    'notPCInfo' => 'Κάντε τέλειο καθάρισμα ανά 10 μπλοκς. Το ταμπλό σας δεν μπορεί να καθαριστεί.',

    'fwDetect' => 'FOUR WIDE',
    'fwDetectInfo' => 'Επιτίθεστε στον εαυτό σας!',

    'oops' => 'Ουπς!',
    'chatNA' => 'Το δημόσιο τσατ δεν είναι διαθέσιμο για επισκέπτες ή χρήστες με λιγότερο από {chReq} ώρες παιχνιδιού.',
    'leMore' => 'Μαθετε περισσότερα',

    'connLimit' => 'Ο μέγιστος αριθμός ανοιχτών συνδέσεων για τη συγκέκριμενη διέυθυνση IP έχει επιτευχθεί. Αν επιθυμείτε να αυξήσετε το όριο, επικοινωνίστε μαζί μας μέσω Discord',
    'idleDC' => 'Αποσυύδεση για αδράνεια! Η λειτουργεία θεατή είναι γεμάτη.',
    'RLreach' => 'Όριο αξιολόγησης επιτεύχθηκε.',
    'ban1' => 'Η πρόσβαση σας στα ζωντανά παιχνίδια έχει περιοριστεί μόνιμα. Μπορείτε ακόμη να παίξετε τις λειτουργίες ενός παίκτη.',
    'ban2' => 'Ο λογαριασμός αυτού του χρήστη έχει ΜΠΑΝ. Επανασυνδεθείτε στην ιστοσελίδα για περισσότερες πληροφορίες.',
    'ncGS' => 'Μη συνδεδεμένος στον διακομιστή του παιχνιδιού, προσπαθήστε {refr}.',
    'refr' => 'επαναφόρτωση σελίδας',

    'nsUnpub' => 'Το ρεκόρ δεν αποθηκεύτηκε, ο χάρτης δεν είναι δημοσιευμένος.',
    'nsTspins' => 'Το ρεκόρ δεν αποθηκεύτηκε, όχι αρκετά T-Spins.',
    'nsLowPC' => 'Το ρεκόρ δεν αποθηκεύτηκε, χρειάζονται τουλάχιστον 2 τέλεια καθαρίσματα.',
    'noBlocks' => 'Τελος τούβλων',
    'noBlocks2' => 'Όλα τα τούβλα χρησιμοποιήθηκαν',

    //Room info detail
    'noPlayers' => 'Χωρίς παίκτες',
    'cntMore' => '{cnt} επιπλέον',          //e.g. +10 more
    'cntGuests' => '{cnt} επισκέπτες',      //e.g. +10 guests
    'cntSpec' => '{cnt} παρακολουθούν',    //e.g. +10 spectating
    'joinPossible' => 'Εφικτή η συμμετοχή',
    'notEligible' => 'Δεν έχετε το δικαίωμα',
    'gTimeShort' => 'G.time',
    'on' => 'On',
    'off' => 'Off',

    //friends
    'fr' => 'Φίλοι',
    'frLoad' => 'Φόρτωση λίστα φίλων',
    'frLogin' => 'Συνδεθείτε πρώτα για να χρησιμοποιήσετε την λίστα φίλων',
    'frEmpty' => 'Η λίστα φίλων είναι κενή',
    'frHowAdd' => 'Επισκεφτείτε το προφιλ του χρήστη για να στείλετε αίτημα φιλίας.',
    'frPriv' => 'Ιδιωτικό',
    'frIn' => 'Ήδη μέσα!',
    'frChat' => 'Άνοιγμα συνομιλίας',
    'frRel' => 'Επαναφόρτωση',
    'frMsgTo' => 'Αποστολή μηνύματος σε {name}',  //keep {name}
    'frInv' => 'Αποστολή πρόσκλησης στο δωμάτιο',
    'frInvTo' => 'Πρόσκληση για συμμετοχή στο {room}',
    'frInvIn' => 'Είστε ήδη μέσα!',
    'frInvBy' => 'από {user}',
    'frOn' => 'ΕΝΕΡΓΟΙ',
    'frOff' => 'ΑΝΕΝΕΡΓΟΙ',
    'frNewChatH' => 'Αρχή συνομιλίας με {name}.',
    'frWelc' => 'Καλώς ορίσατε στην καρτέλα φίλοι',
    'frIntro' => 'Εδώ έχετε πρόσβαση στην λίστα των ενεργών σας φίλων, ιδιωτικές συνομιλίες, και προσκλήσεις σε δωμάτια',
    'frIntro2' => 'Για να στείλετε αίτημα φιλίας, επισκεφτείτε το προφίλ ενός χρήστη',
    'frIntro3' => 'Για επεξεργασία της λίστας φίλων, επισκεφτείτε τη {frPage}',
    'frPage' => 'σελίδα φίλων',
    'frIntroCl' => 'Κλείσιμο εισαγωγής',
];

