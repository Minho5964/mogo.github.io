<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <title>한강 수온 - minhoo.ga</title>
    <style>
      body {
        background: #196cff;
        overflow-y: hidden;
      }
      .absolute-center {
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
      }
      .white {
        color: white;
        text-align: center;
        font-size: 20pt;
      }
    </style>
  </head>
  <body>
    <div class="absolute-center">
      <p class="white">현재 한강 수온 : 
        <?php
          function getHanTemp() {
            $html = file_get_contents('http://hangang.dkserver.wo.tc/');
            $obj = json_decode(strip_tags($html));
            $result = array(
              'temp' => $obj->temp,
              'time' => $obj->time
            );
            return $result;
          }
          $han = getHanTemp();
          echo '<span style="font-size:30pt;">'.$han['temp'].'°C</span>';
          echo '<br/>';
          echo '<span style="font-size:15pt;color:azure;">'.$han['time'].' 측정</span>';
        ?>
      </p>
    </div>
  </body>

</html>