<html>

<head>
    <title>Evaluasi Tengah Semester</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="jsformkuota.js"></script>

    <style>
        .container {
            max-width: 580px;
            border-color: #808080;
            border-width: 2px;
            border-style: solid;
        }

        .rounded {
            border-radius: 25px;
        }

        .header {
            text-align: center;
        }

        h2 {
            padding: 15px;
        }

        h3 {
            color: #ffffff;
        }
        button{
            height: 30px;
            width: 120px;
        }
        .col{
            padding-left: 75px;
        }
    </style>
</head>

<body>
    <div class="container rounded mt-3">
        <p>
            Nazriyah Deny Tsaniyah<br>
            Tsaniyah<br>
            5026201151
        </p>
        <div class="header">
            <h4>Form Pendaftaran Kuota Internet</h4>
        </div><br>

        <form action="https://www.w3schools.com/" id="validate">
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Mahasiswa</label>:
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Isi Nama Kalian"
                        required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nrp" class="col-sm-4 col-form-label">NRP</label>:
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Isi NRP Kalian" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusan" class="col-sm-4 col-form-label">Jurusan</label>
                :
                <div class="col-sm-7">
                    <select class="form-select" id="select" name="list">
                        <option disabled selected value>Pilih Jurusan Anda</option>
                        <option value="ind">Sistem Informasi</option>
                        <option value="mys">Elektro</option>
                        <option value="sgp">Informatika</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nohp" class="col-sm-4 col-form-label">No Handphone</label>
                :
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nohp" name="nohp"
                        placeholder="Isi Nomor Handphone Kalian" required>
                </div>
            </div>
            <br>

            <div class="row justify-content-center">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <h6>Kirim</h6>
                </div>
                <div class="col">
                    <button type="reset" class="btn btn-success btn-sm">
                        <h6>Reset</h6>
                </div>
            </div>

        </form>
    </div>
</body>

</html>
