@extends('layouts.administration')
@section('content')
<div class="row">
    <div class="columns six">
        <div class="card">
            <div class="card-header">
                Übersicht:
            </div>
            <div class="card-content">
                <div class="row">
                    <div class="column">
                        xyz Beiträge
                    </div>
                    <div class="column">
                        xyz Seiten
                    </div>

                </div>
                <div class="row">
                    <div class="column">
                        xyz Kommentare
                        <br>
                        Larablog
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="columns six">
        <div class="card">
            <div class="card-header">
                Neuer Beitrag
            </div>
            <div class="card-content">
                <form action="#">
                    <div class="field">
                        <label class="label">Titel</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Titel" name="title">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Beitrag</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Beitrag" name="content"></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Submit</button>
                        </div>
                        <div class="control">
                            <button class="button is-text">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
