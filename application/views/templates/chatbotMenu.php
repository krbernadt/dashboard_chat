<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/template/backend/') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/template/backend/') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/backend/') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/backend/') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/template/backend/') ?>/dist/css/adminlte.min.css">
    <style type="text/css">
        #chatbot {
            position: fixed;
            right: 0;
            bottom: 0;
            z-index: 1080;
            display: none;
            overflow: auto;

        }

        .isi {
            overflow-y: auto;
            width: 100%;
            height: 80%;

        }

        .pesan-bot {
            display: block;
            float: left;
            background-color: #57C5B6;
            /* font-weight: bold; */
            color: #fff;
            font-size: 14pt;
            width: fit-content;
            border-radius: 10px;
            padding: 10px;
            max-width: 20%;
            margin: 5px 20% 10px;
            word-wrap: break-word;
            overflow: auto;
        }

        .pesan-user {
            display: block;
            background-color: #57C5B6;
            color: #fff;
            font-size: 14pt;
            width: fit-content;
            border-radius: 10px !important;
            padding: 10px;
            max-width: 20%;
            margin: 20px 20% 10px;
            float: right;
            word-wrap: break-word;
            overflow: auto;
            /* font-weight: bold; */
        }



        .pesan {
            flex: 11;
            width: 90% !important;
            height: 95% !important;
            color: black;
            font-size: 14pt !important;
            border: 2px solid #57C5B6;
            margin-top: 10px !important;
            padding-left: 10px !important;
            border-radius: 7px;
        }

        .test-div {
            display: flex;
            float: left;
            flex-direction: column;
            background: linear-gradient(to bottom, #ffffff 0%, #57c5b6 100%);
            /* font-weight: bold; */
            justify-content: center;
            align-items: center;
            width: 100%;
            height: fit-content;
            padding: 5%;

        }

        .body-isi {
            height: max-content;
        }


        .choice-div {

            float: left;
            background-color: #fff;
            /* font-weight: bold; */
            width: 100%;
            margin: 2px 0 10px;

        }



        .menu-card {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            margin-top: 2%;
            width: 50%;
            height: 400px;
            text-align: center;
            align-items: center;
            border-radius: 50px;
            padding: 50px;
            box-shadow: 0px 0px 8px 1px grey;

        }

        .quick-chat {
            background-color: #A3F9E2;
            width: 90%;
            height: 40px;
            padding-top: 2.5%;
            text-align: center;
            border-radius: 50px;
            overflow: auto;
        }

        .quick-chat:hover {
            background-color: #57c5b6;
        }

        .quick-menu {
            background-color: blue;
            width: 60%;
            padding: 4%;
            border-radius: 15px;
        }

        .quick-msg {
            background-color: #fff;
            box-shadow: 0px 0px 5px 1px grey;
            width: 60%;
            height: 20%;
            margin-bottom: 2.5%;
            padding-top: 3%;
            border-radius: 15px;
        }

        .quick-btn:hover {
            color: #57c5b6;

        }


        @media only screen and (max-width:850px) {
            .footer {
                align-items: center;
            }

            .pesan {
                width: 85% !important;
                height: 90% !important;
            }

            .btnsend {
                width: 60px;
                font-size: 12pt;
                height: 90%;

            }
        }
    </style>
</head>

<body class="body-isi">

    <div class="isi">
        <div class="chat-bot">
            <div class="test-div">
                <h1>Hi 👋 Ada yang bisa saya bantu?</h1>
                <div class="menu-card">
                    <div class="quick-msg">
                        <a href="" class="quick-btn">Straight to Message</a>
                    </div>
                    <div class="quick-menu">
                        <a class="quick-chat" href="https://google.com" target="_blank" type="button">test test test test testtest test</a>
                        <a class="quick-chat" href="" target="_blank" type="button">test</a>
                        <a class="quick-chat" href="" target="_blank" type="button">test</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>





    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <div>
        <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('assets/template/backend/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('assets/template/backend/') ?>dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url('assets/template/backend/') ?>dist/js/demo.js"></script>
    </div>

    <!-- replies script -->


</body>

</html>