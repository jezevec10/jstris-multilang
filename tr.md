<link rel="stylesheet" href="style.css">

# tr - coverage report

<table>
<thead>
    <tr>
        <th>File</th>
        <th colspan="2">Translation coverage</th>
    </tr>
</thead>
<tbody>
    <tr><td><a href="#">frontend</a></td><td>88.81%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 88.81%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">game</a></td><td>72.47%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 72.47%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">web</a></td><td>88.39%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 88.39%;"></span>
        </div>
    </td></tr>
</tbody></table>

-----------------------

## Frontend

**Missing in tr/frontend.php:**

```
'connecting' => 'Connecting...',
'signingIn' => 'Signing in',
'loginFail' => 'Log in failed!',
'loginFail2' => 'Not logged in! You\'re playing as a guest called {name}.',
'mapLoading' => 'Map loading...',
'oldVer2' => 'You still have the old version! Use {key} to reload your client',
'notTSD' => 'NOT TSD',
'notTSDInfo' => 'Only T-Spin Double is allowed',
'notPC' => 'NOT a PC',
'notPCInfo' => 'Do a Perfect Clear every 10 blocks. Your board is not clearable.',
'fwDetect' => 'FOUR WIDE',
'fwDetectInfo' => 'Attacking yourself!',
'nsUnpub' => 'Record not saved, the map is not published.',
'nsTspins' => 'Record not saved, not enough T-Spins.',
'nsLowPC' => 'Record not saved, at least 2 Perfect Clears needed.',
```

## Game

**Missing in tr/game.php:**

```
'touchBtn' => 'Enable on-screen control buttons',
'touchBtnMove' => 'Allow position adjustment by dragging',
'sound' => 'Sound',
'monochrome' => 'Monochrome',
'enableVSE' => 'Voice comments',
'rotateSE' => 'Sound effect of block rotation',
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
'spectateRooms' => 'Spectate only rooms',
'gmodeTeam' => 'Team',
'applyCh' => 'Apply changes',
'20TSD' => '20TSD',
'PCmode' => 'PC Mode',
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
'allSpin' => 'All-spin',
'asImmobile' => 'Immobile',
'as4Point' => '4-point',
'allSpinNA' => 'Excl. blocks',
```

## Web

**Missing in tr/web.php:**

```
'continent' => 'Continent',
'blockCnt' => ':cnt blocks',
'APM10Games' => '10-games APM',
'PPS10Games' => '10-games PPS',
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
```

