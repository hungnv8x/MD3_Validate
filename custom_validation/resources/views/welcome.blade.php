<div class="content">
    <div class="title m-b-md">
        Laravel Cusstom Validation
    </div>
    <div class="error-message">
        @if ($errors->any())
            @foreach($errors->all() as $nameError)
                <p style="color:red">{{ $nameError }}</p>
            @endforeach
        @else
            <p style="color:green">{{$success}}</p>
        @endif
    </div>
    <div class="form-custom-validation">
        <form action="{{route('form.submit')}}" method="get">
            <label for="name">Name: </label>
            <input id="name" name="name" type="text" placeholder="Enter the full name">
            <br>
            <label for="age">Age: </label>
            <input id="age" name="age" type="text" placeholder="Enter the age">
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
