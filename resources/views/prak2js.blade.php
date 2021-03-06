<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <script src="javascriptpraktikum.js"></script>
    <style>
  .container {
        padding: 5% 25%;
      }
      .form {
        margin: 0 auto;
        margin-bottom: 10px;
        background-color: #faf6d3;
        color: #000000;
      }
      .form-header {
        background-color: #fff7b3;
        color: #000000;
      }
      .form-body {
        flex: 1 1 auto;
        padding: 0;
      }
      .isi {
        margin: 1pt;
      }
    </style>

    <head>

    <body>
        <div class="container">
            <div class="form" style="width: 30rem">
                <div class="form-body">
                    <h5 class="form-header text-center">JavaScript Form Validation</h5>
                    <form action="https://www.w3schools.com/" id="validate">
                        <div class="mb-3 mt-3 isi">
                            <label for="name" class="form-label">Full Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="your full name"
                                name="fullname" />
                        </div>
                        <div class="mb-3 mt-3 isi">
                            <label for="uname" class="form-label">Username: </label>
                            <input type="text" class="form-control" id="uname" placeholder="your username"
                                name="uname" />
                        </div>
                        <div class="mb-3 mt-3 isi">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="your email" name="email" />
                        </div>
                        <div class="mb-3 mt-3 isi">
                            <label name="states" for="states" class="form-label">State:</label>
                            <select class="form-select" id="select" name="list">
                                <option disabled selected value>Choose your States</option>
                                <option value="ind">Kansas</option>
                                <option value="mys">Hawaii</option>
                                <option value="sgp">California</option>
                                <option value="thd">Arizona</option>
                                <option value="fpn">Minnesota</option>
                                <option value="bds">New York</option>
                                <option value="vnm">Texas</option>
                                <option value="thd">Virginia</option>
                                <option value="fpn">Washington</option>
                                <option value="bds">New Mexico</option>
                                <option value="vnm">Michigan</option>
                                <option value="lao">Other</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3 isi">
                            <label for="address" class="form-label">Address:</label>
                            <input type="text" class="form-control" id="address" placeholder="your address"
                                name="address" />
                        </div>
                        <div class="mb-3 mt-3 isi">
                            <label for="zip" class="form-label">Zip Code:</label>
                            <input type="zip" class="form-control" id="zipcode" placeholder="your zip-code"
                                name="zipcode" />
                        </div>
                        <button type="submit" class="btn btn-primary form-control">Check Form</button>
                    </form>

                </div>
            </div>
    </body>

</html>
