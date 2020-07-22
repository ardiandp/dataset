<form>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label">Province</label>

        <div class="col-md-6">
            <select name="province" id="province" class="form-control">
                <option value="">== Select Province ==</option>
                @foreach ($provinces as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label">City</label>

        <div class="col-md-6">
            <select name="city" id="city" class="form-control">
                <option value="">== Select City ==</option>
            </select>
        </div>
    </div>
</form>




<script>
$(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $('#province').on('change', function () {
        $.ajax({
            url: '{{ route('dependent-dropdown.store') }}',
            method: 'POST',
            data: {id: $(this).val()},
            success: function (response) {
                $('#city').empty();

                $.each(response, function (id, name) {
                    $('#city').append(new Option(name, id))
                })
            }
        })
    });
});
</script>

<script>
window.addEventListener('DOMContentLoaded', function() {
    $(function () {
        $('#province').on('change', function () {
            //
        });
    });
});
</script>