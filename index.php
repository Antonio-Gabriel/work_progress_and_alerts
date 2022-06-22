<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Progress Ajax</title>

    <style>
        button#btn {
            padding: 4px 12px;
            display: flex;
        }

        button#btn i {
            display: none;
        }

        button#btn:disabled,
        button#btn:disabled i {
            display: flex;
            cursor: not-allowed;
            background: gray;
            color: darkgray;
        }

        button#btn:disabled span {
            display: none;
        }
    </style>
</head>

<body>
    <form method="post" id="signIn">
        <div>
            <input type="text" name="name" id="name" placeholder="your name"> <br>
            <input type="text" name="email" id="email" placeholder="yout email"> <br> <br>

            <button id="btn">
                <i>Processing</i>
                <span>Send</span>
            </button>

            <button id="remove">
                Remove
            </button>
        </div>
    </form>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>