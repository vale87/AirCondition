<html>
   <head>
   	  <meta charset="utf-8" />
   	  <?= $_styles ?><!--cargamos los css-->
   	  <?= $_scripts ?><!--cargamos los js-->
      <title><?= $title ?></title>
   </head>
   <body>
      <div id="wrapper">
         <div id="header">
            <?= $header ?>
         </div>
         <div id="main">
            <div id="content">
               <div class="post">
                  <?= $content ?>
               </div>
            </div>
         </div>
         <div id="footer">
            <?= $footer ?>
         </div>
      </div>
   </body>
</html>