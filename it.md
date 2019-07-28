<link rel="stylesheet" href="style.css">

# it - coverage report

<table>
<thead>
    <tr>
        <th>File</th>
        <th colspan="2">Translation coverage</th>
    </tr>
</thead>
<tbody>
    <tr><td><a href="#">frontend</a></td><td>65.32%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 65.32%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">game</a></td><td>58.64%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 58.64%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">web</a></td><td>53.19%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 53.19%;"></span>
        </div>
    </td></tr>
</tbody></table>

-----------------------

## Frontend

**Missing in it/frontend.php:**

```
'slowDown' => 'SLOW DOWN',
'speedLimitIs' => 'The speed limit is',
'connecting' => 'Connecting...',
'signingIn' => 'Signing in',
'loginFail' => 'Log in failed!',
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
'repInChat' => 'Replayfile dumped into the chat. To preserve it, copy the text in the box and paste into your favourite text editor.',
'repTxtInfo' => 'The copied replayfile can be then played in the replayer or possibly resubmitted to the site.',
'newPB' => 'YOUR NEW PERSONAL BEST',
'firstPB' => 'This was your first game. Get another PB to track the improvment.',
'infoPB' => 'Your previous record was {prevPB} achieved {prevAgo}. The improvement is {PBdiff}.',
'daysAgo' => 'days ago',
'raceFin' => 'THE RACE HAS FINISHED',
'raceFinInfo' => 'You can complete the run, but the next round can start at any time.',
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
'noPlayers' => 'No players',
'cntMore' => '{cnt} more',
'cntGuests' => '{cnt} guests',
'cntSpec' => '{cnt} spectating',
'joinPossible' => 'Join possible',
'notEligible' => 'Not eligible',
'gTimeShort' => 'G.time',
'on' => 'On',
'off' => 'Off',
```

## Game

**Missing in it/game.php:**

```
'ARR' => 'ARR',
'monochrome' => 'Monochrome',
'SEvol' => 'SE volume',
'rescaleNow' => 'Resize multiplayer fields immediately',
'rescaleNowInfo' => 'If unchecked fields of new players will appear next round',
'DAScancel' => 'DAS cancellation',
'DAScancelInfo' => 'If enabled, DAS cancels on direction change',
'FPSDAS' => 'FPS-based DAS',
'FPSDASInfo' => 'Evaluate DAS on fixed intervals (lower timing accuracy)',
'webGL' => 'Use WebGL',
'trem' => 'time remaining',
'score' => 'Score',
'KPP' => 'KPP',
'editRoom' => 'Edit',
'usePreset' => 'Use preset',
'default' => 'Default',
'defaultDesc' => 'The default settings',
'otherOptions' => 'Other options',
'customPreset' => 'Use custom preset',
'browsePresets' => 'Browse custom presets',
'submitPreset' => 'Submit a new one',
'savePreset' => 'Save the preset',
'customRooms' => 'Custom rooms',
'overflowRooms' => 'Overflow rooms',
'spectateRooms' => 'Spectate only rooms',
'gmodeTeam' => 'Team',
'applyCh' => 'Apply changes',
'survival' => 'Survival',
'mapDownstack' => 'Map downstack',
'ultra' => 'Ultra',
'all' => 'All',
'preset' => 'Preset',
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
'solidAfterSecs' => 'After',
'lockDelay' => 'Lock delay',
'clearDelay' => 'Clear delay',
'speedLimit' => 'Speed limit',
'gravityLvl' => 'Gravity lvl',
'garbageDelay' => 'Garbage Delay',
'garbageMess' => 'Messiness',
'solidAtk' => 'Attack as solid',
'noFW' => 'NoFourwide',
'hostStart' => 'HostStart',
```

## Web

**Missing in it/web.php:**

```
'maps' => 'Maps',
'mapsBrowse' => 'Browse',
'myMaps' => 'My maps',
'mapsDesigner' => 'Map Designer',
'randomMap' => 'Random map',
'mapsLatestGames' => 'Latest games',
'guide' => 'Guide',
'favReplays' => 'Favorite replays',
'perfectFinesse' => '0 finesse',
'lines' => 'Lines',
'scoringPlaylist' => 'Scoring playlist',
'filterSP' => 'Filter scoring playlist',
'applyFilter' => 'Apply filter',
'timestamp' => 'Timestamp',
'action' => 'Action',
'scoreEq' => 'Score equivalent',
'position' => 'Position',
'lAVG' => 'Local average',
'gAVG' => 'Global average',
'repHelp' => 'Help',
'repExport' => 'GIF or video',
'localSettings' => 'Localization settings',
'lang' => 'Language',
'langNone' => 'None (selectable in the top menu)',
'langDesc' => 'Select the preferred language.',
'timezone' => 'Timezone',
'timezoneDesc' => 'Used to convert time into your local time.',
'country' => 'Country',
'continent' => 'Continent',
'countryDesc' => 'Used to display per-country leader boards.',
'blockCnt' => ':cnt blocks',
'APM10Games' => '10-games APM',
'PPS10Games' => '10-games PPS',
'createdMaps' => 'Created maps',
'viewMapsBy' => 'View all maps created by',
'playersCount' => 'Players',
'gameResultPosition' => 'Position',
'gameResultRoundTime' => 'Gametime',
'viewAllGamesOf' => 'View all games of :mode',
'noGamesOf' => ':name hasn't played any games of :mode yet.',
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
'mapsByUser' => ':name's maps',
'displayUnpublished' => 'Display :cnt unpublished maps',
'displayPublished' => 'Display :cnt published maps',
'usersMapMedals' => ':name's map medals',
'usersCompletedMaps' => ':name's completed maps',
'showRecords' => 'Show records',
'details' => 'Details',
'playedBy' => 'Played by',
'latestMapGames' => 'The latest map games',
'changelog' => 'Changelog',
'translators' => 'Translators',
'moderators' => 'Moderators',
```

