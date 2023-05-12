<style type="text/css">
  #btn {
    position: fixed;
    right: 0;
    bottom: 0;
    display: block;
    z-index: 1080;
    width: 3em;
    height: 3em;
    background: #57C5B6;
    border-color: #57C5B6;
  }

  #btn:hover {
    transition: 0.2s;
    background-color: black;
    border: none;
    width: 3.2em;
    height: 3.2em;
  }

  #chatbot {
    position: fixed;
    right: 0;
    bottom: 0;
    z-index: 1080;
    display: none;
    overflow: auto;


  }

  .pop-up-wrapper {
    position: fixed;
    right: 0;
    bottom: 0;
    z-index: 1080;
    margin-right: 15px;
    margin-top: 70px;
    margin-bottom: 120px;
    background-color: white;
    border-radius: 50%;
    box-shadow: 3px 5px 10px darkgray;
  }

  .header {
    height: 10%;
    background-color: #57C5B6;
    color: #002B5B;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    visibility: hidden;
  }

  .header-title {
    color: #002B5B;
    font-size: 24pt;
  }

  .isi {
    width: 100%;
    height: 70%;

  }

  .footer {
    height: 20%;
    background-color: #fff;

    position: relative;
    text-align: center;
    justify-content: center;
    box-shadow: 0px -3px 4px -4px grey;
  }

  .c-button {
    border-radius: 13px;
    background-color: #00916E;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 15px;
    padding: 9px;
    width: 100px;
    transition: all 0.5s;
    cursor: pointer;
    margin-left: 10%;
    margin-right: 10%;
    margin-top: 2%;
  }



  .c-button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }

  .c-button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }

  .c-button:hover span {
    padding-right: 25px;
  }

  .c-button:hover span:after {
    opacity: 1;
    right: 0;
  }


  #pop-up {
    width: 95%;
    height: 80%;

  }



  @media only screen and (max-width:850px) {
    .footer {
      align-items: center;
    }
  }

  @media only screen and (max-height:612px) {
    #pop-up {
      height: 70%;

    }

    .footer {
      height: 90px;

    }

    .header-title {
      font-size: 18pt;
    }

    .pop-up-wrapper {
      box-shadow: -2px 5px 8px 5px darkgray;

    }

    .c-button {
      margin-top: 1%;
    }
  }
</style>
<!-- End styling -->

<!-- /.content-wrapper -->

<button type="button" onclick="openIcon(event)" id="btn" class="btn btn-success rounded-circle p-0 m-3">
  <i class="fas fa-solid fa-comment-dots fa-lg" id="icon-open"></i>
  <!-- <i class="fa-solid fa-x fa-lg" id="icon-open"></i> -->


</button>
<div id="chatbot">


  <div class="header" id="this-header">
    <p class="header-title">Message</p>
    <!-- <span id class="close" onclick="document.getElementById('chatbot').style.display = 'none'">&times;</span> -->
  </div>
  <div class="isi">

    <iframe id="template-obj" src="chatbotMenu" width="100%" height="100%" style="border:none ;"></iframe>
    <!-- <object id="template-obj" data="chatbotPage" width="100%" height="98%"></object> -->
  </div>

  <div class="footer">
    <div class="choice-menu">
      <button class="c-button" onclick="function1(event)" id="landpage">
        <div><i class="fa far fa-home fa-xs" style="font-size: 20px;"></i></div>
        <div><span>Main</span></div>
      </button>
      <button class="c-button" onclick="function2(event)" id="corepage">
        <div><i class="fas fa-comments" style="font-size: 20px;"></i></div>
        <div><span>Message</span></div>
      </button>
    </div>

  </div>



</div>



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>



<div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/template/backend/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/template/backend/') ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/template/backend/') ?>dist/js/demo.js"></script>
  <script>
    function function1(e) {
      // Get which button was clicked from the event that is passed in, and set its onclick event
      document.getElementById("template-obj").src = "chatbotMenu";
      document.getElementById("landpage").disabled = true;
      document.getElementById("corepage").disabled = false;
      document.getElementById("this-header").style.visibility = 'hidden';

    }


    function function2(e) {
      // Get which button was clicked from the event that is passed in, and set its onclick event
      document.getElementById("template-obj").src = "chatbotPage";
      document.getElementById("corepage").disabled = true;
      document.getElementById("landpage").disabled = false;
      document.getElementById("this-header").style.visibility = 'visible';
    }

    function openIcon(e) {
      document.getElementById('btn').onclick = function() {
        closeIcon(e);
      }

      document.getElementById('icon-open').className = "fas fa-angle-down fa-lg";
      document.getElementById('icon-open').style.fontSize = '24px';
      document.getElementById('icon-open').style.marginTop = '10px';
      document.getElementById('chatbot').style.display = 'block';
    }

    function closeIcon(e) {
      document.getElementById('btn').onclick = function() {
        openIcon(e);
      }
      document.getElementById('icon-open').className = "fas fa-solid fa-comment-dots fa-lg";
      document.getElementById('icon-open').style.fontSize = '';
      document.getElementById('icon-open').style.marginTop = '';
      document.getElementById('chatbot').style.display = 'none';
    }
  </script>

</div>


</body>

</html>