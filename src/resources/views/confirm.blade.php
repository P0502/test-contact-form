<!DOCTYPE html>
<html lang="ja">

<body>
    <main>
        @extends('layouts.app')

        @section('css')
        <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
        @endsection

        @section('content')
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>お問い合わせ内容確認</h2>
            </div>
            <form class="form" action="/thanks" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header-name">お名前</th>
                            <td class="confirm-table__text-name">
                                {{ $contact ['first-name'] . '　' . $contact['last-name'] }}
                                <input type="hidden" name="first-name" value="{{ $contact['first-name'] }}" />
                                <input type="hidden" name="last-name" value="{{ $contact['last-name'] }}" />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header-gender">性別</th>
                            <td class="confirm-table__text-gender">
                                @if($contact['gender'] == '1:男性' )
                                <span class="gender-text">男性</span>
                                @elseif($contact['gender'] == '2:女性' )
                                <span class="gender-text">女性</span>
                                @elseif($contact['gender'] == '3:その他' )
                                <span class="gender-text">その他</span>
                                @endif
                                <input type="gender" name="gender" value="{{ $contact['gender'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header-email">メールアドレス</th>
                            <td class="confirm-table__text-email">
                                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header-tel">電話番号</th>
                            <td class="confirm-table__text-tel">
                                {{ $contact['tel1'] }}{{ $contact['tel2'] }}{{ $contact['tel3'] }}
                                <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}" />
                                <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}" />
                                <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}" />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header-address">住所</th>
                            <td class="confirm-table__text-address">
                                <input type="address" name="address" value="{{ $contact['address'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header-building">建物名</th>
                            <td class="confirm-table__text-building">
                                <input type="building" name="building" value="{{ $contact['building'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header-categories">お問い合わせの種類</th>
                            <td class="confirm-table__text-categories">
                                <input type="categories" name="categories" value="{{ $contact['categories'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header-detail">お問い合わせ内容</th>
                            <td class="confirm-table__text-detail">
                                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form__buttons">
                    <button class="form__button-submit" type="submit" value="submit">送信</button>
                    <button class="form__button-back" type="button" onclick="history.back()">修正</button>
                </div>
            </form>
        </div>
        @endsection
    </main>
</body>

</html>