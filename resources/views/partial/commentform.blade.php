<h3>Kommentar speichern</h3>
<form action="{{route('saveComment')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$posting->id}}">
    <div class="row">
        <div class="three columns">
            <b>Hinweise:</b>
        </div>
        <div class="nine columns">
            <p>Bitte kommentiere nur, wenn Du der Tatsache zustimmst, dass ich die Daten speichern muss. Diese Daten
                werden nicht weiterverkauft oder zu Marketingzwecken genutzt.
                Die <a href="/datenschutz">Datenschutzerklärung</a> informiert mehr darüber.

            </p>
        </div>
    </div>
    <div class="row">
        <div class="three columns">
            <label for="name">Name</label>
        </div>
        <div class="nine columns">
            <input class="u-full-width" type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
            Name ist ein Pflichtfeld
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="three columns">
            <label for="email">Email</label>
        </div>
        <div class="nine columns">
            <input class="u-full-width" type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
            Das ist ein Pflichtfeld
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="twelve columns">
            <textarea name="comment" required id="comment" cols="80" rows="45" class="u-full-width" placeholder="Dein Text"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">
        Speichere Kommentar
    </button>
</form>

