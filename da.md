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
    <tr><td><a href="#">frontend</a></td><td>100%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 100%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">game</a></td><td>57.51%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 57.51%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">supporter</a></td><td>100%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 100%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">web</a></td><td>71.43%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 71.43%;"></span>
        </div>
    </td></tr>
</tbody></table>

-----------------------

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

## Web

**Missing in da/web.php:**

```
'randomMap' => 'Random map',
'friends' => 'Friends',
'mostGames' => 'The most games',
'repExport' => 'GIF or video',
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

