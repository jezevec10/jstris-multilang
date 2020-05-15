<link rel="stylesheet" href="style.css">

# cs - coverage report

<table>
<thead>
    <tr>
        <th>File</th>
        <th colspan="2">Translation coverage</th>
    </tr>
</thead>
<tbody>
    <tr><td><a href="#">frontend</a></td><td>95.52%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 95.52%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">game</a></td><td>97.19%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 97.19%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">web</a></td><td>93.55%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 93.55%;"></span>
        </div>
    </td></tr>
</tbody></table>

-----------------------

## Frontend

**Missing in cs/frontend.php:**

```
'loginFail2' => 'Not logged in! You\'re playing as a guest called {name}.',
'notPC' => 'NOT a PC',
'notPCInfo' => 'Do a Perfect Clear every 10 blocks. Your board is not clearable.',
'nsUnpub' => 'Record not saved, the map is not published.',
'nsTspins' => 'Record not saved, not enough T-Spins.',
'nsLowPC' => 'Record not saved, at least 2 Perfect Clears needed.',
```

## Game

**Missing in cs/game.php:**

```
'sound' => 'Sound',
'enableVSE' => 'Voice comments',
'rotateSE' => 'Sound effect of block rotation',
'pcCounter' => 'Perfect Clears',
'PCmode' => 'PC Mode',
```

## Web

**Missing in cs/web.php:**

```
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

