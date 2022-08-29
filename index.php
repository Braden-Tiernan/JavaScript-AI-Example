<html>
  <head>
    <title>Dumb AI Test uwu</title>
    <link type="x-image/icon" rel="shortcut icon" href="https://protohub.online/ProtoHub/ProtoHub%20Logo%20Vector.svg">
    <link onLoad="lv1 = lv1 + 1;" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link onLoad="lv1 = lv1 + 1;" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
  </head>
  <body style="margin:0;background-color:rgb(25, 25, 25);zoom:0.25;">
    <div id="con" style="width:500px;height:500px;background-color:rgb(0, 0, 0);position:absolute;overflow:hidden;">
      <div id="s1" style="width:50px;height:50px;position:absolute;left:50px;top:50px;background-color:rgb(255, 255, 255);">
        
      </div>
      <div id="s2" style="width:50px;height:50px;position:absolute;right:50px;top:50px;background-color:rgb(255, 255, 255);">
        
      </div>
    </div>
    <?php if (empty($_GET['v1'])) {echo "<div style=\"position:relative;width:500px;height:500px;display:inline-block;\"></div>";
    $v1 = 1;
    while ($v1 < 30) {
      echo "<iframe style=\"border:none;outline:none;width:500px;height:500px;\" src=\"https://protohub.online/ai/?v1=hide\"></iframe>";
      $v1 = $v1 + 1;
    }}?>
    <p style="position:absolute;top:500px;" id="text"></p>
  </body>
  <script>
  
    // AI a --------------------------------------------------------------------------------------------------------------------
    var ai1inputs = 1;
    var ai1height = 5;
    var ai1width = 2;
    var ai1outputs = 1;
    var ai1n = ["uwu"];
    var ai1w = ["uwu"];
    var ai1i = ["uwu"];
    var ai1o = ["uwu"];
    var sai1n = ["uwu"];
    var sai1w = ["uwu"];
    var sai1i = ["uwu"];
    var sai1o = ["uwu"];
    var createai1v1 = 0;//count
    var createai1v2 = 0;//count
    var createai1v3 = 0;//count
    var createai1v4 = 0;//count
    var createai1v5 = 0;//count
    var createai1v6 = 0;//count
    createai1("start");
    function createai1(a) {
      createai1v1 = 0;//count
      createai1v2 = 0;//count
      createai1v3 = 0;//count
      createai1v4 = 0;//count
      createai1v5 = 0;//count
      createai1v6 = 0;//count
      while (createai1v1 < ai1inputs) {
        if (a == "start") {
          ai1i[createai1v1] = 0;
          sai1i[createai1v1] = 0;
        } else {
          ai1i[createai1v1] = sai1i[createai1v1];
        }
        createai1v1 = createai1v1 + 1;
      }
      createai1v1 = 0;
      while (createai1v1 < (ai1height * ai1width)) {
        if (a == "start") {
          ai1n[createai1v1] = 0;
          sai1n[createai1v1] = 0;
        } else {
          ai1n[createai1v1] = sai1n[createai1v1];
        }
        createai1v1 = createai1v1 + 1;
      }
      createai1v1 = 0;
      while (createai1v1 < (ai1inputs * ai1height)) {
        if (a == "start") {
          ai1w[createai1v1] = 0;
          sai1w[createai1v1] = 0;
        } else {
          ai1w[createai1v1] = sai1w[createai1v1];
        }
        createai1v1 = createai1v1 + 1;
      }
      while (createai1v2 < (ai1height ** ai1width)) {
        if (a == "start") {
          ai1w[createai1v1] = 0;
          sai1w[createai1v1] = 0;
        } else {
          ai1w[createai1v1] = sai1w[createai1v1];
        }
        createai1v1 = createai1v1 + 1;
        createai1v2 = createai1v2 + 1;
      }
      createai1v2 = 0;
      while (createai1v2 < (ai1outputs * ai1height)) {
        if (a == "start") {
          ai1w[createai1v1] = 0;
          sai1w[createai1v1] = 0;
        } else {
          ai1w[createai1v1] = sai1w[createai1v1];
        }
        createai1v1 = createai1v1 + 1;
        createai1v2 = createai1v2 + 1;
      }
      createai1v1 = 0;
      createai1v2 = 0;
      while (createai1v1 < ai1outputs) {
        if (a == "start") {
          ai1o[createai1v1] = 0;
          sai1o[createai1v1] = 0;
        } else {
          ai1o[createai1v1] = sai1o[createai1v1];
        }
        createai1v1 = createai1v1 + 1;
      }
      createai1v1 = 0;
      createai1v2 = 0;
    }
    
    function runai1(a) {
      while (createai1v1 < ai1inputs) {
        ai1i[createai1v1] = a[createai1v1];
        createai1v1 = createai1v1 + 1;
      }
      createai1v1 = 0;
      while (createai1v1 < ai1inputs) {
        while (createai1v2 < ai1height) {
          ai1n[createai1v2] = (ai1i[createai1v1] * ai1w[createai1v3]) + ai1n[createai1v2];
          //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + "<br>neuron " + createai1v2 + " is set to a " + ai1n[createai1v2];
          createai1v2 = createai1v2 + 1;
          createai1v3 = createai1v3 + 1;
        }
        createai1v1 = createai1v1 + 1;
        createai1v2 = 0;
      }
      while (createai1v4 < (ai1width - 1)) {
        while (createai1v5 < (ai1height * (createai1v4 + 1))) {
          while (createai1v6 < (ai1height - (createai1v5 - (ai1height * createai1v4)))) {
            ai1n[(createai1v5 + (ai1height + createai1v6))] = (ai1n[createai1v5] * ai1w[createai1v3]) + ai1n[(createai1v5 + (ai1height + createai1v6))];
            //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + "<br>neuron " + (createai1v5 + (ai1height + createai1v6)) + " is set to " + ai1n[(createai1v5 + (ai1height + createai1v6))];
            createai1v6 = createai1v6 + 1;
            createai1v3 = createai1v3 + 1;
          }
          createai1v5 = createai1v5 + 1;
          createai1v6 = 0 - (createai1v5 - (ai1height * createai1v4));
        }
        createai1v4 = createai1v4 + 1;
        createai1v6 = 0;
      }
      createai1v1 = 0;
      createai1v2 = 0;
      while (createai1v1 < ai1outputs) {
        while (createai1v2 < ai1height) {
          ai1o[createai1v1] = (ai1n[createai1v2] * ai1w[createai1v3]) + ai1o[createai1v1];
          //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + "<br>output " + createai1v1 + " is set to " + ai1o[createai1v1];
          createai1v2 = createai1v2 + 1;
          createai1v3 = createai1v3 + 1;
        }
        createai1v1 = createai1v1 + 1;
        createai1v2 = 0;
      }
      //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + "<br>output";
      if (ai1o[0] >= 0) {
        s1v2 = -1;
        //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + " yes";
      } else {
        //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + " no";
      }
      createai1();
    }
    
    
        // AI 2 --------------------------------------------------------------------------------------------------------------------
    var ai2inputs = 1;
    var ai2height = 5;
    var ai2width = 2;
    var ai2outputs = 1;
    var ai2n = ["uwu"];
    var ai2w = ["uwu"];
    var ai2i = ["uwu"];
    var ai2o = ["uwu"];
    var sai2n = ["uwu"];
    var sai2w = ["uwu"];
    var sai2i = ["uwu"];
    var sai2o = ["uwu"];
    var createai2v1 = 0;//count
    var createai2v2 = 0;//count
    var createai2v3 = 0;//count
    var createai2v4 = 0;//count
    var createai2v5 = 0;//count
    var createai2v6 = 0;//count
    createai2("start");
    function createai2(a) {
      createai2v1 = 0;//count
      createai2v2 = 0;//count
      createai2v3 = 0;//count
      createai2v4 = 0;//count
      createai2v5 = 0;//count
      createai2v6 = 0;//count
      while (createai2v1 < ai2inputs) {
        if (a == "start") {
          ai2i[createai2v1] = 0;
          sai2i[createai2v1] = 0;
        } else {
          ai2i[createai2v1] = sai2i[createai2v1];
        }
        createai2v1 = createai2v1 + 1;
      }
      createai2v1 = 0;
      while (createai2v1 < (ai2height * ai2width)) {
        if (a == "start") {
          ai2n[createai2v1] = 0;
          sai2n[createai2v1] = 0;
        } else {
          ai2n[createai2v1] = sai2n[createai2v1];
        }
        createai2v1 = createai2v1 + 1;
      }
      createai2v1 = 0;
      while (createai2v1 < (ai2inputs * ai2height)) {
        if (a == "start") {
          ai2w[createai2v1] = 0;
          sai2w[createai2v1] = 0;
        } else {
          ai2w[createai2v1] = sai2w[createai2v1];
        }
        createai2v1 = createai2v1 + 1;
      }
      while (createai2v2 < (ai2height ** ai2width)) {
        if (a == "start") {
          ai2w[createai2v1] = 0;
          sai2w[createai2v1] = 0;
        } else {
          ai2w[createai2v1] = sai2w[createai2v1];
        }
        createai2v1 = createai2v1 + 1;
        createai2v2 = createai2v2 + 1;
      }
      createai2v2 = 0;
      while (createai2v2 < (ai2outputs * ai2height)) {
        if (a == "start") {
          ai2w[createai2v1] = 0;
          sai2w[createai2v1] = 0;
        } else {
          ai2w[createai2v1] = sai2w[createai2v1];
        }
        createai2v1 = createai2v1 + 1;
        createai2v2 = createai2v2 + 1;
      }
      createai2v1 = 0;
      createai2v2 = 0;
      while (createai2v1 < ai2outputs) {
        if (a == "start") {
          ai2o[createai2v1] = 0;
          sai2o[createai2v1] = 0;
        } else {
          ai2o[createai2v1] = sai2o[createai2v1];
        }
        createai2v1 = createai2v1 + 1;
      }
      createai2v1 = 0;
      createai2v2 = 0;
    }
    
    function runai2(a) {
      while (createai2v1 < ai2inputs) {
        ai2i[createai2v1] = a[createai2v1];
        createai2v1 = createai2v1 + 1;
      }
      createai2v1 = 0;
      while (createai2v1 < ai2inputs) {
        while (createai2v2 < ai2height) {
          ai2n[createai2v2] = (ai2i[createai2v1] * ai2w[createai2v3]) + ai2n[createai2v2];
          //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + "<br>neuron " + createai2v2 + " is set to a " + ai2n[createai2v2];
          createai2v2 = createai2v2 + 1;
          createai2v3 = createai2v3 + 1;
        }
        createai2v1 = createai2v1 + 1;
        createai2v2 = 0;
      }
      while (createai2v4 < (ai2width - 1)) {
        while (createai2v5 < (ai2height * (createai2v4 + 1))) {
          while (createai2v6 < (ai2height - (createai2v5 - (ai2height * createai2v4)))) {
            ai2n[(createai2v5 + (ai2height + createai2v6))] = (ai2n[createai2v5] * ai2w[createai2v3]) + ai2n[(createai2v5 + (ai2height + createai2v6))];
            //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + "<br>neuron " + (createai2v5 + (ai2height + createai2v6)) + " is set to " + ai2n[(createai2v5 + (ai2height + createai2v6))];
            createai2v6 = createai2v6 + 1;
            createai2v3 = createai2v3 + 1;
          }
          createai2v5 = createai2v5 + 1;
          createai2v6 = 0 - (createai2v5 - (ai2height * createai2v4));
        }
        createai2v4 = createai2v4 + 1;
        createai2v6 = 0;
      }
      createai2v1 = 0;
      createai2v2 = 0;
      while (createai2v1 < ai2outputs) {
        while (createai2v2 < ai2height) {
          ai2o[createai2v1] = (ai2n[createai2v2] * ai2w[createai2v3]) + ai2o[createai2v1];
          //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + "<br>output " + createai2v1 + " is set to " + ai2o[createai2v1];
          createai2v2 = createai2v2 + 1;
          createai2v3 = createai2v3 + 1;
        }
        createai2v1 = createai2v1 + 1;
        createai2v2 = 0;
      }
      //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + "<br>output";
      if (ai2o[0] >= 0) {
        s2v2 = -1;
        //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + " yes";
      } else {
        //document.getElementById("text").innerHTML = document.getElementById("text").innerHTML + " no";
      }
      createai2();
    }
    
    function deathai2(a) {
      createai2v1 = 0;//count
      createai2v2 = 0;//count
      createai2v3 = 0;//count
      createai2v4 = 0;//count
      createai2v5 = 0;//count
      createai2v6 = 0;//count
      while (createai2v1 < ai2inputs) {
        sai2i[createai2v1] = sai1i[createai2v1] + (Math.random() - (Math.random() * 2));
        createai2v1 = createai2v1 + 1;
      }
      createai2v1 = 0;
      while (createai2v1 < (ai2height * ai2width)) {
        sai2n[createai2v1] = sai1n[createai2v1] + (Math.random() - (Math.random() * 2));
        createai2v1 = createai2v1 + 1;
      }
      createai2v1 = 0;
      while (createai2v1 < (ai2inputs * ai2height)) {
        sai2w[createai2v1] = sai1w[createai2v1] + (Math.random() - (Math.random() * 2));
        createai2v1 = createai2v1 + 1;
      }
      while (createai2v2 < (ai2height ** ai2width)) {
        sai2w[createai2v1] = sai1w[createai2v1] + (Math.random() - (Math.random() * 2));
        createai2v1 = createai2v1 + 1;
        createai2v2 = createai2v2 + 1;
      }
      createai2v2 = 0;
      while (createai2v2 < (ai2outputs * ai2height)) {
        sai2w[createai2v1] = sai1w[createai2v1] + (Math.random() - (Math.random() * 2));
        createai2v1 = createai2v1 + 1;
        createai2v2 = createai2v2 + 1;
      }
      createai2v1 = 0;
      createai2v2 = 0;
      while (createai2v1 < ai2outputs) {
        sai2o[createai2v1] = sai1o[createai2v1] + (Math.random() - (Math.random() * 2));
        createai2v1 = createai2v1 + 1;
      }
      createai2v1 = 0;
      createai2v2 = 0;
      createai2();
    }
    
    function deathai1(a) {
      createai1v1 = 0;//count
      createai1v2 = 0;//count
      createai1v3 = 0;//count
      createai1v4 = 0;//count
      createai1v5 = 0;//count
      createai1v6 = 0;//count
      while (createai1v1 < ai1inputs) {
        sai1i[createai1v1] = sai2i[createai1v1] + (Math.random() - (Math.random() * 2));
        createai1v1 = createai1v1 + 1;
      }
      createai1v1 = 0;
      while (createai1v1 < (ai1height * ai1width)) {
        sai1n[createai1v1] = sai2n[createai1v1] + (Math.random() - (Math.random() * 2));
        createai1v1 = createai1v1 + 1;
      }
      createai1v1 = 0;
      while (createai1v1 < (ai1inputs * ai1height)) {
        sai1w[createai1v1] = sai2w[createai1v1] + (Math.random() - (Math.random() * 2));
        createai1v1 = createai1v1 + 1;
      }
      while (createai1v2 < (ai1height ** ai1width)) {
        sai1w[createai1v1] = sai2w[createai1v1] + (Math.random() - (Math.random() * 2));
        createai1v1 = createai1v1 + 1;
        createai1v2 = createai1v2 + 1;
      }
      createai1v2 = 0;
      while (createai1v2 < (ai1outputs * ai1height)) {
        sai1w[createai1v1] = sai2w[createai1v1] + (Math.random() - (Math.random() * 2));
        createai1v1 = createai1v1 + 1;
        createai1v2 = createai1v2 + 1;
      }
      createai1v1 = 0;
      createai1v2 = 0;
      while (createai1v1 < ai1outputs) {
        sai1o[createai1v1] = sai2o[createai1v1] + (Math.random() - (Math.random() * 2));
        createai1v1 = createai1v1 + 1;
      }
      createai1v1 = 0;
      createai1v2 = 0;
      createai1();
    }




  
  
    var s1v1 = 50;
    var s1v2 = 0;
    var s2v1 = 50;
    var s2v2 = 0;
    var v1world = 0;
    var v2world = true;
    world();
    function world() {
      v1world = v1world + 1;
      s1v2 = s1v2 + 0.1;
      s2v2 = s2v2 + 0.1;
      s1v1 = s1v1 + s1v2;
      s2v1 = s2v1 + s2v2;
      document.getElementById("s1").style.top = s1v1 + "px";
      document.getElementById("s2").style.top = s2v1 + "px";
      if ((s1v1 < 0) || (s1v1 > 450)) {
        s1v1 = 50;
        s1v2 = 0;
        s2v1 = 50;
        s2v2 = 0;
        v1world = 0;
        deathai1();
      } else if ((s2v1 < 0) || (s2v1 > 450)) {
        s1v1 = 50;
        s1v2 = 0;
        s2v1 = 50;
        s2v2 = 0;
        v1world = 0;
        deathai2();
      }
      if ((v1world >= 500) && v2world) {
        document.getElementById("con").style.backgroundColor = "rgb(25, 199, 89)";
        v2world = false;
      } else if ((v1world < 500) && !v2world) {
        document.getElementById("con").style.backgroundColor = "black";
        v2world = false;
      }
      runai1([s1v1]);
      runai2([s2v1]);
      setTimeout(world, 10);
    }
  </script>
</html>