<link rel="stylesheet" href="style.css">

# lt - coverage report

<table>
<thead>
    <tr>
        <th>File</th>
        <th colspan="2">Translation coverage</th>
    </tr>
</thead>
<tbody>
    <tr><td><a href="#">frontend</a></td><td>57.86%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 57.86%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">game</a></td><td>47.67%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 47.67%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">supporter</a></td><td>100%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 100%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">web</a></td><td>78.99%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 78.99%;"></span>
        </div>
    </td></tr>
</tbody></table>

-----------------------

## Frontend

**Missing in lt/frontend.php:**

```
'pressStart' => 'Press \'New game\' to start',
'mapLoading' => 'Map loading...',
'ren' => 'REN',
'warning2' => 'WARNING',
'connected' => 'Connected',
'client' => 'client',
'notConnected' => 'NOT CONNECTED',
'connLost' => 'Connection lost!',
'lastGame' => 'Last game:',
'roomSettings' => 'Room settings:',
'attack' => 'Attack',
'combo' => 'Combo',
'solid' => 'Solid',
'clear' => 'Clear',
'mode' => 'Mode',
'garbage' => 'Garbage',
'garbageDelay' => 'GarbageDelay',
'messiness' => 'Messiness',
'replay' => 'Replay',
'rep' => 'Rep',
'rec' => 'Rec.',
'enterNullDAS' => 'Enter numeric NullpoMino DAS value:',
'suggestedIs' => 'Suggested DAS is',
'applyConfirm' => 'Apply?',
'invalidDAS' => 'DAS value is invalid, was not changed!',
'settingsChanged' => 'Settings changed during the game. Replay invalidated.',
'segment' => 'Segment',
'duration' => 'Duration',
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
'frInvIn' => 'You are already in!',
```

## Game

**Missing in lt/game.php:**

```
'gameControlsInfo' => 'Click on a text box and press the key you want.',
'touchBtn' => 'Enable on-screen control buttons',
'touchBtnMove' => 'Allow position adjustment by dragging',
'DAS' => 'DAS',
'ARR' => 'ARR',
'grid' => 'Grid',
'ghost' => 'Ghost',
'sprintReset' => 'Sprint reset',
'or' => 'or',
'finFault' => 'Finesse fault',
'altResetKeyInfo' => 'Choose an alternative key to reset a sprint game.',
'gameReset' => 'Game reset',
'altLiveResetKeyInfo' => 'Choose an alternative key to reset a live game.',
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
'cheese' => 'Cheese race',
'freePlay' => 'Free play',
'tsdsCounter' => 'TSDs done',
'pcCounter' => 'Perfect Clears',
'toRestart' => 'to restart',
'lobby' => 'Lobby',
'sent' => 'Sent',
'received' => 'Received',
'PPS' => 'PPS',
'APM' => 'APM',
'KPP' => 'KPP',
'finesse' => 'Finesse',
'default' => 'Default',
'customPreset' => 'Use custom preset',
'browsePresets' => 'Browse custom presets',
'submitPreset' => 'Submit a new one',
'savePreset' => 'Save the preset',
'customRooms' => 'Custom rooms',
'overflowRooms' => 'Overflow rooms',
'guestRooms' => 'Guest rooms',
'spectateRooms' => 'Spectate only rooms',
'gmodeStandard' => 'Standard',
'gmodeCheese' => 'Cheese',
'gmodeTeam' => 'Team',
'isPrivate' => 'Private',
'simple' => 'Simple',
'advanced' => 'Advanced',
'moreSett' => 'More settings',
'attack' => 'Attack',
'gDist' => 'Garbage distribution',
'hdThread' => 'HardDrop thread',
'chatSend' => 'Send',
'survival' => 'Survival',
'mapDownstack' => 'Map downstack',
'ultra' => 'Ultra',
'20TSD' => '20TSD',
'PCmode' => 'PC Mode',
'bots' => 'Bots',
'rulesets' => 'Rulesets',
'all' => 'All',
'preset' => 'Preset',
'audioCredits' => 'Audio Assets by',
'fullScreen' => 'Full screen',
'roomLimits' => 'Room join limits',
'setLimitsInfo' => 'You can set requirements for players joining your room. Leave a field empty for no limit.',
'addLimit' => 'Add join limit',
'teamSel' => 'Team selection',
'myTeam' => 'Playing for',
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

## Web

**Missing in lt/web.php:**

```
'maps' => 'Maps',
'myMaps' => 'My maps',
'mapsDesigner' => 'Map Designer',
'randomMap' => 'Random map',
'favReplays' => 'Favorite replays',
'PPS' => 'PPS',
'finesse' => 'Finesse',
'replay' => 'Replay',
'bestSubs' => 'Best subs',
'perfectFinesse' => '0 finesse',
'scoringPlaylist' => 'Scoring playlist',
'filterSP' => 'Filter scoring playlist',
'action' => 'Action',
'scoreEq' => 'Score equivalent',
'lAVG' => 'Local average',
'gAVG' => 'Global average',
'againPw' => 'Again',
'linesSent' => 'Lines sent',
'linesRec' => 'Lines received',
'APM10Games' => '10-games APM',
'PPS10Games' => '10-games PPS',
'totalB2B' => 'Total B2Bs',
'mostSent' => 'Most sent',
'createdMaps' => 'Created maps',
'viewMapsBy' => 'View all maps created by',
'map' => 'Map',
'mapPlayLink' => 'Play Map',
'backToMaps' => 'Back to maps',
'playThisMap' => 'Play this map',
'mapsByUser' => ':name\'s maps',
'displayUnpublished' => 'Display :cnt unpublished maps',
'displayPublished' => 'Display :cnt published maps',
'usersMapMedals' => ':name\'s map medals',
'usersCompletedMaps' => ':name\'s completed maps',
'latestMapGames' => 'The latest map games',
'improvementInfo' => 'The following graph shows line race time (Y axis) vs game date (X axis). Highlighted line shows improvements in :name\'s personal records. You can place your cursor over any point to show the game details.',
'qSettings' => 'Query settings',
'serverCoverage' => 'Server cost coverage',
'invalidLink' => 'Requested link is invalid.',
'wasteDesc' => 'Ratio of T pieces not used in a T-Spin (to total T pieces)',
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
```

