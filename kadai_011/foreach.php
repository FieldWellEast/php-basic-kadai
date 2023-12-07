<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_005</title>
 </head>
 
 <body>
     <p>
         <?php

         $values = [
            '名前' => '玉ねぎ',
            '値段' => 200,
            '産地' => '北海道'
        ];

         foreach ($values as  $key => $value) {        
            //配列$valuesの要素を1つずつ順番に出力する
            echo $key . ': ' . $value . '<br>';
         }
         
         ?>
     </p>
 </body>
 
 </html>