<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
    <script src ="script/jquery.3.3.31.js"></script>
    <script src ="script/date_balance.js"></script>
    <script src ="script/callender.js"></script>
  </head>
  <body>
    <div class="headder">
      <h1>タイトル</h1>
    </div>
    <div class="main_container">
      <div class="row"id="row1">
        <h2><span id='year'></span>年<span id='month'></span>月</h2>
        <div id="dates"></div>
        <div class="row1_foot">
          <div class="move"id="mae">
            <p>先月</p>
          </div>
          <div class="move"id="tugi">
            <p>次月</p>
          </div>
        </div>
      </div>
      <div class="row"id="row2">
        <div class="bala">
            <h2><span id='edit_year'></span>年<span id='edit_month'></span>月<span id="edit_date"></span>日</h2>
            <p>収支表</p>
            <ul>
              <?php
                $n = 5;
                for($i=0;$i<$n;$i++){
                  echo "<li>".$i."</li>";
                }
               ?>
            </ul>
            <div class="balance">
                <p>支出<span id="in">10000</span>円</p>
                <p>収入<spna id="out">10000</span>円</p>
              </div>
            <div class="edit">
              <p>カテゴリー選択</p>
              <label><input type="radio" name="category" value="a">カテゴリー</label>
              <label><input type="radio" name="category" value="b">カテゴリー</label>
              <p>収支選択</p>
              <label><input type="radio" name="inOut" value="in">支出</label>
              <label><input type="radio" name="inOut" value="out">収入</label>
              <label><input type="text" name="money" value="">円</label>
              <input type="submit" name="submit">
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="footer">

    </div>
  </body>
</html>
<?php

 ?>
