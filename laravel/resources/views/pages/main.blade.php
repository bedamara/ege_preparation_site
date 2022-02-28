@extends('layout')

@section('title')
    Главная страница
@endsection

@section('content')
<ul class="menu">
    <li class="menu__item menu__item--small">
        <a href="/" class="menu__logo logo logo--big">
            <svg alt="котять" width="60" height="60" class="logo__img" viewBox="0 0 1279.000000 1280.000000">
                <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="currentColor"
                    stroke="none">
                    <path d="M8855 12788 c-27 -5 -96 -18 -153 -29 -366 -69 -757 -290 -1202 -680
        -63 -56 -225 -206 -360 -334 -271 -258 -365 -341 -503 -444 -361 -271 -827
        -485 -1452 -666 -231 -67 -633 -166 -915 -226 l-245 -51 -175 110 c-371 232
        -678 388 -1079 547 -605 239 -1261 393 -1576 370 -227 -17 -379 -75 -507 -194
        -121 -111 -199 -264 -246 -486 -25 -114 -26 -136 -26 -410 0 -359 29 -667 109
        -1147 119 -710 293 -1329 580 -2058 74 -188 115 -348 115 -449 -1 -192 -49
        -275 -344 -587 -86 -91 -186 -203 -222 -248 -242 -301 -425 -683 -529 -1098
        -56 -228 -71 -329 -115 -788 -13 -133 -13 -334 0 -453 5 -51 14 -157 20 -237
        31 -404 95 -780 249 -1460 33 -146 67 -316 76 -379 18 -130 40 -190 93 -245
        34 -35 119 -83 129 -72 3 2 -16 67 -40 143 -132 405 -232 839 -296 1288 -176
        1226 -58 2233 331 2815 84 126 238 282 353 356 406 264 892 255 1471 -25 577
        -280 1043 -713 1264 -1176 106 -221 148 -386 157 -611 9 -245 -27 -426 -126
        -629 -204 -417 -582 -655 -1041 -655 -377 0 -703 141 -991 429 -171 172 -281
        337 -378 573 -55 130 -119 198 -190 198 -42 0 -61 -31 -61 -101 0 -151 100
        -390 259 -614 72 -103 283 -314 388 -388 176 -125 419 -227 623 -262 118 -20
        358 -34 605 -35 392 0 625 -54 852 -197 163 -101 249 -174 594 -502 250 -237
        395 -348 559 -431 150 -75 272 -110 627 -175 401 -74 567 -126 719 -227 119
        -80 282 -266 269 -308 -9 -29 -107 -415 -112 -441 -6 -30 32 -67 79 -76 16 -3
        31 -10 34 -14 11 -19 53 -8 77 20 18 21 36 78 70 217 77 309 122 449 175 538
        145 241 434 558 669 733 581 432 1211 581 1741 412 234 -75 406 -182 588 -363
        294 -294 449 -668 443 -1066 l-2 -135 35 -13 c82 -31 210 47 237 144 18 63 13
        226 -9 334 -54 264 -197 564 -393 825 -66 87 -300 325 -360 365 -20 14 -37 33
        -37 42 0 16 309 569 718 1283 331 579 404 659 602 660 73 0 93 -4 140 -27 109
        -53 207 -174 251 -310 20 -60 24 -93 23 -183 -1 -140 -23 -234 -121 -510 -41
        -115 -87 -259 -101 -320 -25 -102 -27 -126 -26 -335 0 -196 3 -238 22 -330
        112 -517 426 -962 857 -1215 109 -64 260 -127 376 -157 103 -26 170 -15 220
        35 61 60 72 104 66 267 -26 729 -185 1390 -486 2015 -201 416 -429 752 -780
        1150 -234 266 -339 425 -396 605 -23 72 -28 108 -32 230 -6 177 8 264 101 631
        125 492 168 860 146 1249 -30 528 -134 923 -448 1710 -362 907 -411 1108 -452
        1870 -24 451 -32 564 -51 734 -11 98 -31 233 -44 300 -137 688 -481 1153 -973
        1315 -168 56 -399 82 -517 59z m317 -375 c131 -46 226 -110 359 -242 137 -138
        228 -269 329 -476 324 -664 386 -1532 156 -2182 -30 -84 -33 -141 -10 -185 9
        -18 55 -84 102 -147 439 -593 645 -1008 762 -1536 61 -276 114 -691 129 -1012
        28 -571 -68 -1377 -214 -1803 -128 -375 -227 -648 -272 -747 -233 -517 -644
        -954 -1228 -1302 -185 -111 -283 -162 -608 -315 -1178 -558 -1585 -688 -2189
        -703 -250 -6 -399 4 -624 42 -516 89 -1248 350 -1854 661 -328 169 -357 209
        -226 312 35 27 90 91 156 182 158 219 189 301 197 522 7 176 -12 318 -77 573
        -140 550 -239 782 -429 1010 -37 44 -97 118 -133 165 -36 47 -80 99 -98 115
        -68 64 -74 116 -23 184 15 20 75 90 133 156 263 299 451 585 758 1150 176 325
        270 597 337 980 85 483 124 1127 82 1352 -35 191 -169 509 -267 633 -41 53
        -60 95 -60 135 0 79 48 135 171 200 276 145 1502 404 1915 405 66 0 89 5 132
        26 77 38 175 151 318 366 141 212 185 267 381 480 142 154 331 332 480 451
        268 213 671 450 903 531 126 44 196 56 315 52 91 -2 125 -8 197 -33z m-7531
        -2097 c125 -33 180 -55 319 -128 422 -221 630 -458 686 -780 35 -202 -14 -377
        -166 -590 -139 -195 -468 -481 -621 -539 -158 -61 -291 26 -451 296 -147 249
        -255 486 -322 708 -43 143 -123 501 -134 604 -27 237 71 396 275 448 89 22
        292 13 414 -19z" />
                    <path d="M8852 11819 c-84 -14 -231 -66 -315 -112 -220 -120 -469 -349 -661
        -607 -183 -246 -246 -368 -254 -492 -8 -135 43 -201 215 -279 53 -24 276 -133
        496 -242 473 -234 522 -251 692 -252 114 0 123 2 185 31 201 96 305 339 317
        739 7 204 -4 311 -57 575 -68 338 -100 435 -176 526 -80 99 -256 144 -442 113z
        m34 -295 c73 -35 124 -162 198 -494 55 -251 74 -374 87 -583 17 -267 3 -313
        -95 -305 -102 10 -411 145 -613 270 -150 92 -341 244 -375 297 -53 84 -37 128
        117 334 236 313 360 429 513 478 71 23 124 24 168 3z" />
                    <path d="M8902 7068 c-30 -11 -88 -44 -130 -74 -43 -30 -115 -77 -162 -105
        -222 -134 -320 -254 -320 -392 0 -117 64 -197 166 -205 50 -4 56 -2 83 27 18
        19 47 76 71 139 68 178 128 250 263 312 79 37 154 43 207 15 19 -10 68 -44
        108 -76 101 -82 178 -97 263 -54 64 34 79 130 31 206 -106 166 -407 274 -580
        207z" />
                    <path d="M10020 6110 c-123 -21 -472 -135 -577 -189 -74 -37 -91 -87 -53 -160
        50 -100 111 -106 273 -26 99 48 125 57 220 70 116 16 226 60 253 100 20 31 29
        129 14 164 -10 26 -56 54 -79 50 -3 -1 -26 -5 -51 -9z" />
                    <path d="M4925 5851 c-176 -29 -290 -99 -402 -248 -67 -89 -138 -221 -148
        -274 -10 -51 15 -102 65 -135 67 -44 151 -28 188 36 9 17 33 58 52 92 50 88
        165 199 248 240 56 28 80 34 151 37 89 3 119 -3 243 -50 114 -43 182 -38 241
        19 43 41 34 92 -28 160 -19 22 -57 49 -83 60 -104 45 -412 81 -527 63z" />
                    <path d="M10220 5550 c-14 -4 -128 -35 -255 -69 -126 -34 -244 -71 -261 -82
        -35 -21 -68 -89 -59 -119 3 -10 20 -23 37 -29 55 -19 115 -13 207 23 96 37
        194 61 217 52 24 -9 236 14 265 30 51 26 51 119 0 173 -25 27 -36 31 -78 30
        -26 0 -59 -4 -73 -9z" />
                    <path d="M7256 5464 c-273 -54 -518 -219 -630 -424 -56 -103 -44 -225 30 -289
        67 -59 153 -90 363 -131 58 -11 126 -27 153 -36 54 -18 98 -63 98 -101 0 -14
        12 -98 26 -187 21 -131 25 -185 21 -286 -4 -113 -8 -135 -40 -223 -60 -166
        -123 -243 -246 -300 -57 -27 -79 -32 -166 -35 -179 -7 -317 49 -472 190 -122
        112 -164 127 -220 75 -55 -49 -69 -187 -28 -266 47 -92 202 -187 380 -233 79
        -20 114 -23 280 -23 168 0 199 3 268 23 159 46 238 104 294 216 78 156 168
        252 257 275 39 9 54 8 120 -14 72 -23 89 -25 289 -25 256 1 392 12 454 40 25
        11 80 51 121 88 41 37 109 96 151 130 95 80 116 105 135 162 21 65 49 312 41
        365 -12 87 -72 125 -194 125 -121 0 -161 -39 -161 -157 0 -145 -37 -294 -87
        -352 -71 -83 -248 -139 -404 -127 -168 13 -298 64 -384 150 -62 61 -80 109
        -95 247 -21 187 12 326 123 527 81 146 121 226 136 275 18 52 16 138 -2 172
        -36 69 -128 124 -254 150 -84 18 -265 18 -357 -1z" />
                    <path d="M9830 4730 c-53 -13 -83 -54 -77 -103 6 -46 32 -85 70 -107 21 -12
        38 -12 114 -2 109 16 156 7 261 -48 92 -49 131 -51 193 -12 54 35 109 96 109
        122 0 48 -97 100 -243 131 -103 22 -369 34 -427 19z" />
                    <path d="M4850 4596 c-293 -106 -562 -317 -536 -421 9 -37 64 -43 145 -17 127
        41 505 211 534 240 68 69 34 222 -50 222 -15 0 -57 -11 -93 -24z" />
                    <path d="M4830 3963 c-227 -37 -438 -225 -402 -357 14 -50 46 -91 82 -106 46
        -19 112 10 181 81 31 31 67 62 79 69 14 7 72 13 144 14 132 2 166 12 205 62
        25 32 26 62 5 112 -42 102 -152 149 -294 125z" />
                    <path d="M4971 3329 c-45 -18 -83 -52 -201 -181 -133 -144 -152 -180 -126
        -241 29 -72 101 -99 191 -72 65 19 130 66 169 124 37 55 74 77 166 97 128 28
        160 55 160 135 0 40 -4 51 -27 69 -40 31 -83 47 -175 65 -91 17 -123 18 -157
        4z" />
                    <path d="M3013 4470 c-35 -14 -43 -41 -33 -103 12 -73 51 -154 111 -230 60
        -75 161 -163 206 -178 66 -21 145 31 158 105 17 89 -178 336 -306 389 -50 20
        -110 28 -136 17z" />
                    <path d="M2347 4189 c-22 -13 -47 -68 -47 -102 0 -17 18 -40 60 -76 69 -60
        100 -109 135 -211 40 -117 77 -145 177 -134 70 8 88 23 88 70 0 54 -47 182
        -87 237 -45 61 -185 184 -238 208 -46 21 -63 23 -88 8z" />
                    <path d="M1689 3869 c-20 -38 -5 -104 39 -171 56 -85 87 -157 113 -258 28
        -108 49 -134 104 -127 151 20 132 275 -34 458 -97 108 -194 150 -222 98z" />
                </g>
            </svg>
        </a>
    </li>
    <li class="menu__item menu__item--wide">
        <a href="" class="menu__link">Статистика</a>
    </li>
    <li class="menu__item menu__item--tall">
        <a href="" class="menu__link">Теория</a>
    </li>
    <li class="menu__item menu__item--tall">
        <a href="" class="menu__link">Практика</a>

        <ul class="menu__sections-list sections-list">
            @foreach ($practiceSections as $practice)
                <li class="sections-list__item">
                    <a href="/practice/{{ $practice -> id }}" class="sections-list__link">{{ $practice -> title }}</a>
                    <p class="sections-list__description">{{ $practice -> description }}</p>
                </li>
            @endforeach
            @if ($admin)
                <li class="sections-list__item">
                    <a href="/practice/add" class="sections-list__link">Добавить секцию</a>
                </li>
            @endif
        </ul>        
    </li>
    <li class="menu__item menu__item--tall">
        <a href="" class="menu__link">Программирование</a>
    </li>
</ul>
@endsection