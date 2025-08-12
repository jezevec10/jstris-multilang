<link rel="stylesheet" href="style.css">

# da - coverage report

<table>
<thead>
    <tr>
        <th>File</th>
        <th colspan="2">Translation coverage</th>
    </tr>
</thead>
<tbody>
    <tr><td><a href="#">frontend</a></td><td>52.2%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 52.2%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">game</a></td><td>57.51%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 57.51%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">supporter</a></td><td>98.21%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 98.21%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">web</a></td><td>59.2%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 59.2%;"></span>
        </div>
    </td></tr>
</tbody></table>

-----------------------

## Frontend

**Missing in da/frontend.php:**

```
'connecting' => 'Connecting...',
'signingIn' => 'Signing in',
'loginFail' => 'Log in failed!',
'loginFail2' => 'Not logged in! You\'re playing as a guest called {name}.',
'mapLoading' => 'Map loading...',
'oldVer2' => 'You still have the old version! Use {key} to reload your client',
'roomFull' => 'It seems the room is full.',
'lobbyInfo' => 'This chat is shared with {discord}.',
'newHost' => 'You are now the host of this room.',
'badRoom' => 'This room no longer exists, joining the Default room!',
'stngsChanged' => 'Setting changed by the host',
'stngsCustom' => 'Custom settings',
'aSpec' => 'Already spectating!',
'aPlay' => 'Already playing!',
'repFail' => 'Replay failed to save.',
'repInChat' => 'Replay file dumped into the chat. To preserve it, copy the text in the box and paste into your favourite text editor.',
'repTxtInfo' => 'The copied replayfile can be then played in the replayer or possibly resubmitted to the site.',
'newPB' => 'YOUR NEW PERSONAL BEST',
'firstPB' => 'This was your first game. Get another PB to track the improvement.',
'infoPB' => 'Your previous record was {prevPB} achieved {prevAgo}. The improvement is {PBdiff}.',
'daysAgo' => 'days ago',
'raceFin' => 'THE RACE HAS FINISHED',
'raceFinInfo' => 'You can complete the run, but the next round can start at any time.',
'notTSD' => 'NOT TSD',
'notTSDInfo' => 'Only T-Spin Double is allowed',
'notPC' => 'NOT a PC',
'notPCInfo' => 'Do a Perfect Clear every 10 blocks. Your board is not clearable.',
'fwDetect' => 'FOUR WIDE',
'fwDetectInfo' => 'Attacking yourself!',
'oops' => 'Oops!',
'chatNA' => 'Public chatting is not available for guests or users with less than {chReq} hours of gametime.',
'leMore' => 'Learn more',
'connLimit' => 'The maximum amount of open connections for this IP is curently reached. If you need increased limits, contact us via Discord',
'idleDC' => 'Disconnected for inactivity! Spectator section was full.',
'RLreach' => 'Rate limit reached.',
'ban1' => 'Your access to the Live games has been permanently restricted. You can still play singleplayer modes.',
'ban2' => 'This user account is BANNED. Relogin to the website for more information.',
'ncGS' => 'Not connected to the game server, try {refr}.',
'refr' => 'refreshing the page',
'nsUnpub' => 'Record not saved, the map is not published.',
'nsTspins' => 'Record not saved, not enough T-Spins.',
'nsLowPC' => 'Record not saved, at least 2 Perfect Clears needed.',
'noBlocks' => 'Out of blocks',
'noBlocks2' => 'All blocks were used',
'noPlayers' => 'No players',
'cntMore' => '{cnt} more',
'cntGuests' => '{cnt} guests',
'cntSpec' => '{cnt} spectating',
'joinPossible' => 'Join possible',
'notEligible' => 'Not eligible',
'gTimeShort' => 'G.time',
'on' => 'On',
'off' => 'Off',
'fr' => 'Friends',
'frLoad' => 'Loading friend list',
'frLogin' => 'Log in first to use friend list',
'frEmpty' => 'Friend list is empty',
'frHowAdd' => 'Visit user\'s profile to send friend request.',
'frPriv' => 'Private',
'frIn' => 'Already in!',
'frChat' => 'Open chat',
'frRel' => 'Reload',
'frMsgTo' => 'Message to {name}',
'frInv' => 'Send room invite',
'frInvTo' => 'Invite to join {room}',
'frInvIn' => 'You are already in!',
'frInvBy' => 'by {user}',
'frOn' => 'ONLINE',
'frOff' => 'OFFLINE',
'frNewChatH' => 'This is the beginning of chat history with {name}.',
'frWelc' => 'Welcome to the Friends tab',
'frIntro' => 'In this area you can access a list of online friends, private chats, and room invites',
'frIntro2' => 'To send a friend request, visit a user\'s profile',
'frIntro3' => 'To manage friends, visit the {frPage}',
'frPage' => 'Friends page',
'frIntroCl' => 'Close intro',
```

