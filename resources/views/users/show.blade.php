@extends ('pages.master')

@section ('title')
    {{ $user->firstname }} {{ $user->lastname }}
@stop

@section ('header')
    SwipeRightToApply: {{ $user->firstname }} {{ $user->lastname }}
@stop

@section ('data')
    <div>
        {{--{{ print_r($user->getAttributes()) }}--}}
        {{--{{ print_r($user->toArray()) }}--}}

        <table name="usertable">
            @foreach ($user->toArray() as $key => $value)
                <tr>
                    <td>
                        {{ $key }}
                    </td>
                    <td>
                        {{ $value }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="links">
        <a href="/=mailto:admin@swiperighttoapply.com?subject=swipe right to apply, help">Email</a>
        <a href="https://twitter.com/SwipeRightToApply">Twitter</a>
        <a href="https://facebook.com/SwipeRightToApply">Facebook</a>
        <a href="https://developer.apple.com/app-store/">iOS app</a>
    </div>
@stop

@section ('footer')
    <hr>
    Thank you for using SwipeRightToApply
@stop