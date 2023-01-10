<?php

session_start();
if (!isset($_SESSION['logged'])) {
    $line = date('Y-m-d H:i:s') . " - " . print_r($_SERVER, true) ;
    file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
    $_SESSION['logged'] = true;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="sv">
<head>

    <title>Tobias Olsson | Utvecklare | info@tobias-olsson.se</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Tobias Olsson Webbutvecklare Webbprogrammering php html css jquery kristianstad c4media exaktasoftware exakta software" />
    <meta name="description" content="Mitt namn är Tobias Olsson. Jag jobbar som webbutvecklare på Exakta Software i Hässleholm." />
    <meta name="author" content="Tobias Olsson" />
    <link rel="stylesheet" type="text/css" href="app.css">

    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','analytics.js','ga');

    ga('create', 'UA-10537764-2', 'auto');
    ga('send', 'pageview');

    </script>
    <!-- End Google Analytics -->
</head>
<body>
<div class="container m-auto px-8 md:px-20 max-w-[1080px]">
    <div class="px-8 md:px-20 py-2 my-8 md:my-20 mx-auto border-t border-t-4 border-t-zinc-500 bg-stone-100">
        <main class="divide-y">
            <div class="py-10 pb-6">
                <div class="flex justify-around flex-col md:flex-row gap-4">
                    <div class="flex justify-center gap-8">
                        <img src="tobias.jpeg" alt="" class="rounded-full object-cover w-32">
                        <div class="flex flex-col justify-center">
                            <h1 class="flex flex-col md:flex-row md:gap-4 text-5xl uppercase tracking-wider"><span>Tobias</span> <span>Olsson</span></h1>
                            <h2 class="flex text-2xl uppercase tracking-wide">Utvecklare</h2>
                        </div>
                    </div>
                    <div class="md:w-1/3">
                        <div class="flex flex-col text-center md:text-left contact-info gap-2">
                            <a href="https://tobias-olsson.se/cv" class="block uppercase text-center px-4 py-2 bg-stone-600 text-white md:w-3/4">Ladda ner CV</a>
                            <a href="mailto:info@tobias-olsson.se" class="text-2xl text-red-800">info@tobias-olsson.se</a>
                            <h3>0707 - 17 02 10</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between flex-col md:flex-row gap-4 md:gap-24 py-8">
                <h2 class="italic text-2xl min-w-[15%] text-center sm:text-left">Profil</h2>
                <div>
                    <p class="md:pr-24 leading-6 text-xl">
                        Tobias Olsson är en dedikerad och erfaren utvecklare med många års arbetserfarenhet inom webbutveckling. Ser alltid fram emot nya utmaningar och är övertygad om att min kompetens och positiva inställning är till stor fördel.
                    </p>
                </div>
            </div>

            <div class="flex justify-between flex-col md:flex-row gap-4 md:gap-24 py-8">
                <h2 class="italic text-2xl min-w-[15%] text-center sm:text-left">Kompetens</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <h2 class="text-2xl">Webbutveckling</h2>
                        <p>Tobias Olsson har många års erfarenhet av objektorienterad php-utveckling.</p>
                    </div>
                    <div>
                        <h2 class="text-2xl">E-handel</h2>
                        <p>Tobias Olsson har många års erfatenhet av e-handelssystem och dess kringsystem.</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-between flex-col md:flex-row gap-4 md:gap-24 py-8">
                <h2 class="italic text-2xl min-w-[15%] text-center sm:text-left">Teknik</h2>
                <div class="divide-y flex flex-col w-full">
                    <div class="grid grid-cols-3 gap-x-8 py-1">
                        <div>HTML</div>
                        <div>CSS</div>
                        <div>Javascript</div>
                    </div>
                    <div class="grid grid-cols-3 gap-x-8 py-1">
                        <div>Jquery</div>
                        <div>PHP</div>
                        <div>GIT</div>
                    </div>
                    <div class="grid grid-cols-3 gap-x-8 py-1">
                        <div>macOS</div>
                        <div>Laravel</div>
                        <div>Linux</div>
                    </div>
                    <div class="grid grid-cols-3 gap-x-8 py-1">
                        <div>Tailwind</div>
                        <div>MySQL</div>
                        <div>UiPath</div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between flex-col md:flex-row gap-4 md:gap-24 py-8">

                <h2 class="italic text-2xl min-w-[15%] text-center sm:text-left">Erfarenhet</h2>
                <div class="flex flex-col gap-6 divide-y">

                    <div class="relative text-center sm:text-left px-8 sm:px-4 md:px-0">
                        <h2 class="text-2xl">Consid</h2>
                        <h3 class="text-lg">IT-Konsult</h3>
                        <h4 class="sm:absolute top-2 right-0 text-lg">2022–Nuvarande</h4>
                        <p class="mt-2">Tobias Olsson jobbar i projekt hos olika kunder med massor olika saker men i huvudsak utveckling.</p>
                    </div>

                    <div class="relative pt-2 text-center sm:text-left px-8 sm:px-4 md:px-0">
                        <h2 class="text-2xl">Exakta Software</h2>
                        <h3 class="text-lg">Webbutvecklare</h3>
                        <h4 class="sm:absolute top-2 right-0 text-lg">2011–2022</h4>
                        <p class="mt-2">Tobias Olsson utvecklade företagets egenutvecklade e-handelspattform och andra kundunika lösningar.</p>
                    </div>

                    <div class="relative pt-2 text-center sm:text-left px-8 sm:px-4 md:px-0">
                        <h2 class="text-2xl">Bensinhandlaren i Åhus</h2>
                        <h3 class="text-lg">Butiksbiträde</h3>
                        <h4 class="sm:absolute top-2 right-0 text-lg">2002–2012</h4>
                        <p class="mt-2">Tobias Olsson hade detta som sommarjobb till att börja med och övergång till heltid. Lagerarbete, beställningar och kassatjänst.</p>
                    </div>

                </div>
            </div>

            <div class="flex justify-between flex-col md:flex-row gap-4 md:gap-24 py-8">
                <h2 class="italic text-2xl min-w-[15%] text-center sm:text-left">Utbildning</h2>
                <div class="flex flex-col gap-6 divide-y">
                    <div class="relative text-center sm:text-left px-8 sm:px-4 md:px-0">
                        <h2 class="text-2xl">Österänggymnasiet, Kristianstad</h2>
                        <h3 class="text-lg">Elprogrammet</h3>
                        <h4 class="sm:absolute top-0 right-0 text-lg">2004–2007</h4>
                        <p class="mt-2">Tobias Olsson läste elprogrammet med inriktning datorteknik. Första året fick vi läsa el-lära och digitalteknik. År två och tre vart mer inriktade på datorteknik så som Java, html och databasteknik.</p>
                    </div>

                    <div class="relative pt-2 text-center sm:text-left px-8 sm:px-4 md:px-0">
                        <h2 class="text-2xl">Linnéuniversitetet, Kalmar</h2>
                        <h3 class="text-lg">Webbprogrammering 120hp</h3>
                        <h4 class="sm:absolute top-2 right-0 text-lg">2007–2009</h4>
                        <p class="mt-2">Tobias Olsson har läst kursen på distans vilket var en utmaning. Tobias fick lära oss mycket om användarvänlighet och interaktion. Kurserna var allt ifrån frontend till  backend-programmering. Det fanns både teoretiska och praktiska kurser.</p>
                    </div>

                </div>
            </div>

            <div class="flex justify-between flex-col md:flex-row gap-4 md:gap-24 py-8">
                <h2 class="italic text-2xl min-w-[15%] text-center sm:text-left">Intressen</h2>
                <div class="divide-y flex flex-col w-full">
                    <div class="grid grid-cols-3 gap-x-8 py-1">
                        <div>Teknik</div>
                        <div>Bilar</div>
                        <div>Webbutveckling</div>
                    </div>
                    <div class="grid grid-cols-3 gap-x-8 py-1">
                        <div>Gräsmatta</div>
                        <div>Matlagning</div>
                        <div>Umgås med familj</div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between flex-col md:flex-row gap-4 md:gap-24 py-8">
                <h2 class="italic text-2xl min-w-[15%] text-center sm:text-left">Egenskaper</h2>
                <div class="flex flex-col gap-4">
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <h2 class="text-2xl flex justify-start items-center gap-3"><svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm-.747 9.25h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z" fill-rule="nonzero"/></svg> Snabblärd</h2>
                            <p>Enkelt att lära nytt och nya system.</p>
                        </div>
                        <div>
                            <h2 class="text-2xl flex justify-start items-center gap-3"><svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm-.747 9.25h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z" fill-rule="nonzero"/></svg> Envis</h2>
                            <p>Ger inte upp förrän problem är lösta</p>
                        </div>
                        <div>
                            <h2 class="text-2xl flex justify-start items-center gap-3"><svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm-.747 9.25h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z" fill-rule="nonzero"/></svg> Självgående</h2>
                            <p>Hittar lösningarna på egen hand.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <h2 class="text-2xl flex justify-start items-center gap-3"><svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm4.253 9.25h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z" fill-rule="nonzero"/></svg> Blyg</h2>
                            <p>Är ganska tyst av sig.</p>
                        </div>
                        <div>
                            <h2 class="text-2xl flex justify-start items-center gap-3"><svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm4.253 9.25h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z" fill-rule="nonzero"/></svg> Envis</h2>
                            <p>Har alltid rätt</p>
                        </div>
                        <div>
                            <h2 class="text-2xl flex justify-start items-center gap-3"><svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm4.253 9.25h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z" fill-rule="nonzero"/></svg> Självgående</h2>
                            <p>Har svårt att fråga efter hjälp.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-8 flex flex-col gap-4">
                <div class="flex justify-center gap-8">
                    <a href="https://se.linkedin.com/pub/tobias-olsson/13/b10/974/" target="_blank" aria-label="LinkedIn">
                        <!-- LinkedIn icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="inline-block" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>

                    <a href="https://github.com/tobiaso88" target="_blank" aria-label="Github">
                        <!-- Github icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="inline-block" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-4.466 19.59c-.405.078-.534-.171-.534-.384v-2.195c0-.747-.262-1.233-.55-1.481 1.782-.198 3.654-.875 3.654-3.947 0-.874-.312-1.588-.823-2.147.082-.202.356-1.016-.079-2.117 0 0-.671-.215-2.198.82-.64-.18-1.324-.267-2.004-.271-.68.003-1.364.091-2.003.269-1.528-1.035-2.2-.82-2.2-.82-.434 1.102-.16 1.915-.077 2.118-.512.56-.824 1.273-.824 2.147 0 3.064 1.867 3.751 3.645 3.954-.229.2-.436.552-.508 1.07-.457.204-1.614.557-2.328-.666 0 0-.423-.768-1.227-.825 0 0-.78-.01-.055.487 0 0 .525.246.889 1.17 0 0 .463 1.428 2.688.944v1.489c0 .211-.129.459-.528.385-3.18-1.057-5.472-4.056-5.472-7.59 0-4.419 3.582-8 8-8s8 3.581 8 8c0 3.533-2.289 6.531-5.466 7.59z"/></svg>
                    </a>

                    <a href="https://www.facebook.com/TobiasHovby" target="_blank" aria-label="Facebook">
                        <!-- Facebook icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg>
                    </a>
                </div>

                <div class="text-sm text-center">
                    <p>Tobias Olsson &mdash; <a href="mailto:info@tobias-olsson.se" class="text-red-800">info@tobias-olsson.se</a> &mdash; 0707 - 17 02 10</p>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>

