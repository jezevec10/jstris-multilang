<link rel="stylesheet" href="style.css">

# vi - coverage report

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
    <tr><td><a href="#">game</a></td><td>95.38%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 95.38%;"></span>
        </div>
    </td></tr>
    <tr><td><a href="#">web</a></td><td>97.24%</td><td>
        <div class="pb">
            <span class="pb-fill" style="width: 97.24%;"></span>
        </div>
    </td></tr>
</tbody></table>

-----------------------

## Game

**Missing in vi/game.php:**

```
'touchBtn' => 'Enable on-screen control buttons',
'touchBtnMove' => 'Allow position adjustment by dragging',
'mLay' => 'Use mobile layout',
'mLayInfo' => 'Change to override mobile detection, requires refresh',
'allSpin' => 'All-spin',
'asImmobile' => 'Immobile',
'as4Point' => '4-point',
'allSpinNA' => 'Excl. blocks',
```

## Web

**Missing in vi/web.php:**

```
'setOther' => 'Other options',
'hideAcc' => 'Hidden account',
'accVisibility' => 'Visibility',
'hideAccInfo' => 'If enabled, the account will be excluded from public leaderboards.',
```

