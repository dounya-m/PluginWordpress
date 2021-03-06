<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom FORM</title>
</head>
<body>
    <h1>Custom Your Inputs</h1>
    <div class="form-group">
        <input type="checkbox" name="check3" id="check3" checked>
        <label for="checkbox">Email</label>
    </div>
    <div class="form-group">
        <input type="checkbox" name="check5" id="check5" checked>
        <label for="checkbox">Subject</label>
    </div>
    <div class="form-group">
        <input type="checkbox" name="check6" id="check6" checked>
        <label for="checkbox">Message</label>
    </div>
    <!-- <button type="button" class="btn btn-primary" onclick="HandleClick()">save input</button> -->
    <button class="btn btn-primary" id="btn">save input</button>
    <script>
        if (check3.checked === true) {
            localStorage.removeItem("email");
            localStorage.setItem('email', 'block');
        }
        if (check5.checked === true) {
            localStorage.removeItem("subject");
            localStorage.setItem('subject', 'block');
        }
        if (check6.checked === true) {
            localStorage.removeItem("message");
            localStorage.setItem('message', 'block');
        }
        // btn my function with btn id
        var btn = document.getElementById("btn");
        btn.addEventListener("click", function() {
            //check3 for email
            const check3 = document.getElementById('check3');
            const email = document.getElementById('email');
            if (check3.checked === true) {
                localStorage.setItem('email', 'block');
            } else {
                localStorage.setItem('email', 'none');
            }
            //check4 for subject
            const check5 = document.getElementById('check5');
            const subject = document.getElementById('subject');
            if (check5.checked === true) {
                localStorage.setItem('subject', 'block');
            } else {
                localStorage.setItem('subject', 'none');
            }
            //check6 for message
            const check6 = document.getElementById('check6');
            const message = document.getElementById('message');
            if (check6.checked === true) {
                localStorage.setItem('message', 'block');
            } else {
                localStorage.setItem('message', 'none');
            }
        });
    </script>
</body>
</html>