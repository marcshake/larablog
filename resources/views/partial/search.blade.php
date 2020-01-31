<form action="{{url('search')}}" method="post" id="mainForm">
    @csrf
    <label for="Suchbegriff">Suchbegriff</label>
    <input type="text" name="Suchbegriff" id="Suchbegriff" class="u-full-width" autocomplete="false">
</form>