## Game

**Missing in da/game.php:**

```
'skin' => 'Skin',
'skin2' => 'Block skin',
'touchBtn' => 'Enable on-screen control buttons',
'touchBtnMove' => 'Allow position adjustment by dragging',
'sound' => 'Sound',
'monochrome' => 'Monochrome',
'enableVSE' => 'Voice comments',
'rotateSE' => 'Sound effect of block rotation',
'DMsound' => 'Direct message notification',
'rescaleNow' => 'Resize multiplayer fields immediately',
'rescaleNowInfo' => 'If unchecked fields of new players will appear next round',
'DAScancel' => 'DAS cancellation',
'DAScancelInfo' => 'If enabled, DAS cancels on direction change',
'FPSDAS' => 'FPS-based DAS',
'FPSDASInfo' => 'Evaluate DAS on fixed intervals (lower timing accuracy)',
'webGL' => 'Use WebGL',
'webGLInfo' => 'Disable this if you aren\'t able to render OpenGL in :year',
'mLay' => 'Use mobile layout',
'mLayInfo' => 'Change to override mobile detection, requires refresh',
'tsdsCounter' => 'TSDs done',
'pcCounter' => 'Perfect Clears',
'KPP' => 'KPP',
'editRoom' => 'Edit',
'savePreset' => 'Save the preset',
'overflowRooms' => 'Overflow rooms',
'guestRooms' => 'Guest rooms',
'spectateRooms' => 'Spectate only rooms',
'gmodeTeam' => 'Team',
'applyCh' => 'Apply changes',
'mapDownstack' => 'Map downstack',
'20TSD' => '20TSD',
'PCmode' => 'PC Mode',
'bots' => 'Bots',
'rulesets' => 'Rulesets',
'audioCredits' => 'Audio Assets by',
'fullScreen' => 'Full screen',
'showHoldQueue' => 'Show H+Q',
'showStats' => 'Show stats',
'roomLimits' => 'Room join limits',
'setLimitsInfo' => 'You can set requirements for players joining your room. Leave a field empty for no limit.',
'addLimit' => 'Add join limit',
's40L' => 'Sprint 40L',
'accGametime' => 'Gametime',
'applyClose' => 'Apply & Close',
'teamSel' => 'Team selection',
'myTeam' => 'Playing for',
'seconds' => 'seconds',
'minutes' => 'minutes',
'hours' => 'hours',
'ms' => 'ms',
's' => 's',
'hrs' => 'hrs',
'attackTable' => 'Attack table',
'comboTable' => 'Combo attack',
'gBlocking' => 'Garbage blocking',
'blocksType' => 'Blocks',
'randomizer' => 'Randomizer',
'previews' => 'Previews',
'solidGarbage' => 'Solid garbage',
'solidGarbageSpeed' => 'Solid g. speed',
'solidAfterSecs' => 'After',
'lockDelay' => 'Lock delay',
'clearDelay' => 'Clear delay',
'speedLimit' => 'Speed limit',
'gravityLvl' => 'Gravity lvl',
'garbageDelay' => 'Garbage Delay',
'garbageMess' => 'Messiness',
'gapWidth' => 'Gap width',
'gInv' => 'Invert garbage',
'solidAtk' => 'Attack as solid',
'allSpin' => 'All-spin',
'asImmobile' => 'Immobile',
'as4Point' => '4-point',
'allSpinNA' => 'Excl. blocks',
'noFW' => 'NoFourwide',
'hostStart' => 'HostStart',
'lines' => 'Lines',
'statistics' => 'Stats',
'vs' => 'VS',
'downstack' => 'garbage downstack',
'wasted' => 'Wasted',
'expand' => 'Expand',
```

