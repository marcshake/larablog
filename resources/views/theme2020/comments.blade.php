
<form action="comment" method="post">
    @csrf
    <div class="form-group">
        <label for='name'>Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="{{__('Dein Name')}}" />
    </div>
    <div class="form-group">
        <label for='email'>Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="{{__('Deine Emailadresse')}}" aria-describedBy='mailinfo' />
        <span id='mailInfo' class='form-text text-muted'>{{__('Deine Mailadresse geben wir niemals weiter')}}</span>
    </div>
    
</form>