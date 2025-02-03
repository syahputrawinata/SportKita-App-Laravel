<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportKita - Elevate Your Style</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #89CFF0, #f0f5fc);
            color: #333;
            overflow: hidden;
            position: relative;
        }

        .container {
            text-align: center;
            max-width: 850px;
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            backdrop-filter: blur(15px);
            position: relative;
            z-index: 10;
            animation: zoomIn 1s ease-in-out;
        }

        h1 {
            font-size: 4.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #1a202c;
            animation: fadeInDown 1s ease-in-out;
            letter-spacing: 1.5px;
        }

        p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            color: #4a5568;
            line-height: 1.8;
            animation: fadeInUp 1.2s ease-in-out;
        }

        .btn {
            font-size: 1.2rem;
            padding: 1rem 3.5rem;
            border: none;
            border-radius: 50px;
            background: linear-gradient(90deg, #4e89e6, #3e68d8);
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.4s ease;
            text-decoration: none;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .btn:hover {
            background: linear-gradient(90deg, #3e68d8, #4e89e6);
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.25);
        }

        .background-effect {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: url('background.jpg'); /* Replace this with your uploaded image */
            background-size: cover;
            background-position: center;
            filter: blur(10px) brightness(0.9);
        }

        .floating-shoes {
            position: absolute;
            bottom: 8%;
            left: 50%;
            transform: translateX(-50%) scale(1.3);
            animation: floating 3s ease-in-out infinite, fadeIn 1s ease-in-out;
        }

        .floating-shoes img {
            width: 260px;
        }

        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            animation: moveParticles 6s linear infinite;
        }

        @keyframes fadeInDown {
            from {
                transform: translateY(-100px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes floating {
            0%, 100% {
                transform: translateX(-50%) translateY(0) scale(1.3);
            }
            50% {
                transform: translateX(-50%) translateY(-20px) scale(1.3);
            }
        }

        @keyframes moveParticles {
            from {
                transform: translateY(0) translateX(0);
                opacity: 1;
            }
            to {
                transform: translateY(100vh) translateX(50px);
                opacity: 0;
            }
        }

    </style>
</head>
<body>
    <div class="background-effect"></div>
    <div class="particles">
        <!-- Add floating particles dynamically using JS -->
    </div>
    <div class="container">
        <h1>Welcome to SportKita</h1>
        <p>Your gateway to premium shoes that combine comfort, durability, and style. Elevate every step with confidence.</p>
        <a href="login" class="btn">Bergabung</a>
    </div>
    <div class="floating-shoes">
        <!-- <img src="../assets/img/Landing/lebron.png" alt="Stylish Shoe"> Replace shoe.png with the actual image file -->
    </div>
    <script>
        // Particle effect
        const particlesContainer = document.querySelector('.particles');
        for (let i = 0; i < 70; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            particle.style.left = Math.random() * 100 + 'vw';
            particle.style.animationDuration = 4 + Math.random() * 3 + 's';
            particle.style.animationDelay = Math.random() * 6 + 's';
            particlesContainer.appendChild(particle);
        }
    </script>
</body>
</html>
