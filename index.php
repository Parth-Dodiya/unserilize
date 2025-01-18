
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Unserialize Tool - Convert Serialized Strings Easily | the_gujarati</title>
    <meta name="description" content="Easily unserialize PHP strings with our free tool. Paste your serialized string and get human-readable output instantly. Made by the_gujarati.">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "PHP Unserialize Tool",
      "description": "Convert PHP serialized strings to human-readable output with our free tool.",
      "applicationCategory": "Utility",
      "author": {
        "@type": "Person",
        "name": "the_gujarati"
      },
      "operatingSystem": "All",
      "url": "https://the-gujarati.free.nf/",
      "keywords": ["PHP unserialize", "Serialized string converter", "PHP tool"],
      "sameAs": [
        "https://github.com/Parth-Dodiya",
        "https://www.instagram.com/the_gujarati/",
        "https://profiles.wordpress.org/dparthj/"
      ]
    }
    </script>
    <meta property="og:title" content="PHP Unserialize Tool - Convert Serialized Strings Easily">
    <meta property="og:description" content="Easily unserialize PHP strings with our free tool. Paste your serialized string and get human-readable output instantly.">
    <meta property="og:url" content="https://the-gujarati.free.nf/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://the-gujarati.free.nf/images/unserialize-tool.png">
    <style>
        textarea.serilized-text {
            min-height: 50px;
            resize: none;
            overflow: hidden;
            padding: 8px;
            font-size: 16px;
            line-height: 1.5;
            border: 1px solid #ccc;
            background: transparent;
            border-radius: 15px;
        }

        textarea.text-to-unserilize:focus, button:focus {
            outline: 2px solid #005fcc;
            outline-offset: 2px;
        }
    </style>
    <style type="text/css">
        body {
            background-color: #31363F;
        }
        div.main {
            font-family: "DM Sans", sans-serif;
            max-width: 1184px;
            margin: 0 auto;
            padding: 92px;
            display: block;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* min-height: 100vh; */
            line-height: normal;
        }

        @media only screen and (max-width: 1023px) {
            body { padding: 60px!important; }
        }

        @media only screen and (max-width: 767px) {
            body { padding: 32px!important; }
        }

        .fhs-main-container {
            display: block;
            flex-direction: column;
            align-items: center;
        }

        .fhs-container {
            max-width: calc(100% - 64px)!important;
            background-color: #222831;
            backdrop-filter: blur(100px);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 800px #31363F;
        }

        .fhs-heading {
            text-align: center;
            color: #EEEEEE;
            margin-bottom: 30px;
            font-size: 30px;
        }

        .fhs-heading::after {
            content: 'by the_gujarati';
            font-size: 16px;
            display:block;
            font-weight: 500;
        }
      
        .fhs-converter {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .fhs-input {
            flex: 1;
            font-size: 16px;
            margin-right: 10px;
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fdfdff;
            outline: none;
            resize: none;
            transition: border-color 0.3s;
        }

        .fhs-input:focus {
            border-color: #007872;
        }

        .fhs-button {
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            background-color: #31363F;
            color: #EEEEEE;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .fhs-button:hover {
            background-color: #EEEEEE;
            color: #31363F;
        }

        .fhs-result {
            text-align: center;
        }

        .fhs-output {
            font-family: "Hind Siliguri", sans-serif;
            font-size: 50px;
            margin: 50px 0;
            font-weight: bold;
            color: #000;
            word-wrap: break-word;
            border-radius: 8px;
            line-height:0.9;
            padding: 10px;
            /* background: rgba(255,255,255, 0.4); */
        }
        .fhs-copy {
            background-color: #31363F;
            color: #EEEEEE;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 5px;
            transition: background-color 0.3s ease;
        }

        .fhs-copy:hover {
            background-color: #EEEEEE;
            color: #31363F;
        }

        .fhs-clear {
            opacity: 0.8;
            background
            opacity: 0.8;
            background-color: #31363F;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .fhs-clear:hover {
            opacity: 0.75;
            background-color: #c92211;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            margin-bottom:32px;
            font-size: 14px;
            color: #EEEEEE;
        }

        a {
            text-decoration: none;
            transition: 0.2s ease-in-out;
        }
        a:hover{
            font-weight:bold;
            letter-spacing:1.4px;
            transition: 0.2s ease-in-out;
        }
        ::selection{
            color: #fff;
            background: #007872;
        }
        hr {
            margin-top :70px
        }
        a.tgu-social-media-links {
            color: #EEEEEE;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if (empty($_POST['csrf_token'])) {
        echo '<pre>'; print_r($_SESSION['csrf_token']); echo '</pre>';
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    $csrf_token = $_SESSION['csrf_token'];

    $output = '';
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['csrf_token'])) {
        	// Trim and validate input without altering serialized format
            $input = trim($_POST['text-to-unserilize']);

            // Attempt to unserialize safely
        	$data = @unserialize($input);
        	
            if ($data === false && $input !== serialize(false)) {
	            $output = 'Invalid serialized string.';
	        } else {
	            $output = htmlspecialchars(print_r($data, true), ENT_QUOTES, 'UTF-8');
	        }
        } else {
            die('Invalid CSRF token.');
        }
    }
    ?>
    <div class="main">
        <div class="fhs-main-container">
            <div class="fhs-container">
                <h1 class="fhs-heading">PHP Unserilzed Converter</h1>
                <div class="fhs-converter">
                    <form action="" method="post" id="unserilize-form" aria-labelledby="form-title">
                        <div>
                            <textarea id="text-to-unserilize" class="text-to-unserilize" name="text-to-unserilize" placeholder="Paste your unserialize text here" rows="5" required aria-required="true"><?php if (!empty($_POST['text-to-unserilize'])) { echo $_POST['text-to-unserilize']; } ?></textarea>
                        </div>

                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token, ENT_QUOTES, 'UTF-8'); ?>">

                        <div>
                            <button type="submit" aria-label="Submit the form" class="fhs-button">Unserilize</button>
                        </div>
                    </form>
                    <!-- <button onclick="fhs_convertToBangla()">Convert</button> -->
                </div>
                <div class="fhs-result">
                    <textarea id="serilized-text" class="serilized-text" aria-label="Output of unserialized text"><?php echo $output; ?></textarea>
                    <button onclick="tgu_copyToClipboard()" class="fhs-copy">Copy to Clipboard</button>
                    <button onclick="fhs_clearFields()" class="fhs-clear">× Clear</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p style="border-top: dotted 2px;"></p>
        <br>
        <b>Copyright © <?php echo date("Y"); ?> the_gujarati.</b>&nbsp;<b>Made with ❤️ in India.</b><br>
        <a class="tgu-social-media-links" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/the_gujarati/">Instagram</a> / 
        <a class="tgu-social-media-links" target="_blank" rel="noopener noreferrer" href="https://github.com/Parth-Dodiya">GitHub</a> / 
        <a class="tgu-social-media-links" target="_blank" rel="noopener noreferrer" href="https://profiles.wordpress.org/dparthj/">WordPress</a> / 
        <a class="tgu-social-media-links" target="_blank" rel="noopener noreferrer" href="https://stackoverflow.com/users/16918131/the-gujarati">stackoverflow</a> / 
        <a class="tgu-social-media-links" target="_blank" rel="noopener noreferrer" href="https://the-gujarati.free.nf/">Website</a>
    </div>

    <script>
        const textarea = document.getElementById('serilized-text');
        function adjustTextareaHeight(el) {
            el.style.height = 'auto';
            el.style.height = el.scrollHeight + 'px';
        }
        adjustTextareaHeight(textarea);

        function tgu_copyToClipboard() {
            // Get the text field
            var copyText = document.getElementById("serilized-text");
            console.log(typeof(copyText));
            if (copyText && copyText !== 'null' && copyText !== 'undefined' && copyText !== '') {
                // Select the text field
                copyText.select();
                copyText.setSelectionRange(0, 99999); // For mobile devices

                // Copy the text inside the text field
                navigator.clipboard.writeText(copyText.value);

                // Alert the copied text
                alert("The text copied.");
            }
        }
    </script>
</body>
</html>