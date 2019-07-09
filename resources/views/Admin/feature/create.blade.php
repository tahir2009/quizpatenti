@extends('layouts.admin.app')
@section('features_nav', 'active')

@section('title', 'Admin | Feature')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary green-bg">
                            <h4 class="card-title">Feature</h4>
                            <p class="card-category">New Features</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Language</label>
                                            <div class="marginex12"></div>
                                            <div class="select-menu">
                                                <select class="selecter" name="nationalities[]" multiple="multiple">
                                                    <option value="">Choose...</option>
                                                    <option value="1">italiano</option>
                                                    <option value="2">francese</option>
                                                    <option value="3">tedesco</option>
                                                    <option value="4">urdu</option>
                                                    <option value="5">pashto</option>
                                                    <option value="6">bangla</option>
                                                    <option value="7">inglese</option>
                                                    <option value="8">arabo</option>
                                                    <option value="9">spagnolo</option>
                                                    <option value="10">cinese</option>
                                                    <option value="11">rumeno</option>
                                                    <option value="12">albanese</option>
                                                    <option value="13">russo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">For</label>
                                            <div class="marginex12"></div>
                                            <div class="select-menu">
                                                <select class="selecter" name="nationalities[]" multiple="multiple">
                                                    <option value="">Choose...</option>
                                                    <option value="quiz">Quiz</option>
                                                    <option value="book">Book</option>
                                                    <option value="video">Video</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Start</label>
                                            <div class="marginex12"></div>
                                            <div class="select-menu">
                                                <select class="selecter" name="nationalities[]" multiple="multiple">
                                                    <option value="">Choose...</option>
                                                    <option value="1">1 Definizioni generali - Doveri nell'uso della
                                                        strada
                                                    </option>
                                                    <option value="2">2 Segnali di pericolo</option>
                                                    <option value="3">3 Segnali di divieto</option>
                                                    <option value="4">4 Segnali di obbligo</option>
                                                    <option value="5">5 Segnali di precedenza</option>
                                                    <option value="6">6 Segnaletica orizzontale</option>
                                                    <option value="7">7 Segnalazioni semaforiche e degli agenti del
                                                        traffico
                                                    </option>
                                                    <option value="8">8 Segnali di indicazione</option>
                                                    <option value="9">9 Segnali complementari - Segnali temporanei di
                                                        cantiere
                                                    </option>
                                                    <option value="10">10 Pannelli integrativi dei segnali</option>
                                                    <option value="11">11 Pericolo e intralcio alla circolazione -
                                                        Regolazione e limiti di velocità
                                                    </option>
                                                    <option value="12">12 Distanza di sicurezza</option>
                                                    <option value="13">13 Norme varie sulla circolazione dei veicoli -
                                                        Visibilità dal posto di guida
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">End</label>
                                            <div class="marginex12"></div>
                                            <div class="select-menu">
                                                <select class="selecter" name="nationalities[]" multiple="multiple">
                                                    <option value="">Choose...</option>
                                                    <option value="1">1 Definizioni generali - Doveri nell'uso della
                                                        strada
                                                    </option>
                                                    <option value="2">2 Segnali di pericolo</option>
                                                    <option value="3">3 Segnali di divieto</option>
                                                    <option value="4">4 Segnali di obbligo</option>
                                                    <option value="5">5 Segnali di precedenza</option>
                                                    <option value="6">6 Segnaletica orizzontale</option>
                                                    <option value="7">7 Segnalazioni semaforiche e degli agenti del
                                                        traffico
                                                    </option>
                                                    <option value="8">8 Segnali di indicazione</option>
                                                    <option value="9">9 Segnali complementari - Segnali temporanei di
                                                        cantiere
                                                    </option>
                                                    <option value="10">10 Pannelli integrativi dei segnali</option>
                                                    <option value="11">11 Pericolo e intralcio alla circolazione -
                                                        Regolazione e limiti di velocità
                                                    </option>
                                                    <option value="12">12 Distanza di sicurezza</option>
                                                    <option value="13">13 Norme varie sulla circolazione dei veicoli -
                                                        Visibilità dal posto di guida
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">create Features
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection