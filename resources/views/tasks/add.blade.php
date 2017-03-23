@extends('layouts.app')
@section('content')
    @include('flash::message')
    <form action="{{ url('tasks/add') }}" method="post">
        {{ csrf_field() }}
<div class="row">
    <div class="col-md-3">
        <label for="1">Номер смены</label>
        <input type="text" id="1">
    </div>
    <div class="col-md-3">
        <label for="1">Начальник дежурной смены</label>
        <input type="text" id="1">
    </div>
    <div class="col-md-3">
        <label for="1">Радиотелефонист</label>
        <input type="text" id="1">
    </div>
</div>


        <div class="row">
            <div class="col-md-3">
                <label for="1">Количество личного состава</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
            <div class="col-md-3">
                <label for="1">Налицо</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
            <div class="col-md-3">
                <label for="1">Боевой расчет</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label for="1">Заполнить технику и личный состав</label>
                <input type="text" id="1" placeholder="">
            </div>
            <div class="col-md-3">
                <label for="1">В наряде</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
            <div class="col-md-3">
                <label for="1">В командировке</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="1">Фамилии командировачных</label>
                <input type="text" id="1">
            </div>
            <div class="col-md-3">
                <label for="1">В отпуске</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
            <div class="col-md-3">
                <label for="1">Фамилии отпускных</label>
                <input type="text" id="1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="1">Больных</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
            <div class="col-md-3">
                <label for="1">Фамилии больных</label>
                <input type="text" id="1">
            </div>
            <div class="col-md-3">
                <label for="1">Другие причины</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="1">Фамилии по др. причинам</label>
                <input type="text" id="1">
            </div>
            <div class="col-md-3">
                <label for="1">Газодымозащитников в б/р</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
            <div class="col-md-3">
                <label for="1">Химиков-дозиметристов в б/р</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="1">Водолазов в б/р</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
            <div class="col-md-3">
                <label for="1">Медиков в б/р</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
            <div class="col-md-3">
                <label for="1">Парашютистов десантников</label>
                <input type="text" id="1" placeholder="Чел">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="1">Техника по штату</label>
                <input type="text" id="1" placeholder="Шт">
            </div>
            <div class="col-md-3">
                <label for="1">Техника на комплект</label>
                <input type="text" id="1" placeholder="Шт">
            </div>
            <div class="col-md-3">
                <label for="1">Основная техника на дежурстве</label>
                <input type="text" id="1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="1">Специальная техника на дежурстве</label>
                <input type="text" id="1">
            </div>
            <div class="col-md-3">
                <label for="1">Инженерная техника на дежурстве</label>
                <input type="text" id="1" placeholder="Шт">
            </div>
            <div class="col-md-3">
                <label for="1">Вспомогательная техника на дежурстве</label>
                <input type="text" id="1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="1">Основная техника в резерве</label>
                <input type="text" id="1">
            </div>
            <div class="col-md-3">
                <label for="1">Специальная техника в резерве</label>
                <input type="text" id="1">
            </div>
            <div class="col-md-3">
                <label for="1">Инженерная техника в резерве</label>
                <input type="text" id="1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="1">Вспомогательная техника в резерве</label>
                <input type="text" id="1">
            </div>
            <div class="col-md-3">
                <label for="1">Техника на ТО-1</label>
                <input type="text" id="1">
            </div>
            <div class="col-md-3">
                <label for="1">Техника на ТО-2</label>
                <input type="text" id="1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="1">Техника в ремонте</label>
                <input type="text" id="1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>











</form>
   <style>
       input {
           width: 90% !important;
           padding-left: 10px;
       }
       button {
           margin-top: 20px;
       }
   </style>
    @stop