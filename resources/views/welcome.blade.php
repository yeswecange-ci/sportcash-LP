<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0d0d0d">

    <title>SportCash — Oser Gagner !</title>
    <meta name="description" content="Avec SPORTCASH, chaque match devient une expérience unique. Rejoignez la première application 100 % ivoirienne pensée pour les passionnés de football et téléchargez-la dès aujourd'hui.">
    <meta name="keywords" content="SportCash, paris sportifs, football, Côte d'Ivoire, application mobile, paris en ligne, LONACI">
    <meta name="author" content="SportCash">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/') }}">

    {{-- Open Graph (Facebook, WhatsApp, LinkedIn…) --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="SportCash">
    <meta property="og:title" content="SportCash — Oser Gagner !">
    <meta property="og:description" content="Avec SPORTCASH, chaque match devient une expérience unique. La première application 100 % ivoirienne pensée pour les passionnés de football.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:image" content="{{ url('/logolonaci.png') }}">
    <meta property="og:image:alt" content="SportCash — Oser Gagner !">

    {{-- Twitter / X --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SportCash — Oser Gagner !">
    <meta name="twitter:description" content="Avec SPORTCASH, chaque match devient une expérience unique. La première application 100 % ivoirienne pensée pour les passionnés de football.">
    <meta name="twitter:image" content="{{ url('/logolonaci.png') }}">

    <link rel="icon" href="{{ url('/favicon.ico') }}" sizes="any">
    <style>
        :root {
            --bg: #0d0d0d;
            --accent: #f8b803;
            --border: #f1622d;
            --text: #ffffff;
            --muted: #cfcfcf;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            min-height: 100%;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            background: var(--bg);
            color: var(--text);
            -webkit-font-smoothing: antialiased;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 40px 20px;
        }

        .wrap {
            width: 100%;
            max-width: 440px;
            text-align: center;
        }

        .logo {
            display: block;
            width: 240px;
            max-width: 75%;
            height: auto;
            margin: 0 auto 44px;
        }

        .lead {
            font-size: 17px;
            line-height: 1.7;
            color: var(--muted);
            margin-bottom: 48px;
        }

        .lead p + p {
            margin-top: 18px;
        }

        .lead .highlight {
            color: var(--text);
            font-weight: 700;
        }

        .buttons {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            width: 100%;
            padding: 16px 20px;
            border: 1.5px solid var(--border);
            border-radius: 14px;
            background: transparent;
            color: var(--accent);
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            transition: background 0.2s ease, transform 0.1s ease;
        }

        .btn:hover {
            background: rgba(241, 98, 45, 0.12);
        }

        .btn:active {
            transform: scale(0.98);
        }

        .btn svg {
            width: 24px;
            height: 24px;
            flex-shrink: 0;
        }

        @media (min-width: 640px) {
            .logo { width: 280px; }
            .lead { font-size: 18px; }
        }
    </style>
</head>
<body>
    <div class="wrap">
        <img src="{{ url('/logolonaci.png') }}" alt="SportCash — Osez Gagner !" class="logo">

        <div class="lead">
            <p>⚽ Avec <span class="highlight">SPORTCASH</span>, chaque match devient une expérience unique !</p>
            <p>Rejoignez la première application 100 % ivoirienne pensée pour les passionnés de football et vivez toutes les émotions du jeu.</p>
            <p>📲 Téléchargez l'application dès aujourd'hui.</p>
        </div>

        <div class="buttons">
            <a href="https://apps.apple.com/ci/app/sportcash-civ/id6738644176" class="btn">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"/>
                </svg>
                <span>Téléchargez sur App Store</span>
            </a>
            <a href="https://sportcash.ci/external_cms/SPORTCASH/app/SportCash_1.0.2.apk" class="btn">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#34a853" d="M3.6 21.3 13.1 12 3.6 2.7c-.34.2-.6.6-.6 1.1v16.4c0 .5.26.9.6 1.1z"/>
                    <path fill="#fbbc04" d="M16.8 8.6 13.1 12l3.7 3.4 3.9-2.2c.7-.4.7-1.6 0-2z"/>
                    <path fill="#ea4335" d="M3.6 2.7 13.1 12l3.7-3.4L5.9 2.1c-.8-.45-1.7-.05-2.3.6z"/>
                    <path fill="#4285f4" d="M3.6 21.3c.6.65 1.5 1.05 2.3.6l10.9-6.5L13.1 12z"/>
                </svg>
                <span>Téléchargez sur Play Store</span>
            </a>
        </div>
    </div>
</body>
</html>
