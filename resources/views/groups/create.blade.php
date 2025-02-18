@include('includes.header')

<div class="actiton-links">
    <a href="{{ URL::route('groups.index') }}" class="actiton-links__link">Назад</a>
</div>

<form class="form" action="{{ URL::route('groups.index') }}" method="POST" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="form__group">
        <label for="formGroupTitle" class="form__label">Название группы</label>
        <input type="text" class="form__input-text" name="title" id="formGroupTitle" required>
    </div>
    <div class="form__group">
        <label for="formGroupStartFrom" class="form__label">Дата начала обучения</label>
        <input type="date" class="form__input-text" name="start_from" id="formGroupStartFrom" required>
    </div>
    <div class="form__group form__group-checkbox">
        <label for="formGroupIsActive" class="form__label">Начала ли группа своё обучение?</label>
        <input type="checkbox" class="form__input-text" name="is_active" id="formGroupIsActive" value="1">
    </div>
    <div class="form__group">
        <button class="form__button">Создать</button>
    </div>
</form>

@include('includes.footer')
