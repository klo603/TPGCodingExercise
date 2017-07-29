<html>
<head>
    <link rel="stylesheet" href="assets/plugins/bootstrap.min.css">
    <script src="assets/plugins/jquery-3.2.1.min.js"></script>
    <script src="assets/plugins/bootstrap.min.js"></script>
    <script src="assets/question1.js"></script>
    <style>
        ol li{
            font-size:20px;
        }
        ul li{
            font-size:16px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>TPG Coding Exercise Question 1</h1>
    <h2>Reverse and Reshuffle String</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Enter a String</label>
                <input class="form-control" type="text" id="input_string" name="input_string">
            </div>
        </div>
    </div>
    <button class="btn btn-md btn-info" id="reverse_string_btn">Reverse String</button>
    <button class="btn btn-md btn-info" id="reshuffle_string_btn">Reshuffle String</button>
    <div id="results_wrapper" class="row" style="display:none;">
        <div class="col-md-12">
            <h2>Result = <span id="results"></span></h2>
        </div>
    </div>
</div>
</body>
</html>