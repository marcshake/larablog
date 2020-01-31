@extends('layouts.administration')
@section('title')
Administrationspanel
@endsection

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
                        {{$beitraege}} Beiträge
                    </div>
                    <div class="column">
                        {{$seiten}} Seiten
                    </div>

                </div>
                <div class="row">
                    <div class="column">
                        0 Kommentare
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
                <form action="{{ url('admin/save')}}" method="post">
                    <input type="hidden" name="lb" value="1">
                    @csrf
                    <div class="field">
                        <label class="label">Titel</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Titel" name="title">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Beitrag</label>
                        <div class="control">
                            <textarea class="textarea u-full-width" placeholder="Beitrag" name="contents"></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button button-primary">Speichern</button>
                        </div>
                        <div class="control">
                            <button class="button">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
