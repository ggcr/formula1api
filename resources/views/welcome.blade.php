<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>The Formula 1 API</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased bg-pink-pattern w-screen overflow-x-hidden bg-whiteWave">
        <section class="mx-6 h-screen">
            <nav class="w-screen font-poppins font-bold text-lg pb-12 pt-5">
                <a class="pr-10 float-right" href="#">ABOUT</a>
                <a class="px-8 float-right" href="#">DOCS</a>
            </nav>
            <header class="">
                    <div class="z-10 select-text font-formula text-titlePink font-medium lg:static lg:w-1/2 md:w-1/2 sm:fixed lg:ml-28 lg:mt-24">
                        <p class="text-left text-4xl ml-20 lg:text-5xl">THE</p>
                        <p class="text-center text-5xl lg:text-8xl">FORMULA 1</p>
                        <p class="text-right text-4xl mr-24 lg:text-5xl">API</p>
                    </div>
                    <div class="select-none pointer-events-none w-screen lg:w-auto lg:right-0 lg:absolute lg:top-32">
                        <img class="z-0 w-43 pointer-events-none -mt-8 lg:mr-12 rounded-xl mix-blend-multiply float-right bg-fixed" src="/img/image.png" alt="Formula One Illustration in pink.">
                    </div>
                    <div class="z-10 font-poppins text-titlePink font-regular lg:static lg:ml-44 lg:mt-10 lg:w-2/5 md:fixed sm:fixed text-center text-lg lg:text-xl">
                        <p>The <strong><a href="https://www.formula1.com/" target="_blank">FORMULA 1</a></strong> API is a RESTful and GraphQL API made as an <u>educational</u> project by a trully fan of the sport.</p>
                    </div>
                    <div class="z-10 font-poppins text-titlePink font-regular text-center mt-5 w-full ml-2 lg:static lg:ml-44 lg:mt-10 md:fixed sm:fixed lg:w-2/5 lg:ml-0 lg:mt-0">
                        <button class="inline-block	bg-purple-300 px-11 text-base shadow-sm font-medium tracking-wider border text-black rounded-full hover:shadow-lg hover:bg-purple-400 lg:px-14 py-3 lg:py-4 lg:mr-5">
                            Try REST
                            <img src="/img/link.png" class="h-5 lg:h-6 float-right -mr-2" alt="Link image.">
                        </button>
                        <button class="inline-block	bg-purple-300 px-8 lg:px-10 py-3 lg:py-4 text-base shadow-sm font-medium tracking-wider border text-black rounded-full hover:shadow-lg hover:bg-purple-400">
                            Try GraphQL
                            <img src="/img/link.png" class="h-5 lg:h-6  float-right -mr-2" alt="Link image.">
                        </button>
                    </div>
                <div class="ml-2 w-full mt-5 lg:mt-32 lg:relative">
                    <img class="mx-auto pointer-events-none bottom-5 h-20 lg:h-28 animate-pulse " src="/img/swipe.png" alt="Swipe down">
                </div>
            </header>
        </section>

        <svg class="-mt-10 lg:-mt-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,128L80,122.7C160,117,320,107,480,128C640,149,800,203,960,208C1120,213,1280,171,1360,149.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>            <article>

        <main class="mt-0 mx-0 h-full bg-whiteWave">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col mx-10 pb-20">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        DRIVER NAME
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        TEAM
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        POINTS
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        LAST RACE
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Query</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                1.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/verstappen.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Max VERSTAPPEN 🇳🇱
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Red Bull Racing Honda</div>
                                        <div class="text-sm text-gray-500">Milton Keynes, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-green-100 text-green-800 font-formula">
                  131 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                2.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/hamilto.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Lewis HAMILTON 🇬🇧
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Mercedes-AMG Petronas F1 Team</div>
                                        <div class="text-sm text-gray-500">Brackley, Northamptonshire, United Kingdom</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-green-100 text-green-800 font-formula">
                  119 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                3.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/perez.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Sergio 'CHECO' Pérez 🇲🇽
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Red Bull Racing Honda</div>
                                        <div class="text-sm text-gray-500">Milton Keynes, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-green-100 text-green-800 font-formula">
                  84 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                4.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/norris.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Lando NORRIS 🇬🇧
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">McLaren F1 Team</div>
                                        <div class="text-sm text-gray-500">Woking, Surrey, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-green-100 text-green-800 font-formula">
                  76 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                5.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/bottas.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Valtteri BOTTAS 🇫🇮
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Mercedes-AMG Petronas F1 Team</div>
                                        <div class="text-sm text-gray-500">Brackley, Northamptonshire, United Kingdom</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-green-100 text-green-800 font-formula">
                  59 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                6.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/leclerc.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Charles LECLERC 🇲🇨
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Scuderia Ferrari Mission Winnow</div>
                                        <div class="text-sm text-gray-500">Maranello, Italy</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-green-100 text-green-800 font-formula">
                  52 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                7.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/sainz.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Carlos SAINZ 🇪🇸
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Scuderia Ferrari Mission Winnow</div>
                                        <div class="text-sm text-gray-500">Maranello, Italy</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-green-100 text-green-800 font-formula">
                  42 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                8.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/gasly.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Pierre GASLY 🇫🇷
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Scuderia AlphaTauri Honda</div>
                                        <div class="text-sm text-gray-500">Faenza, Italy</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-green-100 text-green-800 font-formula">
                  37 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                9.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/ric.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Daniel RICCIARDO 🇦🇺
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">McLaren F1 Team</div>
                                        <div class="text-sm text-gray-500">Woking, Surrey, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-green-100 text-green-800 font-formula">
                  34 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                10.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/vet.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Sebastian VETTEL 🇩🇪
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Aston Martin Cognizant F1 Team</div>
                                        <div class="text-sm text-gray-500">Silverstone, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-green-100 text-green-800 font-formula">
                  30 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                11.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/alo.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Fernando ALONSO 🇪🇸
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Alpine F1 Team</div>
                                        <div class="text-sm text-gray-500">Enstone, Oxfordshire, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-yellow-100 text-green-800 font-formula">
                  17 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                12.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/ocon.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Esteban OCON 🇫🇷
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Alpine F1 Team</div>
                                        <div class="text-sm text-gray-500">Enstone, Oxfordshire, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-yellow-100 text-green-800 font-formula">
                  12 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                13.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/stroll.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Lance STROLL 🇨🇦
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Aston Martin Cognizant F1 Team</div>
                                        <div class="text-sm text-gray-500">Silverstone, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-yellow-100 text-green-800 font-formula">
                  10 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                14.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/tsu.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Yuki TSUNODA 🇯🇵
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Scuderia AlphaTauri Honda</div>
                                        <div class="text-sm text-gray-500">Faenza, Italy</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-yellow-100 text-green-800 font-formula">
                  8 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                15.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/verstappen.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Kimi RÄIKKÖNEN 🇫🇮
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Alfa Romeo Racing Orlen</div>
                                        <div class="text-sm text-gray-500">Hinwil, Zürich, Switzerland</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-yellow-100 text-green-800 font-formula">
                  1 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                16.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/gio.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Antonio GIOVINAZZI 🇮🇹
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Alfa Romeo Racing Orlen</div>
                                        <div class="text-sm text-gray-500">Hinwil, Zürich, Switzerland</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-red-100 text-green-800 font-formula">
                  1 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                17.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/russ.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    George RUSSELL 🇬🇧
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Williams Racing</div>
                                        <div class="text-sm text-gray-500">Grove, Oxfordshire, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-red-100 text-green-800 font-formula">
                  0 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                18.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/sch.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Mick SCHUMACHER 🇩🇪
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Uralkali Haas F1 TeaM</div>
                                        <div class="text-sm text-gray-500">Banbury, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-red-100 text-green-800 font-formula">
                  0 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                19.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/EGG.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Nikita MAZEPIN 🇷🇺
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Uralkali Haas F1 Team</div>
                                        <div class="text-sm text-gray-500">Banbury, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-red-100 text-green-800 font-formula">
                  0 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-4 whitespace-nowrap">
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900 text-xl font-formula">
                                                20.
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img class="h-20 w-20 rounded-b-3xl" src="/img/latifi.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-regular text-gray-900 font-formula">
                                                    Nicholas LATIFI 🇨🇦
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Williams Racing</div>
                                        <div class="text-sm text-gray-500">Grove, Oxfordshire, England, UK</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-regular rounded-full bg-red-100 text-green-800 font-formula">
                  0 pts
                </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Circuit Paul Ricard, France
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Query API</a>
                                    </td>
                                </tr>

                                <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </body>
</html>
