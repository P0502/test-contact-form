<!DOCTYPE html>
<html lang="ja">

<body>
    <main>
        @extends('layouts.app')

        @section('css')
        <style>
            .thanks__content {
                margin: 0 auto;
                padding: 30px 15px;
                max-width: 1230px;
            }

            .thanks__heading {
                margin-bottom: 40px;
                text-align: center;
                font-size: 50px;
            }

            .navigation__button {
                margin-top: 30px;
                text-align: center;
            }

            .home-button {
                color: #ffffff;
                background: #000000;
                width: 175px;
                height: 55px;
                border: none;
                border-radius: 5px;
                padding: 15px;
            }
        </style>
        @endsection

        @section('content')
        <div class="thanks__content">
            <div class="thanks__heading">
                <h2>お問い合わせありがとうございます</h2>
            </div>
            <div class="navigation__button">
                <button class="home-button" type="button" onclick="location.href='/'">HOME</button>
            </div>
        </div>
        @endsection
    </main>
</body>

</html>