<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>
        <style>
            table.character { border: 5px solid #2B7CAE; margin:auto;  font-size: xx-large}
            table.character td { width: 1.5em; height: 1.5em; padding: 0; margin: 1em; vertical-align: middle; text-align: center }
            table.character tr td { background:#FFFF}
            table.character tr:nth-child(odd) td:nth-child(even), table.character tr:nth-child(even) td:nth-child(odd)  { background: #2B7CAE}
        </style>
    </head>
    <body>


    <div class="min-h-screen bg-gray-200   text-center">
        <div class="bg-white pt-5 pb-5 mb-5">
            <h1 class="text-center">FEN Display Tool</h1>
        </div>

        <div class="  flex flex-col-reverse  md:ml-30  md:flex md:grid md:grid-cols-2  lg:ml-40 lg:flex lg:grid lg:grid-cols-2   ">

            <div class="  mx-auto  rounded-sm ml-11 mr-11 " >

                <div class="">
                    <div class=" flex">
                        <div class="numbers mt-10  space-y-6" ></div>
                        <div id="out" class="mt-5 ml-5" ></div>
                    </div>
                <div id="letters" class="letters  ml-12 space-x-9 mt-4"></div>
                </div>

            </div>

            <div class="">

                <button  class="  w-5/6  md:w-1/6 lg:w-1/6  bg-cyan-700  text-white rounded-lg   mx-auto bg-green-900 text-white rounded-sm  mt-4  h-7  "    > <a href="{{ route('fen',['fen'=> trim($data->fen_char)])}}">NY FEN</a>
                    <input  onkeyUp="get_fen_to_html()"  type="hidden" id="fen"  value="{{$data->fen_char}}"/>
                </button>



            </div>

        </div>
        <h2 class="mt-10 "> Fen Display test by [dit navn]
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>

    </body>
</html>
