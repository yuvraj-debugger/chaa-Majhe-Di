<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chaa Majhe Di — Authentic Taste of Tradition</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Outfit:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { cream: '#FDF6EC', ink: '#1A0A05', gold: '#C9A84C', rust: '#8C1C13' },
                    fontFamily: { serif: ['Cormorant Garamond', 'serif'], sans: ['Outfit', 'sans-serif'] }
                }
            }
        }
    </script>

    <style>
        :root {
            --cream: #FDF6EC;
            --ink: #1A0A05;
            --gold: #C9A84C;
            --gold2: #E8C97A;
            --rust: #8C1C13;
            --ease: cubic-bezier(0.16, 1, 0.3, 1);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--cream);
            color: var(--ink);
            font-family: 'Outfit', sans-serif;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Cormorant Garamond', serif;
        }

        /* Grain */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            z-index: 9000;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
            opacity: 0.03;
            mix-blend-mode: overlay;
        }



        /* ── Loader ── */
        #loader {
            position: fixed;
            inset: 0;
            z-index: 8000;
            background: var(--ink);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: opacity .9s var(--ease), visibility .9s;
        }

        #loader.gone {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .ld-word {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2rem, 6vw, 4.5rem);
            color: var(--gold);
            letter-spacing: .45em;
            font-weight: 300;
            text-transform: uppercase;
            animation: ldPulse 2s ease-in-out infinite;
        }

        .ld-line {
            height: 1px;
            width: 0;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
            margin-top: 1.5rem;
            animation: ldLine 2s var(--ease) forwards;
        }

        @keyframes ldPulse {

            0%,
            100% {
                opacity: .35;
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes ldLine {
            to {
                width: 220px;
            }
        }

        /* ── Nav ── */
        #nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 500;
            padding: 2.5rem 4rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: padding .5s var(--ease), background .5s, box-shadow .5s;
        }

        #nav.sc {
            padding: 1.1rem 4rem;
            background: rgba(253, 246, 236, .95);
            backdrop-filter: blur(24px);
            box-shadow: 0 1px 0 rgba(201, 168, 76, .15);
        }

        #nav.sc .nl,
        .nb {
            color: var(--ink);
        }

        .nb {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.4rem;
            font-weight: 600;
            letter-spacing: .35em;
            text-transform: uppercase;
            color: white;
            transition: color .4s;
            text-decoration: none;
        }

        .nl {
            color: white;
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            position: relative;
            transition: color .3s;
            text-decoration: none;
        }

        .nl::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--gold);
            transition: width .4s var(--ease);
        }

        .nl:hover {
            color: var(--gold);
        }

        .nl:hover::after {
            width: 100%;
        }

        /* ── Hero ── */
        .hero {
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0d0603;
        }

        .h-img {
            position: absolute;
            inset: 0;
            background: url('https://images.unsplash.com/photo-1544787210-2283dc98276f?auto=format&fit=crop&w=1920&q=85') center/cover;
            opacity: .55;
            animation: kb 28s ease-in-out infinite alternate;
        }

        @keyframes kb {
            0% {
                transform: scale(1) translate(0, 0);
            }

            100% {
                transform: scale(1.14) translate(-1.5%, -2%);
            }
        }

        .h-vig {
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 80% 80% at 50% 50%, transparent 25%, rgba(13, 6, 3, .92) 100%), linear-gradient(180deg, rgba(13, 6, 3, .65) 0%, transparent 25%, transparent 65%, rgba(13, 6, 3, .85) 100%);
        }

        .h-glow {
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 55% 45% at 70% 25%, rgba(201, 168, 76, .13) 0%, transparent 65%);
            animation: hglow 10s ease-in-out infinite alternate;
        }

        @keyframes hglow {
            0% {
                opacity: .4;
                transform: translate(0, 0);
            }

            100% {
                opacity: 1;
                transform: translate(-4%, 4%);
            }
        }

        .h-scan {
            position: absolute;
            inset: 0;
            background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(255, 255, 255, .006) 2px, rgba(255, 255, 255, .006) 4px);
        }

        .steam-wrap {
            position: absolute;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .steam {
            position: absolute;
            bottom: 0;
            width: 2px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .3);
            filter: blur(7px);
            animation: sr2 linear infinite;
        }

        @keyframes sr2 {
            0% {
                transform: translateY(0) scaleX(1);
                opacity: 0;
            }

            15% {
                opacity: .7;
            }

            85% {
                opacity: .4;
            }

            100% {
                transform: translateY(-80vh) scaleX(3.5);
                opacity: 0;
            }
        }

        .h-inner {
            position: relative;
            z-index: 10;
            text-align: center;
            max-width: 58rem;
            padding: 2rem;
        }

        .htag {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            font-size: 9px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: var(--gold);
            font-weight: 600;
            opacity: 0;
            transform: translateY(16px);
            animation: fu .9s var(--ease) .5s forwards;
        }

        .htag::before,
        .htag::after {
            content: '';
            width: 28px;
            height: 1px;
            background: var(--gold);
            opacity: .5;
        }

        .htitle {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(4rem, 10vw, 9rem);
            font-weight: 300;
            line-height: 1.05;
            color: white;
            margin: 1.5rem 0 2.5rem;
            text-shadow: 0 0 80px rgba(201, 168, 76, .22);
            opacity: 0;
            transform: translateY(45px);
            animation: fu 1.1s var(--ease) .8s forwards;
        }

        .htitle em {
            font-style: italic;
            font-weight: 700;
            color: var(--gold2);
        }

        .hdiv {
            width: 0;
            height: 1px;
            margin: 0 auto 2.5rem;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
            opacity: 0;
            animation: dg 1s var(--ease) 1.4s forwards;
        }

        @keyframes dg {
            to {
                width: 160px;
                opacity: 1;
            }
        }

        .hsub {
            font-size: 11px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .5);
            line-height: 2.3;
            max-width: 32rem;
            margin: 0 auto 4rem;
            opacity: 0;
            transform: translateY(16px);
            animation: fu .9s var(--ease) 1.7s forwards;
        }

        .hcta {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            opacity: 0;
            transform: translateY(16px);
            animation: fu .9s var(--ease) 2s forwards;
        }

        @keyframes fu {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .scrl {
            position: absolute;
            bottom: 2.5rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            opacity: 0;
            animation: fu .8s var(--ease) 2.5s forwards;
        }

        .scrl span {
            font-size: 7px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .35);
        }

        .scrl-ln {
            width: 1px;
            height: 52px;
            background: linear-gradient(180deg, rgba(201, 168, 76, .9), transparent);
            animation: sp 2.2s ease-in-out infinite;
        }

        @keyframes sp {

            0%,
            100% {
                opacity: .5;
                transform: scaleY(1);
            }

            50% {
                opacity: 1;
                transform: scaleY(1.35);
            }
        }

        /* ── Marquee ── */
        .mq-out {
            overflow: hidden;
            background: var(--gold);
            padding: .85rem 0;
        }

        .mq-tr {
            display: flex;
            gap: 3rem;
            white-space: nowrap;
            animation: mq 16s linear infinite;
        }

        .mq-tr span {
            font-size: 9px;
            letter-spacing: 4px;
            text-transform: uppercase;
            font-weight: 700;
            color: white;
            opacity: .85;
        }

        @keyframes mq {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* ── Scroll Reveal ── */
        .sr {
            opacity: 0;
            transform: translateY(55px);
            transition: opacity .95s var(--ease), transform .95s var(--ease);
        }

        .srl {
            opacity: 0;
            transform: translateX(-55px);
            transition: opacity .95s var(--ease), transform .95s var(--ease);
        }

        .srr {
            opacity: 0;
            transform: translateX(55px);
            transition: opacity .95s var(--ease), transform .95s var(--ease);
        }

        .srs {
            opacity: 0;
            transform: scale(.87);
            transition: opacity .95s var(--ease), transform .95s var(--ease);
        }

        .sr.in,
        .srl.in,
        .srr.in,
        .srs.in {
            opacity: 1;
            transform: none;
        }

        .d1 {
            transition-delay: .1s;
        }

        .d2 {
            transition-delay: .2s;
        }

        .d3 {
            transition-delay: .3s;
        }

        .d4 {
            transition-delay: .4s;
        }

        .d5 {
            transition-delay: .5s;
        }

        .gl {
            height: 1px;
            width: 0;
            background: var(--gold);
            transition: width 1.1s var(--ease) .1s;
            margin: 1.5rem 0;
        }

        .gl.cx {
            margin-left: auto;
            margin-right: auto;
        }

        .gl.in {
            width: 80px;
        }

        /* ── Buttons ── */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1.1rem 3rem;
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            transition: color .4s;
        }

        .btn:hover {
            opacity: .85;
        }

        .btn-g {
            background: var(--gold);
            color: white;
        }

        .btn-g:hover {
            opacity: .85;
        }

        .btn-o {
            border: 1px solid rgba(255, 255, 255, .35);
            color: white;
        }

        .btn-o:hover {
            background: var(--gold);
            color: white;
            border-color: var(--gold);
        }

        .btn-d {
            border: 1px solid rgba(26, 10, 5, .2);
            color: var(--ink);
        }

        .btn-d:hover {
            background: var(--gold);
            color: white;
            border-color: var(--gold);
        }

        .mag {
            display: inline-block;
        }

        /* ── About ── */
        .abt {
            padding: 12rem 5rem;
            position: relative;
            background: var(--ink);
            color: white;
            overflow: hidden;
            border-top: 1px solid rgba(201, 168, 76, .1);
        }

        .abt-mesh {
            position: absolute;
            inset: 0;
            z-index: 0;
            background:
                radial-gradient(ellipse 50% 50% at 90% 10%, rgba(201, 168, 76, .08) 0%, transparent 70%),
                radial-gradient(ellipse 50% 50% at 10% 90%, rgba(140, 28, 19, .08) 0%, transparent 70%);
            opacity: .8;
        }

        .abt-grid {
            position: absolute;
            inset: 0;
            z-index: 0;
            background:
                repeating-linear-gradient(0deg, transparent, transparent 60px, rgba(255, 255, 255, .008) 60px, rgba(255, 255, 255, .008) 61px),
                repeating-linear-gradient(90deg, transparent, transparent 60px, rgba(255, 255, 255, .008) 60px, rgba(255, 255, 255, .008) 61px);
        }

        .abt-iw {
            position: relative;
            border-radius: 2px;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 60px 120px rgba(0, 0, 0, .4);
        }

        .abt-iw img {
            display: block;
            width: 100%;
            height: 600px;
            object-fit: cover;
            transition: transform 1.8s var(--ease), filter 1s;
            filter: grayscale(.6);
        }

        .abt-iw:hover img {
            transform: scale(1.06);
            filter: grayscale(0);
        }

        .abt-iw::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(201, 168, 76, .07), transparent 55%);
        }

        .stat-c {
            position: absolute;
            bottom: -3rem;
            left: -3rem;
            background: var(--ink);
            padding: 2.5rem 3rem;
            border: 1px solid rgba(201, 168, 76, .2);
            box-shadow: 0 30px 60px rgba(0, 0, 0, .3);
            transition: transform .6s var(--ease), box-shadow .6s;
            z-index: 2;
        }

        .stat-c:hover {
            transform: translateY(-6px);
            box-shadow: 0 40px 80px rgba(0, 0, 0, .45);
        }

        .sn {
            font-family: 'Cormorant Garamond', serif;
            font-size: 4.5rem;
            font-weight: 900;
            font-style: italic;
            color: var(--gold);
            line-height: 1;
            display: block;
        }

        .sl {
            font-size: 8px;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-weight: 700;
            opacity: .45;
        }

        /* ── Features ── */
        .feats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            border-top: 1px solid rgba(201, 168, 76, .1);
            border-bottom: 1px solid rgba(201, 168, 76, .1);
            background: var(--ink);
            color: white;
        }

        .fi {
            padding: 5rem 4rem;
            border-right: 1px solid rgba(201, 168, 76, .1);
            position: relative;
            overflow: hidden;
            transition: background .5s;
        }

        .fi:last-child {
            border-right: none;
        }

        .fi::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(201, 168, 76, .06) 0%, transparent 55%);
            opacity: 0;
            transition: opacity .5s;
        }

        .fi:hover::before {
            opacity: 1;
        }

        .fi-n {
            font-family: 'Cormorant Garamond', serif;
            font-size: 5rem;
            font-weight: 700;
            color: var(--gold);
            opacity: .1;
            line-height: 1;
            margin-bottom: .5rem;
            transition: opacity .5s;
        }

        .fi:hover .fi-n {
            opacity: .2;
        }

        .fi-ico {
            font-size: 1.9rem;
            display: block;
            margin-bottom: 1.5rem;
        }

        .fi-t {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.9rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: white;
        }

        .fi-d {
            font-size: 12px;
            opacity: .45;
            line-height: 2;
            letter-spacing: .3px;
        }

        /* ── Menu ── */
        .menu-s {
            padding: 12rem 5rem;
            position: relative;
            background: var(--ink);
            color: white;
            overflow: hidden;
            border-top: 1px solid rgba(201, 168, 76, .1);
        }

        .menu-mesh {
            position: absolute;
            inset: 0;
            z-index: 0;
            background:
                radial-gradient(ellipse 40% 40% at 0% 10%, rgba(201, 168, 76, .08) 0%, transparent 70%),
                radial-gradient(ellipse 40% 40% at 100% 90%, rgba(140, 28, 19, .08) 0%, transparent 70%);
        }

        .menu-grid {
            position: absolute;
            inset: 0;
            z-index: 0;
            background:
                repeating-linear-gradient(0deg, transparent, transparent 60px, rgba(255, 255, 255, .005) 60px, rgba(255, 255, 255, .005) 61px),
                repeating-linear-gradient(90deg, transparent, transparent 60px, rgba(255, 255, 255, .005) 60px, rgba(255, 255, 255, .005) 61px);
        }

        .mc {
            position: relative;
            overflow: hidden;
            background: rgba(255, 255, 255, .02);
            border: 1px solid rgba(201, 168, 76, .15);
            transition: all .8s var(--ease);
            z-index: 1;
            padding: 1rem;
            /* Container padding for 'border-within-border' look */
        }

        .mc::before {
            content: '';
            position: absolute;
            inset: .5rem;
            border: 1px solid rgba(201, 168, 76, .08);
            pointer-events: none;
            transition: border-color .6s;
        }

        .mc:hover {
            transform: translateY(-22px) scale(1.02);
            box-shadow: 0 80px 140px rgba(0, 0, 0, .6), 0 0 0 1px rgba(201, 168, 76, .45);
            border-color: var(--gold);
            background: rgba(255, 255, 255, .05);
        }

        .mc:hover::before {
            border-color: rgba(201, 168, 76, .35);
        }

        .mc-img {
            overflow: hidden;
            aspect-ratio: 1/1;
            position: relative;
            border: 1px solid rgba(201, 168, 76, .1);
        }

        .mc-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1.8s var(--ease), filter 1s;
            filter: grayscale(.6) brightness(.85);
        }

        .mc:hover .mc-img img {
            transform: scale(1.15) rotate(2deg);
            filter: grayscale(0) brightness(1);
        }

        .mc-img::after {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at center, transparent 30%, rgba(26, 10, 5, .4) 100%);
            opacity: .8;
            transition: opacity .6s;
        }

        .mc:hover .mc-img::after {
            opacity: .3;
        }

        .ptag {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: var(--ink);
            color: var(--gold);
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.1rem;
            font-weight: 700;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 1px solid var(--gold);
            transform: scale(0);
            opacity: 0;
            transition: all .6s var(--ease);
            z-index: 5;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .4);
        }

        .mc:hover .ptag {
            opacity: 1;
            transform: scale(1) rotate(12deg);
        }

        .mc-b {
            padding: 1.8rem 1.6rem;
        }

        .mc-b h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.65rem;
            font-weight: 700;
            margin-bottom: .35rem;
        }

        .mc-b p {
            font-size: 9px;
            letter-spacing: 3px;
            text-transform: uppercase;
            opacity: .3;
            margin-bottom: 1.5rem;
        }

        .mc-f {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid rgba(201, 168, 76, .1);
            padding-top: 1.3rem;
        }

        .pst {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--gold);
        }

        .abl {
            font-size: 8px;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            font-weight: 700;
            border-bottom: 1px solid var(--gold);
            padding-bottom: 2px;
            text-decoration: none;
            color: inherit;
            transition: color .3s, letter-spacing .3s;
        }

        .abl:hover {
            color: var(--gold);
            letter-spacing: 4px;
        }

        /* ── Quote ── */
        .q-sec {
            position: relative;
            overflow: hidden;
            padding: 13rem 5rem;
            background: var(--ink);
            text-align: center;
        }

        .q-bg {
            position: absolute;
            inset: 0;
            background: url('https://images.unsplash.com/photo-1571934811356-5cc061b6821f?auto=format&fit=crop&w=1920&q=60') center/cover;
            opacity: .12;
            animation: qbg 22s ease-in-out infinite alternate;
        }

        @keyframes qbg {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.09);
            }
        }

        .q-glow {
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 70% 60% at 50% 50%, rgba(201, 168, 76, .09) 0%, transparent 65%);
        }

        .q-lines {
            position: absolute;
            inset: 0;
            background: repeating-linear-gradient(90deg, transparent, transparent 80px, rgba(201, 168, 76, .022) 80px, rgba(201, 168, 76, .022) 81px);
        }

        blockquote {
            position: relative;
            z-index: 2;
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2rem, 5vw, 4.5rem);
            font-weight: 300;
            font-style: italic;
            color: white;
            line-height: 1.45;
            max-width: 50rem;
            margin: 0 auto 2rem;
        }

        blockquote em {
            color: var(--gold2);
            font-style: normal;
            font-weight: 600;
        }

        cite {
            font-size: 8px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .3);
            position: relative;
            z-index: 2;
            display: block;
            margin-top: 1.5rem;
        }

        /* ── Partner ── */
        .part {
            position: relative;
            overflow: hidden;
            padding: 13rem 5rem;
            background: var(--ink);
            color: white;
            text-align: center;
        }

        .part-mesh {
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 50% 80% at 20% 50%, rgba(140, 28, 19, .28) 0%, transparent 60%), radial-gradient(ellipse 50% 80% at 80% 50%, rgba(201, 168, 76, .11) 0%, transparent 60%);
            animation: mm 12s ease-in-out infinite alternate;
        }

        @keyframes mm {
            0% {
                opacity: .5;
            }

            100% {
                opacity: 1;
            }
        }

        .part-grid {
            position: absolute;
            inset: 0;
            background: repeating-linear-gradient(0deg, transparent, transparent 40px, rgba(255, 255, 255, .016) 40px, rgba(255, 255, 255, .016) 41px), repeating-linear-gradient(90deg, transparent, transparent 40px, rgba(255, 255, 255, .016) 40px, rgba(255, 255, 255, .016) 41px);
        }

        /* ── Gallery ── */
        .gal-s {
            padding: 12rem 0 12rem 5rem;
            position: relative;
            background: var(--ink);
            color: white;
            overflow: hidden;
            border-top: 1px solid rgba(201, 168, 76, .1);
        }

        .swiper-slide {
            width: 380px;
        }

        .gw {
            position: relative;
            overflow: hidden;
            border-radius: 2px;
            box-shadow: 0 24px 60px rgba(26, 10, 5, .14);
        }

        .gw img {
            display: block;
            width: 100%;
            height: 490px;
            object-fit: cover;
            filter: grayscale(.5);
            transition: transform 1.6s var(--ease), filter 1s;
        }

        .gw:hover img {
            transform: scale(1.09);
            filter: grayscale(0);
        }

        .gov {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(26, 10, 5, .65) 0%, transparent 55%);
            opacity: 0;
            transition: opacity .5s;
        }

        .gw:hover .gov {
            opacity: 1;
        }

        .gcap {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            color: white;
            font-size: 9px;
            letter-spacing: 3px;
            text-transform: uppercase;
            transform: translateY(10px);
            opacity: 0;
            transition: transform .5s var(--ease), opacity .5s;
        }

        .gw:hover .gcap {
            transform: translateY(0);
            opacity: 1;
        }

        /* ─────────────────────────────────────────
     FOOTER — Redesigned
  ───────────────────────────────────────── */
        footer {
            position: relative;
            background: var(--ink);
            color: white;
            overflow: hidden;
            padding: 0;
            border-top: none;
        }

        /* Grain overlay */
        footer::before {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 1;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
            opacity: 0.04;
            mix-blend-mode: overlay;
        }

        /* Mesh gradients */
        .ft-mesh {
            position: absolute;
            inset: 0;
            z-index: 0;
            background:
                radial-gradient(ellipse 60% 55% at 8% 90%, rgba(140, 28, 19, .35) 0%, transparent 65%),
                radial-gradient(ellipse 50% 50% at 95% 10%, rgba(201, 168, 76, .12) 0%, transparent 65%),
                radial-gradient(ellipse 35% 40% at 55% 50%, rgba(201, 168, 76, .05) 0%, transparent 70%);
            animation: meshAnim 14s ease-in-out infinite alternate;
        }

        @keyframes meshAnim {
            0% {
                opacity: .7;
                transform: scale(1);
            }

            100% {
                opacity: 1;
                transform: scale(1.04);
            }
        }

        /* Subtle grid lines */
        .ft-grid {
            position: absolute;
            inset: 0;
            z-index: 0;
            background:
                repeating-linear-gradient(0deg, transparent, transparent 60px, rgba(255, 255, 255, .018) 60px, rgba(255, 255, 255, .018) 61px),
                repeating-linear-gradient(90deg, transparent, transparent 60px, rgba(255, 255, 255, .018) 60px, rgba(255, 255, 255, .018) 61px);
        }

        /* ─────────────────────────────────────────
     BIG BRAND BAND
  ───────────────────────────────────────── */
        .ft-headline {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 7rem 5rem 0;
            overflow: hidden;
        }

        .ft-headline-bg {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(6rem, 16vw, 18rem);
            font-weight: 700;
            font-style: italic;
            letter-spacing: -.01em;
            line-height: 1;
            color: rgba(255, 255, 255, .028);
            pointer-events: none;
            user-select: none;
            white-space: nowrap;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .ft-logo-wrap {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            gap: 1.2rem;
            position: relative;
        }

        .ft-logo-ring {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            border: 1px solid rgba(201, 168, 76, .35);
            padding: 5px;
            position: relative;
            animation: rotateSlow 30s linear infinite;
        }

        @keyframes rotateSlow {
            to {
                transform: rotate(360deg);
            }
        }

        .ft-logo-ring img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            animation: rotateSlow 30s linear infinite reverse;
            /* counter-rotate so logo stays still */
        }

        .ft-logo-ring::before {
            content: '';
            position: absolute;
            inset: -6px;
            border-radius: 50%;
            border: 1px dashed rgba(201, 168, 76, .2);
        }

        .ft-brand-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(1.8rem, 3vw, 2.8rem);
            font-weight: 300;
            letter-spacing: .55em;
            text-transform: uppercase;
            color: white;
        }

        .ft-brand-tagline {
            font-size: 8px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: var(--gold);
            font-weight: 600;
        }

        /* ─────────────────────────────────────────
     GOLD DIVIDER
  ───────────────────────────────────────── */
        .ft-divider {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            padding: 5rem 5rem 0;
        }

        .ft-divider-line {
            flex: 1;
            max-width: 340px;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(201, 168, 76, .5));
        }

        .ft-divider-line.rev {
            background: linear-gradient(270deg, transparent, rgba(201, 168, 76, .5));
        }

        .ft-divider-ornament {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            color: var(--gold);
            opacity: .8;
            line-height: 1;
        }

        /* ─────────────────────────────────────────
     MAIN FOOTER GRID
  ───────────────────────────────────────── */
        .ft-main {
            position: relative;
            z-index: 2;
            max-width: 1380px;
            margin: 0 auto;
            padding: 5rem 5rem 6rem;
            display: grid;
            grid-template-columns: 1.8fr 1fr 1fr 1.5fr;
            gap: 4rem;
        }

        /* ── Column: About ── */
        .ft-about p {
            font-size: 12px;
            line-height: 2.2;
            color: rgba(255, 255, 255, .38);
            margin-bottom: 2.5rem;
            max-width: 26rem;
        }

        /* Social icons */
        .ft-social {
            display: flex;
            gap: 1rem;
            margin-top: .5rem;
        }

        .ft-soc-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 1px solid rgba(201, 168, 76, .2);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: rgba(255, 255, 255, .5);
            font-size: .9rem;
            font-weight: 700;
            letter-spacing: 0;
            transition: all .4s var(--ease);
            position: relative;
            overflow: hidden;
        }

        .ft-soc-btn::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 50%;
            background: var(--gold);
            transform: scale(0);
            transition: transform .4s var(--ease);
        }

        .ft-soc-btn:hover {
            color: white;
            border-color: var(--gold);
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(201, 168, 76, .25);
        }

        .ft-soc-btn:hover::before {
            transform: scale(1);
        }

        .ft-soc-btn span {
            position: relative;
            z-index: 1;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* ── Column: Nav Links ── */
        .ft-col-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.35rem;
            font-weight: 600;
            color: white;
            letter-spacing: .12em;
            margin-bottom: 2.2rem;
            position: relative;
            display: inline-block;
        }

        .ft-col-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 22px;
            height: 1px;
            background: var(--gold);
        }

        .ft-link {
            display: block;
            font-size: 9px;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            font-weight: 600;
            color: rgba(255, 255, 255, .38);
            text-decoration: none;
            margin-bottom: 1.3rem;
            width: fit-content;
            position: relative;
            transition: color .3s, letter-spacing .3s;
        }

        .ft-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--gold);
            transition: width .4s var(--ease);
        }

        .ft-link:hover {
            color: var(--gold);
            letter-spacing: 3.5px;
        }

        .ft-link:hover::after {
            width: 100%;
        }

        /* ── Column: Contact ── */
        .ft-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.6rem;
        }

        .ft-contact-icon {
            width: 32px;
            height: 32px;
            border: 1px solid rgba(201, 168, 76, .18);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .75rem;
            flex-shrink: 0;
            margin-top: .1rem;
            color: var(--gold);
            transition: all .3s;
        }

        .ft-contact-item:hover .ft-contact-icon {
            background: var(--gold);
            color: white;
            border-color: var(--gold);
        }

        .ft-contact-text {
            font-size: 10px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .38);
            line-height: 1.9;
            text-decoration: none;
            transition: color .3s;
        }

        .ft-contact-text:hover {
            color: rgba(255, 255, 255, .7);
        }

        /* ── Column: Newsletter ── */
        .ft-nl-desc {
            font-size: 11px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .3);
            line-height: 2.2;
            margin-bottom: 2.2rem;
        }

        .ft-nl-form {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .ft-nl-input {
            width: 100%;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(201, 168, 76, .2);
            padding: 1.1rem 5.5rem 1.1rem 1.4rem;
            font-family: 'Outfit', sans-serif;
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: white;
            outline: none;
            border-radius: 1px;
            transition: border-color .4s, background .4s;
        }

        .ft-nl-input::placeholder {
            color: rgba(255, 255, 255, .22);
        }

        .ft-nl-input:focus {
            border-color: var(--gold);
            background: rgba(201, 168, 76, .06);
        }

        .ft-nl-btn {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            padding: 0 1.4rem;
            background: var(--gold);
            border: none;
            color: white;
            font-family: 'Outfit', sans-serif;
            font-size: 8px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background .3s, letter-spacing .3s;
        }

        .ft-nl-btn:hover {
            background: #b8963c;
            letter-spacing: 4px;
        }

        .ft-nl-note {
            font-size: 8px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .2);
        }

        /* ─────────────────────────────────────────
     AWARDS / STATS BAND
  ───────────────────────────────────────── */
        .ft-stats-band {
            position: relative;
            z-index: 2;
            border-top: 1px solid rgba(201, 168, 76, .1);
            border-bottom: 1px solid rgba(201, 168, 76, .1);
            max-width: 1380px;
            margin: 0 auto;
            padding: 0 5rem;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .ft-stat {
            padding: 3rem 2rem;
            text-align: center;
            position: relative;
            transition: background .4s;
        }

        .ft-stat+.ft-stat::before {
            content: '';
            position: absolute;
            left: 0;
            top: 20%;
            height: 60%;
            width: 1px;
            background: rgba(201, 168, 76, .1);
        }

        .ft-stat:hover {
            background: rgba(201, 168, 76, .04);
        }

        .ft-stat-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2.5rem, 4vw, 4rem);
            font-weight: 700;
            font-style: italic;
            color: var(--gold);
            line-height: 1;
            display: block;
            margin-bottom: .5rem;
        }

        .ft-stat-num:hover {
            transform: scale(1.1);
            transition: transform .3s var(--ease);
        }

        .ft-stat-lbl {
            font-size: 7px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .3);
            font-weight: 600;
        }

        /* ─────────────────────────────────────────
     BOTTOM BAR
  ───────────────────────────────────────── */
        .ft-bottom {
            position: relative;
            z-index: 2;
            max-width: 1380px;
            margin: 0 auto;
            padding: 2.5rem 5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .ft-bottom-copy {
            font-size: 8px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .22);
        }

        .ft-bottom-craft {
            display: flex;
            align-items: center;
            gap: .8rem;
            font-size: 8px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .22);
        }

        .ft-bottom-craft span {
            color: var(--gold);
            font-family: 'Cormorant Garamond', serif;
            font-size: 1rem;
            font-style: italic;
        }

        .ft-bottom-links {
            display: flex;
            gap: 2.5rem;
        }

        .ft-bottom-links a {
            font-size: 8px;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .22);
            text-decoration: none;
            transition: color .3s;
            position: relative;
        }

        .ft-bottom-links a:hover {
            color: var(--gold);
        }

        /* ─────────────────────────────────────────
     RESPONSIVE
  ───────────────────────────────────────── */
        @media (max-width: 1024px) {
            .ft-main {
                grid-template-columns: 1fr 1fr;
            }

            .ft-stats-band {
                grid-template-columns: repeat(2, 1fr);
            }

            .ft-stats-band .ft-stat:nth-child(2)::before {
                display: none;
            }
        }

        @media (max-width: 640px) {
            .ft-main {
                grid-template-columns: 1fr;
                padding: 4rem 2rem 4rem;
                gap: 3rem;
            }

            .ft-headline {
                padding: 5rem 2rem 0;
            }

            .ft-divider {
                padding: 4rem 2rem 0;
            }

            .ft-stats-band {
                grid-template-columns: 1fr 1fr;
                padding: 0 2rem;
            }

            .ft-bottom {
                padding: 2rem;
                flex-direction: column;
                text-align: center;
            }

            .ft-bottom-links {
                justify-content: center;
            }
        }

        .eyebrow {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.2rem;
            font-style: italic;
            color: var(--gold);
            display: block;
            margin-bottom: 1rem;
        }

        @media(max-width:768px) {
            #nav {
                padding: 1.5rem 1.5rem;
            }

            #nav.sc {
                padding: 1rem 1.5rem;
            }

            .abt,
            .menu-s,
            .gal-s {
                padding: 5rem 1.5rem;
            }

            .feats {
                grid-template-columns: 1fr;
            }

            .fi {
                border-right: none;
                border-bottom: 1px solid rgba(201, 168, 76, .1);
            }

            .fg {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .stat-c {
                display: none;
            }
        }
    </style>
