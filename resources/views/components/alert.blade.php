<div>
    @if ($errors->any())
        <div class="center-align flow-text red lighten-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('msg'))
        <div class="center-align">
            <p class="flow-text red lighten-2">{{session()->get('msg')}}</p>
        </div>
    @endif
</div>
