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
        <style>
            body{
                background-color: rgba(103, 42, 163, 1);
                padding: 1rem;
            }

            textarea::-webkit-scrollbar {
                width: 10px;
            }
            textarea::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
                -webkit-border-radius: 10px;
                border-radius: 10px;
            }

            textarea::-webkit-scrollbar-thumb {
                -webkit-border-radius: 10px;
                border-radius: 10px;
                background: rgba(69, 33, 101, 0.8); 
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
            }
            .container{
                padding: 1rem;
                width: 70%;
                height: 625px;
                margin: auto;
            }
            .app-title{
                color: white;
                padding: 1rem;
                font-size: 33px;
                font-style: Bold;
                text-align: center;
                font-family: sans-serif;
                font-weight: 700;
                line-height: normal;
                font-stretch: normal;
                text-decoration: none;
            }
            .notes{
                padding: 1rem;
                margin: 0 auto;
                display: grid;
                gap: 1.5rem;
            }
            .note{
                background-color: rgba(0, 0, 0, 0.20000000298023224);
                padding: 1rem;
                height: 10rem;
                border-radius: 15px;
                border-color: rgba(255, 255, 255, 0.20000000298023224);
                border-style: solid;
                border-width: 1px;
            }

            @media (min-width: 600px) {
            .notes { grid-template-columns: repeat(2, 1fr); }
            }

            @media (min-width: 900px) {
            .notes { grid-template-columns: repeat(3, 1fr); }
            }

            .note-title{
                margin-right: auto;
                margin-left: auto;
                padding: 5px;
            }

            .note-title input[type="text"]{
                font-style: bold;
                text-align: left;
                font-family:sans-serif;
                font-weight: 550;
                line-height: normal;
                width: 100%;
                font-size: 16px;
                margin: auto;
                font-stretch: normal;
                text-decoration: none;
                background: transparent;
                border: none;
                color: white;
            }

            .note-body{
                margin-right: auto;
                margin-left: auto;
                padding: 5px;
            }

            .note-body textarea{
                background: transparent;
                border: none;
                text-align: left;
                resize: none;
                font-family:sans-serif;
                line-height: normal;
                width: 100%;
                color: white;
                font-size: 14px;
                margin: auto;
                font-stretch: normal;
                text-decoration: none;
            }

            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));

        </style>
    </head>
    <body>
        <div class="container">
            <div class="app-title">
                <span>NOTES</span>
            </div>

            <div class="notes">
                <div class="note">
                    <div class="note-title">
                        <span>
                            <input
                            type="text"
                            value="Title"/>
                        </span>
                    </div>

                    <div class="note-body">
                        <textarea rows="5"></textarea>
                    </div>

                    <div class="note-action">
                        <img src="src\frame57126-zd0a.svg" alt="">
                    </div>
                </div>

            </div>
        </div>


    </body>
</html>
