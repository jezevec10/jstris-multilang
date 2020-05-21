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
    'serverUser' => 'Máy chủ', //special username in chat
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
    'privateRoom' => 'Đây là phòng kín, nơi mà bạn không bị những người khác ngó nhìn. Vào phần Sảnh để xem phòng công khai.',
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
    'garbageDelay' => 'Thời gian kéo dài hàng rác',
    'messiness' => 'Độ rải rác',
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
    'signingIn' => 'Đang đăng nhập',
    'loginFail' => 'Đăng nhập thất bại',
    'mapLoading' => 'Đang tải map...',
    'oldVer2' => 'Bạn đang dùng phiên bản cũ, nhấn {key} để tải lại trang.',
    'roomFull' => 'Dường như phòng đã đầy rồi.',
    'lobbyInfo' => 'Đoạn chat này được chia sẻ với {discord}.',
    'newHost' => 'Bạn giờ là chủ phòng',
    'badRoom' => 'Phòng này không còn nữa, sẽ tự động chuyển sang phòng cố định',
    'stngsChanged' => 'Cài đặt đã được thay đổi bởi chủ phòng.',
    'stngsCustom' => 'Cài đặt riêng',
    'aSpec' => 'Bạn đã ở chế độ theo dõi rồi.',
    'aPlay' => 'Bạn đã ở chế độ chơi rồi.',
    'repFail' => 'Không thể lưu replay.',
    'repInChat' => 'Replay được lưu trữ trong chat. Để giữ lại bản replay, copy chuỗi kí tự và dán vào trình biên tập văn bản ưa thích của bạn.',
    'repTxtInfo' => 'Bản copy của replay có thể được phát lại trong máy phát lại trên web hoặc được đăng lại trên trang web.',
    'newPB' => 'KỈ LỤC CÁ NHÂN MỚI',
    'firstPB' => 'Đây là lượt chơi đầu tiên của bạn. Cố gắng phá kỉ lục cá nhân để xem tiến độ của bạn.',
    'infoPB' => 'Kỉ lục cá nhân cũ của bạn là {prevPB} đã đạt vào {prevAgo}. Với độ chênh lệch là {PBdiff}.',
    'daysAgo' => 'ngày trước',
    'raceFin' => 'CUỘC ĐUA ĐÃ KẾT THÚC',
    'raceFinInfo' => 'Bạn có thể hoàn thành map này, nhưng vòng đua tiếp theo có bắt đầu bất kì lúc nào.',
    'notTSD' => 'KHÔNG PHẢI LÀ TSD',
    'notTSDInfo' => 'Chỉ cho phép lấp hàng theo kiểu TSD (T-spin double)',
    'fwDetect' => 'PHÁT HIỆN FOUR WIDE',
    'fwDetectInfo' => 'Four wide sẽ kích hoạt chế độ tấn công ngược.',
    'oops' => 'Ối!',
    'chatNA' => 'Những người chơi với tư cách là khách hoặc người dùng có thời gian chơi dưới {chReq} tiếng sẽ không được dùng chức năng chat công khai.',
    'notPC' => 'KHÔNG PHẢI LÀ PC', 
    'notPCInfo' => 'Mỗi 10 gạch phải có một PC. Bảng của bạn không thể có PC khác.',
    'leMore' => 'Tìm hiểu thêm',
    'connLimit' => 'Số lượng kết nối mở dành cho IP này đã đạt mức tối đa. Nếu bạn muốn mở rộng giới hạn số lượng, liên hệ chúng tôi thông qua Discord',
    'idleDC' => 'Đã ngắt kết nối vì treo. Số lượng người theo dõi đã đầy.',
    'RLreach' => 'Rate limit reached.',
    'ban1' => 'Quyền truy cập của bạn vào chế độ online đã bị giới hạn vô thời hạn. Bạn vẫn có thể chơi trong chế độ offline.',
    'ban2' => 'Tài khoản này đã bị TƯỚC QUYỀN TRUY CẬP. Đăng nhập lại vào trang để biết thêm thông tin chi tiết.',
    'ncGS' => 'Không thể kết nối đến server của game, vui lòng thử {refr}.',
    'refr' => 'tải lại trang',
    'noPlayers' => 'Không có người chơi',
    'cntMore' => 'Cộng {cnt}',
    'cntGuests' => '{cnt} khách',
    'cntSpec' => '{cnt} đang theo dõi',
    'joinPossible' => 'Có thể tham gia',
    'notEligible' => 'Không đạt điều kiện',
    'gTimeShort' => 'T.gian chơi',
    'on' => 'Bật',
    'off' => 'Tắt',
    'nsUnpub' => 'Kết quả không được lưu vì map chưa được công bố.',
    'nsTspins' => 'Kết quả không được lưu, chưa đủ số lượng T-spin',
    'nsLowPC' => 'Kết quả không được lưu, cần ít nhất 2 Perfect Clear',
];
