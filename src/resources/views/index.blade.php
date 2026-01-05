<!DOCTYPE html>
<html lang="ja">

<body>
    <main>
        @extends('layouts.app')

        @section('css')
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        @endsection

        @section('content')
        <div class="form_content">
            <div class="form_heading">
                <h2>お問い合わせフォーム</h2>
            </div>
            <form class="form" action="/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">姓</span>
                        <span class="form__label--required">※必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text_name">
                            <input type="text" name="first-name" placeholder="(例)山田" value="{{ old('first-name') }}" />
                        </div>
                        <div class="form__error">
                            @error('first-name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form__group-title">
                        <span class="form__label--item">名</span>
                        <span class="form__label--required">※必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text_name">
                            <input type="text" name="last-name" placeholder="(例)太郎" value="{{ old('last-name') }}" />
                        </div>
                        <div class="form__error">
                            @error('last-name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--checkbox-gender">
                            <input type="checkbox" name="gender" value="男性{{ old('gender') == 'male' }}" />
                            <label for="gender-text">男性</label>
                            <input type="checkbox" name="gender" value="女性{{ old('gender') == 'female' }}" />
                            <label for="gender-text">女性</label>
                            <input type="checkbox" name="gender" value="その他{{ old('gender') == 'other' }}" />
                            <label for="gender-text">その他</label>
                        </div>                            
                        <div class="form__error">
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="(例)coachtech@example.com" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text_tel">
                            <input type="tel" name="tel1" placeholder="(例)090" value="{{ old('tel1') }}" />
                            <span>-</span>
                            <input type="tel" name="tel2" placeholder="(例)1234" value="{{ old('tel2') }}" />
                            <span>-</span>
                            <input type="tel" name="tel3" placeholder="(例)5678" value="{{ old('tel3') }}" />
                        </div>
                        <div class="form__error">
                            @error('tel1')
                            {{ $message }}
                            @enderror

                            @error('tel2')
                            {{ $message }}
                            @enderror

                            @error('tel3')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="address" name="address" placeholder="(例)東京都目黒区○○町○番地" value="{{ old('address') }}" />
                        </div>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                        <span class="form__label">(任意)</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="building" name="building" placeholder="(例)○○マンション205" value="{{ old('building') }}" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select class="form__group-categories" name="categories" value="{{ old('categories') }}">
                                <option value="" selected disabled>選択してください</option>
                                <option name="option1" value="商品のお届けについて{{ old('categories') }}">商品のお届けについて</option>
                                <option name="option2" value="商品の交換について{{ old('categories') }}">商品の交換について</option>
                                <option name="option3" value="商品トラブル{{ old('categories') }}">商品トラブル</option>
                                <option name="option4" value="ショップへのお問い合わせ{{ old('categories') }}">ショップへのお問い合わせ</option>
                                <option name="option5" value="その他{{ old('categories') }}">その他</option>
                            </select>
                        </div>
                        <div class="form__error">
                            @error('categories')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="detail" placeholder="お問い合わせ内容をご記入ください" value="{{ old('detail') }}" /></textarea>
                        </div>
                        <div class=" form__error">
                            @error('detail')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面へ</button>
                </div>
            </form>
        </div>
        @endsection
    </main>
</body>

</html>