<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header-container">
            <h1 class="gradlent-font">Password Generator</h1>
            <h2>
                Generate a secure password for your system or application.
            </h2>
        </div>
        <div class="generated-password-container">
            The generated password is:  
            <span class="generated-password">
                <?php
                    if(isset($_GET['password']))
                    {
                        echo $_GET['password'];
                    }
                ?>
            </span>
        </div>
        <form action="traitement_index.php" method="post">
            <div class="options-container">
                <div class="length-container">
                    <p class="label">
                        PASSWORD LENGTH :
                        <span id="length-value">8 (Length max)</span>
                    </p>
                    <div class="length">
                        <span>4</span>
                        <div class="length-container">
                            <select name="length" class="length-select">
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                        <span>8</span>
                    </div>
                </div>
                <p class="label">SETTINGS</p>
                <div class="boolean-option-container">
                    <label for="include-uppercase">
                        Include Uppercase
                        <input type="checkbox" name="include-uppercase">
                        <div class="toggle-switch"></div>
                    </label>
                    <label for="include-lowercase">
                        Include Lowercase
                        <input type="checkbox" name="include-lowercase">
                        <div class="toggle-switch"></div>
                    </label>
                    <label for="include-numbers">
                        Include Numbers
                        <input type="checkbox" name="include-numbers">
                        <div class="toggle-switch"></div>
                    </label>
                    <label for="include-symbols">
                        special characters
                        <input type="checkbox" name="include-symbols">
                        <div class="toggle-switch"></div>
                    </label>
                </div>
            </div>
            <button type="submit" class="primary">
                Generate Password
            </button>
        </form>
    </div>
</body>
</html>  
