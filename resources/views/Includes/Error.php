<h1>Whoops!</h1>
<p>Looks like you mis-filled the form. Check: </p>
</div>
<div class="card-dark no-shadow no-margin small-pad">
    <div class="error">
        <ul>
            @foreach ($errors as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>