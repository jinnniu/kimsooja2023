<?php snippet('head') ?>
<body>
  <?php snippet('entering') ?>
<script>
  let entering = document.getElementById("entering");
  let menuwrapper = document.getElementById("menu-wrapper");
  let menulist = [...document.querySelectorAll("#menu-wrapper a")];
  let menubutton = document.getElementById("menubutton");

  entering.onclick = function (event) {
    menuwrapper.classList.toggle("is-visible");
    menubutton.classList.toggle("is-hiding");
  };

  for (let l = 0; l < menulist.length; l++) {
    menulist[l].onclick = function (event) {
      window.localStorage.setItem("entering", "hidden");
      entering.style.display = "none";
    };
  }
</script>
</body>
</html>