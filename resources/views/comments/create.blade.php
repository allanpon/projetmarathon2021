
<form action="{{route('comment.store')}}" method="POST">
    {!! csrf_field() !!}
    <div class="text-center" style="margin-top: 2rem">
        <h3>Laisser un commentaire</h3>
        <hr class="mt-2 mb-2">
    </div>
    <div>
        <label for="autonomie"><strong>Note (entre 1 et 5):</strong></label>
        <input type="number" name="note" id="note"
               value="{{ old('note') }}"
               placeholder="1 - 5">
    </div>
    <div>
        <label for="textarea-input"><strong>Commentaire :</strong></label>
        <textarea name="comment" id="comment" rows="6" class="form-control"
                  placeholder="Commentaire">{{ old('comment') }}</textarea>
    </div>
    <div>
        <button class="btn btn-success" type="submit">Valide</button>
    </div>
</form>