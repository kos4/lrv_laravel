@include('includes.header')

<div class="actiton-links">
    <a href="{{ URL::route('groups.show', ['group' => $group->id]) }}" class="actiton-links__link">Назад</a>
</div>

<form class="form" action="{{ URL::route('students.store', ['group' => $group->id]) }}" method="POST" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="form__group">
        <label for="formStudentName" class="form__label">Имя</label>
        <input type="text" class="form__input-text" name="name" id="formStudentName" required>
    </div>
    <div class="form__group">
        <label for="formStudentSurname" class="form__label">Фамилия</label>
        <input type="text" class="form__input-text" name="surname" id="formStudentSurname" required>
    </div>
    <div class="form__group">
        <button class="form__button">Создать</button>
    </div>
</form>

@include('includes.footer')
