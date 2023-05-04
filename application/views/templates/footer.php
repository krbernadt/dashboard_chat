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
    background-color: black;
    border: none;
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
    margin-bottom: 70px;
    background-color: white;
    border-radius: 20%;
    box-shadow: 3px 5px 10px darkgray;
  }

  .header {
    height: 10%;
    background-color: #57C5B6;
    color: #002B5B;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
  }

  .header-title {
    color: #002B5B;
    font-size: 24pt;
  }

  .close {
    font-size: 40px;
    color: #002B5B;
    position: absolute;
    right: 14px;
    top: 3px;
  }

  .close:hover {
    cursor: pointer;
    color: #002B5B;
  }

  .isi {
    overflow-y: auto;
    width: 100%;
    height: 80%;
  }

  .footer {

    height: 10.2%;
    background-color: #57C5B6;
    border-top: 2px solid #57C5B6;
    padding-top: 1.3%;
    text-align: center;

  }

  /* .footer-title {} */

  #pop-up {
    width: 98%;
    height: 90%;
    border-radius: 50%;
  }

  @media only screen and (max-width:850px) {
    .footer {
      align-items: center;
    }
  }
</style>
<!-- End styling -->

<!-- /.content-wrapper -->

<button type="button" onclick="document.getElementById('chatbot').style.display='block'" id="btn" class="btn btn-success rounded-circle p-0 m-3">
  <i class="fas fa-solid fa-comment-dots fa-lg"></i>
</button>
<div id="chatbot">

  <div class="pop-up-wrapper rounded" id="pop-up">
    <div class="header ">
      <p class="header-title">Chatbot</p>
      <span class="close" onclick="document.getElementById('chatbot').style.display='none'">&times;</span>
    </div>
    <div class="isi">

      <iframe src="chatbotPage" width="100%" height="98%" style="border:none ;"></iframe>

    </div>

    <div class="footer">
      <p class="footer-title">Powered by</p>
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
</div>


</body>

</html>