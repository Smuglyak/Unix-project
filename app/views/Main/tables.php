<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tables</title>
  <link rel="icon" type="image/x-icon" href="/app/images/favicon.png" />
</head>

<body>
  <?php include "header.php" ?>
  <div class="container" style="margin-top: 150px">
    <table>
      <thead>
        <tr>
          <th colspan="2">Hero</th>
          <th>Matches Played</th>
          <th>Pick Rate</th>
          <th>Win Rate</th>
          <th>KDA Ratio</th>
          <th>Hero Type</th>
          <th>Attribute</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <img src="/app/images/Pudge_icon.webp" alt="Pudge_icon" />
          </td>
          <td>Pudge</td>
          <td>4,321,142</td>
          <td>27.74%</td>
          <td>46.81%</td>
          <td>2.09</td>
          <td>Melee</td>
          <td>Strength</td>
        </tr>
        <tr>
          <td><img src="/app/images/Lion_icon.webp" alt="" /></td>
          <td>Lion</td>
          <td>3,267,035</td>
          <td>20.97%</td>
          <td>46.97%</td>
          <td>1.96</td>
          <td>Ranged</td>
          <td>Intelligence</td>
        </tr>
        <tr>
          <td><img src="/app/images/Ogre_Magi_icon.webp" alt="" /></td>
          <td>Ogre Magi</td>
          <td>3,174,510</td>
          <td>20.38%</td>
          <td>52.66%</td>
          <td>2.55</td>
          <td>Melee</td>
          <td>Intelligence</td>
        </tr>
        <tr>
          <td><img src="/app/images/Sniper_icon.webp" alt="" /></td>
          <td>Sniper</td>
          <td>3,145,850</td>
          <td>20.19%</td>
          <td>52.32%</td>
          <td>3.37</td>
          <td>Ranged</td>
          <td>Agility</td>
        </tr>
        <tr>
          <td><img src="/app/images/Phantom_Assassin_icon.webp" alt="" /></td>
          <td>Phantom Assassin</td>
          <td>3,053,060</td>
          <td>19.51%</td>
          <td>49.35%</td>
          <td>2.89</td>
          <td>Melee</td>
          <td>Agility</td>
        </tr>
        <tr>
          <td><img src="/app/images/Juggernaut_icon.webp" alt="" /></td>
          <td>Juggernaut</td>
          <td>2,877,132</td>
          <td>18.39%</td>
          <td>52.99%</td>
          <td>3.22</td>
          <td>Melee</td>
          <td>Agility</td>
        </tr>
        <tr>
          <td><img src="/app/images/Rubick_icon.webp" alt="" /></td>
          <td>Rubick</td>
          <td>2,748,308</td>
          <td>17.56%</td>
          <td>45.97%</td>
          <td>2.49</td>
          <td>Ranged</td>
          <td>Intelligence</td>
        </tr>
        <tr>
          <td><img src="/app/images/Primal_Beast_icon.webp" alt="" /></td>
          <td>Primal Beast</td>
          <td>2,725,696</td>
          <td>17.42%</td>
          <td>47.11%</td>
          <td>2.65</td>
          <td>Melee</td>
          <td>Strength</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td rowspan="2">Heroes <br />MOST PLAYED, THIS MONTH</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tfoot>
    </table>
  </div>
  <?php include "footer.php" ?>
</body>

</html>