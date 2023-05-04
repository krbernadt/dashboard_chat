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




        .pesan-master {
            flex: 6;
            background-color: #57C5B6;
            color: #002B5B;
            font-size: 14pt;
            width: fit-content;
            border-radius: 10px !important;
            padding: 10px;
            float: right;
            max-width: 20%;
            margin: 5px 5px 0px;
            word-wrap: break-word;
            overflow: auto;
        }

        .test-div {
            display: blocks;
            float: left;
            background-color: #fff;
            /* font-weight: bold; */
            width: 100%;
            padding: 1px;
            margin: 10px 0 10px;

        }



        .cb-button {
            border: none;
            display: block;
            color: white;
            max-width: 20%;
            padding: 10px;
            text-align: center;
            overflow: auto;
            display: table;
            font-size: 16px;
            border-radius: 10px;
            transition-duration: 0.4s;
            cursor: pointer;
            background-color: #B9EDDD;
            color: #002B5B;
            border: 2px solid #002B5B;
            margin: 5px 20% 10px;
        }

        .cb-button:hover {
            background-color: #002B5B;
            color: white;
        }

        .choice-div {

            float: left;
            background-color: #fff;
            /* font-weight: bold; */
            width: 100%;
            margin: 2px 0 10px;

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

<body>

    <div class="isi">
        <div class="chat-bot">
            <div class="test-div">
                <p class="pesan-bot">Halo, apa ada yang bisa dibantu ?</p>

            </div>

            <div class="choice-div">
                <?php
                foreach ($chatbot as $cbt) :
                ?>
                    <button class="cb-button" id="<?= $cbt->isi_cb ?>" onclick="reply_click(this.id)"><?= $cbt->isi_cb ?></button>
                <?php endforeach ?>
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
    <script type="text/javascript">
        // manual message
        $(document).ready(function() {
            $(".btnsend").on("click", function() {
                $pesan = $(".pesan").val();
                $msg = '<div class="test-div" ><p class="pesan-user">' + $pesan + '</p></div>';
                $(".isi").append($msg);
                $(".pesan").val("");

                // membuat balasan

                $.ajax({
                    type: "POST",
                    url: _base_url_ + "chatbot.php?f=get_reply",
                    data: 'text=' + $pesan,
                    success: function(result) {
                        $replies = '<div class="chat-bot"><div class="test-div"><p class="pesan-bot">' + result + '</p></div></div>';
                        $(".isi").append($replies);
                        $(".isi").scrollTop($(".chat-bot")[0].scrollHeight);
                    }
                });
            });
        });


        //choices message 

        function reply_click(clicked_id) {
            let choice = document.getElementById(clicked_id);
            let text = choice.innerHTML;
            $msg = '<div class="test-div" ><p class="pesan-user">' + text + '</p></div>';
            $(".isi").append($msg);
            $(".pesan").val("");

            $.ajax({
                type: "POST",
                url: "<?= base_url('command/quickreply') ?>",

                data: {
                    message: text
                },

                success: function(resp) {
                    if (resp) {
                        var resp = JSON.parse(resp)

                        if (resp.status == 'success') {
                            $replies = '<div class="chat-bot"><div class="test-div"><a class="pesan-bot" target="_blank" href=' + resp.replies + '>Click Here</a></div></div>';
                            $(".isi").append($replies);
                            $(".isi").scrollTop($(".isi")[0].scrollHeight);
                        } else {
                            $replies = '<div class="chat-bot"><div class="test-div"><p class="pesan-bot">' + resp.replies + '</p></div></div>';
                            $(".isi").append($replies);
                            $(".isi").scrollTop($(".isi")[0].scrollHeight);
                        }
                    }

                    // $replies = '<div class="chat-bot"><div class="test-div"><p class="pesan-bot">' + result + '</p></div></div>';
                    // $(".isi").append($replies);
                    // $(".isi").scrollTop($(".isi")[0].scrollHeight);
                }
            });
        }
    </script>

</body>

</html>