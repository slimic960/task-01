<section id="criminalsnote-group"  style="visibility: hidden;">
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Доступные буквы:</span>
    </div>
    <input id="criminalLetters" type="text" class="form-control" placeholder="Введите буквы" aria-label="Введите буквы" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Слово, которое нужно написать:</span>
    </div>
    <input id="criminalWords" type="text" class="form-control" placeholder="Введите слово" aria-label="Введите слово" aria-describedby="basic-addon1">
</div>
<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"  onClick = "getdetailscriminalsnote()">
    Высчитать
</button>
<div class="mb-3 criminalResult resultForValue"></div>
</section>