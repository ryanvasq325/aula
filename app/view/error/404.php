<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Erro 404 - Página não encontrada</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #1e1e2f, #2b2b40);
      font-family: 'Poppins', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      flex-direction: column;
      color: #fff;
      overflow: hidden;
    }

    .container {
      text-align: center;
      position: relative;
    }

    .ghost {
      position: relative;
      width: 150px;
      height: 180px;
      background: #fff;
      border-radius: 100px 100px 0 0;
      margin: 0 auto 20px;
      animation: float 3s ease-in-out infinite;
    }

    .ghost::before,
    .ghost::after {
      content: '';
      position: absolute;
      bottom: 0;
      width: 30px;
      height: 30px;
      background: #fff;
      border-radius: 50%;
    }

    .ghost::before {
      left: 15px;
    }

    .ghost::after {
      right: 15px;
    }

    .face {
      position: absolute;
      top: 45px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 20px;
      display: flex;
      justify-content: space-between;
    }

    .eye {
      width: 12px;
      height: 12px;
      background: #000;
      border-radius: 50%;
    }

    .mouth {
      position: absolute;
      bottom: 40px;
      left: 50%;
      transform: translateX(-50%);
      width: 30px;
      height: 10px;
      background: #000;
      border-radius: 0 0 10px 10px;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }

    h1 {
      font-size: 5rem;
      margin: 0;
      color: #58a6ff;
    }

    h2 {
      font-size: 1.5rem;
      color: #ccc;
      margin-bottom: 20px;
    }

    a {
      display: inline-block;
      text-decoration: none;
      background: #58a6ff;
      color: #fff;
      padding: 12px 25px;
      border-radius: 6px;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    a:hover {
      background: #2f81f7;
    }

    /* pequenas bolhas decorativas */
    .bubble {
      position: absolute;
      bottom: -50px;
      width: 20px;
      height: 20px;
      background: rgba(255,255,255,0.2);
      border-radius: 50%;
      animation: rise 8s infinite ease-in;
    }

    @keyframes rise {
      from {
        transform: translateY(0);
        opacity: 1;
      }
      to {
        transform: translateY(-800px);
        opacity: 0;
      }
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="ghost">
      <div class="face">
        <div class="eye"></div>
        <div class="eye"></div>
      </div>
      <div class="mouth"></div>
    </div>
    <h1>404</h1>
    <h2>Ops! Página não encontrada</h2>
    <a href="/">Voltar ao início</a>

    <!-- Bolhas aleatórias -->
    <div class="bubble" style="left:10%; animation-delay: 0s;"></div>
    <div class="bubble" style="left:25%; animation-delay: 2s; width:15px; height:15px;"></div>
    <div class="bubble" style="left:50%; animation-delay: 4s; width:25px; height:25px;"></div>
    <div class="bubble" style="left:75%; animation-delay: 1s;"></div>
    <div class="bubble" style="left:90%; animation-delay: 3s; width:18px; height:18px;"></div>
  </div>
</body>
</html>
