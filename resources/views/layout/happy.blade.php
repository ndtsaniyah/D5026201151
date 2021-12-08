<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    <Style>
        *{
            font-family: 'Roboto', sans-serif;
            color: #000000
        }

        .col-header { grid-area: header; }
        .col-menu-pil { grid-area: menu; }
        .col-section { grid-area: main; }
        .col-foot { grid-area: footer; }

        .grid-container {
        display: grid;
        grid-template-areas:
            'header header header header header header'
            'menu main main main main main'
            'footer footer footer footer footer footer';
        grid-gap: 20px;
        background-color: #1C2F35;
        padding: 10px;
        }

        .grid-container > div {
        background-color:#BEC7C4;
        padding: 20px 0;
        border-radius: 15px;
        }
        #jdl{
            text-align: center;
            font-weight: 900;
        }
        #mnu, #hakcip, #status{
            text-align: center;

        }
        label{
            font-weight: 200;
        }
        .form-body{
            padding-left: 15px;
            padding-right: 30px
        }
        a:visited, a:active, a:hover, a:link{
            color: #000000;
            text-decoration: none;
        }
        .submit-btn{
            padding-left: 20rem;
        }
        .col-tabel{
            padding: 15px
        }
        .btn-default{
            background-color: #f2f4f8;
        }

    </Style>
</head>

<body>
    <div class="grid-container">
        <div class="col-header">
            <div class="col-sm-1 ">
                <img src="https://media-exp1.licdn.com/dms/image/C5603AQG2yINS9gZyvQ/profile-displayphoto-shrink_200_200/0/1631024261083?e=1643241600&v=beta&t=5OuEQeyCmsvRX8XKRPxSZtbxRSii9wL2M7TV9A7E0-c"
                alt="My Photo Profile" style="width:60px;height:60px">
            </div>
            <div class="col-sm-11">
                <h4 id=nrp>
                    5026201151
                </h4>
                <strong><p id=name>
                    NAZRIYAH DENY TSANIYAH
                </p></strong>
            </div>
        </div>


        <div class="col-menu-pil">
            <h3 id=mnu>Menu</h3>
            <a href="/pegawai" class="btn btn-block" role="button"> Data Pegawai </a>
            <a href="/absen" class="btn btn-block" role="button"> Data Absen </a>
            <a href="" class="btn btn-block" role="button"> "Praktikum" </a>
        </div>
        <div class="col-section">
            @section('konten')
            @show
        </div>

        <div class="col-foot">
            <p id=hakcip> Hak Cipta oleh <br>
                5026201151 - Nazriyah Deny Tsaniyah
            </p>
        </div>
</div>
</body>

</html>
