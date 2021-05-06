@extends('layouts.app')

@section('content')
<main class="py-4">
    <div class="container mb-3">
    <div class="row">
        <div class="col-md-12">
            <form id="general-form" action="" class="general-form">
                <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="col-md-4 mb-2">
                    
    <select name="section" id="section">
        <option disabled="disabled">Выберите отделение</option>
        <option value="1">Поликлиника №1</option>
        <option value="2">Поликлиника №3</option>
    </select>
                    </div>
    <div class="col-md-4 mb-2">
    <input type="text" id="datepicker" name="date" placeholder="Дата" autocomplete="off" readonly="readonly" required="required" class="form__date center hasDatepicker">
    </div>
    <div class="col-md-4">
    <input type="submit" id="send-button" data-tooltip value="Показать" class="send-button red">
    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</main>
   




@endsection