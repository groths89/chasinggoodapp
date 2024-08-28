<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- WireUI -->
        <wireui:scripts />
        @livewireScripts
        {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
    </head>
    <body class="font-sans antialiased">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen min-w-full flex flex-col items-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    @if (Route::has('login'))
                    <livewire:welcome.navigation />
                    @endif
                    <header class="grid items-center grid-cols-2 gap-2 px-3 py-10 bg-blue-700 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg viewBox="0 63.465 500 324.504" xmlns="http://www.w3.org/2000/svg">
                                <g transform="matrix(0.05000000447034836, 0, 0, -0.05000000447034836, 2.549644947052002, 536.805908203125)" fill="#e7e1d1" stroke="none">
                                  <path d="M600 9409 c0 -34 10 -49 29 -45 16 3 91 -40 165 -95 281 -210 382 -284 606 -445 127 -90 320 -230 430 -309 l200 -145 -5 -496 -6 -497 -129 194 c-71 106 -124 203 -117 214 7 12 4 15 -8 8 -25 -15 -149 176 -129 198 8 9 5 10 -7 4 -31 -18 -69 53 -47 87 29 47 21 133 -15 146 -43 17 -48 10 -33 -46 9 -34 16 -39 28 -19 13 20 17 16 18 -15 0 -68 -21 -69 -78 -2 -86 101 -142 211 -142 279 0 57 -2 60 -27 26 -31 -42 -51 -22 -57 56 -3 36 -11 45 -28 31 -16 -13 -27 -9 -36 14 -8 20 1 45 23 62 32 26 31 26 -10 6 -42 -20 -52 -11 -137 121 -51 78 -135 199 -187 268 -52 69 -129 176 -171 239 -41 63 -79 110 -83 106 -11 -12 236 -402 378 -596 19 -26 105 -151 191 -278 86 -126 209 -306 274 -400 64 -93 172 -251 238 -350 182 -270 313 -440 338 -440 35 0 166 182 270 375 111 207 96 203 288 65 179 -129 181 -130 167 -45 -5 36 -15 106 -21 155 -6 50 -23 158 -38 240 -27 151 -24 200 11 200 11 0 87 45 170 99 82 55 167 105 188 111 22 7 39 21 39 30 0 10 32 29 70 43 68 24 96 74 45 80 -113 14 -233 41 -483 109 -141 39 -272 78 -290 87 -43 21 -317 115 -502 172 -267 84 -847 284 -945 326 -52 23 -95 36 -95 30 0 -7 -13 -1 -30 13 -16 14 -30 20 -30 15 0 -6 -55 6 -122 27 -155 48 -158 48 -158 -13z m390 -98 c22 -8 90 -33 150 -55 61 -22 151 -56 200 -76 50 -20 131 -46 180 -59 50 -12 108 -30 130 -40 81 -35 263 -100 376 -134 63 -19 112 -44 107 -56 -4 -11 0 -39 8 -61 16 -40 30 -2 21 55 -3 21 14 19 92 -9 36 -13 66 -31 66 -40 0 -9 16 -16 35 -16 30 -1 31 -3 5 -20 -16 -11 -21 -20 -10 -20 11 0 7 -9 -10 -20 -23 -15 -17 -19 26 -20 31 0 51 8 45 18 -6 10 4 24 23 31 18 7 39 2 47 -11 8 -13 25 -17 37 -9 12 7 22 0 22 -18 0 -33 32 -43 43 -13 6 15 488 -89 515 -111 26 -20 -40 -29 -300 -39 -158 -6 -368 -19 -465 -29 -176 -17 -179 -17 -260 39 -119 82 -370 229 -617 363 -117 64 -268 151 -334 193 -66 42 -170 107 -232 144 -175 107 -156 109 100 13z m185 -235 c51 -34 146 -89 212 -121 65 -32 165 -87 221 -122 56 -36 116 -71 132 -78 198 -83 430 -269 436 -350 8 -107 -7 -106 -117 7 -49 50 -120 108 -159 128 -38 20 -109 74 -157 118 -47 45 -93 78 -102 73 -8 -6 -50 20 -93 56 -43 36 -91 72 -108 80 -61 29 -126 70 -138 86 -6 10 -64 53 -127 96 -63 43 -115 81 -115 84 0 17 29 2 115 -57z m1864 -541 c0 -24 -83 -85 -275 -204 l-86 -53 -134 76 c-74 42 -143 80 -154 84 -152 61 -116 82 142 85 317 4 407 10 423 25 22 22 85 12 84 -13z m-581 -185 c115 -71 211 -132 215 -136 15 -16 49 -321 38 -349 -9 -23 -28 -9 -75 57 -83 115 -265 306 -299 314 -77 19 -113 64 -120 153 -9 116 -7 116 241 -39z m-153 -182 c96 -73 175 -139 175 -147 0 -39 -341 -618 -369 -626 -11 -3 -20 167 -22 427 -1 237 -9 442 -17 455 -39 63 75 10 233 -109z m327 -338 l55 -100 -79 68 c-74 65 -118 146 -92 171 17 17 54 -26 116 -139z"/>
                                  <path d="M1604 8319 c-31 -49 -30 -52 8 -67 22 -9 29 -4 22 15 -6 16 -2 37 9 48 12 12 13 25 3 31 -10 6 -29 -6 -42 -27z"/>
                                  <path d="M1676 8266 c-28 -67 -39 -203 -13 -163 12 19 21 20 32 5 22 -32 106 -73 121 -59 7 7 -8 18 -32 24 -52 14 -52 7 -12 105 23 59 26 89 10 116 -19 32 -21 30 -17 -13 4 -34 -6 -52 -32 -57 -31 -6 -33 -1 -15 33 15 27 15 45 2 53 -11 7 -31 -13 -44 -44z"/>
                                  <path d="M3109 7598 c-25 -40 40 -82 102 -66 51 13 53 16 18 30 -21 8 87 16 241 16 154 1 292 -6 307 -16 17 -10 -36 -17 -136 -17 -90 0 -169 -6 -175 -13 -7 -6 87 -12 209 -12 221 0 277 16 226 67 -31 31 -773 42 -792 11z"/>
                                  <path d="M4260 7263 c0 -20 16 -67 35 -105 29 -56 34 -116 32 -344 -3 -248 0 -276 30 -269 18 4 31 18 28 31 -3 13 5 24 17 24 48 0 14 520 -41 615 -50 88 -101 112 -101 48z m132 -405 c-18 -225 -52 -275 -39 -58 11 181 18 220 39 220 7 0 7 -73 0 -162z"/>
                                  <path d="M3451 6205 c-7 -7 -24 -15 -39 -17 -15 -2 -103 -28 -195 -57 -127 -40 -238 -57 -463 -71 -312 -20 -334 -25 -334 -71 0 -24 41 -27 245 -18 345 14 413 22 515 56 50 17 120 36 157 43 94 16 176 62 176 98 0 33 -41 57 -62 37z m-573 -172 c-4 -4 -70 -12 -146 -18 -83 -7 -127 -4 -110 7 26 16 275 27 256 11z"/>
                                  <path d="M1440 5860 c-16 -10 -49 -20 -73 -20 -23 0 -88 -40 -143 -90 -84 -75 -110 -117 -133 -210 -2 -5 -19 -41 -39 -79 -26 -47 -30 -72 -15 -77 13 -4 18 -16 12 -26 -17 -27 10 -22 38 7 30 31 100 177 100 209 0 13 11 29 25 34 14 5 36 29 49 53 16 30 16 40 1 30 -39 -24 -23 22 21 61 39 34 42 34 31 3 -16 -45 -6 -44 137 11 69 27 119 59 119 75 0 35 -88 48 -130 19z"/>
                                  <path d="M787 4830 c-23 -60 14 -370 44 -370 22 0 24 12 9 51 -11 29 -19 98 -19 155 1 72 7 92 17 64 16 -39 17 -39 30 5 29 89 -48 179 -81 95z"/>
                                  <path d="M2810 4791 c-33 -27 -53 -50 -44 -50 9 -1 3 -15 -15 -33 -17 -17 -26 -40 -19 -50 6 -11 -1 -34 -15 -52 -15 -18 -25 -38 -23 -44 2 -7 -22 -97 -55 -201 -66 -211 -67 -221 -39 -221 11 0 20 19 20 41 0 166 203 621 276 617 21 -1 24 -5 9 -11 -14 -6 -25 -18 -25 -28 0 -10 14 -13 30 -6 49 19 37 -51 -36 -208 -11 -25 -33 -45 -47 -45 -16 0 -27 -23 -27 -56 0 -31 -8 -65 -17 -75 -9 -10 -37 -95 -62 -189 -24 -93 -51 -195 -61 -225 -9 -32 -9 -60 2 -66 10 -6 22 0 26 15 16 60 76 248 86 274 7 18 3 22 -14 12 -34 -21 -8 64 42 134 21 30 38 68 38 84 0 16 10 36 23 44 14 9 18 5 9 -9 -8 -13 -10 -23 -4 -23 27 0 149 209 134 229 -30 37 -37 151 -10 151 16 0 21 -21 15 -60 -5 -35 -1 -60 12 -60 23 0 28 78 9 128 -20 51 -147 41 -218 -17z"/>
                                  <path d="M7569 4771 c-20 -48 -28 -131 -25 -265 l4 -196 7 190 c4 104 16 199 27 210 15 14 17 -44 7 -188 -12 -172 -10 -206 13 -198 20 7 26 38 21 115 -9 131 13 281 40 281 14 0 17 -34 9 -95 -10 -70 -8 -86 8 -61 49 79 35 185 -25 192 -31 4 -50 15 -44 25 19 32 81 21 119 -21 20 -22 41 -36 47 -30 21 21 -86 110 -132 110 -35 0 -54 -18 -76 -69z"/>
                                  <path d="M7763 4606 c-2 -99 -38 -296 -63 -346 -31 -62 -43 -180 -18 -180 14 0 19 6 12 13 -8 7 -4 25 8 40 13 15 17 40 11 57 -7 16 -2 30 9 30 11 0 15 8 9 18 -6 10 2 53 17 97 38 107 62 337 37 352 -12 7 -21 -26 -22 -81z"/>
                                  <path d="M864 4586 c7 -72 27 -126 64 -175 47 -61 50 -73 22 -84 -33 -12 -88 42 -89 88 -1 24 -41 37 -41 14 0 -54 268 -339 300 -319 9 5 21 -5 28 -23 7 -18 19 -27 26 -20 7 7 -4 31 -24 53 -40 44 -13 54 53 19 28 -15 34 -29 20 -46 -28 -33 150 -108 181 -77 15 15 13 30 -8 50 -33 34 -196 120 -196 104 0 -12 -56 35 -142 120 -95 92 -157 201 -169 294 -15 123 -36 124 -25 2z m234 -381 c5 -3 3 -10 -4 -17 -19 -20 -134 72 -134 107 0 25 16 18 65 -26 36 -33 69 -61 73 -64z"/>
                                  <path d="M2250 4535 c-72 -37 -124 -131 -181 -326 -48 -165 -196 -260 -369 -237 -78 10 -100 7 -100 -14 1 -51 29 -77 61 -57 16 10 43 18 59 17 20 0 16 -7 -10 -18 -33 -14 -29 -17 26 -19 37 0 61 7 55 17 -6 10 3 23 19 29 16 6 27 2 25 -10 -3 -12 8 -27 23 -32 20 -8 25 0 15 25 -11 29 -9 31 14 12 22 -18 31 -16 41 10 7 19 19 28 26 21 7 -7 29 2 49 20 30 26 42 28 67 7 26 -21 30 -16 30 37 0 47 -7 59 -30 50 -32 -12 -42 23 -12 42 10 6 34 63 53 126 48 158 94 228 178 273 82 44 108 33 66 -27 -16 -22 -35 -35 -42 -28 -7 8 -13 -2 -13 -20 0 -19 -12 -39 -28 -45 -15 -6 -33 -48 -41 -93 -7 -46 -22 -94 -33 -108 -12 -14 -24 -89 -28 -167 -7 -150 -24 -198 -43 -124 -6 24 -20 44 -31 44 -25 0 0 -79 41 -130 18 -22 33 -42 33 -43 2 -28 111 -23 141 7 20 20 41 33 48 29 24 -14 161 88 161 121 0 61 -42 62 -107 1 -82 -78 -185 -114 -201 -72 -26 66 -11 269 27 364 21 54 33 104 27 111 -7 7 -2 12 11 12 13 0 33 23 43 50 10 28 33 51 50 53 16 1 41 3 55 5 14 1 25 28 25 60 0 72 -89 84 -200 27z"/>
                                  <path d="M4210 4560 c-7 -12 -17 -45 -23 -75 -5 -30 -28 -74 -50 -98 -22 -23 -38 -55 -36 -70 9 -67 -6 -97 -68 -135 -72 -45 -133 -55 -133 -22 0 11 27 20 60 20 33 0 60 8 60 17 0 9 -27 16 -60 16 -33 0 -60 -5 -60 -12 0 -7 -17 -12 -37 -12 -47 0 -34 64 18 92 48 25 66 88 39 138 -30 57 -88 51 -164 -16 -65 -59 -70 -82 -56 -272 3 -33 -5 -63 -18 -67 -12 -4 -17 -16 -11 -26 6 -10 2 -33 -8 -52 -35 -62 26 -146 104 -146 88 0 129 49 124 150 -6 106 4 128 50 115 22 -5 39 0 39 12 0 12 13 17 28 11 21 -8 25 -38 17 -127 -11 -125 31 -201 111 -201 36 0 188 140 153 140 -10 1 2 17 28 37 38 29 41 39 19 58 -30 25 -156 -73 -156 -120 0 -17 -6 -17 -23 0 -16 16 -17 31 -3 49 27 34 86 214 84 255 -1 29 -53 -74 -70 -139 -4 -16 -18 -68 -32 -114 -28 -98 -17 -119 44 -86 40 21 41 20 21 -18 -26 -49 -23 -48 -90 -22 -66 25 -70 159 -10 319 23 60 38 125 32 144 -11 44 31 82 74 65 23 -8 29 -27 21 -60 -8 -31 -4 -48 12 -48 18 0 22 21 14 69 -9 55 -4 72 24 80 34 11 38 40 25 146 -4 30 -75 34 -93 5z m-309 -182 c20 -37 18 -40 -19 -29 -32 11 -42 5 -42 -24 0 -20 -12 -54 -28 -75 -34 -47 -20 -90 30 -90 42 0 52 -32 14 -45 -15 -5 -17 -21 -7 -46 36 -83 -5 -209 -66 -209 -56 0 -63 20 -21 62 48 48 53 148 6 130 -17 -7 -35 -12 -40 -12 -4 0 -8 -9 -8 -19 0 -11 14 -15 30 -8 19 7 30 -1 30 -21 0 -41 -57 -42 -73 -2 -6 17 4 54 23 83 30 45 31 63 10 127 -46 140 96 299 161 178z"/>
                                  <path d="M3258 4390 c-2 -5 -4 -17 -6 -25 -2 -8 -27 -55 -56 -105 -129 -218 -32 -528 118 -378 16 16 26 11 35 -19 25 -78 208 -54 191 25 -2 10 4 23 13 30 27 19 67 99 67 132 0 44 -33 37 -69 -14 l-31 -45 -1 50 c-1 44 -3 45 -17 9 -40 -101 -43 -150 -10 -150 25 0 21 -9 -15 -38 -73 -59 -105 -20 -89 111 8 74 5 106 -13 112 -18 7 -15 21 12 51 21 24 33 56 26 73 -6 17 -4 28 6 26 10 -3 31 12 47 33 44 60 79 22 64 -70 -9 -51 -6 -78 8 -78 12 0 23 16 23 35 1 19 5 60 9 90 4 30 -3 61 -16 69 -39 24 -94 27 -94 6 0 -11 -15 -20 -33 -20 -19 0 -28 6 -21 13 27 27 -26 78 -84 83 -34 3 -63 0 -64 -6z m113 -52 c8 -12 2 -30 -13 -40 -26 -16 -10 -27 30 -19 10 2 8 -9 -4 -25 -13 -15 -18 -33 -12 -39 19 -19 -8 -80 -60 -141 -43 -49 -50 -52 -58 -20 -6 23 -10 17 -12 -19 -1 -30 4 -55 12 -55 8 0 35 25 60 55 60 73 64 10 6 -85 -40 -65 -135 -80 -143 -23 -31 224 117 536 194 411z"/>
                                  <path d="M3281 4196 c-22 -35 -34 -71 -28 -81 15 -23 20 -16 57 71 38 91 23 96 -29 10z"/>
                                  <path d="M6033 4359 c-29 -23 -53 -59 -53 -80 0 -22 -7 -39 -16 -39 -19 0 -55 -102 -73 -205 -8 -44 -24 -75 -40 -75 -41 0 -91 22 -91 40 0 48 -66 167 -78 139 -9 -23 -26 -28 -62 -17 -48 13 -48 14 -5 16 51 2 63 42 13 42 -42 0 -268 -120 -268 -143 0 -9 -10 -17 -21 -17 -12 0 -15 10 -7 23 9 14 5 18 -9 9 -23 -15 -33 -72 -12 -72 7 0 43 24 81 53 115 88 106 30 -13 -80 -100 -92 -115 -117 -146 -243 -20 -77 -58 -174 -84 -215 -54 -82 -58 -95 -29 -95 24 0 79 82 89 135 40 208 156 430 203 388 8 -7 8 -2 0 12 -9 15 -3 25 15 25 17 0 50 27 73 60 24 33 51 55 62 49 10 -6 18 -2 18 10 0 56 61 12 82 -59 28 -92 46 -111 126 -131 39 -10 54 -8 45 7 -8 12 5 24 32 28 37 5 47 23 59 105 23 166 100 292 195 321 l49 15 -54 -64 c-30 -35 -54 -79 -53 -98 0 -18 13 -4 29 32 15 36 38 65 49 65 29 0 27 -106 -3 -136 -13 -13 -17 -24 -8 -24 9 0 1 -23 -17 -52 -19 -28 -29 -56 -23 -62 6 -6 27 17 46 51 43 75 53 77 82 18 21 -43 21 -43 24 15 2 33 7 83 11 110 8 49 8 49 -24 10 -29 -35 -31 -36 -20 -3 7 20 13 45 13 56 0 11 9 14 20 7 36 -22 21 29 -20 70 -51 51 -121 51 -187 -1z"/>
                                  <path d="M6517 4335 c-39 -36 -90 -101 -112 -145 -49 -96 -134 -179 -164 -161 -11 7 -21 5 -21 -6 0 -11 26 -26 58 -32 44 -10 60 -27 70 -76 30 -150 115 -170 238 -56 47 43 110 84 140 92 30 7 54 21 54 31 0 10 11 18 25 18 14 1 47 52 73 115 27 63 85 153 129 200 45 47 70 85 57 85 -14 0 -30 -13 -37 -30 -6 -16 -23 -30 -38 -30 -28 0 -123 -120 -95 -120 9 0 4 -8 -10 -17 -15 -9 -29 -33 -32 -52 -3 -20 -27 -48 -54 -63 -37 -20 -40 -27 -13 -27 19 -1 35 -9 35 -18 0 -19 -102 -72 -127 -66 -25 6 -119 -58 -105 -72 12 -12 -88 -105 -113 -105 -28 0 -95 80 -97 115 0 19 -3 64 -5 100 -1 36 4 65 12 65 8 0 33 38 57 85 61 121 203 263 165 165 -8 -23 -3 -27 24 -17 31 12 34 4 21 -73 -17 -108 -50 -174 -51 -101 -1 32 -8 42 -20 30 -23 -23 -5 -109 22 -109 11 0 32 29 48 65 l30 65 -6 -70 c-4 -57 2 -70 35 -74 22 -3 30 -1 17 5 -14 7 -19 54 -13 135 15 198 -72 264 -197 149z"/>
                                  <path d="M7082 4374 c-12 -12 -22 -45 -22 -73 1 -40 5 -45 20 -21 18 28 29 14 22 -27 -2 -10 7 -30 20 -46 19 -22 17 -25 -9 -15 -19 7 -33 2 -33 -10 0 -13 14 -29 31 -35 17 -7 28 -30 25 -54 -4 -29 6 -44 34 -49 23 -3 31 1 19 10 -11 9 -19 75 -18 146 3 140 -40 223 -89 174z"/>
                                  <path d="M4494 4365 c-5 -8 -16 -46 -24 -85 -7 -38 -28 -92 -45 -119 -66 -103 -43 -344 31 -340 34 1 103 79 143 160 l44 89 -47 -57 c-25 -31 -65 -80 -89 -109 -101 -125 -124 3 -44 249 63 196 143 203 85 7 -32 -106 -6 -151 34 -56 61 147 202 259 224 176 15 -57 54 -50 54 10 0 66 -75 105 -137 71 -24 -12 -43 -34 -43 -49 0 -14 -20 -50 -45 -79 l-46 -53 0 81 c0 88 -64 158 -95 104z"/>
                                  <path d="M5105 4354 c-22 -28 -105 -191 -105 -205 0 -33 41 0 52 41 7 28 19 50 27 50 8 0 25 23 37 50 13 28 37 50 55 50 17 0 26 -9 19 -19 -6 -11 11 -26 39 -33 28 -7 46 -19 41 -28 -16 -27 12 -80 42 -80 46 0 43 131 -4 180 -25 25 -32 26 -46 2 -10 -15 -28 -21 -40 -13 -42 26 -99 28 -117 5z"/>
                                  <path d="M7372 4295 c-27 -47 -55 -109 -63 -139 -7 -30 -31 -60 -54 -67 -31 -10 -34 -17 -14 -30 35 -21 -53 -97 -114 -98 -23 -1 -53 -14 -67 -31 -14 -16 -19 -30 -12 -30 8 0 2 -13 -12 -28 -14 -15 -29 -25 -33 -21 -4 4 -21 -6 -36 -22 -41 -41 -100 1 -126 90 l-20 71 8 -77 c18 -155 109 -179 214 -56 41 47 93 83 132 92 36 8 65 23 65 34 0 11 9 14 20 7 11 -7 20 -30 20 -51 0 -22 10 -39 22 -39 13 0 17 15 9 33 -33 88 64 367 128 367 54 0 69 -33 21 -46 -42 -11 -86 -101 -74 -152 4 -18 19 6 34 53 31 101 49 106 78 22 47 -134 -20 -257 -100 -185 -37 33 -39 33 -27 1 17 -41 82 -79 110 -63 77 48 103 298 36 346 -21 15 -33 35 -27 44 6 10 -7 28 -28 39 -35 19 -46 10 -90 -64z"/>
                                  <path d="M2826 4288 c-29 -27 -46 -55 -39 -62 8 -7 28 7 45 31 48 68 116 50 124 -32 6 -55 41 -95 45 -50 1 8 5 33 10 55 19 101 -99 138 -185 58z"/>
                                  <path d="M7035 4170 c-15 -88 9 -134 50 -93 18 18 19 28 2 39 -13 8 -27 41 -30 74 -7 57 -8 56 -22 -20z"/>
                                  <path d="M7989 4219 c-7 -12 -26 -17 -41 -11 -15 6 -28 2 -28 -9 0 -10 -12 -19 -27 -19 -34 0 -113 -67 -113 -96 0 -35 -82 -164 -105 -164 -12 0 -16 28 -9 70 6 39 5 70 -4 70 -16 0 -20 -14 -27 -109 -7 -87 55 -93 100 -11 54 98 104 158 152 182 42 22 42 21 -3 -25 -25 -26 -72 -89 -103 -140 -62 -100 -133 -131 -174 -77 -21 26 -31 24 -86 -16 -65 -48 -113 -51 -157 -9 -15 14 -37 25 -50 25 -13 -1 -1 -19 26 -41 38 -30 67 -37 120 -28 39 7 106 12 150 12 102 0 189 65 240 176 26 60 58 92 109 114 68 29 241 48 241 27 0 -6 20 -20 45 -31 25 -11 44 -29 42 -40 -2 -10 10 -31 26 -45 24 -23 27 -19 17 30 -10 52 -9 53 9 10 14 -33 14 -59 -1 -87 -11 -22 -15 -55 -7 -74 8 -18 18 -51 23 -72 4 -22 17 -45 28 -52 12 -8 21 -19 20 -26 -6 -42 2 -53 38 -53 42 0 55 48 20 70 -12 7 -15 21 -9 31 6 11 2 19 -10 19 -13 0 -17 20 -9 50 8 32 4 50 -11 50 -13 0 -18 8 -12 18 59 95 -105 273 -259 280 -65 3 -126 9 -133 14 -8 5 -20 -1 -28 -13z"/>
                                  <path d="M2939 4089 c-22 -60 -8 -216 21 -226 38 -13 19 -48 -20 -37 -22 6 -40 2 -40 -8 0 -67 124 -8 158 76 39 97 18 122 -46 54 l-57 -58 12 125 c13 133 4 157 -28 74z"/>
                                  <path d="M4972 4033 c-24 -155 65 -259 138 -160 16 22 28 26 38 11 7 -12 -9 -37 -37 -55 -28 -19 -51 -43 -51 -53 0 -11 -22 -38 -49 -59 -80 -62 -89 -170 -21 -229 31 -26 44 -48 29 -48 -21 0 -22 -5 -3 -24 35 -35 61 0 95 126 32 122 37 198 12 198 -25 0 -83 -69 -83 -100 0 -18 10 -14 29 11 27 36 29 32 21 -48 -10 -111 -69 -150 -70 -47 -1 29 -3 30 -20 4 -16 -25 -19 -24 -20 6 0 53 35 112 123 209 95 103 110 219 19 137 -82 -73 -112 -50 -112 83 0 145 -20 164 -38 38z"/>
                                  <path d="M6493 4090 c-7 -16 -5 -30 3 -30 39 -1 63 -106 29 -131 -47 -35 -65 -18 -57 51 4 33 -1 54 -11 48 -22 -13 -22 -110 1 -145 21 -33 96 7 113 60 21 65 -55 207 -78 147z"/>
                                  <path d="M4864 4015 c-75 -76 -84 -80 -84 -40 0 25 9 45 19 45 11 0 14 14 7 32 -9 24 -18 17 -39 -32 -37 -88 -35 -148 3 -133 36 14 39 -10 6 -43 -58 -58 -125 13 -121 126 l3 60 -22 -57 c-38 -104 52 -202 142 -154 37 20 60 53 126 181 14 28 34 56 45 64 11 8 15 19 9 24 -5 6 -48 -27 -94 -73z"/>
                                  <path d="M5177 4062 c-15 -23 -38 -42 -52 -42 -14 0 -25 -14 -25 -32 0 -17 11 -28 24 -23 33 11 106 112 91 127 -7 6 -24 -7 -38 -30z"/>
                                  <path d="M6029 4070 c-5 -16 -13 -43 -18 -59 -5 -17 -1 -35 10 -42 28 -17 62 10 45 37 -8 13 -12 40 -9 59 7 43 -15 47 -28 5z"/>
                                  <path d="M6923 4035 c-27 -86 -20 -165 15 -165 46 0 110 101 91 143 -14 32 -18 30 -24 -17 -7 -48 -57 -113 -72 -94 -17 22 32 177 51 165 13 -8 16 -4 8 10 -25 40 -48 25 -69 -42z"/>
                                  <path d="M2826 3972 c6 -65 22 -128 36 -140 18 -17 20 -10 9 28 -8 28 -18 85 -23 129 -5 43 -14 83 -21 90 -7 6 -7 -42 -1 -107z"/>
                                  <path d="M2530 3980 c-7 -11 -2 -20 11 -20 15 0 19 -18 10 -52 -16 -65 34 -148 89 -148 42 0 121 130 119 194 -1 20 -18 -1 -39 -47 -62 -140 -140 -132 -140 15 0 74 -23 101 -50 58z"/>
                                  <path d="M6241 3961 c-16 -10 -30 -30 -33 -44 -11 -56 -66 -249 -87 -305 -12 -32 -18 -62 -12 -68 13 -13 47 77 85 226 16 66 44 136 61 155 36 40 27 61 -14 36z"/>
                                  <path d="M6042 3912 c-30 -35 -99 -54 -113 -30 -15 24 -49 23 -49 -2 0 -30 100 -48 125 -23 13 13 39 23 59 23 20 0 36 14 36 30 0 38 -28 39 -58 2z"/>
                                  <path d="M5989 3796 c-64 -73 -109 -144 -109 -174 0 -15 28 10 61 57 34 47 67 80 73 74 6 -6 -8 -35 -32 -65 -52 -66 -55 -115 -3 -53 21 25 47 45 59 45 28 0 29 53 2 70 -13 8 -13 25 1 51 28 53 -3 49 -52 -5z"/>
                                  <path d="M6020 3630 c-15 -102 -38 -154 -62 -139 -10 6 -18 28 -18 49 0 26 -13 37 -41 34 -34 -2 -39 -12 -29 -53 16 -62 69 -124 93 -109 9 6 17 1 17 -11 0 -11 10 -21 21 -21 12 0 16 9 9 20 -7 11 0 15 14 9 16 -5 42 16 63 51 19 33 26 60 15 60 -11 0 -30 -18 -42 -40 -35 -65 -58 -46 -37 31 11 39 16 91 11 115 -8 41 -9 41 -14 4z"/>
                                  <path d="M8600 3334 c0 -26 27 -77 60 -114 33 -37 60 -59 60 -49 0 11 7 9 15 -2 36 -52 112 -88 139 -66 36 30 33 52 -9 66 -36 11 -127 93 -190 169 -45 55 -75 53 -75 -4z"/>
                                  <path d="M8904 3116 c-36 -36 -30 -52 36 -86 58 -30 60 -30 60 15 0 44 -32 95 -60 95 -7 0 -23 -11 -36 -24z"/>
                                </g>
                              </svg>
                        </div>
                    </header>

                    <main class="mt-6">
                        <livewire:forms.nominations-form />
                    </main>

                    <footer class="py-16 text-sm text-center text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
