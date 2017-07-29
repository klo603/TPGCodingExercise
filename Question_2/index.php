<html>
<head>
    <link rel="stylesheet" href="assets/plugins/bootstrap.min.css">
    <script src="assets/plugins/jquery-3.2.1.min.js"></script>
    <script src="assets/plugins/bootstrap.min.js"></script>
    <script src="assets/question2.js"></script>
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
    <h1>TPG Coding Exercise Question 2</h1>
    <h2>Find Median of Array of Numbers</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Enter numbers separated by comma (EG: 1,2,3,4,5,6)</label>
                <input class="form-control" type="text" id="input_string" name="input_string">
            </div>
        </div>
    </div>
    <button class="btn btn-md btn-info" id="find_median_btn">Find Median</button>
    <div id="results_wrapper" class="row" style="display:none;">
        <div class="col-md-12">
            <h2>Result = <span id="results"></span></h2>
        </div>
    </div>
</div>
</body>
</html>