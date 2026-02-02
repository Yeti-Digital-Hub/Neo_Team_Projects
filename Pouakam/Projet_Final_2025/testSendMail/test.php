<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mot de passe oublié</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
      background-color: #f9f9f9;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .container {
      background-color: #fff8e1;           /* jaune-orangé clair */
      border-radius: 16px;
      padding: 40px 30px;
      width: 100%;
      max-width: 420px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      text-align: center;
    }

    h1 {
      font-size: 28px;
      font-weight: 600;
      color: #333;
      margin-bottom: 12px;
    }

    .subtitle {
      font-size: 15px;
      color: #555;
      line-height: 1.5;
      margin-bottom: 36px;
    }

    .email-label {
      font-size: 14px;
      font-weight: 500;
      color: #444;
      margin-bottom: 8px;
      text-align: left;
      display: block;
    }

    .email-input-wrapper {
      position: relative;
      margin-bottom: 28px;
    }

    .email-input {
      width: 100%;
      padding: 14px 16px 14px 48px;
      border: 1px solid #ddd;
      border-radius: 10px;
      font-size: 16px;
      background-color: white;
      transition: border-color 0.2s;
    }

    .email-input:focus {
      outline: none;
      border-color: #f9a825;
      box-shadow: 0 0 0 3px rgba(249, 168, 37, 0.15);
    }

    .email-icon {
      position: absolute;
      left: 16px;
      top: 50%;
      transform: translateY(-50%);
      color: #777;
      font-size: 20px;
    }

    .btn {
      background-color: #f9a825;          /* orange-jaune principal */
      color: white;
      border: none;
      padding: 16px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 10px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.2s;
    }

    .btn:hover {
      background-color: #e69500;
    }

    .btn:active {
      transform: translateY(1px);
    }

    @media (max-width: 480px) {
      .container {
        padding: 32px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Mot de passe oublié ?</h1>
    <p class="subtitle">
      Ne vous inquiétez pas cela peut arriver<br>
      à n'importe qui
    </p>

    <label class="email-label">Email</label>

    <div class="email-input-wrapper">
      <span class="email-icon">✉️</span>
      <input 
        type="email" 
        class="email-input" 
        value="pouakam.vanelle2004@gmail.com"
        readonly
      />
    </div>

    <button class="btn">Recevoir le code</button>
  </div>

</body>
</html>