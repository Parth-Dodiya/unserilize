<?php 
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

session_start();
?>
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
            width: -webkit-fill-available;
    		max-width: 90%;
/*            resize: none;*/
            overflow: hidden;
            padding: 8px;
            font-size: 16px;
            line-height: 1.5;
            border: 1px solid #ccc;
            background: transparent;
            border-radius: 15px;
            color: #000000;
            margin-top: 50px;
            width: 100%;
        }

        textarea.text-to-unserilize:focus, button:focus {
            outline: 2px solid #005fcc;
            outline-offset: 2px;
        }

        textarea.text-to-unserilize {
            width: 100%;
        }
    </style>
    <style type="text/css">
        /*body {
            background-color: #31363F;
        }*/
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
            color: #000000;
        }

        @media only screen and (max-width: 1023px) {
/*            body { padding: 60px!important; }*/
        }

        @media only screen and (max-width: 767px) {
/*            body { padding: 32px!important; }*/
        }

        @media only screen and (max-width: 625px) {
      textarea.text-to-unserilize {
            width: 100%;
        }
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
            color: #000000;
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
            font-weight: bold;
            border: none;
            font-size: 16px;
            background-color: red;
            color: #ffffff;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .fhs-button:hover {
            background-color: #000000;
            color: red;
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
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 5px;
            transition: background-color 0.3s ease;
        }

        .fhs-copy:hover {
            /*background-color: #000000;
            color: #31363F;*/
            opacity: 0.75;
        }

        .fhs-clear {
            /*opacity: 0.8;*/
            background
            opacity: 0.8;
            background-color: #c92211;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .fhs-clear:hover {
            opacity: 0.75;
            /*background-color: #c92211;*/
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #000000;
            margin-top: auto;
            padding: 1rem;
            font-size: 0.9rem;
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
        /*::selection{
            color: #fff;
            background: #007872;
        }*/
        hr {
            margin-top :70px
        }
        a.tgu-social-media-links {
            color: #000000;
            text-decoration: underline;
        }
        .result-btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php // Function to parse the string into a PHP array
// Function to parse the string into a PHP array
function parseStringToArray($string) {
    // Replace "Array" with "array"
    $string = str_replace('Array', 'array', $string);

    // Quote keys (even numeric keys)
    $string = preg_replace_callback('/\[(.*?)\] =>/', function ($matches) {
        $key = trim($matches[1]);
        // Always quote keys
        return "['" . addslashes($key) . "'] =>";
    }, $string);

    // Quote values (but leave numeric values unquoted)
    $string = preg_replace_callback('/=>\s*([^,\[\]\n]+)(?=[,\)\n])/', function ($matches) {
        $value = trim($matches[1]);
        // Quote non-numeric values
        if (!is_numeric($value) && !in_array(strtolower($value), ['array', 'null'], true)) {
            $value = "'" . addslashes($value) . "'";
        }
        return '=> ' . $value;
    }, $string);

    // Replace parentheses with square brackets for array syntax
    $string = str_replace(['(', ')'], ['[', ']'], $string);

    // Validate and include the string as PHP code
    $code = "<?php return $string;";
    $tempFile = tempnam(sys_get_temp_dir(), 'parse');
    file_put_contents($tempFile, $code);

    try {
        $array = include $tempFile;
    } catch (Throwable $e) {
        unlink($tempFile);
        throw new RuntimeException('Failed to parse string as array: ' . $e->getMessage());
    }

    unlink($tempFile);

    return $array;
}

    // session_start();
    if (isset($_POST) && !empty($_POST)) {
	    if (empty($_POST['csrf_token'])) {
	        // echo '<pre>'; print_r($_SESSION['csrf_token']); echo '</pre>';
	        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
	    }
	    $csrf_token = $_SESSION['csrf_token'];

	    $output = '';
	    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
	        if (isset($_POST['csrf_token'])) {
	        	// Trim and validate input without altering serialized format
	            $input = trim($_POST['text-to-unserilize']);

	            // Attempt to unserialize safely
	        	$data = unserialize($input);
	        	
	            if ($data === false && $input !== serialize(false)) {
		            $output = 'Invalid serialized string.';
		        } else {
		            $output = htmlspecialchars(print_r($data, true), ENT_QUOTES, 'UTF-8');
		        }
	        } else {
	            die('Invalid CSRF token.');
	        }
	    }

        if (isset($output)) {
            // $cleaned = preg_replace('/Array\s*\(/', '[', $output);
            // echo "<pre>";
            // print_r($cleaned);
            // echo "</pre>";

            // // Step 2: Wrap non-numeric keys in single quotes
            // $cleaned = preg_replace_callback('/\[(.*?)\]/', function ($matches) {
            //     $key = trim($matches[1]);
            //     // Check if the key is numeric; if not, wrap it in double quotes
            //     if (!is_numeric($key)) {
            //         $key = '"' . addslashes($key) . '"';
            //     }
            //     return "$key";
            // }, $cleaned);

            // echo "<pre>";
            // print_r($cleaned);
            // echo "</pre>";
            
            // $cleaned = preg_replace('/\](\s*=>\s*\[|\s*\n)/', '],$1', $cleaned); // Add commas after closing brackets
            // $cleaned = preg_replace('/\](\s*\n\s*\])/', '],$1', $cleaned); // Handle edge cases for nested arrays
            // $cleaned = preg_replace('/\](\s*\n\s*\))/', '],$1', $cleaned);

            // echo "<pre>";
            // print_r($cleaned);
            // echo "</pre>";
        }
    }
    ?>
    <div class="main">
        <div class="fhs-main-container">
            <!-- <div class="fhs-container"> -->
                <h1 class="fhs-heading">PHP Unserilzed Converter</h1>
                <div class="fhs-converter">
                    <form action="" method="post" id="unserilize-form" aria-labelledby="form-title">
                        <div style="display: block; position: relative;">
                        	<label class="" style="font-size: 16px;padding: 10px 0 5px 0;display: block;font-weight: bold;">Test your serialize array here :</label>
                            <textarea id="text-to-unserilize" class="text-to-unserilize" name="text-to-unserilize" placeholder="Paste your serialize array here" rows="5" required aria-required="true"><?php if (!empty($_POST['text-to-unserilize'])) { echo $_POST['text-to-unserilize']; } ?></textarea>
                        </div>

                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token, ENT_QUOTES, 'UTF-8'); ?>">

                        <div>
                            <button type="submit" aria-label="Submit the form" class="fhs-button">Unserilize</button>
                        </div>
                    </form>
                    <!-- <button onclick="fhs_convertToBangla()">Convert</button> -->
                </div>
                <?php if (isset($output)) { ?>
	                <div class="fhs-result">
	                    <textarea id="serilized-text" class="serilized-text" aria-label="Output of unserialized text"><?php if (isset($data)) { echo var_export($data, true); } ?></textarea>
	                    <button onclick="tgu_copyToClipboard()" class="result-btn fhs-copy">Copy to Clipboard</button>
	                    <button onclick="fhs_clearFields()" class="result-btn fhs-clear">× Clear</button>
	                </div>
	            <?php } ?>
            <!-- </div> -->
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
            // console.log(typeof(copyText));
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

        function fhs_clearFields() {
            // var serilizedText = document.getElementById("serilized-text");
            // var textToUnserilize = document.getElementById("text-to-unserilize");
            document.getElementById("serilized-text").value = '';
            document.getElementById("text-to-unserilize").value = '';

        }
    </script>
</body>
</html>