</head>

<body>


    <!-- Loader -->
    <div id="loader">
        <div class="ld-word">Chaa Majhe Di</div>
        <div class="ld-line"></div>
    </div>

    <!-- Nav -->
    <nav id="nav">
        <div style="display:flex;align-items:center;gap:1.5rem;">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="mag"
                style="width:44px;height:44px;border-radius:50%;border:1px solid rgba(255,255,255,.2);">
            <span class="nb">Chaa Majhe Di</span>
        </div>
        <div style="display:flex;gap:3rem;align-items:center;">
            <a href="/" class="nl">Home</a>
            <a href="#about" class="nl">About</a>
            <a href="#menu" class="nl">Menu</a>
            <a href="#gallery" class="nl">Gallery</a>
            <a href="#contact" class="nl">Contact</a>
        </div>
        <div style="display:flex;align-items:center;gap:2rem;">
            <a href="{{ route('login') }}" class="nl">Login</a>
            <span class="mag"><a href="{{ route('register') }}" class="btn btn-g">Register</a></span>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="h-img"></div>
        <div class="h-vig"></div>
        <div class="h-glow"></div>
        <div class="h-scan"></div>
        <div class="steam-wrap" id="sw"></div>
        <div class="h-inner">
            <span class="htag">Welcome to Royalty</span>
            <h1 class="htitle">A Sip of <br><em>Pure Tradition.</em></h1>
            <div class="hdiv"></div>
            <p class="hsub">Experience the heritage of authentic hand-crafted tea brewed for the modern connoisseur.</p>
            <div class="hcta">
                <span class="mag"><a href="#menu" class="btn btn-g">Explore Menu</a></span>
                <span class="mag"><a href="#about" class="btn btn-o">Our Story</a></span>
            </div>
        </div>
        <div class="scrl">
            <span>Scroll</span>
            <div class="scrl-ln"></div>
        </div>
    </section>

    <!-- Marquee -->
    <div class="mq-out">
        <div class="mq-tr">
            <span>Authentic Tradition</span><span>✦</span><span>Hand-Crafted Blends</span><span>✦</span><span>Punjab
                Heritage</span><span>✦</span><span>Premium Chaa</span><span>✦</span><span>Kulhad
                Experience</span><span>✦</span><span>Since 2024</span><span>✦</span>
            <span>Authentic Tradition</span><span>✦</span><span>Hand-Crafted Blends</span><span>✦</span><span>Punjab
                Heritage</span><span>✦</span><span>Premium Chaa</span><span>✦</span><span>Kulhad
                Experience</span><span>✦</span><span>Since 2024</span><span>✦</span>
        </div>
    </div>

    <!-- About -->
    <section id="about" class="abt">
        <!-- Backgrounds -->
        <div class="abt-mesh"></div>
        <div class="abt-grid"></div>

        <div
            style="position:relative;z-index:2;max-width:1300px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:8rem;align-items:center;">
            <div class="srl">
                <span class="eyebrow" style="color:var(--gold);">Since 2024</span>
                <h2
                    style="font-family:'Cormorant Garamond',serif;font-size:clamp(2.5rem,4vw,4rem);font-weight:300;line-height:1.2;margin-bottom:2rem;color:white;">
                    Masterfully Brewed<br><strong style="font-weight:700;color:var(--gold2);">Authentic Chaa.</strong></h2>
                <div class="gl" data-gl></div>
                <p style="font-size:13px;color:rgba(255,255,255,.5);line-height:2.1;margin-bottom:1.5rem;">Our journey began with a
                    simple vision: to bring the authentic taste of Punjab's tea culture to the global stage. We use only
                    the finest hand-picked tea leaves and a secret blend of spices passed down through generations.</p>
                <p style="font-size:13px;color:rgba(255,255,255,.5);line-height:2.1;margin-bottom:3rem;">Every cup is a story — of early
                    mornings, clay kulhads, and the warmth of home.</p>
                <span class="mag"><a href="#menu" class="btn btn-o">Taste the Tradition</a></span>
            </div>
            <div class="srr d2" style="position:relative;padding-bottom:3rem;">
                <div class="abt-iw">
                    <img src="https://images.unsplash.com/photo-1594631252845-29fc458631b6?auto=format&fit=crop&w=900&q=85"
                        alt="Tea Service">
                </div>
                <div class="stat-c srs d4">
                    <span class="sn" data-count="10" data-suffix="+">0</span>
                    <span class="sl" style="color:rgba(255,255,255,.4);">Secret Blends</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <div class="feats">
        <div class="fi sr d1">
            <div class="fi-n">01</div>
            <span class="fi-ico">🍃</span>
            <h3 class="fi-t" style="color:white;">Hand-Picked Leaves</h3>
            <p class="fi-d" style="color:rgba(255,255,255,.4);">Only the finest two-leaves-and-a-bud, sourced from estates with generations of cultivation
                expertise.</p>
        </div>
        <div class="fi sr d2">
            <div class="fi-n">02</div>
            <span class="fi-ico">🏺</span>
            <h3 class="fi-t" style="color:white;">Kulhad Culture</h3>
            <p class="fi-d" style="color:rgba(255,255,255,.4);">Served in traditional clay kulhads, each sip carries the earthy warmth of Punjab's heritage.
            </p>
        </div>
        <div class="fi sr d3">
            <div class="fi-n">03</div>
            <span class="fi-ico">✨</span>
            <h3 class="fi-t" style="color:white;">Secret Spice Blends</h3>
            <p class="fi-d" style="color:rgba(255,255,255,.4);">Recipes passed down through generations — a symphony of cardamom, ginger, and rare masalas.
            </p>
        </div>
    </div>

    <!-- Menu -->
    <section id="menu" class="menu-s">
        <!-- Backgrounds -->
        <div class="menu-mesh"></div>
        <div class="menu-grid"></div>

        <div style="position:relative;z-index:2;max-width:1380px;margin:0 auto;">
            <div class="sr" style="text-align:center;margin-bottom:8rem;">
                <span class="eyebrow" style="color:var(--gold);margin-bottom:2rem;">The Royal Selection</span>
                <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(3.5rem,6vw,6rem);font-weight:300;color:white;letter-spacing:-1px;">
                    Experience <span style="font-family:'Outfit',sans-serif;font-size:10px;text-transform:uppercase;letter-spacing:6px;display:block;margin:1rem 0;color:var(--gold);font-weight:600;">The Art of Brewing</span> <strong>Pure Indulgence</strong>
                </h2>
                <div class="ft-divider" style="padding:2rem 0 0;opacity:.5;">
                    <div class="ft-divider-line rev"></div>
                    <div class="ft-divider-ornament">❦</div>
                    <div class="ft-divider-line"></div>
                </div>
            </div>

            <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(260px, 1fr));gap:2.5rem;max-width:1200px;margin:0 auto;">
                
                @forelse($menus as $item)
                <!-- Dynamic Item -->
                <div class="mc sr">
                    <div class="mc-img">
                        <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}">
                        <div class="ptag">₹{{ number_format($item->price, 0) }}</div>
                    </div>
                    <div class="mc-b" style="text-align:center;padding:1.5rem 1.2rem;">
                        <h3 style="color:white;font-family:'Cormorant Garamond',serif;font-size:1.6rem;font-weight:700;margin-bottom:.3rem;">{{ $item->title }}</h3>
                        <p style="color:var(--gold);font-size:9px;text-transform:uppercase;letter-spacing:3px;margin-bottom:1.5rem;">{{ $item->subtitle }}</p>
                        <p style="color:rgba(255,255,255,.35);font-size:12px;line-height:1.8;margin-bottom:2rem;max-width:260px;margin-left:auto;margin-right:auto;">{{ $item->description }}</p>
                        <div style="height:1px;width:40px;background:var(--gold);margin:0 auto 2rem;opacity:.3;"></div>
                        <a href="#" class="btn btn-o" style="padding:.9rem 2.5rem;font-size:8px;">Add to Order — ₹{{ number_format($item->price, 0) }}</a>
                    </div>
                </div>
                @empty
                <!-- Fallback: Premium Gud Chaa -->
                <div class="mc sr">
                    <div class="mc-img">
                        <img src="https://images.unsplash.com/photo-1571934811356-5cc061b6821f?auto=format&fit=crop&w=600&q=85" alt="Premium Gud Chaa">
                        <div class="ptag">₹30</div>
                    </div>
                    <div class="mc-b" style="text-align:center;padding:1.5rem 1.2rem;">
                        <h3 style="color:white;font-family:'Cormorant Garamond',serif;font-size:1.6rem;font-weight:700;margin-bottom:.3rem;">Premium Gud Chaa</h3>
                        <p style="color:var(--gold);font-size:9px;text-transform:uppercase;letter-spacing:3px;margin-bottom:1.5rem;">Signature Jaggery Blend</p>
                        <p style="color:rgba(255,255,255,.35);font-size:12px;line-height:1.8;margin-bottom:2rem;max-width:260px;margin-left:auto;margin-right:auto;">Masterfully brewed with traditional Punjabi jaggery for a deep, caramel soul.</p>
                        <div style="height:1px;width:40px;background:var(--gold);margin:0 auto 2rem;opacity:.3;"></div>
                        <a href="#" class="btn btn-o" style="padding:.9rem 2.5rem;font-size:8px;">Add to Order — ₹30</a>
                    </div>
                </div>
                <!-- Fallback: Adrak Elachi -->
                <div class="mc sr">
                    <div class="mc-img">
                        <img src="https://images.unsplash.com/photo-1544333323-5db7b4439977?auto=format&fit=crop&w=600&q=85" alt="Adrak Elachi Chaa">
                        <div class="ptag">₹20</div>
                    </div>
                    <div class="mc-b" style="text-align:center;padding:1.5rem 1.2rem;">
                        <h3 style="color:white;font-family:'Cormorant Garamond',serif;font-size:1.6rem;font-weight:700;margin-bottom:.3rem;">Adrak Elachi</h3>
                        <p style="color:var(--gold);font-size:9px;text-transform:uppercase;letter-spacing:3px;margin-bottom:1.5rem;">Fresh Ginger & Spice</p>
                        <p style="color:rgba(255,255,255,.35);font-size:12px;line-height:1.8;margin-bottom:2rem;max-width:260px;margin-left:auto;margin-right:auto;">A symphony of fresh crushed ginger and aromatic green cardamoms.</p>
                        <div style="height:1px;width:40px;background:var(--gold);margin:0 auto 2rem;opacity:.3;"></div>
                        <a href="#" class="btn btn-o" style="padding:.9rem 2.5rem;font-size:8px;">Add to Order — ₹20</a>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Quote -->
    <section class="q-sec">
        <div class="q-bg"></div>
        <div class="q-glow"></div>
        <div class="q-lines"></div>
        <blockquote class="sr">"In every cup of Chaa, there is a story of <em>love, patience,</em> and the warmth of
            home."</blockquote>
        <cite class="sr d2">— The Philosophy of Chaa Majhe Di</cite>
    </section>

    <!-- Franchise -->
    <section class="part">
        <div class="part-mesh"></div>
        <div class="part-grid"></div>
        <div style="position:relative;z-index:2;max-width:52rem;margin:0 auto;text-align:center;">
            <span class="eyebrow sr">Opportunities</span>
            <h2 class="sr d1"
                style="font-family:'Cormorant Garamond',serif;font-size:clamp(3rem,6vw,6rem);font-weight:300;margin-bottom:2rem;">
                Join Our <strong>Franchise Network</strong></h2>
            <div class="gl cx sr d2" data-gl></div>
            <p class="sr d3"
                style="font-size:9px;letter-spacing:4px;text-transform:uppercase;opacity:.4;margin:2rem 0 4rem;line-height:2.3;">
                The Fastest Growing Premium Tea Brand in India</p>
            <div class="sr d4" style="display:flex;gap:1.5rem;justify-content:center;flex-wrap:wrap;">
                <span class="mag"><a href="#" class="btn btn-g">Apply Now</a></span>
                <span class="mag"><a href="#" class="btn btn-o">Download Brochure</a></span>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="gal-s">
        <!-- Backgrounds -->
        <div class="abt-mesh" style="opacity:.05;"></div>
        <div class="abt-grid" style="opacity:.05;"></div>

        <div style="position:relative;z-index:2;padding-right:5rem;margin-bottom:4rem;">
            <span class="eyebrow sr" style="color:var(--gold);">Visual Story</span>
            <h2 class="sr d1"
                style="font-family:'Cormorant Garamond',serif;font-size:clamp(2.5rem,4vw,4.5rem);font-weight:300;color:white;">
                Gallery of <strong style="color:var(--gold2);">Moments</strong></h2>
            <div class="gl sr d2" data-gl></div>
        </div>
        <div class="swiper gSwiper sr d3" style="position:relative;z-index:2;">
            <div class="swiper-wrapper">
                @forelse($galleries as $image)
                <div class="swiper-slide">
                    <div class="gw">
                        <img src="{{ asset('storage/' . $image->image_path) }}" 
                             alt="{{ $image->title ?? 'Heritage Moment' }}">
                        <div class="gov"></div>
                        <div class="gcap">{{ $image->title ?? 'Heritage & Craft' }}</div>
                    </div>
                </div>
                @empty
                <!-- Fallback if database is empty -->
                <div class="swiper-slide">
                    <div class="gw">
                        <img src="https://images.unsplash.com/photo-1544787210-2283dc98276f?auto=format&fit=crop&w=800&q=85" alt="Story">
                        <div class="gov"></div>
                        <div class="gcap">The Art of Brewing</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gw">
                        <img src="https://images.unsplash.com/photo-1594631252845-29fc458631b6?auto=format&fit=crop&w=800&q=85" alt="Story">
                        <div class="gov"></div>
                        <div class="gcap">Kulhad Experience</div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- ─────────────────────────────────────────
     FOOTER — Premium Redesign
  ───────────────────────────────────────── -->
    <footer id="contact">

        <!-- Backgrounds -->
        <div class="ft-mesh"></div>
        <div class="ft-grid"></div>

        <!-- ── Brand Headline Band ── -->
        <div class="ft-headline">
            <div class="ft-headline-bg">चाय</div>
            <div class="ft-logo-wrap srs">
                <div class="ft-logo-ring">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Chaa Majhe Di Logo">
                </div>
                <div class="ft-brand-name">Chaa Majhe Di</div>
                <div class="ft-brand-tagline">✦ Authentic Taste of Tradition ✦</div>
            </div>
        </div>

        <!-- ── Ornamental Divider ── -->
        <div class="ft-divider">
            <div class="ft-divider-line rev"></div>
            <div class="ft-divider-ornament">❧</div>
            <div class="ft-divider-line"></div>
        </div>

        <!-- ── Main Grid ── -->
        <div class="ft-main">

            <!-- Column 1 — About -->
            <div class="ft-about srl">
                <h4 class="ft-col-title" style="margin-bottom:2rem;">Our Story</h4>
                <p>Born from the fertile plains of Punjab and the ancient art of brewing, Chaa Majhe Di brings you a
                    heritage that spans generations. Every sip carries the warmth of clay kulhads and the soul of
                    tradition.</p>
                <div class="ft-social">
                    <a href="#" class="ft-soc-btn"><span>𝕏</span></a>
                    <a href="#" class="ft-soc-btn"><span>ig</span></a>
                    <a href="#" class="ft-soc-btn"><span>fb</span></a>
                    <a href="#" class="ft-soc-btn"><span>yt</span></a>
                </div>
            </div>

            <!-- Column 2 — Navigate -->
            <div class="sr d1">
                <h4 class="ft-col-title">Navigate</h4>
                <a href="/" class="ft-link">Home</a>
                <a href="#about" class="ft-link">Our Story</a>
                <a href="#menu" class="ft-link">The Menu</a>
                <a href="#gallery" class="ft-link">Gallery</a>
                <a href="#" class="ft-link">Franchise</a>
                <a href="#contact" class="ft-link">Contact</a>
            </div>

            <!-- Column 3 — Contact -->
            <div class="sr d2">
                <h4 class="ft-col-title">Find Us</h4>
                <div class="ft-contact-item">
                    <div class="ft-contact-icon">📍</div>
                    <a href="#" class="ft-contact-text">Booth 236, Phase 5<br>Mohali, Punjab</a>
                </div>
                <div class="ft-contact-item">
                    <div class="ft-contact-icon">📞</div>
                    <a href="tel:+919876543210" class="ft-contact-text">+91 98765 43210</a>
                </div>
                <div class="ft-contact-item">
                    <div class="ft-contact-icon">✉</div>
                    <a href="mailto:hello@chaamajhedi.com" class="ft-contact-text">hello@chaamajhedi.com</a>
                </div>
                <div class="ft-contact-item">
                    <div class="ft-contact-icon">🕐</div>
                    <span class="ft-contact-text">Mon–Sun · 6am – 11pm</span>
                </div>
            </div>

            <!-- Column 4 — Newsletter -->
            <div class="srr d3">
                <h4 class="ft-col-title">Stay Warm</h4>
                <p class="ft-nl-desc">Seasonal blends, new arrivals &<br>stories — delivered warm to your inbox.</p>
                <div class="ft-nl-form">
                    <input type="email" class="ft-nl-input" placeholder="Your email address">
                    <button class="ft-nl-btn">Join →</button>
                </div>
                <p class="ft-nl-note">✦ No spam. Only chai.</p>
            </div>

        </div>

        <!-- ── Stats Band ── -->
        <div class="ft-stats-band sr d4">
            <div class="ft-stat">
                <span class="ft-stat-num" data-count="10" data-suffix="+">0</span>
                <span class="ft-stat-lbl">Secret Blends</span>
            </div>
            <div class="ft-stat">
                <span class="ft-stat-num" data-count="50" data-suffix="k+">0</span>
                <span class="ft-stat-lbl">Cups Served</span>
            </div>
            <div class="ft-stat">
                <span class="ft-stat-num" data-count="12" data-suffix="+">0</span>
                <span class="ft-stat-lbl">Outlets Across India</span>
            </div>
            <div class="ft-stat">
                <span class="ft-stat-num">4.9★</span>
                <span class="ft-stat-lbl">Customer Rating</span>
            </div>
        </div>

        <!-- ── Bottom Bar ── -->
        <div class="ft-bottom sr d5">
            <span class="ft-bottom-copy">© 2024 Chaa Majhe Di. All Rights Reserved.</span>
            <div class="ft-bottom-craft">
                Crafted with <span>♥</span> in Punjab
            </div>
            <div class="ft-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a>
                <a href="#">Sitemap</a>
            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        /* Loader */
        window.addEventListener('load', () => setTimeout(() => document.getElementById('loader').classList.add('gone'), 1900));



        /* Steam */
        const sw = document.getElementById('sw');
        for (let i = 0; i < 20; i++) {
            const s = document.createElement('div'); s.className = 'steam';
            const h = Math.random() * 45 + 20;
            s.style.cssText = `left:${15 + Math.random() * 70}%;height:${h}px;animation-duration:${7 + Math.random() * 9}s;animation-delay:${Math.random() * 14}s;`;
            sw.appendChild(s);
        }

        /* Nav */
        const nav = document.getElementById('nav');
        window.addEventListener('scroll', () => nav.classList.toggle('sc', window.scrollY > 80), { passive: true });

        /* Scroll Reveal */
        document.querySelectorAll('.sr,.srl,.srr,.srs').forEach(el =>
            new IntersectionObserver(([e]) => { if (e.isIntersecting) el.classList.add('in'); }, { threshold: .1 }).observe(el)
        );

        /* Gold Lines */
        document.querySelectorAll('[data-gl]').forEach(el =>
            new IntersectionObserver(([e]) => { if (e.isIntersecting) el.classList.add('in'); }, { threshold: .5 }).observe(el)
        );

        /* Counter */
        document.querySelectorAll('[data-count]').forEach(el => {
            const t = +el.getAttribute('data-count');
            const suffix = el.getAttribute('data-suffix') || '+';
            new IntersectionObserver(([e]) => {
                if (!e.isIntersecting) return;
                let s, d = 2000;
                (function step(ts) {
                    if (!s) s = ts;
                    const p = Math.min((ts - s) / d, 1);
                    el.textContent = Math.round((1 - Math.pow(1 - p, 3)) * t) + suffix;
                    if (p < 1) requestAnimationFrame(step);
                })(performance.now());
            }, { threshold: .5 }).observe(el);
        });

        /* Parallax */
        const pi = document.querySelector('.abt-iw img');
        window.addEventListener('scroll', () => {
            if (!pi) return;
            const r = pi.getBoundingClientRect();
            pi.style.transform = `translateY(${(r.top + r.height / 2 - window.innerHeight / 2) * .06}px)`;
        }, { passive: true });



        /* Swiper */
        new Swiper('.gSwiper', {
            slidesPerView: 'auto', spaceBetween: 28, freeMode: true, speed: 950,
            autoplay: { delay: 2600, disableOnInteraction: false },
        });
    </script>
</body>

</html>