## Supporter

**Missing in da/supporter.php:**

```
'supportUs' => 'Support Us',
```

## Web

**Missing in da/web.php:**

```
'randomMap' => 'Random map',
'friends' => 'Friends',
'mostGames' => 'The most games',
'repExport' => 'GIF or video',
'emailChange' => 'Change email',
'currentEmail' => 'Current',
'newEmail' => 'New email',
'continent' => 'Continent',
'userRanking' => 'Ranking stats',
'blockCnt' => ':cnt blocks',
'APM10Games' => '10-games APM',
'PPS10Games' => '10-games PPS',
'createdMaps' => 'Created maps',
'viewMapsBy' => 'View all maps created by',
'playersCount' => 'Players',
'gameResultPosition' => 'Position',
'gameResultRoundTime' => 'Gametime',
'viewAllGamesOf' => 'All games of :mode',
'noGamesOf' => ':name hasn\'t played any games of :mode yet.',
'map' => 'Map',
'mapCreate' => 'Create new',
'mapName' => 'Name',
'mapNameLong' => 'Map name',
'mapDesc' => 'Description',
'mapRules' => 'Rules',
'mapOptions' => 'Options',
'mapPlay' => 'Play',
'mapPlayLink' => 'Play Map',
'mapAuthor' => 'Author',
'mapCreatedBy' => 'Created by',
'backToMaps' => 'Back to maps',
'playThisMap' => 'Play this map',
'search' => 'Search',
'mapsByUser' => ':name\'s maps',
'displayUnpublished' => 'Display :cnt unpublished maps',
'displayPublished' => 'Display :cnt published maps',
'usersMapMedals' => ':name\'s map medals',
'usersCompletedMaps' => ':name\'s completed maps',
'showRecords' => 'Show records',
'details' => 'Details',
'playedBy' => 'Played by',
'latestMapGames' => 'The latest map games',
'translators' => 'Translators',
'moderators' => 'Moderators',
'wasteDesc' => 'Ratio of T pieces not used in a T-Spin (to total T pieces)',
'setOther' => 'Other options',
'hideAcc' => 'Hidden account',
'accVisibility' => 'Visibility',
'hideAccInfo' => 'If enabled, the account will be excluded from public leaderboards.',
'reportU' => 'Report user',
'reportDesc' => ' Here you can create a report if you think someone has abused the game chat.',
'user' => 'User',
'reason' => 'Reason',
'rr0' => 'Spam or unwanted advertising',
'rr1' => 'Sexually explicit content',
'rr2' => 'Hate speech',
'rr3' => 'Harassment or bullying',
'rr4' => 'Other (specify)',
'sendReport' => 'Send report',
'accept' => 'Accept',
'ignore' => 'Ignore',
'pending' => 'Pending Requests',
'frFilter' => 'Filter Names',
'noPending' => 'At the moment you have no pending friend requests.',
'onlineNow' => 'Online now',
'recentlyAc' => 'Recently active',
'lastActive' => 'Active :when',
'noFriends' => 'At the moment your friend list is empty.',
'ruSure' => 'Are you sure?',
'rmFriend' => 'Do you want to remove this person from your friend list?',
'rmConfirm' => 'Yes, remove',
```

