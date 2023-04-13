<!-- task 9 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>How to create currency converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        /*Start Currency Converter*/
        * {
            padding: 0;
            margin: 0;
            font-family: 'IBM Plex Sans', sans-serif;
        }

        body {
            height: 100vh;
            width: 100vw;
            overflow-x: hidden;
        }

        .currency-row-outer {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .currency-converter {
            width: 100%;
            max-width: 480px;
            text-align: center;
        }

        input,
        select {
            color: #363636;
            font-size: 1rem;
            height: 2.3em;
            border-radius: 4px;
            max-width: 100%;
            width: calc(100% - 15px);
            margin: auto;
            outline: 0;
            background: #fff;
            border-color: #dbdbdb;
            padding-left: 15px;
            border: 1px solid #00000057;
            box-shadow: inset 0 0.0625em 0.125em rgb(10 10 10 / 5%);
            -webkit-appearance: none;
        }

        .field.grid-50-50 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 15px;
        }

        .currency-converter .colmun {
            margin-bottom: 15px;
        }

        select.currency {
            border-color: #3273dc;
            width: 100%;
            height: 100%;
            cursor: pointer;
            font-size: 1em;
            max-width: 100%;
            outline: 0;
            display: block;
        }

        .currency-converter .select {
            position: relative;
            height: 100%;
        }

        h2 {
            padding-bottom: 30px;
        }

        .currency-converter .select:after {
            transform: rotate(-45deg);
            transform-origin: center;
            content: "";
            border: 3px solid rgba(0, 0, 0, 0);
            border-radius: 2px;
            border-top: 0;
            border-right: 0;
            display: block;
            height: 0.525em;
            width: 0.525em;
            z-index: 4;
            position: absolute;
            top: 50%;
            right: 1.125em;
            margin-top: -0.4375em;
        }

        .select:not(:hover)::after {
            border-color: #3273dc;
        }

        .select:hover::after {
            border-color: #363636;
        }
    </style>
</head>

<body>
    <div class="currency-row-outer">
        <div class="currency-converter">
            <h2>Currency Converter</h2>

            <div class="field grid-50-50">
                <div class="colmun col-left">
                    <input type="number" class="form-input" id="number" placeholder="00000">
                </div>
                <div class="colmun col-right">
                    <div class="select">
                        <select name="currency" class="currency" onchange="updatevalue()" id="first">
                            <option>USD</option>
                            <option>RUPPEE</option>
                            <option>EURO</option>
                            <option>SOL</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field grid-50-50">
                <div class="colmun col-left">
                    <input type="text" class="form-input" id="output" placeholder="00000" disabled>
                </div>
                <div class="colmun col-right">
                    <div class="select">
                        <select name="currency" class="currency" onchange="updatevalue()" id='second'>
                            <option>USD </option>
                            <option>RUPPEE</option>
                            <option>EURO</option>
                            <option>SOL</option>
                        </select>
                    </div>
                </div>
            </div>
            <span onclick=interChangeValue()><i class="fa-solid fa-repeat fa-2xl  "></i></span>
        </div>
    </div>
</body>
<script src="./JS/script.js"></script>
</html>