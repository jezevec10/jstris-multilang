<?php

return [
    //On screen captions
    'ready' => 'CHUẨN BỊ',
    'go' => 'BẮT ĐẦU!',
    'notFocused' => 'Tập trung nào', //max 13 characters
    'clickToFocus' => 'Nhấn vào đây để tiếp tục chơi', //max 30 characters
    'specMode' => 'Chế độ theo dõi',
    'specModeInfo' => 'Bây giờ bạn đang theo dõi',
    'endSpec' => 'Nhập /play để tham gia', //keep '/play'
    'typeHelp' => 'Nhập /help để trợ giúp với những lệnh trong game.', //keep '/help'
    'st' => 'st', //max 2, in 1st, can stay untranslated
    'nd' => 'nd', //max 2, in 2nd, can stay untranslated
    'rd' => 'rd', //max 2, in 3rd, can stay untranslated
    'th' => 'th', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Không chơi', //max 12
    'waitNext' => 'Vui lòng đợi đến cuối vòng',
    'waitNext2' => 'Vui lòng đợi đến vòng tiếp theo',
    'pressStart' => 'Nhấn \'Ván mới\' để bắt đầu', //'New game' should be same as in game.newGame
    'slowDown' => 'CHẬM LẠI', //When a speed limit is exceeded
    'speedLimitIs' => 'Giới hạn tốc độ là', //In a sentence: The speed limit is 2 PPS
    'connecting' => 'Đang kết nối', //when connecting to the game server

    //Chat
    'warning' => 'Chú ý',
    'inactive1' => 'Chế độ theo dõi sẽ được kích hoạt. Nhập trong chat để hủy bỏ.',
    'inactive2' => 'Đã phát hiện treo, game treo tiếp theo sẽ kích hoạt chế độ theo dõi.',
    'nickFill' => 'Nhập tên người dùng để kích hoạt chat',
    'setButton' => 'Đặt', //max 4
    'sendButton' => 'Gửi', //max 4
    'rNameReq' => 'Vui lòng điền tên phòng',
    'newsUser' => 'Mới', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'Khách', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Đang theo dõi', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'đã vào phòng', //in 'User1 joined the room.'
    'joined' => 'đã tham gia', //in title: 'User1 joined!'
    'userCame' => 'đến theo dõi',  //in 'User1 came to watch.'
    'isSpectating' => 'bây giờ đang theo dõi', //in 'User1 is now spectating.'
    'spectator' => 'Người theo dõi',
    'hasLeft' => 'đã rời', //in 'Spectator User1 has left.'
    'signedAs' => 'Bạn đã đăng nhập với tên',
    'welcome' => 'Chào mừng,', //in 'Welcome User1!'
    'welcomeIn' => 'Chào mừng tới', //in 'Welcome in RoomName.'
    'noSpectators' => 'Hiện không có người theo dõi',
    'replayAvailable' => 'Replay được tạo tại',
    'oldVer' => 'Bạn đang dùng phiên bản cũ, nhấn CTRL+F5 để tải lại phiên bản mới',
    'privateRoom' => 'Đây là phòng kín, nơi mà bạn không bị những người khác ngó nhìn. Vào phần Sảnh để xem phòng công khai',
    'restartInfo' =>  'Chơi lại bằng cách nhấn F4 hoặc key tùy chọn.',
    'joinLinkInfo' => 'Đây là phòng kín. Cách duy nhất để rủ người khác vào phòng là dùng đường dẫn này:',

    //Dynamic elements
    'received' => 'Nhận', //max 15
    'finesse' => 'Lỗi di chuyển',   //max 15

    //List of rooms
    'roomName' => 'Tên phòng',
    'games' => 'Số vòng đã chơi', //number of games played in a room
    'players' => 'Số người chơi', //number of players

    //Results
    'name' => 'Tên',
    'wins' => 'Số vòng thắng',
    'time' => 'Thời gian', //as game duration
    'received' => 'Nhận',
    'sent' => 'Gửi',
    'blocks' => 'Số gạch', //as number of blocks placed
    'ren' => 'Combo',

    //Practice mode result
    'gameTime' => 'Thời gian', //in Sprint time: xx.xx
    'see' => 'Xem', //in 'See 40L leaderboard'
    'leaderboard' => 'bảng xếp hạng',

    //Less common strings, can stay untranslated
    'warning2' => 'CHÚ Ý',
    'connected' => 'Đã kết nối',
    'client' => 'client',
    'notConnected' => 'Không có kết nối',
    'connLost' => 'Mất kết nối',
    'lastGame' => 'Ván trước:',
    'roomSettings' => 'Cài đặt phòng:',
    'attack' => 'Tấn công',
    'combo' => 'Combo',
    'solid' => 'Cứng',
    'clear' => 'Đã lấp',
    'mode' => 'Chế độ',
    'garbage' => 'Rác',
    'garbageDelay' => 'Thời gian kéo dài rác',
    'messiness' => 'Độ khó',
    'replay' => 'Replay',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Nhập giá trị Nullpomino DAS:',
    'suggestedIs' => 'DAS được đề nghị là',
    'applyConfirm' => 'Áp dụng?',
    'invalidDAS' => 'Giá trị DAS không phù hợp nên không có thay đổi',
    'settingsChanged' => 'Đã thay đổi cài đặt giữa game. Replay sẽ không được lưu.',
    'segment' => 'Phân khúc',
    'duration' => 'Thời lượng',
];
